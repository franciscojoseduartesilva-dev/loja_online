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
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.08)!important;
        }

        /* Cards Gerais (Categorias e Produtos) */
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: 1px solid rgba(0,0,0,.08);
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
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

    
    <main class="py-5">
        <div class="container">
            <!-- Cabeçalho da Página -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="fw-bold mb-3">Fale Conosco</h1>
                    <p class="lead text-muted">
                        Tem alguma dúvida, sugestão ou precisa de ajuda com seu pedido? Envie uma mensagem ou entre em contato pelos nossos canais.
                    </p>
                </div>
            </div>

            <!-- Canais Rápidos de Contato -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-3 text-center h-100 border benefit-box">
                        <i class="bi bi-telephone-fill fs-1 text-primary mb-3 d-inline-block"></i>
                        <h5 class="fw-bold">Atendimento Telefônico</h5>
                        <p class="text-muted small mb-2">Segunda a Sexta, das 8h às 18h</p>
                        <a href="tel:11999999999" class="fw-bold text-decoration-none text-primary">(11) 99999-9999</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-3 text-center h-100 border benefit-box">
                        <i class="bi bi-whatsapp fs-1 text-success mb-3 d-inline-block"></i>
                        <h5 class="fw-bold">WhatsApp</h5>
                        <p class="text-muted small mb-2">Respostas rápidas em horário comercial</p>
                        <a href="https://wa.me/5511999999999" target="_blank" class="fw-bold text-decoration-none text-success">
                            Conversar no WhatsApp
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-light rounded-3 text-center h-100 border benefit-box">
                        <i class="bi bi-envelope-fill fs-1 text-primary mb-3 d-inline-block"></i>
                        <h5 class="fw-bold">E-mail</h5>
                        <p class="text-muted small mb-2">Respondemos em até 24 horas úteis</p>
                        <a href="mailto:contato@lojaonline.com.br" class="fw-bold text-decoration-none text-primary">contato@lojaonline.com.br</a>
                    </div>
                </div>
            </div>

            <!-- Formulário + Informações de Endereço -->
            <div class="row g-4">
                <!-- Formulário de Mensagem -->
                <div class="col-lg-7">
                    <div class="card shadow-sm border-0 p-4 p-md-5">
                        <h3 class="fw-bold mb-4"><i class="bi bi-send text-primary me-2"></i>Envie uma Mensagem</h3>
                        
                        <form action="fale-conosco/enviar" method="POST" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold">Nome Completo</label>
                                    <input type="text" class="form-control" id="name" name="nome" placeholder="Seu nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label fw-semibold">Telefone / WhatsApp</label>
                                    <input type="tel" class="form-control" id="phone" name="telefone" placeholder="(11) 99999-9999">
                                </div>
                                <div class="col-md-6">
                                    <label for="subject" class="form-label fw-semibold">Assunto</label>
                                    <select class="form-select" id="subject" name="assunto" required>
                                        <option value="" selected disabled>Selecione um assunto</option>
                                        <option value="duvida">Dúvidas sobre produtos</option>
                                        <option value="pedido">Informações sobre meu pedido</option>
                                        <option value="troca">Troca e Devolução</option>
                                        <option value="elogio_reclamacao">Elogio ou Reclamação</option>
                                        <option value="outro">Outros assuntos</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="order_number" class="form-label fw-semibold">Número do Pedido <span class="text-muted fw-normal">(Opcional)</span></label>
                                    <input type="text" class="form-control" id="order_number" name="pedido" placeholder="Ex: #10492">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label fw-semibold">Mensagem</label>
                                    <textarea class="form-control" id="message" name="mensagem" rows="5" placeholder="Escreva sua mensagem detalhadamente..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold">
                                        <i class="bi bi-send-fill me-2"></i>Enviar Mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Detalhes de Endereço e Horários -->
                <div class="col-lg-5">
                    <div class="card shadow-sm border-0 p-4 p-md-5 h-100 bg-light">
                        <h4 class="fw-bold mb-4">Nossa Sede</h4>
                        
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex mb-3">
                                <i class="bi bi-geo-alt-fill text-primary fs-5 me-3"></i>
                                <div>
                                    <strong>Endereço:</strong><br>
                                    <span class="text-secondary">Av. Paulista, 1000 - Bela Vista<br>São Paulo - SP, CEP: 01310-100</span>
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="bi bi-clock-fill text-primary fs-5 me-3"></i>
                                <div>
                                    <strong>Horário de Funcionamento:</strong><br>
                                    <span class="text-secondary">
                                        Segunda a Sexta: 08:00 às 18:00<br>
                                        Sábado: 09:00 às 13:00
                                    </span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="bi bi-building-fill text-primary fs-5 me-3"></i>
                                <div>
                                    <strong>CNPJ:</strong><br>
                                    <span class="text-secondary">00.000.000/0001-00</span>
                                </div>
                            </li>
                        </ul>

                        <hr class="my-4">

                        <h5 class="fw-bold mb-3">Localização</h5>
                        <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm border">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.098118833895!2d-46.65390548502213!3d-23.56309938468087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%201000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-100!5e0!3m2!1spt-BR!2sbr!4v1620000000000!5m2!1spt-BR!2sbr" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
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