<template>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="#" class="app-brand-link">
                      <span class="app-brand-logo demo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 22.55" class="iconLeft" width="195" height="120">
                            <path d="M34.469 6.732V5.146h-8.07v11.839h8.071v-1.585h-6.193V11.808h5.267V10.324h-5.267V6.732Zm1.218 9.073c0.61 0.838 1.878 1.421 3.451 1.421 2.081 0 3.35 -1.015 3.35 -2.525 0 -2.982 -4.441 -1.98 -4.441 -3.794 0 -0.635 0.482 -1.054 1.472 -1.079 0.61 -0.012 1.307 0.28 1.814 0.761l0.977 -1.129c-0.559 -0.596 -1.625 -1.092 -2.868 -1.092 -2.005 0 -3.223 1.054 -3.223 2.602 0 3.059 4.366 2.131 4.366 3.769 0 0.622 -0.521 1.054 -1.548 1.054 -0.838 0 -1.598 -0.305 -2.208 -1.092Zm12.474 1.421c1.168 0 2.107 -0.343 2.88 -0.94l-1.04 -1.295c-0.457 0.444 -1.104 0.698 -1.802 0.698 -1.649 0 -2.64 -1.256 -2.64 -2.906 0 -1.637 0.99 -2.88 2.64 -2.88 0.697 0 1.345 0.253 1.801 0.697l1.04 -1.295c-0.774 -0.583 -1.714 -0.94 -2.88 -0.94 -2.614 0 -4.428 1.942 -4.428 4.416 0 2.5 1.814 4.441 4.428 4.441Zm8.197 -8.857c-1.003 0 -1.675 0.482 -2.144 1.332l-0.228 -1.117h-1.548v8.4h1.789v-4.378c0 -1.37 0.724 -2.588 2.03 -2.588 0.305 0 0.583 0.05 0.824 0.166l0.533 -1.536c-0.228 -0.139 -0.71 -0.28 -1.256 -0.28Zm10.38 4.238c0 -2.5 -1.687 -4.238 -4.124 -4.238 -2.538 0 -4.34 1.942 -4.34 4.416 0 2.488 1.776 4.404 4.543 4.404 1.459 0 2.677 -0.494 3.439 -1.345l-1.243 -1.003c-0.533 0.61 -1.256 0.926 -2.22 0.926 -1.573 0 -2.5 -1.092 -2.627 -2.588h6.574ZM62.614 9.816c1.307 0 2.158 0.787 2.347 2.119H60.24c0.253 -1.268 1.129 -2.119 2.374 -2.119Zm11.599 -1.231 -2.449 6.281 -2.449 -6.281h-1.916l3.629 8.4h1.484l3.629 -8.4Zm5.57 8.641c1.18 0 2.297 -0.508 2.868 -1.307l0.28 1.066h1.51V11.959c0 -2.386 -1.231 -3.592 -3.718 -3.592 -1.231 0 -2.272 0.317 -3.071 0.94l0.799 1.243c0.559 -0.482 1.282 -0.724 2.094 -0.724 1.332 0 2.107 0.635 2.107 1.764v0.698l-0.216 -0.077c-3.655 -1.37 -5.647 0.508 -5.647 2.309 0 1.573 1.332 2.704 2.995 2.704Zm0.533 -1.384c-1.054 0 -1.649 -0.672 -1.649 -1.447 0 -0.977 1.129 -1.955 3.744 -1.027l0.241 0.064v0.241c0 1.37 -1.104 2.17 -2.335 2.17Zm12.74 -5.405c1.332 -0.355 2.03 -1.205 2.03 -2.461 0 -1.751 -1.421 -2.83 -3.768 -2.83h-4.378v11.839h4.91c2.64 0 4.289 -1.307 4.289 -3.401 0 -1.726 -1.104 -2.868 -3.084 -3.146Zm0.178 -2.309c0 1.054 -0.761 1.7 -2.03 1.7h-2.374V6.556h2.424c1.282 0 1.98 0.559 1.98 1.573Zm-1.625 7.462h-2.779V11.365h2.716c1.612 0 2.64 0.761 2.64 2.094 0.012 1.307 -0.965 2.131 -2.576 2.131Zm14.263 -2.982c0 -2.5 -1.687 -4.238 -4.123 -4.238 -2.538 0 -4.327 1.942 -4.327 4.416 0 2.488 1.776 4.404 4.53 4.404 1.459 0 2.677 -0.494 3.439 -1.345l-1.231 -1.003c-0.545 0.61 -1.268 0.926 -2.22 0.926 -1.573 0 -2.5 -1.092 -2.627 -2.588h6.56Zm-4.123 -2.791c1.32 0 2.17 0.787 2.347 2.119h-4.721c0.266 -1.268 1.129 -2.119 2.374 -2.119Zm15.151 -1.447c-1.472 0 -2.22 0.559 -2.754 1.332 -0.533 -0.952 -1.459 -1.332 -2.424 -1.332s-1.828 0.457 -2.309 1.295l-0.203 -1.079h-1.573v8.4h1.789V12.048c0.114 -1.409 0.774 -2.144 1.853 -2.144 1.142 0 1.612 0.938 1.612 2.309v4.771h1.789V12.48c0 -1.649 0.672 -2.576 1.84 -2.576s1.625 0.94 1.625 2.297v4.783h1.802v-4.91c0 -2.741 -1.447 -3.706 -3.046 -3.706ZM1.151 1.151a3.624 3.624 0 0 0 0 5.124l5.124 -5.124a3.623 3.623 0 0 0 -5.124 0zm12.562 17.684 8.749 3.625 -3.625 -8.748 -11.16 -11.159 -5.123 5.123 11.159 11.159zm1.166 -2.27c0.466 -0.467 1.348 -0.34 1.542 -0.145 -0.194 -0.194 -0.322 -1.076 0.144 -1.543s1.397 -0.631 1.397 -0.631l2.083 5.027 -0.772 0.77 -5.027 -2.083s0.166 -0.931 0.631 -1.397z" fill="#01252C"/>
                        </svg>
                      </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Home</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Modulo 1</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-chevron-right"></i>
                            <span>Menu 1</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link">
                                    <span>Submenu 1</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link">
                                    <span>Submenu 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-chevron-right"></i>
                            <span>Menu 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-chevron-right"></i>
                            <span>Menu 3</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-chevron-right"></i>
                            <span>Menu 4</span>
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
                >
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input
                                    type="text"
                                    class="form-control border-0 shadow-none"
                                    placeholder="Search..."
                                    aria-label="Search..."
                                />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="https://i.pravatar.cc/40" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="https://i.pravatar.cc/40" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">Peterson Macedo</span>
                                                    <small class="text-muted">Administrador</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Minha conta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Configurações</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Sair</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Bem vindo</h5>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- / Content -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
</template>

<script>

</script>
