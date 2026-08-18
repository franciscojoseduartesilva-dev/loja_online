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
                            <!-- Cabeçalho de Resultados e Ordenação -->
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-3 border-bottom gap-3">
                                <div>
                                    <h1 class="h3 fw-bold mb-1">Resultados para: <span class="text-primary">"<?php echo htmlspecialchars($_GET['q'] ?? 'Smartphones', ENT_QUOTES, 'UTF-8'); ?>"</span></h1>
                                    <p class="text-muted small mb-0">Encontramos <strong>12 produtos</strong> correspondentes</p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <label for="sort-select" class="form-label mb-0 text-nowrap fw-semibold small">Ordenar por:</label>
                                    <select id="sort-select" class="form-select form-select-sm" style="min-width: 180px;">
                                        <option value="relevance" selected>Mais relevantes</option>
                                        <option value="price-asc">Menor Preço</option>
                                        <option value="price-desc">Maior Preço</option>
                                        <option value="rating">Melhor Avaliados</option>
                                        <option value="newest">Lançamentos</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-4">
                                <!-- Filtros Laterais -->
                                <aside class="col-lg-3">
                                    <div class="card border shadow-sm p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5 class="fw-bold mb-0"><i class="bi bi-funnel me-2"></i>Filtros</h5>
                                            <a href="busca" class="text-decoration-none small text-muted">Limpar</a>
                                        </div>

                                        <!-- Categoria -->
                                        <div class="mb-4">
                                            <h6 class="fw-bold mb-2">Categorias</h6>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="checkbox" id="cat-celulares" checked>
                                                <label class="form-check-label small" for="cat-celulares">Celulares e Smartphones (8)</label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="checkbox" id="cat-acessorios">
                                                <label class="form-check-label small" for="cat-acessorios">Acessórios (3)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cat-informatica">
                                                <label class="form-check-label small" for="cat-informatica">Informática (1)</label>
                                            </div>
                                        </div>

                                        <!-- Faixa de Preço -->
                                        <div class="mb-4">
                                            <h6 class="fw-bold mb-2">Faixa de Preço</h6>
                                            <div class="row g-2 mb-2">
                                                <div class="col-6">
                                                    <input type="number" class="form-control form-control-sm" placeholder="R$ Mín">
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" class="form-control form-control-sm" placeholder="R$ Máx">
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary btn-sm w-100">Aplicar Preço</button>
                                        </div>

                                        <!-- Marca -->
                                        <div class="mb-3">
                                            <h6 class="fw-bold mb-2">Marcas</h6>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="checkbox" id="brand-samsung">
                                                <label class="form-check-label small" for="brand-samsung">Samsung</label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" type="checkbox" id="brand-apple">
                                                <label class="form-check-label small" for="brand-apple">Apple</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="brand-xiaomi">
                                                <label class="form-check-label small" for="brand-xiaomi">Xiaomi</label>
                                            </div>
                                        </div>
                                    </div>
                                </aside>

                                <!-- Grid de Produtos e Resultados -->
                                <section class="col-lg-9">
                                    <div class="row g-4">
                                        <!-- Produto 1 -->
                                        <div class="col-sm-6 col-md-4">
                                            <div class="card h-100 position-relative">
                                                <span class="badge bg-danger badge-discount">-15%</span>
                                                <div class="img-fallback rounded-top">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                                <div class="card-body d-flex flex-column">
                                                    <span class="text-muted small mb-1">Smartphones</span>
                                                    <h6 class="card-title fw-bold text-truncate mb-2">Smartphone Pro Max 128GB</h6>
                                                    <div class="mb-2 text-warning small">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-half"></i>
                                                        <span class="text-muted ms-1">(42)</span>
                                                    </div>
                                                    <div class="mt-auto">
                                                        <div class="product-old-price">R$ 2.999,00</div>
                                                        <div class="product-current-price mb-3">R$ 2.549,15</div>
                                                        <a href="produto/1" class="btn btn-primary btn-sm w-100">
                                                            <i class="bi bi-cart-plus me-1"></i> Comprar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Produto 2 -->
                                        <div class="col-sm-6 col-md-4">
                                            <div class="card h-100 position-relative">
                                                <div class="img-fallback rounded-top">
                                                    <i class="bi bi-laptop"></i>
                                                </div>
                                                <div class="card-body d-flex flex-column">
                                                    <span class="text-muted small mb-1">Informática</span>
                                                    <h6 class="card-title fw-bold text-truncate mb-2">Notebook Core i7 16GB SSD 512GB</h6>
                                                    <div class="mb-2 text-warning small">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <span class="text-muted ms-1">(18)</span>
                                                    </div>
                                                    <div class="mt-auto">
                                                        <div class="product-current-price mb-3">R$ 4.299,00</div>
                                                        <a href="produto/2" class="btn btn-primary btn-sm w-100">
                                                            <i class="bi bi-cart-plus me-1"></i> Comprar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Produto 3 -->
                                        <div class="col-sm-6 col-md-4">
                                            <div class="card h-100 position-relative">
                                                <span class="badge bg-danger badge-discount">-20%</span>
                                                <div class="img-fallback rounded-top">
                                                    <i class="bi bi-headphones"></i>
                                                </div>
                                                <div class="card-body d-flex flex-column">
                                                    <span class="text-muted small mb-1">Acessórios</span>
                                                    <h6 class="card-title fw-bold text-truncate mb-2">Fone de Ouvido Bluetooth Noise Cancelling</h6>
                                                    <div class="mb-2 text-warning small">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                        <span class="text-muted ms-1">(89)</span>
                                                    </div>
                                                    <div class="mt-auto">
                                                        <div class="product-old-price">R$ 499,00</div>
                                                        <div class="product-current-price mb-3">R$ 399,20</div>
                                                        <a href="produto/3" class="btn btn-primary btn-sm w-100">
                                                            <i class="bi bi-cart-plus me-1"></i> Comprar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pagtinação -->
                                    <nav class="mt-5" aria-label="Navegação dos resultados">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Próximo</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- Exemplo de Estado sem resultados (Opcional: usar via PHP se total == 0) -->
                                    <!--
                    <div class="text-center py-5 my-4 bg-light rounded-3 border">
                        <i class="bi bi-search fs-1 text-muted mb-3 d-inline-block"></i>
                        <h4 class="fw-bold">Nenhum produto encontrado</h4>
                        <p class="text-muted">Não encontramos resultados para a sua busca. Tente pesquisar com outros termos.</p>
                        <a href="produtos" class="btn btn-primary mt-2">Ver todos os produtos</a>
                    </div>
                    -->
                                </section>
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