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
                    <!-- Banner Principal de Pesquisa -->
                    <div class="py-5 mb-5 bg-light rounded-3 text-center border">
                        <div class="row justify-content-center py-3">
                            <div class="col-md-8 col-lg-6">
                                <i class="bi bi-question-circle text-primary display-4 mb-3 d-block"></i>
                                <h1 class="fw-bold h2 mb-2">Como podemos ajudar você?</h1>
                                <p class="text-muted mb-4">Pesquise por dúvidas sobre pedidos, entregas, pagamentos e trocas.</p>
                                <form action="ajuda/busca" method="GET" class="search-form">
                                    <div class="input-group input-group-lg shadow-sm">
                                        <input type="text" name="q" class="form-control" placeholder="Digite sua dúvida ou palavra-chave..." aria-label="Pesquisar na Central de Ajuda">
                                        <button class="btn btn-primary px-4" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Categorias Principais de Ajuda -->
                    <section class="mb-5">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-3">
                                <a href="ajuda/categoria/pedidos" class="text-decoration-none">
                                    <div class="card h-100 text-center p-3 benefit-box border-0 shadow-sm">
                                        <div class="card-body">
                                            <i class="bi bi-box-seam text-primary display-6 mb-3"></i>
                                            <h2 class="h5 card-title text-dark">Meus Pedidos</h2>
                                            <p class="card-text text-muted small">Acompanhar status, cancelamentos e alterações de itens.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a href="ajuda/categoria/entregas" class="text-decoration-none">
                                    <div class="card h-100 text-center p-3 benefit-box border-0 shadow-sm">
                                        <div class="card-body">
                                            <i class="bi bi-truck text-primary display-6 mb-3"></i>
                                            <h2 class="h5 card-title text-dark">Prazos e Entregas</h2>
                                            <p class="card-text text-muted small">Cálculo de frete, prazos de envio e rastreamento.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a href="ajuda/categoria/pagamentos" class="text-decoration-none">
                                    <div class="card h-100 text-center p-3 benefit-box border-0 shadow-sm">
                                        <div class="card-body">
                                            <i class="bi bi-credit-card text-primary display-6 mb-3"></i>
                                            <h2 class="h5 card-title text-dark">Pagamentos</h2>
                                            <p class="card-text text-muted small">Cartões, Pix, boletos bancários e estornos.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a href="ajuda/categoria/trocas" class="text-decoration-none">
                                    <div class="card h-100 text-center p-3 benefit-box border-0 shadow-sm">
                                        <div class="card-body">
                                            <i class="bi bi-arrow-counterclockwise text-primary display-6 mb-3"></i>
                                            <h2 class="h5 card-title text-dark">Trocas e Devoluções</h2>
                                            <p class="card-text text-muted small">Políticas de garantia, devolução e estorno.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Perguntas Frequentes (FAQ Accordion) -->
                    <section class="mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h2 class="fw-bold mb-4 text-center">Dúvidas Frequentes</h2>

                                <div class="accordion shadow-sm" id="faqAccordion">

                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingOne">
                                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Como posso rastrear o meu pedido?
                                            </button>
                                        </h3>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body text-muted">
                                                Você pode rastrear seu pedido acessando a área <a href="rastrear-pedido" class="text-primary fw-semibold">Rastrear Pedido</a> no menu superior ou fazendo login em sua conta e acessando "Meus Pedidos". Além disso, enviamos atualizações por e-mail a cada mudança de status.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Quais são as formas de pagamento aceitas?
                                            </button>
                                        </h3>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body text-muted">
                                                Aceitamos cartões de crédito (em até 10x sem juros), Pix com aprovação imediata e boleto bancário (com prazo de compensação de até 3 dias úteis).
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Qual é o prazo para solicitar a troca ou devolução?
                                            </button>
                                        </h3>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body text-muted">
                                                De acordo com o Código de Defesa do Consumidor, você tem até <strong>7 dias corridos</strong> após o recebimento do produto para solicitar a devolução por arrepencimento. Para defeitos de fabricação, o prazo de garantia varia conforme o fabricante.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Como funciona a política de Frete Grátis?
                                            </button>
                                        </h3>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body text-muted">
                                                Oferecemos frete grátis para compras com valor total acima de <strong>R$ 199,00</strong> para entregas em todo o Brasil via modalidade de envio padrão (PAC ou transportadora parceira).
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Canais de Atendimento Direto -->
                    <section class="mb-5 py-4 bg-light rounded-3 text-center border">
                        <h2 class="h4 fw-bold mb-3">Ainda precisa de ajuda?</h2>
                        <p class="text-muted mb-4">Se você não encontrou a resposta para a sua dúvida, escolha uma das opções abaixo:</p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="https://wa.me/5511999999999" target="_blank" class="btn btn-success btn-lg px-4">
                                <i class="bi bi-whatsapp me-2"></i> Falar no WhatsApp
                            </a>
                            <a href="mailto:suporte@sualoja.com" class="btn btn-outline-primary btn-lg px-4">
                                <i class="bi bi-envelope me-2"></i> Enviar E-mail
                            </a>
                        </div>
                    </section>

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