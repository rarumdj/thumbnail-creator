<nav class="navbar navbar-expand-lg navbar-light app-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{ route('dashboard.index') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img class="brand-logo--icon" src="{{ asset('assets/img/logo/logo-icon.svg') }}" height="auto" width="32" alt="">
            <h5 class="mb-0 flex-grow-1 ms-2">
                <span class="brand-logo--text">
                    <span class="app-text-primary">Thumb</span><span class="app-text-accent">nail</span>
                </span>
            </h5>
        </a>
        <div class="collapse navbar-collapse order-3 order-lg-2" id="">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item {{ (request()->is('dashboard')) ? 'app-text-primary' : '' }}">
                    <a class="nav-link active" aria-current="page" href="{{ route("dashboard.index") }}">
                        <span class="">Home</span>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('dashboard/creator*')) ? 'app-text-primary' : '' }}">
                    <a class="nav-link" href="{{ route("dashboard.creator.index") }}">
                        <span class="">Creator</span>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('dashboard/workspace*')) ? 'app-text-primary' : '' }}">
                    <a class="nav-link" href="{{ route("dashboard.workspace.index") }}">
                        <span class="">Workspace</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="ms-auto d-flex justify-content-end align-items-center order-2 order-lg-3">
            <form class="me-3 d-none">
                <input type="search" class="form-control search-input-right" placeholder="Search..." spellcheck="false" data-ms-editor="true">
            </form>
            <ul class="navbar-nav flex-row">
                <li class="nav-item d-flex justify-content-center align-items-center {{ (request()->is('dashboard/connections*')) ? 'app-text-accent' : '' }}">
                    <a class="nav-link app-btn-icon app-btn-icon-default app-btn-icon-accent" href="{{ route("dashboard.connections.vimeo") }}">
                        <span class=""><i class="lab la-vimeo fs-5"></i></span>
                    </a>
                </li>
                <li class="nav-item d-flex justify-content-center align-items-center {{ (request()->is('dashboard/connections*')) ? 'app-text-accent' : '' }}">
                    <a class="nav-link app-btn-icon app-btn-icon-default app-btn-icon-accent" href="{{ route("dashboard.connections.youtube") }}">
                        <span class=""><i class="bi-youtube fs-5"></i></span>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-lg d-flex justify-content-center align-items-center mx-2"
                    role="button">
                    <a class="nav-link dropdown-toggle caret-hidden app-btn-icon app-btn-icon-default app-btn-icon-accent"
                        id="notificationDropdown" data-bs-toggle="dropdown" href="#">
                        <i class="bi-bell fs-5"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="notificationDropdown">
                        <div class="dropdown-menu-header border-1 border-bottom px-3 py-2">
                            4 New Notifications
                        </div>
                        <div class="list-group list-group-flush rounded-3 rounded-bottom">
                            @for ($i = 0; $i < 4; $i++)
                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media d-flex justify-content-start">
                                        <div class="me-2">
                                            <span class="app-text-primary fs-3">
                                                <i class="las la-check-circle"></i>
                                            </span>
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <p class="mb-0">Clade mercy</p>
                                            <span class="text-muted small pe-2 border-1 border-end">3 Users</span>
                                            <span class="text-muted small ps-2">22 Campaigns</span>
                                        </div>
                                    </div>
                                </a>
                            @endfor
                            <a class="list-group-item list-group-item-action text-center" href="#">
                                <span class="mb-0 app-text-primary fs-6">View all</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle caret-hidden d-flex align-items-center" href="#" id="profileDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="avatar avatar-md position-relative d-inline-block me-2">
                            <span
                                class="position-absolute start-25 right-0 translate-middle badge border border-2 border-white rounded-circle bg-success p-1">
                                <span class="visually-hidden">user online</span>
                            </span>
                            <img class="rounded-circle" src="{{ asset('assets/img/avatar/user-1.png') }}" alt="">
                            {{-- <h4 class="app-text-white-75">MA</h4> --}}
                        </span>
                        {{-- <div class="">
                            <span class="d-block">{{ Auth::User()->name }}</span>
                        </div> --}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li class="">
                            <a class="dropdown-item" href="{{ route('dashboard.resellers.index') }}">
                                <span class="icon lh-0 me-1"><i class="bi-people"></i></span> Reseller
                            </a>
                        </li>
                        <li class="">
                            <a class="dropdown-item" href="{{ route('dashboard.profile.social-account', ['id' => 'maven-ti']) }}">
                                <span class="icon lh-0 me-1"><i class="bi-gear"></i></span> Settings
                            </a>
                        </li>
                        <li class="">
                            <a class="dropdown-item" href="{{ route('dashboard.profile.index', ['id' => 'maven-ti']) }}">
                                <span class="icon lh-0 me-1"><i class="bi-person"></i></span> Profile
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="">
                            <form action="{{ route('logout') }}" name="logout-form" method="post">
                                @csrf
                            </form>
                            <a class="logout-link dropdown-item" href="#">
                                <span class="icon lh-0 me-1">
                                    <i class="bi-box-arrow-left"></i>
                                </span>Sign out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
