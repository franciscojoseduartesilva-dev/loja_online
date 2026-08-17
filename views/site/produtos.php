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

        /* Cards Gerais */
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

        /* Trunca títulos longos em até 2 linhas */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 2.5rem;
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

    <!-- Conteúdo Principal -->
    <main class="py-5">
        <div class="container">
            <!-- Cabeçalho da Seção -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4 mb-0 fw-bold">Produtos em Destaque</h2>
                <a href="produtos" class="text-decoration-none">Ver todos <i class="bi bi-arrow-right"></i></a>
            </div>

            <!-- Grid de Produtos -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <?php if (!empty($produtos)): ?>
                    <?php foreach ($produtos as $produto): ?>
                        <div class="col">
                            <div class="card h-100 position-relative shadow-sm">

                                <!-- Badge de Desconto -->
                                <?php if (!empty($produto['preco_antigo']) && $produto['preco_antigo'] > $produto['preco']): ?>
                                    <span class="badge bg-danger badge-discount">
                                        -<?= round((($produto['preco_antigo'] - $produto['preco']) / $produto['preco_antigo']) * 100) ?>%
                                    </span>
                                <?php endif; ?>

                                <!-- Imagem do Produto com Imagem Padrão (Placeholder) -->
                                <a href="produto/<?= $produto['slug'] ?? $produto['id'] ?>">
                                    <?php if (!empty($produto['imagem']) && file_exists('assets/img/produtos/' . $produto['imagem'])): ?>
                                        <img src="assets/img/produtos/<?= htmlspecialchars($produto['imagem']) ?>" class="card-img-top" alt="<?= htmlspecialchars($produto['nome']) ?>">
                                    <?php else: ?>
                                        <!-- Imagem padrão caso o produto não tenha foto -->
                                        <img src="https://via.placeholder.com/300x200?text=Sem+Imagem" class="card-img-top" alt="Sem imagem disponível">
                                    <?php endif; ?>
                                </a>

                                <!-- Informações do Produto -->
                                <div class="card-body d-flex flex-column">
                                    <?php if (!empty($produto['categoria_nome'])): ?>
                                        <small class="text-muted mb-1"><?= htmlspecialchars($produto['categoria_nome']) ?></small>
                                    <?php endif; ?>

                                    <h5 class="card-title h6 mb-2">
                                        <a href="produto/<?= $produto['slug'] ?? $produto['id'] ?>" class="text-decoration-none text-dark line-clamp-2">
                                            <?= htmlspecialchars($produto['nome']) ?>
                                        </a>
                                    </h5>

                                    <div class="mt-auto pt-2">
                                        <?php if (!empty($produto['preco_antigo'])): ?>
                                            <div class="product-old-price">R$ <?= number_format($produto['preco_antigo'], 2, ',', '.') ?></div>
                                        <?php endif; ?>
                                        <div class="product-current-price">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></div>
                                    </div>
                                </div>

                                <!-- Botões de Ação -->
                                <div class="card-footer bg-transparent border-top-0 pt-0 pb-3">
                                    <div class="d-grid gap-2">
                                        <!-- Adicionar ao Carrinho -->
                                        <form action="carrinho/adicionar" method="POST">
                                            <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">
                                            <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2">
                                                <i class="bi bi-cart-plus"></i> Adicionar ao carrinho
                                            </button>
                                        </form>

                                        <!-- Ver detalhes -->
                                        <a href="produto/<?= $produto['slug'] ?? $produto['id'] ?>" class="btn btn-outline-secondary w-100">
                                            Ver detalhes
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Mensagem quando não há produtos -->
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-box-seam display-1 text-muted"></i>
                        <p class="mt-3 text-muted fs-5">Nenhum produto cadastrado ou encontrado.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <?php require_once APP_ROOT . '/views/layouts/site/footer.php'; ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>