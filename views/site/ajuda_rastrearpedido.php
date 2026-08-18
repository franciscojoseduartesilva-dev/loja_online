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
                    <main class="py-5">
                        <div class="container">
                            <!-- Cabeçalho da Página -->
                            <div class="row mb-4">
                                <div class="col-lg-8 mx-auto text-center">
                                    <h1 class="fw-bold mb-2">Rastrear Pedido</h1>
                                    <p class="text-muted">
                                        Acompanhe o status e a localização da sua compra em tempo real.
                                    </p>
                                </div>
                            </div>

                            <!-- Formulário de Consulta -->
                            <div class="row mb-5">
                                <div class="col-md-8 col-lg-6 mx-auto">
                                    <div class="card shadow-sm p-4">
                                        <form action="rastrear-pedido" method="GET" class="needs-validation" novalidate>
                                            <div class="mb-3">
                                                <label for="order_number" class="form-label fw-semibold">Número do Pedido</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i class="bi bi-hash"></i></span>
                                                    <input type="text" class="form-control" id="order_number" name="codigo" placeholder="Ex: #10492" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="document" class="form-label fw-semibold">CPF ou E-mail do Comprador</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                                                    <input type="text" class="form-control" id="document" name="documento" placeholder="000.000.000-00 ou seu@email.com" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100 py-2 mt-2 fw-semibold">
                                                <i class="bi bi-search me-2"></i> Rastrear Envio
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Exemplo de Resultado de Rastreio (Simulação Visual) -->
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="card shadow-sm mb-4">
                                        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="text-muted small d-block">Pedido</span>
                                                <strong class="fs-5">#10492</strong>
                                            </div>
                                            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2">
                                                <i class="bi bi-truck me-1"></i> Em Transporte
                                            </span>
                                        </div>
                                        <div class="card-body p-4">
                                            <!-- Linha do Tempo / Passos do Rastreio -->
                                            <div class="row text-center mb-4 g-3">
                                                <div class="col-3">
                                                    <div class="p-2 rounded bg-primary text-white mb-2 mx-auto d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="bi bi-check-lg fs-5"></i>
                                                    </div>
                                                    <span class="d-block small fw-bold">Confirmado</span>
                                                    <small class="text-muted d-block" style="font-size: 0.75rem;">12/08 - 10:30</small>
                                                </div>
                                                <div class="col-3">
                                                    <div class="p-2 rounded bg-primary text-white mb-2 mx-auto d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="bi bi-box-seam fs-5"></i>
                                                    </div>
                                                    <span class="d-block small fw-bold">Embalado</span>
                                                    <small class="text-muted d-block" style="font-size: 0.75rem;">13/08 - 14:15</small>
                                                </div>
                                                <div class="col-3">
                                                    <div class="p-2 rounded bg-primary text-white mb-2 mx-auto d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="bi bi-truck fs-5"></i>
                                                    </div>
                                                    <span class="d-block small fw-bold">Enviado</span>
                                                    <small class="text-muted d-block" style="font-size: 0.75rem;">14/08 - 09:00</small>
                                                </div>
                                                <div class="col-3">
                                                    <div class="p-2 rounded bg-light text-muted mb-2 mx-auto d-flex align-items-center justify-content-center border" style="width: 40px; height: 40px;">
                                                        <i class="bi bi-house-door fs-5"></i>
                                                    </div>
                                                    <span class="d-block small text-muted">Entregue</span>
                                                    <small class="text-muted d-block" style="font-size: 0.75rem;">Previsão: 19/08</small>
                                                </div>
                                            </div>

                                            <!-- Histórico Detalhado -->
                                            <h6 class="fw-bold mb-3 border-bottom pb-2">Histórico do Envio</h6>
                                            <ul class="list-group list-group-flush small">
                                                <li class="list-group-item d-flex justify-content-between align-items-start px-0 py-2">
                                                    <div>
                                                        <strong class="d-block">Objeto saiu para entrega ao destinatário</strong>
                                                        <span class="text-muted">Centro de Distribuição - São Paulo/SP</span>
                                                    </div>
                                                    <span class="text-muted">Hoje, 08:30</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start px-0 py-2">
                                                    <div>
                                                        <strong class="d-block">Objeto em trânsito entre unidades</strong>
                                                        <span class="text-muted">De: Unidade de Tratamento - Campinas/SP para: Unidade de Distribuição - São Paulo/SP</span>
                                                    </div>
                                                    <span class="text-muted">14/08, 18:20</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-start px-0 py-2">
                                                    <div>
                                                        <strong class="d-block">Objeto postado pela loja</strong>
                                                        <span class="text-muted">Agência Central - Campinas/SP</span>
                                                    </div>
                                                    <span class="text-muted">14/08, 09:00</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Suporte -->
                            <div class="row mt-4">
                                <div class="col-lg-8 mx-auto text-center">
                                    <p class="text-muted small">
                                        Dúvidas sobre a entrega? Entre em contato com nosso <a href="ajuda" class="text-decoration-none">Suporte ao Cliente</a> ou acesse a página de <a href="faq" class="text-decoration-none">Perguntas Frequentes</a>.
                                    </p>
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