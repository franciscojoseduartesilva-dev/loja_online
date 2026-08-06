<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrativo | Loja Online</title>
    <meta name="description" content="Painel administrativo da Loja Online para gerenciamento de produtos, clientes, pedidos, pagamentos e estoque.">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Base URL -->
    <base href="/loja_online/public/">

    <!-- Bootstrap 5.3.8 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- CSS Personalizado -->
    <style>
        :root {
            --sidebar-width: 260px;
            --primary-color: #0d6efd;
            --dark-bg: #1e293b;
            --dark-sidebar: #0f172a;
            --body-bg: #f8fafc;
        }

        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: var(--body-bg);
            color: #334155;
            overflow-x: hidden;
        }

        /* Sidebar Desktop */
        .sidebar-desktop {
            width: var(--sidebar-width);
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            background-color: var(--dark-sidebar);
            color: #94a3b8;
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar-desktop .sidebar-brand {
            padding: 1.25rem 1.5rem;
            background-color: rgba(0, 0, 0, 0.2);
            color: #fff;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .sidebar-desktop .nav-section-title {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
            padding: 1rem 1.5rem 0.5rem;
            color: #64748b;
            font-weight: 600;
        }

        .sidebar-desktop .nav-link {
            color: #94a3b8;
            padding: 0.65rem 1.5rem;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }

        .sidebar-desktop .nav-link i {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        .sidebar-desktop .nav-link:hover,
        .sidebar-desktop .nav-link.active {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .sidebar-desktop .nav-link.active {
            border-left: 4px solid var(--primary-color);
        }

        /* Conteúdo Principal */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        @media (max-width: 991.98px) {
            .sidebar-desktop {
                display: none;
            }
            .main-content {
                margin-left: 0;
            }
        }

        /* Barra Superior */
        .top-navbar {
            background-color: #fff;
            border-bottom: 1px solid #e2e8f0;
            height: 70px;
        }

        /* Cards e Painéis */
        .card {
            border: 1px solid #e2e8f0;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.02), 0 1px 2px 0 rgba(0, 0, 0, 0.02);
            border-radius: 0.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-indicator:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }

        .quick-access-card {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .quick-access-card .card:hover {
            border-color: var(--primary-color);
            background-color: #f1f5f9;
        }

        /* Tabelas */
        .table-responsive {
            background: #fff;
            border-radius: 0.5rem;
        }

        .table th {
            font-weight: 600;
            color: #475569;
            background-color: #f8fafc;
        }

        /* Badges customizados para status */
        .badge-status {
            font-weight: 500;
            padding: 0.35em 0.65em;
        }

        /* Rodapé Administrativo */
        footer {
            background-color: #fff;
            border-top: 1px solid #e2e8f0;
            color: #64748b;
        }
    </style>
</head>
<body>

    <!-- Segurança:
        - A página deverá ser convertida para dashboard.php
        - O administrador deverá estar autenticado antes de acessar
        - Os números do dashboard deverão vir do banco de dados
        - O formulário de saída deverá receber um token CSRF
        - O acesso deve ocorrer pela rota, e não diretamente pelo arquivo dentro de views
    -->

    <!-- Menu lateral (Desktop) -->
    <aside class="sidebar-desktop d-none d-lg-block">
        <div class="sidebar-brand d-flex align-items-center">
            <i class="bi bi-shop fs-4 me-2 text-primary"></i>
            <div>
                <div class="lh-sm">Loja Online</div>
                <small class="text-muted fw-normal" style="font-size: 0.75rem;">Painel administrativo</small>
            </div>
        </div>

        <nav class="nav flex-column py-3">
            <div class="nav-section-title">Visão geral</div>
            <a class="nav-link" href="admin"><i class="bi bi-speedometer2"></i> Dashboard</a>
            <a class="nav-link" href="admin/relatorios"><i class="bi bi-bar-chart-line"></i> Relatórios</a>

            <div class="nav-section-title">Cadastros</div>
            <a class="nav-link" href="admin/produtos"><i class="bi bi-box-seam"></i> Produtos</a>
            <a class="nav-link" href="admin/categorias"><i class="bi bi-tags"></i> Categorias</a>
            <a class="nav-link" href="admin/clientes"><i class="bi bi-people"></i> Clientes</a>

            <div class="nav-section-title">Vendas</div>
            <a class="nav-link" href="admin/pedidos"><i class="bi bi-cart-check"></i> Pedidos</a>
            <a class="nav-link" href="admin/pagamentos"><i class="bi bi-credit-card"></i> Pagamentos</a>
            <a class="nav-link" href="admin/carrinhos"><i class="bi bi-cart"></i> Carrinhos ativos</a>

            <div class="nav-section-title">Controle</div>
            <a class="nav-link" href="admin/estoque"><i class="bi bi-boxes"></i> Estoque</a>
            <a class="nav-link" href="admin/notificacoes"><i class="bi bi-bell"></i> Notificações</a>
            <a class="nav-link" href="admin/contatos"><i class="bi bi-chat-left-text"></i> Contatos</a>
            <a class="nav-link" href="admin/configuracoes"><i class="bi bi-gear"></i> Configurações</a>
        </nav>

        <div class="px-3 py-3 mt-auto border-top border-secondary border-opacity-25">
            <a href="" target="_blank" class="nav-link px-0 text-muted mb-2">
                <i class="bi bi-box-arrow-up-right me-2"></i> Visualizar loja
            </a>
            <!-- Como o arquivo ainda será HTML, token CSRF será acrescentado na conversão para PHP -->
            <form action="admin/sair" method="post" class="m-0">
                <button type="submit" class="btn btn-outline-danger btn-sm w-100 text-start d-flex align-items-center justify-content-between">
                    <span>Sair do sistema</span>
                    <i class="bi bi-box-arrow-right"></i>
                </button>
            </form>
        </div>
    </aside>

    <!-- Menu móvel (Offcanvas Bootstrap) -->
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
        <div class="offcanvas-header border-bottom border-secondary">
            <h5 class="offcanvas-title d-flex align-items-center" id="mobileSidebarLabel">
                <i class="bi bi-shop text-primary me-2"></i> Loja Online
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="nav flex-column py-3">
                <div class="nav-section-title text-muted px-3">Visão geral</div>
                <a class="nav-link text-white py-2 px-3" href="admin"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                <a class="nav-link text-white py-2 px-3" href="admin/relatorios"><i class="bi bi-bar-chart-line me-2"></i> Relatórios</a>

                <div class="nav-section-title text-muted px-3 mt-2">Cadastros</div>
                <a class="nav-link text-white py-2 px-3" href="admin/produtos"><i class="bi bi-box-seam me-2"></i> Produtos</a>
                <a class="nav-link text-white py-2 px-3" href="admin/categorias"><i class="bi bi-tags me-2"></i> Categorias</a>
                <a class="nav-link text-white py-2 px-3" href="admin/clientes"><i class="bi bi-people me-2"></i> Clientes</a>

                <div class="nav-section-title text-muted px-3 mt-2">Vendas</div>
                <a class="nav-link text-white py-2 px-3" href="admin/pedidos"><i class="bi bi-cart-check me-2"></i> Pedidos</a>
                <a class="nav-link text-white py-2 px-3" href="admin/pagamentos"><i class="bi bi-credit-card me-2"></i> Pagamentos</a>
                <a class="nav-link text-white py-2 px-3" href="admin/carrinhos"><i class="bi bi-cart me-2"></i> Carrinhos ativos</a>

                <div class="nav-section-title text-muted px-3 mt-2">Controle</div>
                <a class="nav-link text-white py-2 px-3" href="admin/estoque"><i class="bi bi-boxes me-2"></i> Estoque</a>
                <a class="nav-link text-white py-2 px-3" href="admin/notificacoes"><i class="bi bi-bell me-2"></i> Notificações</a>
                <a class="nav-link text-white py-2 px-3" href="admin/contatos"><i class="bi bi-chat-left-text me-2"></i> Contatos</a>
                <a class="nav-link text-white py-2 px-3" href="admin/configuracoes"><i class="bi bi-gear me-2"></i> Configurações</a>
            </nav>
            <div class="p-3 border-top border-secondary mt-3">
                <a href="" target="_blank" class="text-white text-decoration-none d-block mb-3">
                    <i class="bi bi-box-arrow-up-right me-2"></i> Visualizar loja
                </a>
                <form action="admin/sair" method="post">
                    <button type="submit" class="btn btn-danger btn-sm w-100">
                        <i class="bi bi-box-arrow-right me-1"></i> Sair do sistema
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Área Principal -->
    <div class="main-content">
        <!-- Barra superior -->

        header aqui 

        <!-- Conteúdo do Dashboard -->
        <main class="container-fluid p-4">
            
            <!-- Cabeçalho da página -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                <div>
                    <h1 class="h3 fw-bold mb-1">Dashboard administrativo</h1>
                    <p class="text-muted mb-0 small">Acompanhe os principais dados e acesse os módulos da loja.</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="" target="_blank" class="btn btn-outline-secondary btn-sm d-flex align-items-center">
                        <i class="bi bi-box-arrow-up-right me-1"></i> Ver loja
                    </a>
                    <a href="admin/produtos/novo" class="btn btn-primary btn-sm d-flex align-items-center">
                        <i class="bi bi-plus-lg me-1"></i> Novo produto
                    </a>
                </div>
            </div>

            <!-- Cards de indicadores -->
            <div class="row g-3 mb-4">
                <!-- 1. Produtos cadastrados -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/produtos" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Produtos cadastrados</span>
                                    <h3 class="h4 fw-bold mb-0 text-dark mt-1">248</h3>
                                </div>
                                <div class="fs-2 text-primary bg-primary bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-success small"><i class="bi bi-arrow-up-short"></i> +12 este mês</div>
                        </div>
                    </a>
                </div>

                <!-- 2. Clientes cadastrados -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/clientes" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Clientes cadastrados</span>
                                    <h3 class="h4 fw-bold mb-0 text-dark mt-1">1.084</h3>
                                </div>
                                <div class="fs-2 text-success bg-success bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-success small"><i class="bi bi-arrow-up-short"></i> +45 novos</div>
                        </div>
                    </a>
                </div>

                <!-- 3. Pedidos pendentes -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/pedidos" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Pedidos pendentes</span>
                                    <h3 class="h4 fw-bold mb-0 text-dark mt-1">32</h3>
                                </div>
                                <div class="fs-2 text-warning bg-warning bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-cart-check"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-muted small">Aguardando ação</div>
                        </div>
                    </a>
                </div>

                <!-- 4. Estoque baixo -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/estoque?filtro=baixo" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Estoque baixo</span>
                                    <h3 class="h4 fw-bold mb-0 text-danger mt-1">14</h3>
                                </div>
                                <div class="fs-2 text-danger bg-danger bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-danger small">Requer reposição</div>
                        </div>
                    </a>
                </div>

                <!-- 5. Carrinhos ativos -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/carrinhos" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Carrinhos ativos</span>
                                    <h3 class="h4 fw-bold mb-0 text-dark mt-1">46</h3>
                                </div>
                                <div class="fs-2 text-info bg-info bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-cart"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-muted small">Últimas 24 horas</div>
                        </div>
                    </a>
                </div>

                <!-- 6. Pagamentos confirmados -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/pagamentos" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Pagamentos confirmados</span>
                                    <h3 class="h4 fw-bold mb-0 text-dark mt-1">R$ 28.640</h3>
                                </div>
                                <div class="fs-2 text-success bg-success bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-success small"><i class="bi bi-arrow-up-short"></i> +8.4% vs ontem</div>
                        </div>
                    </a>
                </div>

                <!-- 7. Notificações -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/notificacoes" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Notificações</span>
                                    <h3 class="h4 fw-bold mb-0 text-dark mt-1">5</h3>
                                </div>
                                <div class="fs-2 text-secondary bg-secondary bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-bell"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-muted small">Não lidas</div>
                        </div>
                    </a>
                </div>

                <!-- 8. Contatos recebidos -->
                <div class="col-sm-6 col-xl-3">
                    <a href="admin/contatos" class="text-decoration-none">
                        <div class="card card-indicator h-100 p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small">Contatos recebidos</span>
                                    <h3 class="h4 fw-bold mb-0 text-dark mt-1">18</h3>
                                </div>
                                <div class="fs-2 text-primary bg-primary bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-chat-left-text"></i>
                                </div>
                            </div>
                            <div class="mt-2 text-muted small">Pendentes de resposta</div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Acessos rápidos -->
            <section class="mb-4">
                <h2 class="h5 fw-bold mb-3">Acessos rápidos</h2>
                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="admin/produtos" class="quick-access-card">
                            <div class="card text-center p-3 h-100">
                                <i class="bi bi-box-seam text-primary fs-3 mb-2"></i>
                                <h3 class="h6 fw-bold mb-1">Produtos</h3>
                                <p class="text-muted small mb-0 d-none d-md-block">Gerenciar itens</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="admin/clientes" class="quick-access-card">
                            <div class="card text-center p-3 h-100">
                                <i class="bi bi-people text-success fs-3 mb-2"></i>
                                <h3 class="h6 fw-bold mb-1">Clientes</h3>
                                <p class="text-muted small mb-0 d-none d-md-block">Base cadastrada</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="admin/pedidos" class="quick-access-card">
                            <div class="card text-center p-3 h-100">
                                <i class="bi bi-cart-check text-warning fs-3 mb-2"></i>
                                <h3 class="h6 fw-bold mb-1">Pedidos</h3>
                                <p class="text-muted small mb-0 d-none d-md-block">Acompanhar vendas</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="admin/pagamentos" class="quick-access-card">
                            <div class="card text-center p-3 h-100">
                                <i class="bi bi-credit-card text-info fs-3 mb-2"></i>
                                <h3 class="h6 fw-bold mb-1">Pagamentos</h3>
                                <p class="text-muted small mb-0 d-none d-md-block">Transações</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="admin/estoque" class="quick-access-card">
                            <div class="card text-center p-3 h-100">
                                <i class="bi bi-boxes text-danger fs-3 mb-2"></i>
                                <h3 class="h6 fw-bold mb-1">Estoque</h3>
                                <p class="text-muted small mb-0 d-none d-md-block">Níveis de itens</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="admin/relatorios" class="quick-access-card">
                            <div class="card text-center p-3 h-100">
                                <i class="bi bi-bar-chart-line text-secondary fs-3 mb-2"></i>
                                <h3 class="h6 fw-bold mb-1">Relatórios</h3>
                                <p class="text-muted small mb-0 d-none d-md-block">Dados e métricas</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <div class="row g-4">
                <!-- Pedidos recentes -->
                <div class="col-lg-8">
                    <div class="card h-100 p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h5 fw-bold mb-0">Pedidos recentes</h2>
                            <a href="admin/pedidos" class="btn btn-sm btn-outline-primary">Ver todos</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0 small">
                                <caption>Lista dos últimos pedidos realizados na loja</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Pedido</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="text-end">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>#1058</strong></td>
                                        <td>Mariana Alves</td>
                                        <td>05/08/2026</td>
                                        <td>R$ 1.249,90</td>
                                        <td><span class="badge bg-warning text-dark badge-status">Aguardando</span></td>
                                        <td class="text-end">
                                            <a href="admin/pedidos/1058" class="btn btn-sm btn-outline-secondary" aria-label="Visualizar pedido 1058"><i class="bi bi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#1057</strong></td>
                                        <td>Carlos Eduardo</td>
                                        <td>05/08/2026</td>
                                        <td>R$ 299,00</td>
                                        <td><span class="badge bg-success badge-status">Pago</span></td>
                                        <td class="text-end">
                                            <a href="admin/pedidos/1057" class="btn btn-sm btn-outline-secondary" aria-label="Visualizar pedido 1057"><i class="bi bi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#1056</strong></td>
                                        <td>Ana Paula Souza</td>
                                        <td>04/08/2026</td>
                                        <td>R$ 3.499,00</td>
                                        <td><span class="badge bg-info text-dark badge-status">Em separação</span></td>
                                        <td class="text-end">
                                            <a href="admin/pedidos/1056" class="btn btn-sm btn-outline-secondary" aria-label="Visualizar pedido 1056"><i class="bi bi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#1055</strong></td>
                                        <td>Lucas Martins</td>
                                        <td>04/08/2026</td>
                                        <td>R$ 189,00</td>
                                        <td><span class="badge bg-primary badge-status">Enviado</span></td>
                                        <td class="text-end">
                                            <a href="admin/pedidos/1055" class="btn btn-sm btn-outline-secondary" aria-label="Visualizar pedido 1055"><i class="bi bi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>#1054</strong></td>
                                        <td>Beatriz Lima</td>
                                        <td>03/08/2026</td>
                                        <td>R$ 899,00</td>
                                        <td><span class="badge bg-secondary badge-status">Entregue</span></td>
                                        <td class="text-end">
                                            <a href="admin/pedidos/1054" class="btn btn-sm btn-outline-secondary" aria-label="Visualizar pedido 1054"><i class="bi bi-eye"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Produtos com estoque baixo -->
                <div class="col-lg-4">
                    <div class="card h-100 p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h5 fw-bold mb-0">Produtos com estoque baixo</h2>
                            <a href="admin/estoque?filtro=baixo" class="btn btn-sm btn-outline-danger">Ver estoque</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0 small">
                                <caption>Relação de produtos com nível de estoque crítico ou baixo</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Produto</th>
                                        <th scope="col" class="text-center">Atual</th>
                                        <th scope="col" class="text-center">Mín.</th>
                                        <th scope="col" class="text-end">Situação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mouse sem fio</td>
                                        <td class="text-center fw-bold text-danger">2</td>
                                        <td class="text-center">10</td>
                                        <td class="text-end"><span class="badge bg-danger badge-status">Crítico</span></td>
                                    </tr>
                                    <tr>
                                        <td>Teclado Mecânico RGB</td>
                                        <td class="text-center fw-bold text-warning">4</td>
                                        <td class="text-center">8</td>
                                        <td class="text-end"><span class="badge bg-warning text-dark badge-status">Baixo</span></td>
                                    </tr>
                                    <tr>
                                        <td>Headset Gamer Pro</td>
                                        <td class="text-center fw-bold text-warning">3</td>
                                        <td class="text-center">10</td>
                                        <td class="text-end"><span class="badge bg-warning text-dark badge-status">Baixo</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cabo HDMI 2.0</td>
                                        <td class="text-center fw-bold text-danger">1</td>
                                        <td class="text-center">15</td>
                                        <td class="text-end"><span class="badge bg-danger badge-status">Crítico</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-1">
                <!-- Painel de notificações -->
                <div class="col-lg-6">
                    <div class="card h-100 p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h5 fw-bold mb-0">Notificações</h2>
                            <a href="admin/notificacoes" class="btn btn-sm btn-outline-secondary">Ver todas</a>
                        </div>
                        <div class="list-group list-group-flush small">
                            <a href="admin/produtos/mouse-sem-fio" class="list-group-item list-group-item-action d-flex align-items-start py-3">
                                <div class="fs-4 text-danger me-3"><i class="bi bi-exclamation-triangle-fill"></i></div>
                                <div>
                                    <div class="fw-bold text-dark">Produto com estoque crítico</div>
                                    <p class="mb-1 text-muted">O produto "Mouse sem fio" atingiu o estoque crítico (2 unidades restantes).</p>
                                    <small class="text-muted">Há 10 minutos</small>
                                </div>
                            </a>
                            <a href="admin/pedidos/1058" class="list-group-item list-group-item-action d-flex align-items-start py-3">
                                <div class="fs-4 text-warning me-3"><i class="bi bi-clock-fill"></i></div>
                                <div>
                                    <div class="fw-bold text-dark">Pagamento aguardando confirmação</div>
                                    <p class="mb-1 text-muted">Pedido #1058 gerado via Boleto Bancário aguardando compensação.</p>
                                    <small class="text-muted">Há 45 minutos</small>
                                </div>
                            </a>
                            <a href="admin/contatos" class="list-group-item list-group-item-action d-flex align-items-start py-3">
                                <div class="fs-4 text-primary me-3"><i class="bi bi-chat-fill"></i></div>
                                <div>
                                    <div class="fw-bold text-dark">Nova mensagem de contato</div>
                                    <p class="mb-1 text-muted">Cliente enviou dúvida sobre prazos de entrega para a região Sul.</p>
                                    <small class="text-muted">Há 2 horas</small>
                                </div>
                            </a>
                            <a href="admin/pedidos" class="list-group-item list-group-item-action d-flex align-items-start py-3 border-bottom-0">
                                <div class="fs-4 text-info me-3"><i class="bi bi-box-seam-fill"></i></div>
                                <div>
                                    <div class="fw-bold text-dark">Pedido aguardando separação</div>
                                    <p class="mb-1 text-muted">O pedido #1057 teve o pagamento confirmado e está pronto para separação.</p>
                                    <small class="text-muted">Há 3 horas</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Resumo operacional -->
                <div class="col-lg-6">
                    <div class="card h-100 p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h5 fw-bold mb-0">Resumo operacional</h2>
                            <a href="admin/relatorios" class="btn btn-sm btn-primary">Acessar relatórios</a>
                        </div>
                        <div class="card-body p-0 d-flex flex-column justify-content-around">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between small fw-semibold mb-1">
                                    <span>Pedidos processados</span>
                                    <span>74%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 74%;" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between small fw-semibold mb-1">
                                    <span>Pagamentos confirmados</span>
                                    <span>86%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between small fw-semibold mb-1">
                                    <span>Mensagens respondidas</span>
                                    <span>63%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 63%;" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="d-flex justify-content-between small fw-semibold mb-1">
                                    <span>Pedidos enviados</span>
                                    <span>70%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- Rodapé administrativo -->
        footer
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- JavaScript puro -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Atualizar o ano do rodapé automaticamente
            const yearSpan = document.getElementById("currentYear");
            if (yearSpan) {
                yearSpan.textContent = new Date().getFullYear();
            }

            // Identificar a rota atual e destacar o link ativo do menu
            const currentPath = window.location.pathname;
            const sidebarLinks = document.querySelectorAll(".sidebar-desktop .nav-link");
            
            sidebarLinks.forEach(link => {
                const hrefAttr = link.getAttribute("href");
                // Se a rota bater exatamente ou for o dashboard base
                if (hrefAttr !== "" && currentPath.includes(hrefAttr)) {
                    sidebarLinks.forEach(l => l.classList.remove("active"));
                    link.classList.add("active");
                }
            });
        });
    </script>
</body>
</html>