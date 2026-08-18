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
                            <div class="row mb-5">
                                <div class="col-lg-8 mx-auto text-center">
                                    <h1 class="fw-bold mb-3">Política de Trocas e Devoluções</h1>
                                    <p class="lead text-muted">
                                        Entenda o passo a passo e as regras para trocar ou devolver o seu produto com facilidade.
                                    </p>
                                </div>
                            </div>

                            <!-- Regras Rápidas / Destaques -->
                            <div class="row g-4 mb-5">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded-3 text-center h-100 border benefit-box">
                                        <i class="bi bi-arrow-counterclockwise fs-1 text-primary mb-3 d-inline-block"></i>
                                        <h5 class="fw-bold">Arrependimento</h5>
                                        <p class="text-muted small mb-0">Até <strong>7 dias corridos</strong> após o recebimento para desistir da compra sem custos.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded-3 text-center h-100 border benefit-box">
                                        <i class="bi bi-shield-exclamation fs-1 text-primary mb-3 d-inline-block"></i>
                                        <h5 class="fw-bold">Defeito ou Avaria</h5>
                                        <p class="text-muted small mb-0">Até <strong>90 dias corridos</strong> de garantia legal para solicitar reparo ou substituição.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded-3 text-center h-100 border benefit-box">
                                        <i class="bi bi-box-seam fs-1 text-primary mb-3 d-inline-block"></i>
                                        <h5 class="fw-bold">Logística Reversa</h5>
                                        <p class="text-muted small mb-0">Enviamos um código de postagem para você devolver o item pelos Correios gratuitamente.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Passo a Passo para Troca ou Devolução -->
                            <div class="row mb-5">
                                <div class="col-lg-10 mx-auto">
                                    <div class="card shadow-sm border-0 p-4 p-md-5">
                                        <h3 class="fw-bold mb-4"><i class="bi bi-journal-check text-primary me-2"></i>Como solicitar a troca em 4 passos</h3>

                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="badge bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; min-width: 36px;">1</div>
                                                    <div>
                                                        <h6 class="fw-bold">Acesse a Central de Atendimento</h6>
                                                        <p class="text-muted small">Entre em contato via e-mail ou WhatsApp informando o número do pedido e o CPF do comprador.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="badge bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; min-width: 36px;">2</div>
                                                    <div>
                                                        <h6 class="fw-bold">Informe o Motivo</h6>
                                                        <p class="text-muted small">Descreva o motivo (arrependimento, tamanho, defeito) e envie fotos/vídeos se houver avaria.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="badge bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; min-width: 36px;">3</div>
                                                    <div>
                                                        <h6 class="fw-bold">Receba a Autorização de Postagem</h6>
                                                        <p class="text-muted small">Nossa equipe gerará um código de logística reversa para que você embale o produto e faça a postagem sem custo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="badge bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; min-width: 36px;">4</div>
                                                    <div>
                                                        <h6 class="fw-bold">Receba a Troca ou Reembolso</h6>
                                                        <p class="text-muted small">Após o recebimento e triagem no Centro de Distribuição, faremos o envio do novo produto ou o estorno do valor.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detalhes e Condições -->
                            <div class="row mb-5">
                                <div class="col-lg-10 mx-auto">
                                    <h4 class="fw-bold mb-3">Condições do Produto</h4>
                                    <p class="text-secondary">Para que a troca ou devolução seja aceita, certifique-se de que o produto cumpre os requisitos abaixo:</p>

                                    <ul class="list-group list-group-flush mb-4 shadow-sm rounded border">
                                        <li class="list-group-item py-3">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i> Estar acompanhado da <strong>Nota Fiscal</strong> (DANFE).
                                        </li>
                                        <li class="list-group-item py-3">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i> Estar em sua <strong>embalagem original</strong>, sem violação e sem sinais de uso.
                                        </li>
                                        <li class="list-group-item py-3">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i> Conter todos os <strong>manuais, cabos e acessórios</strong> inclusos na caixa.
                                        </li>
                                        <li class="list-group-item py-3">
                                            <i class="bi bi-check-circle-fill text-success me-2"></i> Lacre de segurança ou selo de garantia do fabricante intacto.
                                        </li>
                                    </ul>

                                    <h4 class="fw-bold mb-3">Prazos e Formas de Reembolso</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Forma de Pagamento Inicial</th>
                                                    <th>Forma de Reembolso</th>
                                                    <th>Prazo de Processamento</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-secondary">
                                                <tr>
                                                    <td><strong>Pix</strong></td>
                                                    <td>Transferência Pix para a mesma conta</td>
                                                    <td>Até 2 dias úteis após a análise do produto</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cartão de Crédito</strong></td>
                                                    <td>Estorno na fatura do cartão</td>
                                                    <td>Solicitado em até 3 dias úteis (pode constar em até 2 faturas)</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Boleto Bancário</strong></td>
                                                    <td>Depósito em conta corrente em nome do titular</td>
                                                    <td>Até 5 dias úteis após o envio dos dados bancários</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Solicitar Troca / Dúvidas -->
                            <div class="row">
                                <div class="col-lg-10 mx-auto">
                                    <div class="p-4 p-md-5 bg-light rounded-3 text-center border benefit-box">
                                        <i class="bi bi-headset fs-1 text-primary mb-3 d-inline-block"></i>
                                        <h4 class="fw-bold">Precisa solicitar uma troca agora?</h4>
                                        <p class="text-muted mb-4">Entre em contato direto com a nossa equipe de suporte e informe o número do seu pedido.</p>
                                        <a href="https://wa.me/5511999999999" target="_blank" class="btn btn-primary btn-lg me-sm-2 mb-2 mb-sm-0">
                                            <i class="bi bi-whatsapp me-2"></i> Iniciar Troca no WhatsApp
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