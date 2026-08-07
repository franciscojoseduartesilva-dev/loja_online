<header class="topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar" aria-label="Abrir menu de navegação">
                    <i class="bi bi-list"></i>
                </button>
                <form class="topbar-search position-relative mb-0" action="admin/buscar" method="get">
                    <i class="bi bi-search topbar-search-icon"></i>
                    <label for="campoPesquisa" class="visually-hidden">Pesquisar no sistema</label>
                    <input type="search" id="campoPesquisa" name="q" class="form-control" placeholder="Pesquisar..." aria-label="Pesquisar">
                </form>
            </div>

            <div class="d-flex align-items-center gap-3">
                <a href="admin/notificacoes" class="text-secondary position-relative text-decoration-none" aria-label="Notificações não lidas">
                    <i class="bi bi-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.65rem;">
                        5
                    </span>
                </a>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 36px; height: 36px; font-weight: 600;">
                            AD
                        </div>
                        <span class="d-none d-md-inline fw-medium">Administrador</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="admin/perfil"><i class="bi bi-person me-2"></i> Meu perfil</a></li>
                        <li><a class="dropdown-item" href="admin/configuracoes"><i class="bi bi-gear me-2"></i> Configurações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="admin/sair" method="post" class="px-3 py-1">
                                <button type="submit" class="dropdown-item text-danger p-0 border-0 bg-transparent">
                                    <i class="bi bi-box-arrow-left me-2"></i> Sair
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>