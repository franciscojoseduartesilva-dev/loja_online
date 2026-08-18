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
            <!-- Cabeçalho da Página -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1"><i class="bi bi-box-seam text-primary me-2"></i>Meus Pedidos</h2>
                    <p class="text-muted mb-0">Acompanhe o status das suas compras e o histórico de pedidos</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <a href="produtos" class="btn btn-outline-primary">
                        <i class="bi bi-cart-plus me-1"></i> Continuar Comprando
                    </a>
                </div>
            </div>

            <!-- Filtros Rápidos -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-2">
                    <ul class="nav nav-pills nav-fill flex-column flex-sm-row">
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold" href="#">Todos (3)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-semibold" href="#">Em Andamento (1)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-semibold" href="#">Entregues (2)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-semibold" href="#">Cancelados (0)</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Lista de Pedidos -->
            <div class="row g-4">

                <!-- Pedido 1: Em Andamento -->
                <div class="col-12">
                    <div class="card border-0 shadow-sm rounded-3">
                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center gap-2">
                            <div>
                                <span class="fw-bold text-dark me-2">Pedido #10249</span>
                                <span class="text-muted small me-3">| Realizado em 15/08/2026</span>
                                <span class="badge bg-warning text-dark"><i class="bi bi-truck me-1"></i> Em Transporte</span>
                            </div>
                            <div class="fw-bold text-primary fs-5">
                                R$ 4.299,00
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <!-- Barra de Progresso da Entrega -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between small text-muted mb-2">
                                    <span class="text-primary fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Pedido Confirmado</span>
                                    <span class="text-primary fw-bold"><i class="bi bi-check-circle-fill me-1"></i> Em Separação</span>
                                    <span class="text-primary fw-bold"><i class="bi bi-truck me-1"></i> A Caminho</span>
                                    <span><i class="bi bi-house-door me-1"></i> Entregue</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <!-- Item do Pedido -->
                            <div class="d-flex align-items-center gap-3 pb-3 border-bottom">
                                <div class="img-fallback rounded flex-shrink-0" style="width: 80px; height: 80px; font-size: 1.5rem;">
                                    <i class="bi bi-laptop"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-bold">Notebook Gamer Intel Core i7 16GB SSD 512GB RTX 3060</h6>
                                    <p class="text-muted small mb-0">Qtd: 1 | Cod: 884920</p>
                                </div>
                                <div class="text-end">
                                    <span class="fw-bold d-block">R$ 4.299,00</span>
                                </div>
                            </div>

                            <!-- Rodapé do Card de Pedido -->
                            <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 pt-2">
                                <span class="small text-muted"><i class="bi bi-geo-alt me-1"></i> Previsão de entrega: <strong>21/08/2026</strong></span>
                                <div class="mt-2 mt-sm-0">
                                    <button type="button" class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalDetalhesPedido">
                                        <i class="bi bi-eye me-1"></i> Ver Detalhes
                                    </button>
                                    <a href="rastrear-pedido?id=10249" class="btn btn-primary btn-sm">
                                        <i class="bi bi-geo me-1"></i> Rastrear Envio
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pedido 2: Entregue -->
                <div class="col-12">
                    <div class="card border-0 shadow-sm rounded-3">
                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center gap-2">
                            <div>
                                <span class="fw-bold text-dark me-2">Pedido #09812</span>
                                <span class="text-muted small me-3">| Realizado em 02/06/2026</span>
                                <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Entregue</span>
                            </div>
                            <div class="fw-bold text-primary fs-5">
                                R$ 289,90
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 pb-3 border-bottom">
                                <div class="img-fallback rounded flex-shrink-0" style="width: 80px; height: 80px; font-size: 1.5rem;">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-bold">Headset Gamer Surround 7.1 Sem Fio RGB</h6>
                                    <p class="text-muted small mb-0">Qtd: 1 | Cod: 441029</p>
                                </div>
                                <div class="text-end">
                                    <span class="fw-bold d-block">R$ 289,90</span>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 pt-2">
                                <span class="small text-muted"><i class="bi bi-check2-all me-1 text-success"></i> Entregue em 08/06/2026</span>
                                <div class="mt-2 mt-sm-0">
                                    <button type="button" class="btn btn-outline-secondary btn-sm me-2">
                                        <i class="bi bi-receipt me-1"></i> Segunda Via da Nota
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-arrow-repeat me-1"></i> Comprar Novamente
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal de Detalhes do Pedido -->
            <div class="modal fade" id="modalDetalhesPedido" tabindex="-1" aria-labelledby="modalDetalhesLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="modalDetalhesLabel"><i class="bi bi-receipt me-2 text-primary"></i>Detalhes do Pedido #10249</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-muted small text-uppercase">Endereço de Entrega</h6>
                                    <p class="mb-0"><strong>João Silva</strong></p>
                                    <p class="mb-0 text-muted small">Av. Paulista, 1000 - Apto 42</p>
                                    <p class="mb-0 text-muted small">Bela Vista - São Paulo / SP</p>
                                    <p class="mb-0 text-muted small">CEP: 01310-100</p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-muted small text-uppercase">Forma de Pagamento</h6>
                                    <p class="mb-0"><i class="bi bi-credit-card-2-front me-1"></i> Cartão de Crédito</p>
                                    <p class="mb-0 text-muted small">Mastercard final **** 4821</p>
                                    <p class="mb-0 text-muted small">Parcelado em 10x sem juros</p>
                                </div>
                            </div>

                            <h6 class="fw-bold text-muted small text-uppercase mb-2">Resumo dos Valores</h6>
                            <div class="bg-light p-3 rounded">
                                <div class="d-flex justify-content-between mb-1 small">
                                    <span>Subtotal dos produtos:</span>
                                    <span>R$ 4.299,00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-1 small">
                                    <span>Frete:</span>
                                    <span class="text-success fw-bold">Grátis</span>
                                </div>
                                <hr class="my-2">
                                <div class="d-flex justify-content-between fw-bold text-dark">
                                    <span>Total:</span>
                                    <span class="text-primary fs-5">R$ 4.299,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
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