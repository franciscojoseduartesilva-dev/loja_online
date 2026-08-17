<?php
// Caso o Controller ainda não esteja enviando $ofertas, usamos dados dinâmicos de teste
if (empty($ofertas)) {
    $ofertas = [
        [
            'id' => 1,
            'nome' => 'Smartphone Galaxy S23 Ultra 256GB',
            'preco' => 4999.00,
            'preco_antigo' => 6999.00,
            'imagem' => 'smartphone.jpg',
            'imagem_url' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&auto=format&fit=crop',
            'slug' => 'smartphone-galaxy-s23-ultra'
        ],
        [
            'id' => 2,
            'nome' => 'Notebook Gamer Core i7 16GB RTX 3060',
            'preco' => 5499.90,
            'preco_antigo' => 6200.00,
            'imagem' => 'notebook.jpg',
            'imagem_url' => 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=500&auto=format&fit=crop',
            'slug' => 'notebook-gamer-i7'
        ],
        [
            'id' => 3,
            'nome' => 'Monitor Gamer 27" 165Hz 1ms',
            'preco' => 1299.00,
            'preco_antigo' => 1599.00,
            'imagem' => 'monitor.jpg',
            'imagem_url' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=500&auto=format&fit=crop',
            'slug' => 'monitor-gamer-27'
        ],
        [
            'id' => 4,
            'nome' => 'Headset Sem Fio Bluetooth com Cancelamento de Ruído',
            'preco' => 350.00,
            'preco_antigo' => 499.00,
            'imagem' => 'headset.jpg',
            'imagem_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&auto=format&fit=crop',
            'slug' => 'headset-sem-fio'
        ]
    ];
}
?>
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
            background-color: #f8f9fa;
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

        /* Hero Banner */
        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: #fff;
            padding: 4rem 2rem;
            border-radius: 1rem;
            margin-bottom: 2rem;
        }

        .hero-section .lead {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Cards Gerais */
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: 1px solid rgba(0,0,0,.08);
            border-radius: 0.75rem;
            overflow: hidden;
            background-color: #fff;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.12) !important;
        }

        .card-img-top {
            object-fit: cover;
            height: 220px;
            width: 100%;
        }

        /* Tratamento visual para imagens ausentes */
        .img-fallback {
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 2.5rem;
            height: 220px;
        }

        /* Ofertas e Selos */
        .badge-discount {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 2;
            font-size: 0.85rem;
            padding: 0.4em 0.6em;
            border-radius: 0.4rem;
        }

        .product-old-price {
            text-decoration: line-through;
            font-size: 0.875rem;
            color: var(--secondary-color);
        }

        .product-current-price {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* Responsividade */
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
                    <span class="me-3"><i class="bi bi-truck me-1"></i> Frete grátis nas compras acima de R$ 199</span>
                    <span><i class="bi bi-headset me-1"></i> (11) 99999-9999</span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="rastrear-pedido" class="me-3">Rastrear pedido</a>
                    <a href="ajuda">Central de ajuda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Layout de Header de Incluir (se configurado) -->
    <?php 
        if (defined('APP_ROOT') && file_exists(APP_ROOT . '/views/layouts/site/header.php')) {
            require_once APP_ROOT . '/views/layouts/site/header.php'; 
        }
    ?>

    <main class="py-4">
        <div class="container">

            <!-- Banner Promocional Principal (Hero Section) -->
            <section class="hero-section text-center text-md-start shadow-sm">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="display-5 fw-bold mb-3">Semana da Tecnologia</h1>
                        <p class="lead mb-4">Descontos imperdíveis em smartphones, notebooks e acessórios gamer com até 40% OFF e entrega rápida.</p>
                        <a href="#ofertas" class="btn btn-light btn-lg fw-semibold px-4 text-primary">Aproveitar Ofertas</a>
                    </div>
                </div>
            </section>

            <!-- Seção de Ofertas Especiais -->
            <section id="ofertas" class="pt-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 mb-0 fw-bold text-danger">
                        <i class="bi bi-fire me-2"></i>Ofertas Especiais
                    </h2>
                    <span class="text-muted small">Por tempo limitado</span>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    <?php if (!empty($ofertas)): ?>
                        <?php foreach ($ofertas as $oferta): ?>
                            <div class="col">
                                <div class="card h-100 shadow-sm position-relative">
                                    
                                    <!-- Selo de Oferta / Desconto -->
                                    <?php if (!empty($oferta['preco_antigo']) && $oferta['preco_antigo'] > $oferta['preco']): ?>
                                        <?php 
                                            $percentualDesconto = round((($oferta['preco_antigo'] - $oferta['preco']) / $oferta['preco_antigo']) * 100);
                                        ?>
                                        <span class="badge bg-danger badge-discount fw-semibold">
                                            -<?= $percentualDesconto ?>% OFF
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-danger badge-discount fw-semibold">
                                            Oferta
                                        </span>
                                    <?php endif; ?>

                                    <!-- Imagem do Produto (Verifica Local, URL de Teste ou Fallback) -->
                                    <?php if (!empty($oferta['imagem']) && file_exists('assets/img/produtos/' . $oferta['imagem'])): ?>
                                        <img src="assets/img/produtos/<?= htmlspecialchars($oferta['imagem'], ENT_QUOTES, 'UTF-8') ?>" 
                                             class="card-img-top" 
                                             alt="<?= htmlspecialchars($oferta['nome'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?php elseif (!empty($oferta['imagem_url'])): ?>
                                        <img src="<?= htmlspecialchars($oferta['imagem_url'], ENT_QUOTES, 'UTF-8') ?>" 
                                             class="card-img-top" 
                                             alt="<?= htmlspecialchars($oferta['nome'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?php else: ?>
                                        <div class="img-fallback">
                                            <i class="bi bi-image text-secondary"></i>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Corpo do Card -->
                                    <div class="card-body d-flex flex-column">
                                        <h3 class="card-title h6 text-dark text-truncate mb-2" title="<?= htmlspecialchars($oferta['nome'], ENT_QUOTES, 'UTF-8') ?>">
                                            <?= htmlspecialchars($oferta['nome'], ENT_QUOTES, 'UTF-8') ?>
                                        </h3>

                                        <!-- Preços -->
                                        <div class="mt-auto pt-2 mb-3">
                                            <?php if (!empty($oferta['preco_antigo']) && $oferta['preco_antigo'] > $oferta['preco']): ?>
                                                <span class="product-old-price d-block">
                                                    R$ <?= number_format((float) $oferta['preco_antigo'], 2, ',', '.') ?>
                                                </span>
                                            <?php endif; ?>
                                            <span class="product-current-price">
                                                R$ <?= number_format((float) $oferta['preco'], 2, ',', '.') ?>
                                            </span>
                                        </div>

                                        <!-- Ações (Botões) -->
                                        <div class="d-grid gap-2">
                                            <a href="produto/<?= htmlspecialchars($oferta['slug'] ?? $oferta['id'], ENT_QUOTES, 'UTF-8') ?>" 
                                               class="btn btn-outline-secondary btn-sm">
                                                <i class="bi bi-eye me-1"></i> Ver detalhes
                                            </a>

                                            <form action="carrinho/adicionar" method="POST" class="d-grid">
                                                <input type="hidden" name="produto_id" value="<?= htmlspecialchars($oferta['id'], ENT_QUOTES, 'UTF-8') ?>">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-cart-plus me-1"></i> Adicionar
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12 text-center py-5">
                            <i class="bi bi-tag-fill display-1 text-muted"></i>
                            <p class="mt-3 text-muted fs-5">Nenhuma oferta disponível no momento.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </main>

    <!-- Layout de Rodapé de Incluir (se configurado) -->
    <?php 
        if (defined('APP_ROOT') && file_exists(APP_ROOT . '/views/layouts/site/footer.php')) {
            require_once APP_ROOT . '/views/layouts/site/footer.php'; 
        }
    ?>
    
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>