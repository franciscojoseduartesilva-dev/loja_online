<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online | Produtos, ofertas e tecnologia</title>
    <meta name="description" content="Encontre produtos de informática, celulares, acessórios, games e ofertas especiais em nossa loja online.">
    <meta name="keywords" content="loja online, informática, celulares, acessórios, games, ofertas, tecnologia">
    <meta name="author" content="Loja Online">

    <!-- Open Graph básico -->
    <meta property="og:title" content="Loja Online | Produtos, ofertas e tecnologia">
    <meta property="og:description" content="Encontre produtos de informática, celulares, acessórios, games e ofertas especiais em nossa loja online.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://localhost/loja_online/public/">
    <meta property="og:image" content="assets/img/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Base URL para o roteador -->
    <base href="/loja_online/public/">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS Personalizado -->
    <style>
        :root {
            --primary-color: #7952b3; /* Roxo moderno e tecnológico */
            --primary-hover: #613d7c;
            --secondary-color: #6c757d;
            --dark-color: #2b2d42;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: var(--dark-color);
            background-color: #fff;
        }

        /* Estilos globais e utilitários */
        a {
            text-decoration: none;
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover, .btn-primary:focus {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover, .btn-outline-primary:focus {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #fff;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        /* Cabeçalho superior */
        .top-bar {
            background-color: var(--dark-color);
            color: #adb5bd;
            font-size: 0.875rem;
        }

        .top-bar a {
            color: #adb5bd;
            transition: color 0.2s ease;
        }

        .top-bar a:hover {
            color: #fff;
        }

        /* Navbar principal */
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

        /* Banner principal / Hero */
        .hero-section {
            background: linear-gradient(135deg, #7952b3 0%, #4b2d73 100%);
            color: #fff;
            padding: 4rem 0;
        }

        /* Cards de categorias */
        .category-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(121, 82, 179, 0.15);
        }

        .category-img-wrapper {
            height: 160px;
            background-color: var(--light-bg);
            overflow: hidden;
        }

        .category-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .category-card:hover .category-img-wrapper img {
            transform: scale(1.05);
        }

        /* Cards de produtos */
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(121, 82, 179, 0.15);
        }

        .product-img-wrapper {
            height: 200px;
            background-color: var(--light-bg);
            position: relative;
            overflow: hidden;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .product-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge-discount {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        /* Banner de oferta */
        .offer-banner {
            background: linear-gradient(135deg, #2b2d42 0%, #1a1b26 100%);
            color: #fff;
            border-radius: 1rem;
            overflow: hidden;
        }

        /* Rodapé */
        footer {
            background-color: #f1f3f5;
            color: #495057;
            font-size: 0.9rem;
        }

        footer h5 {
            color: var(--dark-color);
            font-size: 1rem;
            font-weight: 700;
        }

        footer a {
            color: #495057;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        footer a:hover {
            color: var(--primary-color);
        }
    </style>
</head>
<body>

    <!-- Cabeçalho superior -->
    <div class="top-bar py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span class="me-3"><i class="bi bi-truck me-1"></i> Frete grátis para todo o país em compras acima de R$ 199</span>
                    <span><i class="bi bi-headset me-1"></i> Atendimento: (11) 99999-9999</span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="rastrear-pedido" class="me-3 text-decoration-none"><i class="bi bi-geo-alt me-1"></i> Rastrear pedido</a>
                    <a href="ajuda" class="text-decoration-none"><i class="bi bi-question-circle me-1"></i> Central de ajuda</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Cabeçalho superior -->

    <!-- Navbar principal -->
    <header class="sticky-top bg-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <!-- Logotipo -->
                <a class="navbar-brand" href="">Loja Online</a>

                <!-- Botão responsivo para dispositivos móveis -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Itens da Navbar -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produtos">Produtos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="categorias" id="categoriasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoriasDropdown">
                                <li><a class="dropdown-item" href="categoria/informatica">Informática</a></li>
                                <li><a class="dropdown-item" href="categoria/celulares">Celulares</a></li>
                                <li><a class="dropdown-item" href="categoria/acessorios">Acessórios</a></li>
                                <li><a class="dropdown-item" href="categoria/casa-decoracao">Casa e decoração</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="categorias">Ver todas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ofertas">Ofertas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="ajudaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ajuda
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="ajudaDropdown">
                                <li><a class="dropdown-item" href="ajuda">Central de ajuda</a></li>
                                <li><a class="dropdown-item" href="faq">Perguntas frequentes</a></li>
                                <li><a class="dropdown-item" href="rastrear-pedido">Rastrear pedido</a></li>
                                <li><a class="dropdown-item" href="trocas-devolucoes">Trocas e devoluções</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="contato">Fale conosco</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Formulário de pesquisa -->
                    <form class="d-flex search-form me-lg-3 mb-3 mb-lg-0" action="buscar" method="GET" role="search">
                        <input class="form-control" type="search" name="q" placeholder="Pesquisar produtos..." aria-label="Pesquisar produtos" required>
                        <button class="btn btn-outline-primary" type="submit" aria-label="Buscar"><i class="bi bi-search"></i></button>
                    </form>

                    <!-- Menu da conta e carrinho -->
                    <div class="d-flex align-items-center">
                        <!-- Menu da conta -->
                        <div class="dropdown me-3">
                            <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" id="contaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle fs-5 me-1"></i>
                                <span class="d-none d-xl-inline">Conta</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="contaDropdown">
                                <li><a class="dropdown-item" href="cliente/login">Entrar</a></li>
                                <li><a class="dropdown-item" href="cliente/cadastro">Criar conta</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="cliente/pedidos">Meus pedidos</a></li>
                            </ul>
                        </div>

                        <!-- Carrinho de compras -->
                        <a href="carrinho" class="btn btn-outline-primary position-relative" aria-label="Carrinho de compras">
                            <i class="bi bi-cart3"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                                <span class="visually-hidden">itens no carrinho</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Fim da Navbar principal -->

    <main>
        <!-- Banner principal -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 text-center text-lg-start">
                        <span class="badge bg-light text-primary mb-3 px-3 py-2 rounded-pill fw-semibold">Novidade 2026</span>
                        <h1 class="display-4 fw-bold mb-3">Tecnologia e Inovação ao seu Alcance</h1>
                        <p class="lead mb-4">Descubra nossa linha completa de produtos de informática, celulares e acessórios com os melhores preços do mercado.</p>
                        <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                            <a href="produtos" class="btn btn-light btn-lg px-4 fw-semibold text-primary">Comprar agora</a>
                            <a href="ofertas" class="btn btn-outline-light btn-lg px-4">Ver ofertas</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="p-4 bg-white bg-opacity-10 rounded-4 shadow-lg">
                            <img src="assets/img/hero-banner.jpg" alt="Eletrônicos e acessórios modernos em destaque" class="img-fluid rounded-3 object-fit-cover" style="max-height: 380px; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim do Banner principal -->

        <!-- Benefícios -->
        <section class="py-5 bg-light border-bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center bg-white p-4 rounded-3 shadow-sm h-100">
                            <div class="fs-1 text-primary me-3">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1">Entrega rápida</h3>
                                <p class="text-muted small mb-0">Para todo o Brasil com rastreio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center bg-white p-4 rounded-3 shadow-sm h-100">
                            <div class="fs-1 text-primary me-3">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1">Pagamento seguro</h3>
                                <p class="text-muted small mb-0">Ambiente criptografado e seguro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center bg-white p-4 rounded-3 shadow-sm h-100">
                            <div class="fs-1 text-primary me-3">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1">Troca facilitada</h3>
                                <p class="text-muted small mb-0">Até 30 dias para devoluções</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center bg-white p-4 rounded-3 shadow-sm h-100">
                            <div class="fs-1 text-primary me-3">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1">Atendimento ao cliente</h3>
                                <p class="text-muted small mb-0">Suporte especializado humanizado</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim dos Benefícios -->

        <!-- Categorias -->
        <section class="py-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 fw-bold mb-0">Categorias em destaque</h2>
                    <a href="categorias" class="btn btn-outline-primary btn-sm">Ver todas</a>
                </div>
                <div class="row g-4">
                    <!-- Informática -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="categoria/informatica" class="text-decoration-none">
                            <div class="card category-card text-center h-100">
                                <div class="category-img-wrapper">
                                    <img src="assets/img/categorias/informatica.jpg" alt="Categoria Informática">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="h6 fw-bold text-dark mb-1">Informática</h3>
                                    <p class="text-muted small mb-0">Notebooks e mais</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Celulares -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="categoria/celulares" class="text-decoration-none">
                            <div class="card category-card text-center h-100">
                                <div class="category-img-wrapper">
                                    <img src="assets/img/categorias/celulares.jpg" alt="Categoria Celulares">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="h6 fw-bold text-dark mb-1">Celulares</h3>
                                    <p class="text-muted small mb-0">Smartphones</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Acessórios -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="categoria/acessorios" class="text-decoration-none">
                            <div class="card category-card text-center h-100">
                                <div class="category-img-wrapper">
                                    <img src="assets/img/categorias/acessorios.jpg" alt="Categoria Acessórios">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="h6 fw-bold text-dark mb-1">Acessórios</h3>
                                    <p class="text-muted small mb-0">Periféricos e kits</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Áudio -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="categoria/audio" class="text-decoration-none">
                            <div class="card category-card text-center h-100">
                                <div class="category-img-wrapper">
                                    <img src="assets/img/categorias/audio.jpg" alt="Categoria Áudio">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="h6 fw-bold text-dark mb-1">Áudio</h3>
                                    <p class="text-muted small mb-0">Fones e caixas</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Casa e decoração -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="categoria/casa-decoracao" class="text-decoration-none">
                            <div class="card category-card text-center h-100">
                                <div class="category-img-wrapper">
                                    <img src="assets/img/categorias/casa.jpg" alt="Categoria Casa e decoração">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="h6 fw-bold text-dark mb-1">Casa e decoração</h3>
                                    <p class="text-muted small mb-0">Smart home</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Games -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="categoria/games" class="text-decoration-none">
                            <div class="card category-card text-center h-100">
                                <div class="category-img-wrapper">
                                    <img src="assets/img/categorias/games.jpg" alt="Categoria Games">
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="h6 fw-bold text-dark mb-1">Games</h3>
                                    <p class="text-muted small mb-0">Headsets e mouses</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim das Categorias -->

        <!-- Produtos em destaque -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 fw-bold mb-0">Produtos em destaque</h2>
                    <a href="produtos" class="btn btn-outline-primary btn-sm">Ver todos</a>
                </div>
                <div class="row g-4">
                    <!-- Produto 1 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <span class="badge bg-danger badge-discount">-15%</span>
                                <img src="assets/img/produtos/notebook.jpg" alt="Notebook Essencial 15">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Informática</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/notebook-essencial-15" class="text-dark stretched-link">Notebook Essencial 15</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <span class="text-muted ms-1">(42)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">R$ 3.500,00</span>
                                    <span class="text-primary fw-bold fs-5">R$ 2.975,00</span>
                                    <span class="text-muted small d-block">10x de R$ 297,50 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/notebook-essencial-15" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Notebook Essencial 15 ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produto 2 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <span class="badge bg-success badge-discount">Lançamento</span>
                                <img src="assets/img/produtos/smartphone.jpg" alt="Smartphone Connect">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Celulares</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/smartphone-connect" class="text-dark stretched-link">Smartphone Connect</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-1">(18)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">&nbsp;</span>
                                    <span class="text-primary fw-bold fs-5">R$ 1.899,00</span>
                                    <span class="text-muted small d-block">10x de R$ 189,90 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/smartphone-connect" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Smartphone Connect ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produto 3 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <span class="badge bg-danger badge-discount">-20%</span>
                                <img src="assets/img/produtos/fone.jpg" alt="Fone Bluetooth Air">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Áudio</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/fone-bluetooth-air" class="text-dark stretched-link">Fone Bluetooth Air</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <span class="text-muted ms-1">(95)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">R$ 250,00</span>
                                    <span class="text-primary fw-bold fs-5">R$ 199,90</span>
                                    <span class="text-muted small d-block">5x de R$ 39,98 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/fone-bluetooth-air" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Fone Bluetooth Air ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produto 4 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <img src="assets/img/produtos/teclado.jpg" alt="Teclado Confort Plus">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Acessórios</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/teclado-confort-plus" class="text-dark stretched-link">Teclado Confort Plus</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <span class="text-muted ms-1">(31)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">&nbsp;</span>
                                    <span class="text-primary fw-bold fs-5">R$ 149,90</span>
                                    <span class="text-muted small d-block">3x de R$ 49,97 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/teclado-confort-plus" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Teclado Confort Plus ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produto 5 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <img src="assets/img/produtos/mouse.jpg" alt="Mouse Sem Fio">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Acessórios</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/mouse-sem-fio" class="text-dark stretched-link">Mouse Sem Fio</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <span class="text-muted ms-1">(60)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">&nbsp;</span>
                                    <span class="text-primary fw-bold fs-5">R$ 89,90</span>
                                    <span class="text-muted small d-block">2x de R$ 44,95 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/mouse-sem-fio" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Mouse Sem Fio ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produto 6 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <span class="badge bg-danger badge-discount">-10%</span>
                                <img src="assets/img/produtos/monitor.jpg" alt="Monitor Full HD">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Informática</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/monitor-full-hd" class="text-dark stretched-link">Monitor Full HD</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-1">(14)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">R$ 999,00</span>
                                    <span class="text-primary fw-bold fs-5">R$ 899,10</span>
                                    <span class="text-muted small d-block">9x de R$ 99,90 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/monitor-full-hd" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Monitor Full HD ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produto 7 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <img src="assets/img/produtos/caixa-som.jpg" alt="Caixa de Som Portátil">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Áudio</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/caixa-de-som-portatil" class="text-dark stretched-link">Caixa de Som Portátil</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <span class="text-muted ms-1">(27)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">&nbsp;</span>
                                    <span class="text-primary fw-bold fs-5">R$ 299,90</span>
                                    <span class="text-muted small d-block">5x de R$ 59,98 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/caixa-de-som-portatil" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Caixa de Som Portátil ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Produto 8 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper">
                                <span class="badge bg-danger badge-discount">-25%</span>
                                <img src="assets/img/produtos/headset.jpg" alt="Headset Gamer">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="text-muted small mb-1">Games</span>
                                <h3 class="h6 fw-bold mb-2">
                                    <a href="produto/headset-gamer" class="text-dark stretched-link">Headset Gamer</a>
                                </h3>
                                <div class="text-warning small mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-1">(83)</span>
                                </div>
                                <div class="mb-3">
                                    <span class="text-muted text-decoration-line-through small d-block">R$ 400,00</span>
                                    <span class="text-primary fw-bold fs-5">R$ 299,90</span>
                                    <span class="text-muted small d-block">5x de R$ 59,98 sem juros</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 position-relative" style="z-index: 2;">
                                    <a href="produto/headset-gamer" class="btn btn-outline-primary btn-sm flex-grow-1">Ver produto</a>
                                    <button type="button" class="btn btn-primary btn-sm" aria-label="Adicionar Headset Gamer ao carrinho">
                                        <i class="bi bi-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim dos Produtos em destaque -->

        <!-- Oferta -->
        <section class="py-5">
            <div class="container">
                <div class="offer-banner p-4 p-lg-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6 text-center text-lg-start">
                            <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill fw-semibold">Oferta Relâmpago</span>
                            <h2 class="display-6 fw-bold mb-3">Super Desconto em Toda Linha de Áudio</h2>
                            <p class="lead mb-4 text-light opacity-75">Economize até 40% em fones de ouvido e caixas de som selecionadas. Aproveite por tempo limitado!</p>
                            <a href="ofertas" class="btn btn-light btn-lg px-4 fw-semibold text-dark">Aproveitar ofertas</a>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="assets/img/oferta-banner.jpg" alt="Promoção de produtos de áudio" class="img-fluid rounded-3 object-fit-cover" style="max-height: 280px; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim da Oferta -->

        <!-- Mais vendidos -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="mb-4">
                    <h2 class="h3 fw-bold mb-0">Produtos mais vendidos</h2>
                </div>
                <div class="row g-4">
                    <!-- Mais vendido 1 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper" style="height: 160px;">
                                <img src="assets/img/produtos/mouse.jpg" alt="Mouse Sem Fio">
                            </div>
                            <div class="card-body d-flex flex-column p-3">
                                <span class="text-muted small mb-1">Acessórios</span>
                                <h3 class="h6 fw-bold mb-2 text-truncate">
                                    <a href="produto/mouse-sem-fio" class="text-dark stretched-link">Mouse Sem Fio</a>
                                </h3>
                                <div class="mt-auto">
                                    <span class="text-primary fw-bold">R$ 89,90</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mais vendido 2 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper" style="height: 160px;">
                                <img src="assets/img/produtos/fone.jpg" alt="Fone Bluetooth Air">
                            </div>
                            <div class="card-body d-flex flex-column p-3">
                                <span class="text-muted small mb-1">Áudio</span>
                                <h3 class="h6 fw-bold mb-2 text-truncate">
                                    <a href="produto/fone-bluetooth-air" class="text-dark stretched-link">Fone Bluetooth Air</a>
                                </h3>
                                <div class="mt-auto">
                                    <span class="text-primary fw-bold">R$ 199,90</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mais vendido 3 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper" style="height: 160px;">
                                <img src="assets/img/produtos/teclado.jpg" alt="Teclado Confort Plus">
                            </div>
                            <div class="card-body d-flex flex-column p-3">
                                <span class="text-muted small mb-1">Acessórios</span>
                                <h3 class="h6 fw-bold mb-2 text-truncate">
                                    <a href="produto/teclado-confort-plus" class="text-dark stretched-link">Teclado Confort Plus</a>
                                </h3>
                                <div class="mt-auto">
                                    <span class="text-primary fw-bold">R$ 149,90</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mais vendido 4 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="card product-card bg-white">
                            <div class="product-img-wrapper" style="height: 160px;">
                                <img src="assets/img/produtos/headset.jpg" alt="Headset Gamer">
                            </div>
                            <div class="card-body d-flex flex-column p-3">
                                <span class="text-muted small mb-1">Games</span>
                                <h3 class="h6 fw-bold mb-2 text-truncate">
                                    <a href="produto/headset-gamer" class="text-dark stretched-link">Headset Gamer</a>
                                </h3>
                                <div class="mt-auto">
                                    <span class="text-primary fw-bold">R$ 299,90</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim dos Mais vendidos -->

        <!-- Newsletter -->
        <section class="py-5 bg-white border-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="h3 fw-bold mb-2">Receba ofertas exclusivas</h2>
                        <p class="text-muted mb-4">Cadastre seu e-mail para receber descontos especiais e novidades em primeira mão.</p>
                        <form action="newsletter" method="POST" class="needs-validation" novalidate>
                            <div class="input-group mb-3">
                                <label for="emailNewsletter" class="visually-hidden">Seu e-mail</label>
                                <input type="email" id="emailNewsletter" name="email" class="form-control form-control-lg" placeholder="Digite seu melhor e-mail" required>
                                <button class="btn btn-primary px-4" type="submit">Cadastrar</button>
                            </div>
                            <div class="form-check text-start d-inline-block">
                                <input class="form-check-input" type="checkbox" value="" id="concordoTermos" required>
                                <label class="form-check-label small text-muted" for="concordoTermos">
                                    Concordo com a <a href="politica-de-privacidade" class="text-primary">Política de Privacidade</a>.
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim da Newsletter -->
    </main>

    <!-- Rodapé -->
    <footer class="pt-5 pb-4 border-top">
        <div class="container">
            <div class="row g-4 mb-4">
                <!-- Coluna Loja Online -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Loja Online</h5>
                    <p class="text-muted small">Sua loja de confiança para eletrônicos, informática, acessórios e muito mais. Qualidade e segurança garantidas.</p>
                    <p class="text-muted small mb-1"><i class="bi bi-telephone me-2"></i> (11) 99999-9999</p>
                    <p class="text-muted small mb-2"><i class="bi bi-envelope me-2"></i> contato@lojaonline.com</p>
                    <p class="text-muted small mb-3"><i class="bi bi-geo-alt me-2"></i> Rua da Tecnologia, 1000 - São Paulo, SP</p>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Coluna Institucional -->
                <div class="col-lg-2 col-md-6 col-6">
                    <h5 class="mb-3">Institucional</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="sobre">Sobre a loja</a></li>
                        <li><a href="contato">Contato</a></li>
                        <li><a href="trabalhe-conosco">Trabalhe conosco</a></li>
                    </ul>
                </div>

                <!-- Coluna Atendimento -->
                <div class="col-lg-2 col-md-6 col-6">
                    <h5 class="mb-3">Atendimento</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="ajuda">Central de ajuda</a></li>
                        <li><a href="faq">Perguntas frequentes</a></li>
                        <li><a href="rastrear-pedido">Rastrear pedido</a></li>
                        <li><a href="trocas-devolucoes">Trocas e devoluções</a></li>
                        <li><a href="politica-de-entrega">Política de entrega</a></li>
                    </ul>
                </div>

                <!-- Coluna Minha conta -->
                <div class="col-lg-2 col-md-6 col-6">
                    <h5 class="mb-3">Minha conta</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="cliente/login">Entrar</a></li>
                        <li><a href="cliente/cadastro">Criar conta</a></li>
                        <li><a href="cliente/pedidos">Meus pedidos</a></li>
                        <li><a href="carrinho">Carrinho</a></li>
                    </ul>
                </div>

                <!-- Coluna Políticas -->
                <div class="col-lg-3 col-md-6 col-6">
                    <h5 class="mb-3">Políticas</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="termos-de-uso">Termos de Uso</a></li>
                        <li><a href="politica-de-privacidade">Política de Privacidade</a></li>
                        <li><a href="politica-de-cookies">Política de Cookies</a></li>
                        <li><a href="trocas-devolucoes">Trocas e Devoluções</a></li>
                    </ul>
                </div>
            </div>

            <hr class="text-muted">

            <!-- Parte inferior do rodapé -->
            <div class="row align-items-center gy-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-muted small mb-0">&copy; 2026 Loja Online. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="d-inline-flex align-items-center gap-3 fs-4 text-muted">
                        <i class="bi bi-credit-card" title="Cartão de Crédito" aria-label="Cartão de Crédito"></i>
                        <i class="bi bi-upc-scan" title="Boleto Bancário" aria-label="Boleto Bancário"></i>
                        <i class="bi bi-shield-lock text-success" title="Ambiente Seguro" aria-label="Ambiente Seguro"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fim do Rodapé -->

    <!-- Scripts -->
    <!-- Bootstrap Bundle JS (popper incluso) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>