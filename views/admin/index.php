<?php
// Configurações e Inicialização
session_start();

// Captura a página atual via URL (padrão: dashboard)
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Simulação de Dados para exibição nos templates
$estatisticas = [
    'vendas_mes' => 'R$ 28.450,00',
    'pedidos_totais' => 184,
    'clientes_ativos' => 1240,
    'carrinhos_abandonados' => 14
];

$produtos = [
    ['id' => 1, 'nome' => 'Camiseta Oversized Minimalist', 'categoria' => 'Vestuário', 'preco' => 'R$ 89,90', 'estoque' => 45],
    ['id' => 2, 'nome' => 'Tênis Running Ultralight', 'categoria' => 'Calçados', 'preco' => 'R$ 349,00', 'estoque' => 12],
    ['id' => 3, 'nome' => 'Fone Bluetooth Noise Cancelling', 'categoria' => 'Eletrônicos', 'preco' => 'R$ 299,00', 'estoque' => 8],
];

$pedidos = [
    ['id' => 1024, 'cliente' => 'Ana Souza', 'data' => '28/07/2026', 'total' => 'R$ 349,00', 'status' => 'Pago'],
    ['id' => 1023, 'cliente' => 'Carlos Eduardo', 'data' => '28/07/2026', 'total' => 'R$ 89,90', 'status' => 'Pendente'],
    ['id' => 1022, 'cliente' => 'Mariana Lima', 'data' => '27/07/2026', 'total' => 'R$ 598,00', 'status' => 'Enviado'],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo | E-Commerce</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex min-h-screen font-sans">

    <!-- ========================================== -->
    <!-- MENU LATERAL / SIDEBAR                     -->
    <!-- ========================================== -->
    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between p-4 shadow-xl">
        <div>
            <!-- Logo -->
            <div class="text-2xl font-bold text-white text-center py-4 mb-6 border-b border-slate-800 tracking-wider">
                <i class="fa-solid fa-store text-indigo-500 mr-2"></i>ADMIN STORE
            </div>

            <!-- Links de Navegação -->
            <nav class="space-y-1">
                <a href="index.php?page=dashboard" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'dashboard' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-chart-line w-5"></i> Dashboard
                </a>
                <a href="index.php?page=produtos" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'produtos' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-box w-5"></i> Produtos
                </a>
                <a href="index.php?page=categorias" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'categorias' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-tags w-5"></i> Categorias
                </a>
                <a href="index.php?page=pedidos" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'pedidos' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-bag-shopping w-5"></i> Pedidos
                </a>
                <a href="index.php?page=carrinhos" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'carrinhos' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-cart-shopping w-5"></i> Carrinhos
                </a>
                <a href="index.php?page=clientes" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'clientes' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-users w-5"></i> Clientes
                </a>
                <a href="index.php?page=pagamentos" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'pagamentos' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-credit-card w-5"></i> Pagamentos
                </a>
                <a href="index.php?page=admins" class="flex items-center gap-3 px-4 py-3 rounded-lg transition <?= $page === 'admins' ? 'bg-indigo-600 text-white font-medium' : 'hover:bg-slate-800 hover:text-white' ?>">
                    <i class="fa-solid fa-user-shield w-5"></i> Admins
                </a>
            </nav>
        </div>

        <!-- Rodapé do Menu -->
        <div class="border-t border-slate-800 pt-4">
            <div class="flex items-center justify-between px-2">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-indigo-500 text-white flex items-center justify-center font-bold">A</div>
                    <div class="text-sm">
                        <p class="font-medium text-white">Admin Master</p>
                        <p class="text-xs text-slate-500">admin@loja.com</p>
                    </div>
                </div>
                <a href="#" class="text-slate-400 hover:text-red-400 title="Sair"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
        </div>
    </aside>

    <!-- ========================================== -->
    <!-- ÁREA DE CONTEÚDO PRINCIPAL                 -->
    <!-- ========================================== -->
    <main class="flex-1 p-8 overflow-y-auto">

        <?php switch ($page): 

            // ----------------------------------------------------
            // 1. DASHBOARD
            // ----------------------------------------------------
            case 'dashboard': ?>
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Visão Geral do Negócio</h1>
                    <span class="text-sm text-gray-500 bg-white px-4 py-2 rounded-lg border shadow-sm">Hoje: <?= date('d/m/Y') ?></span>
                </div>

                <!-- Cards Métricas -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Vendas (Mês)</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1"><?= $estatisticas['vendas_mes'] ?></h3>
                        </div>
                        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-dollar-sign"></i></div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Pedidos Totais</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1"><?= $estatisticas['pedidos_totais'] ?></h3>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-shopping-bag"></i></div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Clientes Ativos</p>
                            <h3 class="text-2xl font-bold text-gray-800 mt-1"><?= $estatisticas['clientes_ativos'] ?></h3>
                        </div>
                        <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-users"></i></div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Carrinhos Abertos</p>
                            <h3 class="text-2xl font-bold text-amber-600 mt-1"><?= $estatisticas['carrinhos_abandonados'] ?></h3>
                        </div>
                        <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-full flex items-center justify-center text-xl"><i class="fa-solid fa-cart-arrow-down"></i></div>
                    </div>
                </div>

                <!-- Tabela de Pedidos Recentes -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Últimas Transações</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-xs uppercase text-gray-400 border-b">
                                    <th class="pb-3">#ID</th>
                                    <th class="pb-3">Cliente</th>
                                    <th class="pb-3">Data</th>
                                    <th class="pb-3">Total</th>
                                    <th class="pb-3">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y text-sm text-gray-700">
                                <?php foreach($pedidos as $p): ?>
                                <tr>
                                    <td class="py-3 font-semibold">#<?= $p['id'] ?></td>
                                    <td class="py-3"><?= $p['cliente'] ?></td>
                                    <td class="py-3 text-gray-500"><?= $p['data'] ?></td>
                                    <td class="py-3 font-medium"><?= $p['total'] ?></td>
                                    <td class="py-3">
                                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full 
                                            <?= $p['status'] === 'Pago' ? 'bg-emerald-100 text-emerald-800' : ($p['status'] === 'Pendente' ? 'bg-amber-100 text-amber-800' : 'bg-blue-100 text-blue-800') ?>">
                                            <?= $p['status'] ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php break;

            // ----------------------------------------------------
            // 2. PRODUTOS
            // ----------------------------------------------------
            case 'produtos': ?>
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Catálogo de Produtos</h1>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i> Novo Produto
                    </button>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-500 border-b">
                            <tr>
                                <th class="p-4">ID</th>
                                <th class="p-4">Produto</th>
                                <th class="p-4">Categoria</th>
                                <th class="p-4">Preço</th>
                                <th class="p-4">Estoque</th>
                                <th class="p-4 text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y text-sm text-gray-700">
                            <?php foreach($produtos as $prod): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-semibold">#<?= $prod['id'] ?></td>
                                <td class="p-4 font-medium text-gray-900"><?= $prod['nome'] ?></td>
                                <td class="p-4"><span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs"><?= $prod['categoria'] ?></span></td>
                                <td class="p-4 font-semibold text-emerald-600"><?= $prod['preco'] ?></td>
                                <td class="p-4"><?= $prod['estoque'] ?> un.</td>
                                <td class="p-4 text-right space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="text-red-600 hover:text-red-800"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php break;

            // ----------------------------------------------------
            // 3. CATEGORIAS
            // ----------------------------------------------------
            case 'categorias': ?>
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Categorias de Produtos</h1>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i> Nova Categoria
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-gray-800">Vestuário</h3>
                            <p class="text-xs text-gray-500 mt-1">124 produtos vinculados</p>
                        </div>
                        <div class="flex gap-2 text-gray-400">
                            <button class="hover:text-indigo-600"><i class="fa-solid fa-pen"></i></button>
                            <button class="hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-gray-800">Eletrônicos</h3>
                            <p class="text-xs text-gray-500 mt-1">45 produtos vinculados</p>
                        </div>
                        <div class="flex gap-2 text-gray-400">
                            <button class="hover:text-indigo-600"><i class="fa-solid fa-pen"></i></button>
                            <button class="hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-gray-800">Calçados</h3>
                            <p class="text-xs text-gray-500 mt-1">89 produtos vinculados</p>
                        </div>
                        <div class="flex gap-2 text-gray-400">
                            <button class="hover:text-indigo-600"><i class="fa-solid fa-pen"></i></button>
                            <button class="hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                <?php break;

            // ----------------------------------------------------
            // 4. PEDIDOS
            // ----------------------------------------------------
            case 'pedidos': ?>
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Gerenciamento de Pedidos</h1>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-500 border-b">
                            <tr>
                                <th class="p-4">Pedido</th>
                                <th class="p-4">Cliente</th>
                                <th class="p-4">Data</th>
                                <th class="p-4">Total</th>
                                <th class="p-4">Status</th>
                                <th class="p-4 text-right">Ação</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y text-sm text-gray-700">
                            <?php foreach($pedidos as $p): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-semibold">#<?= $p['id'] ?></td>
                                <td class="p-4 font-medium"><?= $p['cliente'] ?></td>
                                <td class="p-4 text-gray-500"><?= $p['data'] ?></td>
                                <td class="p-4 font-bold text-gray-900"><?= $p['total'] ?></td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-800">
                                        <?= $p['status'] ?>
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-indigo-600 hover:underline font-medium">Ver Detalhes</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php break;

            // ----------------------------------------------------
            // 5. CARRINHOS
            // ----------------------------------------------------
            case 'carrinhos': ?>
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Carrinhos Ativos / Abandonados</h1>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center border-b pb-4 mb-4">
                        <div>
                            <p class="font-bold text-gray-800">Sessão #sess_9981a2</p>
                            <p class="text-xs text-gray-500">Cliente: Marcos Paulo (mpaulo@gmail.com) - Atualizado há 15 min</p>
                        </div>
                        <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-xs font-semibold">Abandonado</span>
                    </div>
                    <ul class="text-sm divide-y text-gray-600 mb-4">
                        <li class="py-2 flex justify-between"><span>1x Fone Bluetooth Noise Cancelling</span> <span class="font-semibold">R$ 299,00</span></li>
                        <li class="py-2 flex justify-between"><span>1x Camiseta Oversized Minimalist</span> <span class="font-semibold">R$ 89,90</span></li>
                    </ul>
                    <div class="flex justify-end gap-3 border-t pt-3">
                        <button class="text-xs bg-indigo-50 text-indigo-600 hover:bg-indigo-100 px-3 py-2 rounded-lg font-semibold transition">Enviar Lembrete por E-mail</button>
                    </div>
                </div>
                <?php break;

            // ----------------------------------------------------
            // 6. CLIENTES
            // ----------------------------------------------------
            case 'clientes': ?>
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Lista de Clientes</h1>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-500 border-b">
                            <tr>
                                <th class="p-4">Nome</th>
                                <th class="p-4">E-mail</th>
                                <th class="p-4">Telefone</th>
                                <th class="p-4">Cadastrado em</th>
                                <th class="p-4 text-right">Ação</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y text-sm text-gray-700">
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-semibold text-gray-900">Ana Souza</td>
                                <td class="p-4 text-gray-500">ana.souza@gmail.com</td>
                                <td class="p-4 text-gray-500">(11) 98765-4321</td>
                                <td class="p-4 text-gray-500">12/01/2026</td>
                                <td class="p-4 text-right"><button class="text-indigo-600 hover:underline">Histórico</button></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-semibold text-gray-900">Carlos Eduardo</td>
                                <td class="p-4 text-gray-500">carlos.edu@hotmail.com</td>
                                <td class="p-4 text-gray-500">(21) 99123-8899</td>
                                <td class="p-4 text-gray-500">03/03/2026</td>
                                <td class="p-4 text-right"><button class="text-indigo-600 hover:underline">Histórico</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php break;

            // ----------------------------------------------------
            // 7. PAGAMENTOS
            // ----------------------------------------------------
            case 'pagamentos': ?>
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Histórico de Pagamentos</h1>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-500 border-b">
                            <tr>
                                <th class="p-4">ID Transação</th>
                                <th class="p-4">Pedido</th>
                                <th class="p-4">Método</th>
                                <th class="p-4">Valor</th>
                                <th class="p-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y text-sm text-gray-700">
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-mono text-xs text-gray-500">pix_882319203912</td>
                                <td class="p-4 font-semibold">#1024</td>
                                <td class="p-4"><i class="fa-brands fa-pix text-emerald-500 mr-1"></i> PIX</td>
                                <td class="p-4 font-semibold">R$ 349,00</td>
                                <td class="p-4"><span class="bg-emerald-100 text-emerald-800 px-2.5 py-1 rounded-full text-xs font-semibold">Aprovado</span></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-mono text-xs text-gray-500">pay_992103810239</td>
                                <td class="p-4 font-semibold">#1023</td>
                                <td class="p-4"><i class="fa-regular fa-credit-card text-blue-500 mr-1"></i> Cartão de Crédito</td>
                                <td class="p-4 font-semibold">R$ 89,90</td>
                                <td class="p-4"><span class="bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full text-xs font-semibold">Processando</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php break;

            // ----------------------------------------------------
            // 8. ADMINISTRADORES
            // ----------------------------------------------------
            case 'admins': ?>
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Usuários Administradores</h1>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center gap-2">
                        <i class="fa-solid fa-user-plus"></i> Novo Admin
                    </button>
                </div>
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-500 border-b">
                            <tr>
                                <th class="p-4">Nome</th>
                                <th class="p-4">E-mail</th>
                                <th class="p-4">Função</th>
                                <th class="p-4 text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y text-sm text-gray-700">
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-semibold text-gray-900">Admin Master</td>
                                <td class="p-4 text-gray-500">admin@loja.com</td>
                                <td class="p-4"><span class="bg-purple-100 text-purple-800 px-2.5 py-1 rounded-full text-xs font-semibold">Super Admin</span></td>
                                <td class="p-4 text-right space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800"><i class="fa-solid fa-pen-to-square"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php break;

            // Page 404
            default: ?>
                <div class="text-center py-20">
                    <h1 class="text-6xl font-bold text-slate-300">404</h1>
                    <p class="text-xl text-gray-600 mt-2">Página não encontrada!</p>
                </div>
                <?php break;

        endswitch; ?>

    </main>

</body>
</html>