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
                                    <h1 class="fw-bold mb-3">Perguntas Frequentes</h1>
                                    <p class="lead text-muted">
                                        Tire suas dúvidas sobre pedidos, entregas, pagamentos e trocas.
                                    </p>
                                </div>
                            </div>

                            <!-- Pesquisa Interna de Dúvidas -->
                            <div class="row mb-5">
                                <div class="col-md-8 col-lg-6 mx-auto">
                                    <div class="input-group search-form shadow-sm">
                                        <input type="text" id="faqSearch" class="form-control form-control-lg" placeholder="Digite sua dúvida (ex: entrega, reembolso)...">
                                        <button class="btn btn-primary px-4" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Accordion FAQ -->
                            <div class="row">
                                <div class="col-lg-10 mx-auto">
                                    <div class="accordion shadow-sm" id="accordionFAQ">

                                        <!-- Pergunta 1 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="bi bi-truck me-2 text-primary"></i> Qual é o prazo e o valor do frete?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body text-secondary">
                                                    O prazo de entrega e o valor do frete variam de acordo com a sua região e o tipo de envio escolhido na hora da compra. Você pode calcular o frete inserindo seu CEP na página do produto ou no carrinho. Lembra do benefício? Nas compras acima de R$ 199, o frete é <strong>grátis</strong> para todo o Brasil.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pergunta 2 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="bi bi-geo-alt me-2 text-primary"></i> Como posso rastrear meu pedido?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body text-secondary">
                                                    Assim que seu pedido for despachado, você receberá um e-mail com o código de rastreamento e o link da transportadora. Além disso, você pode acompanhar o status do pedido acessando a página <a href="rastrear-pedido" class="text-decoration-none">Rastrear pedido</a> no topo do nosso site.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pergunta 3 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="bi bi-credit-card me-2 text-primary"></i> Quais são as formas de pagamento aceitas?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body text-secondary">
                                                    Aceitamos pagamentos via <strong>Pix</strong> (com aprovação imediata e descontos especiais), <strong>Cartão de Crédito</strong> em até 12x (bandeiras Visa, Mastercard, Elo, Hipercard e Amex) e <strong>Boleto Bancário</strong> (com prazo de compensação de até 2 dias úteis).
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pergunta 4 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    <i class="bi bi-arrow-return-left me-2 text-primary"></i> Como funciona a política de trocas e devoluções?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body text-secondary">
                                                    Você tem até <strong>7 dias corridos</strong> após o recebimento do produto para solicitar a devolução por arrependimento ou troca, conforme o Código de Defesa do Consumidor. O produto deve estar em sua embalagem original, sem sinais de uso e acompanhado do manual/acessórios e nota fiscal.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pergunta 5 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    <i class="bi bi-shield-check me-2 text-primary"></i> Os produtos possuem garantia?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body text-secondary">
                                                    Sim! Todos os nossos produtos são novos, originais e acompanham garantia legal de 90 dias, além da garantia estendida oferecida diretamente pelos fabricantes em grande parte da nossa linha de tecnologia e informática.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pergunta 6 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    <i class="bi bi-lock me-2 text-primary"></i> É seguro comprar no site?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body text-secondary">
                                                    Totalmente seguro. Nosso site conta com certificado SSL de criptografia de dados, garantindo que todas as suas informações pessoais e financeiras trafeguem de forma confidencial e protegida.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Banner de Atendimento/Dúvidas não sanadas -->
                            <div class="row mt-5">
                                <div class="col-lg-10 mx-auto">
                                    <div class="p-4 p-md-5 bg-light rounded-3 text-center border benefit-box">
                                        <i class="bi bi-headset fs-1 text-primary mb-3 d-inline-block"></i>
                                        <h4 class="fw-bold">Ainda tem dúvidas?</h4>
                                        <p class="text-muted mb-4">Se não encontrou a resposta que procurava, nossa equipe está pronta para te atender.</p>
                                        <a href="https://wa.me/5511999999999" target="_blank" class="btn btn-primary btn-lg me-sm-2 mb-2 mb-sm-0">
                                            <i class="bi bi-whatsapp me-2"></i> Falar pelo WhatsApp
                                        </a>
                                        <a href="ajuda" class="btn btn-outline-secondary btn-lg mb-2 mb-sm-0">
                                            Central de Ajuda
                                        </a>
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