<?php
session_start();

// Se já estiver logado, redireciona para o painel
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: index.php?page=dashboard');
    exit;
}

$erro = '';

// Processa o envio do formulário via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';

    if (!empty($email) && !empty($senha)) {
        
        // --- CONEXÃO COM O BANCO DE DADOS (Ajuste suas credenciais) ---
        $db_host = 'localhost';
        $db_name = 'store_admin';
        $db_user = 'root';
        $db_pass = '';

        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // 1. Busca o usuário pelo e-mail usando Prepared Statements (Previne SQL Injection)
            $stmt = $pdo->prepare("SELECT id, nome, email, senha FROM admins WHERE email = :email LIMIT 1");
            $stmt->execute([':email' => $email]);
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);

            // 2. Verifica se o usuário existe e se a senha está correta
            if ($admin && password_verify($senha, $admin['senha'])) {
                
                // Regenera o ID da sessão por segurança contra Session Fixation
                session_regenerate_id(true);

                // Salva os dados do usuário na Sessão
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id']        = $admin['id'];
                $_SESSION['admin_nome']      = $admin['nome'];
                $_SESSION['admin_email']     = $admin['email'];

                // Redireciona para o Dashboard
                header('Location: index.php?page=dashboard');
                exit;

            } else {
                $erro = 'E-mail ou senha incorretos.';
            }

        } catch (PDOException $e) {
            $erro = 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        }

    } else {
        $erro = 'Por favor, preencha todos os campos.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrativo | Admin Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen font-sans p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl overflow-hidden">
        
        <!-- Cabeçalho -->
        <div class="bg-slate-800 p-8 text-center border-b border-slate-700">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-600 text-white rounded-2xl mb-4 shadow-lg shadow-indigo-500/30">
                <i class="fa-solid fa-store text-2xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-white tracking-wide">Painel Administrativo</h1>
            <p class="text-slate-400 text-sm mt-1">Entre com suas credenciais de acesso</p>
        </div>

        <!-- Alerta de Erro -->
        <?php if (!empty($erro)): ?>
            <div class="m-6 mb-0 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded flex items-center gap-2">
                <i class="fa-solid fa-circle-exclamation text-red-500"></i>
                <span><?= htmlspecialchars($erro) ?></span>
            </div>
        <?php endif; ?>

        <!-- Formulário -->
        <form action="loginadmin.php" method="POST" class="p-8 space-y-6">
            
            <!-- Campo E-mail -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">E-mail</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        placeholder="admin@loja.com" 
                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white outline-none transition duration-200"
                    >
                </div>
            </div>

            <!-- Campo Senha -->
            <div>
                <label for="senha" class="block text-sm font-semibold text-gray-700 mb-2">Senha</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <input 
                        type="password" 
                        id="senha" 
                        name="senha" 
                        required 
                        placeholder="••••••••" 
                        class="w-full pl-10 pr-10 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white outline-none transition duration-200"
                    >
                    <button 
                        type="button" 
                        onclick="toggleSenha()" 
                        class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400 hover:text-gray-600"
                    >
                        <i id="eye-icon" class="fa-regular fa-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Botão Submit -->
            <button 
                type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 text-white font-semibold py-3 px-4 rounded-lg shadow-lg shadow-indigo-600/30 transition duration-200 flex items-center justify-center gap-2"
            >
                <i class="fa-solid fa-right-to-bracket"></i> Entrar no Painel
            </button>

        </form>

        <div class="bg-gray-50 p-4 text-center border-t border-gray-100">
            <p class="text-xs text-gray-500">&copy; <?= date('Y') ?> Admin Store</p>
        </div>

    </div>

    <script>
        function toggleSenha() {
            const inputSenha = document.getElementById('senha');
            const eyeIcon = document.getElementById('eye-icon');
            if (inputSenha.type === 'password') {
                inputSenha.type = 'text';
                eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                inputSenha.type = 'password';
                eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</body>
</html>