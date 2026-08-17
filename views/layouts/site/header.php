<header class="sticky-top bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <a class="navbar-brand text-primary" href="">Loja Online</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos">Produtos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="categorias" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">

                            <?php foreach ($categorias as $categoria): ?>

                                <li>

                                    <a
                                        class="dropdown-item"
                                        href="<?=
                                                htmlspecialchars(
                                                    BASE_URL
                                                        . '/categorias?cat='
                                                        . urlencode(
                                                            $categoria['id_seguro']
                                                        ),
                                                    ENT_QUOTES,
                                                    'UTF-8'
                                                )
                                                ?>">

                                        <?=
                                        htmlspecialchars(
                                            $categoria['nome'],
                                            ENT_QUOTES,
                                            'UTF-8'
                                        )
                                        ?>

                                    </a>

                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ofertas">Ofertas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ajuda
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="ajuda">Central de ajuda</a></li>
                            <li><a class="dropdown-item" href="faq">Perguntas frequentes</a></li>
                            <li><a class="dropdown-item" href="rastrear-pedido">Rastrear pedido</a></li>
                            <li><a class="dropdown-item" href="trocas-devolucoes">Trocas e devoluções</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </hr>
                            <li><a class="dropdown-item" href="contato">Fale conosco</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Formulário de pesquisa -->
                <form class="d-flex me-lg-3 mb-3 mb-lg-0" role="search" method="get" action="buscar">
                    <div class="input-group">
                        <input class="form-control" type="search" name="q" placeholder="Pesquisar produtos..." aria-label="Pesquisar produtos" required>
                        <button class="btn btn-outline-primary" type="submit" aria-label="Buscar">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Menu da conta e Carrinho -->
                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-5 me-1"></i>
                            <span class="d-none d-xl-inline">Conta</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="cliente/login">Entrar</a></li>
                            <li><a class="dropdown-item" href="cliente/cadastro">Criar conta</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="cliente/pedidos">Meus pedidos</a></li>
                        </ul>
                    </div>

                    <a href="carrinho" class="btn btn-primary position-relative d-flex align-items-center" aria-label="Carrinho de compras">
                        <i class="bi bi-cart3 fs-5"></i>
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