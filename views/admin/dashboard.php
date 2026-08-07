<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Configurações -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/loja_online/public/">
    <title>Dashboard Administrativo | Loja Online</title>
    <meta name="description" content="Painel administrativo da Loja Online para gerenciamento de produtos, clientes, pedidos, pagamentos e estoque.">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <style>
        :root {
            --sidebar-width: 260px;
            --sidebar-bg: #1e293b;
            --sidebar-color: #cbd5e1;
            --sidebar-hover-bg: #334155;
            --sidebar-active-bg: #0d6efd;
            --sidebar-active-color: #ffffff;
            --topbar-height: 70px;
            --body-bg: #f8fafc;
        }

        body {
            background-color: var(--body-bg);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #334155;
        }

        /* Menu lateral fixo para desktop */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--sidebar-bg);
            color: var(--sidebar-color);
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .sidebar-brand {
            height: var(--topbar-height);
            display: flex;
            align-items: center;
            padding: 0 1.25rem;
            background-color: #0f172a;
            color: #ffffff;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            gap: 0.75rem;
        }

        .sidebar-brand i {
            font-size: 1.5rem;
            color: #38bdf8;
        }

        .sidebar-brand span {
            font-size: 0.75rem;
            display: block;
            color: #94a3b8;
            font-weight: normal;
        }

        .sidebar-menu {
            overflow-y: auto;
            flex: 1;
            padding: 1rem 0.75rem;
        }

        .sidebar-heading {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
            padding: 0.75rem 0.75rem 0.375rem 0.75rem;
            font-weight: 700;
        }

        .sidebar-menu .nav-link {
            color: var(--sidebar-color);
            padding: 0.625rem 0.75rem;
            border-radius: 0.375rem;
            margin-bottom: 0.25rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.925rem;
            transition: background-color 0.2s, color 0.2s;
        }

        .sidebar-menu .nav-link:hover {
            background-color: var(--sidebar-hover-bg);
            color: #ffffff;
        }

        .sidebar-menu .nav-link.active {
            background-color: var(--sidebar-active-bg);
            color: var(--sidebar-active-color);
            font-weight: 500;
        }

        .sidebar-menu .nav-link i {
            font-size: 1.1rem;
        }

        .sidebar-footer {
            padding: 1rem;
            background-color: #0f172a;
            border-top: 1px solid #334155;
        }

        .sidebar-footer a,
        .sidebar-footer button {
            color: #cbd5e1;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            width: 100%;
            background: none;
            border: none;
            padding: 0.5rem 0;
            text-align: left;
            transition: color 0.2s;
        }

        .sidebar-footer a:hover,
        .sidebar-footer button:hover {
            color: #ffffff;
        }

        /* Área principal e barra superior */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        @media (max-width: 991.98px) {
            .main-wrapper {
                margin-left: 0;
            }
        }

        .topbar {
            height: var(--topbar-height);
            background-color: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .topbar-search input {
            border-radius: 2rem;
            padding-left: 2.5rem;
            background-color: #f1f5f9;
            border: 1px solid #cbd5e1;
            font-size: 0.9rem;
            width: 280px;
            transition: all 0.2s;
        }

        @media (max-width: 575.98px) {
            .topbar-search input {
                width: 180px;
            }
        }

        .topbar-search input:focus {
            background-color: #ffffff;
            border-color: #0d6efd;
            box-shadow: none;
            width: 320px;
        }

        .topbar-search-icon {
            position: absolute;
            left: 0.85rem;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
        }

        /* Cards e Painéis */
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.04);
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .stat-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            font-size: 1.5rem;
        }

        .quick-access-card {
            transition: all 0.2s ease;
            text-decoration: none;
            color: inherit;
            display: block;
            height: 100%;
        }

        .quick-access-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.4rem 0.8rem rgba(0, 0, 0, 0.06);
            background-color: #f8fafc;
        }

        /* Tabelas */
        .table-custom th {
            font-weight: 600;
            color: #475569;
            background-color: #f8fafc;
            border-bottom-width: 1px;
        }

        .table-custom td {
            vertical-align: middle;
            color: #334155;
        }

        /* Rodapé */
        .footer {
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 1.25rem 0;
            color: #64748b;
            font-size: 0.875rem;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Segurança:
         - A página deverá ser convertida para dashboard.php.
         - O administrador deverá estar autenticado antes de acessar.
         - Os números do dashboard deverão vir do banco de dados.
         - O formulário de saída deverá receber um token CSRF.
         - O acesso deve ocorrer pela rota, e não diretamente pelo arquivo dentro de views.
    -->

    <!-- Menu lateral (Desktop) -->
    <aside class="sidebar d-none d-lg-flex" aria-label="Menu principal">
        <a href="admin" class="sidebar-brand">
            <i class="bi bi-shop"></i>
            <div>
                Loja Online
                <span>Painel administrativo</span>
            </div>
        </a>
        <nav class="sidebar-menu">
            <div class="sidebar-heading">Visão geral</div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="admin"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/relatorios"><i class="bi bi-bar-chart-line"></i> Relatórios</a></li>
            </ul>

            <div class="sidebar-heading">Cadastros</div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="admin/produtos"><i class="bi bi-box-seam"></i> Produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/categorias"><i class="bi bi-tags"></i> Categorias</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/clientes"><i class="bi bi-people"></i> Clientes</a></li>
            </ul>

            <div class="sidebar-heading">Vendas</div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="admin/pedidos"><i class="bi bi-cart-check"></i> Pedidos</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/pagamentos"><i class="bi bi-credit-card"></i> Pagamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/carrinhos"><i class="bi bi-cart-dash"></i> Carrinhos ativos</a></li>
            </ul>

            <div class="sidebar-heading">Controle</div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="admin/estoque"><i class="bi bi-archive"></i> Estoque</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/notificacoes"><i class="bi bi-bell"></i> Notificações</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/contatos"><i class="bi bi-chat-left-text"></i> Contatos</a></li>
                <li class="nav-item"><a class="nav-link" href="admin/configuracoes"><i class="bi bi-gear"></i> Configurações</a></li>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <a href="" target="_blank" class="mb-2">
                <i class="bi bi-box-arrow-up-right"></i> Visualizar loja
            </a>
            <!-- O formulário de saída deverá receber um token CSRF posteriormente -->
            <form action="admin/sair" method="post">
                <button type="submit">
                    <i class="bi bi-box-arrow-left"></i> Sair do sistema
                </button>
            </form>
        </div>
    </aside>

    <!-- Menu móvel (Offcanvas para celulares e tablets) -->
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel" aria-hidden="true">
        <div class="offcanvas-header border-bottom border-secondary">
            <h5 class="offcanvas-title d-flex align-items-center gap-2" id="mobileSidebarLabel">
                <i class="bi bi-shop text-info"></i> Loja Online
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fechar menu"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="sidebar-menu">
                <div class="sidebar-heading text-secondary">Visão geral</div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-light" href="admin"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/relatorios"><i class="bi bi-bar-chart-line"></i> Relatórios</a></li>
                </ul>

                <div class="sidebar-heading text-secondary">Cadastros</div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-light" href="admin/produtos"><i class="bi bi-box-seam"></i> Produtos</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/categorias"><i class="bi bi-tags"></i> Categorias</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/clientes"><i class="bi bi-people"></i> Clientes</a></li>
                </ul>

                <div class="sidebar-heading text-secondary">Vendas</div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-light" href="admin/pedidos"><i class="bi bi-cart-check"></i> Pedidos</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/pagamentos"><i class="bi bi-credit-card"></i> Pagamentos</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/carrinhos"><i class="bi bi-cart-dash"></i> Carrinhos ativos</a></li>
                </ul>

                <div class="sidebar-heading text-secondary">Controle</div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-light" href="admin/estoque"><i class="bi bi-archive"></i> Estoque</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/notificacoes"><i class="bi bi-bell"></i> Notificações</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/contatos"><i class="bi bi-chat-left-text"></i> Contatos</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="admin/configuracoes"><i class="bi bi-gear"></i> Configurações</a></li>
                </ul>
            </nav>
            <div class="p-3 border-top border-secondary bg-black">
                <a href="" target="_blank" class="text-light text-decoration-none d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-box-arrow-up-right"></i> Visualizar loja
                </a>
                <form action="admin/sair" method="post">
                    <button type="submit" class="btn btn-outline-danger w-100 btn-sm d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-box-arrow-left"></i> Sair do sistema
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Wrapper Principal -->
    <div class="main-wrapper">
        <!-- Barra superior -->
        <?php require_once APP_ROOT . '/views/admin/layouts/header.php'; ?>

        <!-- Área principal -->
        <main class="container-fluid p-4">
            
            <!-- Cabeçalho da página -->
            <?php require_once APP_ROOT . '/views/admin/componentes/sections/cabeçalhodapagina.php'; ?>
            <!-- Cards de indicadores -->
            <?php require_once APP_ROOT . '/views/admin/componentes/sections/cardsdeindicadores.php'; ?>
            <!-- Acessos rápidos -->
            <?php require_once APP_ROOT . '/views/admin/componentes/sections/acessosrapidos.php'; ?>

            <!-- Grid de Tabelas e Painéis (Linha 1: Pedidos recentes e Estoque baixo) -->
            <div class="row g-4 mb-4">
                <!-- Pedidos recentes -->
                <?php require_once APP_ROOT . '/views/admin/componentes/sections/pedidosrecentes.php'; ?>
                <!-- Produtos com estoque baixo -->
                <?php require_once APP_ROOT . '/views/admin/componentes/sections/produtoscomestoquebaixo.php'; ?>
            </div>

            <!-- Grid de Painéis (Linha 2: Notificações e Resumo operacional) -->
            <div class="row g-4">
                <!-- Painel de Notificações -->
                <?php require_once APP_ROOT . '/views/admin/componentes/sections/paineldenotificações.php'; ?>
                <!-- Resumo operacional -->
                <?php require_once APP_ROOT . '/views/admin/componentes/sections/Resumooperacional.php'; ?>
            </div>

        </main>

        <!-- Rodapé administrativo -->
        <?php require_once APP_ROOT . '/views/admin/layouts/footer.php'; ?>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript personalizado -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Atualizar automaticamente o ano no rodapé
            const yearElement = document.getElementById("currentYear");
            if (yearElement) {
                yearElement.textContent = new Date().getFullYear();
            }

            // Identificar a rota atual e destacar o link ativo do menu
            const currentPath = window.location.pathname.replace(/^\/loja_online\/public\/?/, "");
            const menuLinks = document.querySelectorAll(".sidebar-menu .nav-link");

            menuLinks.forEach(link => {
                const linkHref = link.getAttribute("href");
                if (linkHref === currentPath || (currentPath === "" && linkHref === "admin")) {
                    link.classList.add("active");
                } else if (currentPath.startsWith(linkHref) && linkHref !== "admin") {
                    link.classList.add("active");
                }
            });
        });
    </script>
</body>
</html>