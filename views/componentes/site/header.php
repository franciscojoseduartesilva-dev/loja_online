<?php
declare(strict_types=1);

// Inicialização e tratamento das variáveis com fallback seguro
$quantidadeCarrinho = isset($quantidadeCarrinho) ? max(0, (int) $quantidadeCarrinho) : 0;
$tituloHeader       = $tituloHeader ?? 'Loja Online';
$textoHeader        = $textoHeader ?? 'Produtos selecionados para você.';
$baseUrl            = defined('BASE_URL') ? BASE_URL : '';
$categorias         = $categorias ?? [];
?>

<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm" aria-label="Menu principal">
        <div class="container py-2">

            <a class="navbar-brand fw-bold fs-4 text-primary" href="<?= htmlspecialchars($baseUrl ?: './', ENT_QUOTES, 'UTF-8'); ?>">
                🛍️ <?= htmlspecialchars($tituloHeader, ENT_QUOTES, 'UTF-8'); ?>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Abrir ou fechar o menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= htmlspecialchars($baseUrl ?: './', ENT_QUOTES, 'UTF-8'); ?>">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= htmlspecialchars($baseUrl . '/produtos', ENT_QUOTES, 'UTF-8'); ?>">Produtos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorias
                        </a>

                        <ul class="dropdown-menu">
                            <?php foreach ($categorias as $categoria): ?>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="<?= htmlspecialchars($baseUrl . '/categorias?cat=' . urlencode((string)($categoria['id_seguro'] ?? '')), ENT_QUOTES, 'UTF-8'); ?>">
                                        <?= htmlspecialchars($categoria['nome'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/categoria', ENT_QUOTES, 'UTF-8'); ?>">Ver todas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= htmlspecialchars($baseUrl . '/ofertas', ENT_QUOTES, 'UTF-8'); ?>">Ofertas</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ajuda
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/ajuda/central', ENT_QUOTES, 'UTF-8'); ?>">Central de ajuda</a></li>
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/ajuda/perguntas', ENT_QUOTES, 'UTF-8'); ?>">Perguntas frequentes</a></li>
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/ajuda/rastreio', ENT_QUOTES, 'UTF-8'); ?>">Rastrear pedido</a></li>
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/ajuda/trocas', ENT_QUOTES, 'UTF-8'); ?>">Trocas e devoluções</a></li>
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/ajuda/contato', ENT_QUOTES, 'UTF-8'); ?>">Fale conosco</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-2">
                    <form class="d-flex" action="<?= htmlspecialchars($baseUrl . '/buscar', ENT_QUOTES, 'UTF-8'); ?>" method="get" role="search">
                        <label class="visually-hidden" for="campoPesquisa">Pesquisar produtos</label>
                        <input
                            class="form-control"
                            id="campoPesquisa"
                            name="q"
                            type="search"
                            placeholder="Pesquisar"
                            required>
                        <button class="btn btn-outline-primary ms-2" type="submit">
                            Buscar
                        </button>
                    </form>

                    <div class="dropdown">
                        <button
                            class="btn btn-outline-dark dropdown-toggle w-100"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Conta
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/cliente/login', ENT_QUOTES, 'UTF-8'); ?>">Entrar</a></li>
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/cliente/cadastro', ENT_QUOTES, 'UTF-8'); ?>">Criar conta</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= htmlspecialchars($baseUrl . '/cliente/pedidos', ENT_QUOTES, 'UTF-8'); ?>">Meus pedidos</a></li>
                        </ul>
                    </div>

                    <a class="btn btn-primary text-nowrap" href="<?= htmlspecialchars($baseUrl . '/carrinho', ENT_QUOTES, 'UTF-8'); ?>">
                        Carrinho
                        <span class="badge text-bg-light ms-1"><?= $quantidadeCarrinho; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>