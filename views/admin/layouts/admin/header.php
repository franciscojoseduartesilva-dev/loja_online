<header class="top-navbar px-3 px-md-4 d-flex align-items-center justify-content-between sticky-top">
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary d-lg-none me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-label="Abrir menu de navegação">
                    <i class="bi bi-list"></i>
                </button>
                <form class="d-none d-md-flex align-items-center" method="get" action="admin/buscar">
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <label for="campoBuscaTop" class="visually-hidden">Pesquisar no painel</label>
                        <input type="search" id="campoBuscaTop" name="q" class="form-control" placeholder="Pesquisar..." required>
                        <button class="btn btn-outline-secondary" type="submit" aria-label="Buscar"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center gap-3">
                <a href="admin/notificacoes" class="position-relative text-dark text-decoration-none fs-5" aria-label="Notificações não lidas">
                    <i class="bi bi-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                        5
                    </span>
                </a>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <span class="d-none d-sm-inline fw-semibold small">Administrador</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="admin/perfil"><i class="bi bi-person me-2"></i> Meu perfil</a></li>
                        <li><a class="dropdown-item" href="admin/configuracoes"><i class="bi bi-gear me-2"></i> Configurações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="admin/sair" method="post" class="px-3 py-1">
                                <button type="submit" class="dropdown-item p-0 text-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i> Sair
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>