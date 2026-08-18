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

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <main class="py-5 bg-light">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8 col-xl-7">

                                    <!-- Cartão Principal de Cadastro -->
                                    <div class="card border-0 shadow-lg rounded-3">
                                        <div class="card-body p-4 p-sm-5">

                                            <!-- Cabeçalho -->
                                            <div class="text-center mb-4">
                                                <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                    <i class="bi bi-person-plus-fill fs-3"></i>
                                                </div>
                                                <h3 class="fw-bold mb-1">Crie sua Conta</h3>
                                                <p class="text-muted small">Preencha os campos abaixo para se cadastrar e aproveitar nossas ofertas</p>
                                            </div>

                                            <!-- Formulário de Cadastro -->
                                            <form action="cadastrar/salvar" method="POST" class="needs-validation" novalidate>

                                                <div class="row g-3">
                                                    <!-- Nome Completo -->
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo" required>
                                                            <label for="nome"><i class="bi bi-person me-2"></i>Nome Completo</label>
                                                        </div>
                                                    </div>

                                                    <!-- E-mail -->
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
                                                            <label for="email"><i class="bi bi-envelope me-2"></i>E-mail</label>
                                                        </div>
                                                    </div>

                                                    <!-- CPF -->
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                                                            <label for="cpf"><i class="bi bi-card-heading me-2"></i>CPF</label>
                                                        </div>
                                                    </div>

                                                    <!-- Telefone / WhatsApp -->
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
                                                            <label for="telefone"><i class="bi bi-telephone me-2"></i>Telefone / WhatsApp</label>
                                                        </div>
                                                    </div>

                                                    <!-- Senha -->
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" minlength="8" required>
                                                            <label for="senha"><i class="bi bi-lock me-2"></i>Senha (mín. 8 caracteres)</label>
                                                        </div>
                                                    </div>

                                                    <!-- Confirmar Senha -->
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha" required>
                                                            <label for="confirmar_senha"><i class="bi bi-shield-lock me-2"></i>Confirmar Senha</label>
                                                        </div>
                                                    </div>

                                                    <!-- Termos e Privacidade -->
                                                    <div class="col-12 my-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="termos" name="termos" required>
                                                            <label class="form-check-label small text-muted" for="termos">
                                                                Li e concordo com os <a href="termos" class="text-primary text-decoration-none" target="_blank">Termos de Uso</a> e a <a href="privacidade" class="text-primary text-decoration-none" target="_blank">Política de Privacidade</a>.
                                                            </label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" checked>
                                                            <label class="form-check-label small text-muted" for="newsletter">
                                                                Desejo receber promoções e novidades por e-mail.
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!-- Botão Cadastrar -->
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold py-3">
                                                            <i class="bi bi-check-circle me-2"></i>Finalizar Cadastro
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>

                                            <!-- Já possui conta -->
                                            <div class="text-center border-top mt-4 pt-3">
                                                <p class="small text-muted mb-0">Já tem uma conta cadastrada?</p>
                                                <a href="entrar" class="fw-bold text-primary text-decoration-none">Fazer Login</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </main>
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