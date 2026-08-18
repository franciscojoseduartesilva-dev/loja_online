<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online | Produtos, ofertas e tecnologia</title>
    <meta name="description" content="Encontre produtos de informática, celulares, acessórios, games e ofertas especiais em nossa loja online.">
    <meta name="keywords" content="loja online, tecnologia, informática, celulares, ofertas, ecommerce">
    <meta name="author" content="Loja Online">

    <!-- Open Graph Básico -->
    <meta property="og:title" content="Loja Online | Produtos, ofertas e tecnologia">
    <meta property="og:description" content="Encontre produtos de informática, celulares, acessórios, games e ofertas especiais em nossa loja online.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://localhost/loja_online/public/">
    <meta property="og:image" content="assets/img/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Base URL -->
    <base href="/loja_online/public/">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS Personalizado -->
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --dark-color: #212529;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
            color: var(--dark-color);
            background-color: #fff;
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--dark-color);
            color: #adb5bd;
            font-size: 0.875rem;
        }

        .top-bar a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .top-bar a:hover {
            color: #fff;
        }

        /* Navbar Principal */
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
        }

        .search-form .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .search-form .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        /* Hero Banner */
        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: #fff;
            padding: 5rem 0;
            border-radius: 0.5rem;
        }

        .hero-section .lead {
            color: rgba(255, 255, 255, 0.85);
        }

        /* Benefícios */
        .benefit-box {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .benefit-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .08) !important;
        }

        /* Cards Gerais (Categorias e Produtos) */
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: 1px solid rgba(0, 0, 0, .08);
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
        }

        .category-card .card-img-top {
            height: 160px;
        }

        /* Tratamento visual para imagens ausentes */
        .img-fallback {
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 2.5rem;
            height: 200px;
        }

        .category-card .img-fallback {
            height: 160px;
        }

        /* Ofertas e Selos */
        .badge-discount {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 2;
        }

        .product-old-price {
            text-decoration: line-through;
            font-size: 0.875rem;
            color: var(--secondary-color);
        }

        .product-current-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* Banner Promocional */
        .promo-banner {
            background: linear-gradient(45deg, #212529, #343a40);
            color: #fff;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        /* Rodapé */
        footer {
            background-color: #1a1d20;
            color: #adb5bd;
            font-size: 0.9rem;
        }

        footer h5 {
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
        }

        footer a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        footer a:hover {
            color: #fff;
        }

        /* Responsividade Ajustada */
        @media (max-width: 991.98px) {
            .top-bar {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- Cabeçalho superior -->
    <div class="top-bar py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span class="me-3"><i class="bi bi-truck me-1"></i> Frete grátis para todo o Brasil nas compras acima de R$ 199</span>
                    <span><i class="bi bi-headset me-1"></i> Atendimento: (11) 99999-9999</span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="rastrear-pedido" class="me-3">Rastrear pedido</a>
                    <a href="ajuda">Central de ajuda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <?php require_once APP_ROOT . '/views/layouts/site/header.php'; ?>

    <main class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">

                    <!-- Cartão Principial de Login -->
                    <div class="card border-0 shadow-lg rounded-3">
                        <div class="card-body p-4 p-sm-5">

                            <!-- Cabeçalho do Card -->
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="bi bi-person-fill fs-3"></i>
                                </div>
                                <h3 class="fw-bold mb-1">Acesse sua Conta</h3>
                                <p class="text-muted small">Informe seus dados para entrar e gerenciar seus pedidos</p>
                            </div>

                            <!-- Formulário de Login -->
                            <form action="login/autenticar" method="POST" class="needs-validation" novalidate>

                                <!-- Campo E-mail / CPF -->
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
                                    <label for="email"><i class="bi bi-envelope me-2"></i>E-mail ou CPF</label>
                                </div>

                                <!-- Campo Senha -->
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="senha" placeholder="Sua senha" required>
                                    <label for="password"><i class="bi bi-lock me-2"></i>Senha</label>
                                </div>

                                <!-- Opções: Lembrar-me e Esqueci Senha -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="lembrar">
                                        <label class="form-check-label small text-muted" for="remember">
                                            Lembrar de mim
                                        </label>
                                    </div>
                                    <a href="recuperar-senha" class="small text-primary text-decoration-none">Esqueceu a senha?</a>
                                </div>

                                <!-- Botão de Entrar -->
                                <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold mb-3">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>Entrar
                                </button>

                            </form>

                            <!-- Divisor Social -->
                            <div class="position-relative text-center my-4">
                                <hr class="text-muted">
                                <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small">ou entre com</span>
                            </div>

                            <!-- Botões de Login Social -->
                            <div class="row g-2 mb-4">
                                <div class="col-6">
                                    <a href="login/google" class="btn btn-outline-secondary w-100 btn-sm py-2">
                                        <i class="bi bi-google me-1 text-danger"></i> Google
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="login/facebook" class="btn btn-outline-secondary w-100 btn-sm py-2">
                                        <i class="bi bi-facebook me-1 text-primary"></i> Facebook
                                    </a>
                                </div>
                            </div>

                            <!-- Link de Cadastro -->
                            <div class="text-center border-top pt-3">
                                <p class="small text-muted mb-0">Ainda não tem uma conta?</p>
                                <a href="cadastrar" class="fw-bold text-primary text-decoration-none">Criar uma conta gratuitamente</a>
                            </div>

                        </div>
                    </div>

                    <!-- Benefícios de Ter uma Conta -->
                    <div class="row text-center mt-4 g-2 text-muted small">
                        <div class="col-4">
                            <i class="bi bi-truck fs-5 d-block text-primary mb-1"></i>
                            Acompanhe pedidos
                        </div>
                        <div class="col-4">
                            <i class="bi bi-heart fs-5 d-block text-primary mb-1"></i>
                            Lista de desejos
                        </div>
                        <div class="col-4">
                            <i class="bi bi-percent fs-5 d-block text-primary mb-1"></i>
                            Ofertas exclusivas
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <?php require_once APP_ROOT . '/views/layouts/site/footer.php'; ?>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>