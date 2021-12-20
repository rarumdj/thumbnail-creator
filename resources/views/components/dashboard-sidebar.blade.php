<header class="sidebar-header border-bottom border-1 p-2">
    <div class="brand-logo">
        <a href="/" class="d-flex justify-content-start align-items-center flex-nowrap">
            <img class="brand-logo--icon"  src="{{ asset("assets/img/logo/logo-icon.svg") }}" height="auto" width="30" alt="">
            <h5 class="mb-0 flex-grow-1 ms-2">
                <span class="brand-logo--text">
                    <span class="app-text-primary">Thumb</span><span class="app-text-accent">nail</span>
                </span>
            </h5>
        </a>
    </div>
</header>
<nav class="sidebar-navigation flex-grow-1">
    <ul class="menu pt-4">
        <li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a href="{{ route("dashboard.index") }}" class="menu-link">
                <span class="icon lh-0">
                    <i class="bi-columns-gap p-1"></i>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/creator*')) ? 'active' : '' }}">
            <a href="{{ route("dashboard.creator.index") }}" class="menu-link">
                <span class="icon lh-0">
                    <i class="bi-images p-1"></i>
                </span>
                <span class="title">Creator</span>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/connections/youtube*')) ? 'active' : '' }}">
            <a href="{{ route("dashboard.connections.youtube") }}" class="menu-link">
                <span class="icon lh-0">
                    <i class="bi-youtube p-1"></i>
                </span>
                <span class="title">Youtube Videos</span>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/workspace*')) ? 'active' : '' }}">
            <a href="{{ route("dashboard.workspace.index") }}" class="menu-link">
                <span class="icon lh-0">
                    <i class="bi-briefcase p-1"></i>
                </span>
                <span class="title">Workspace</span>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/resellers*')) ? 'active' : '' }}">
            <a href="{{ route("dashboard.resellers.index") }}" class="menu-link">
                <span class="icon lh-0">
                    <i class="bi-people p-1"></i>
                </span>
                <span class="title">Resellers</span>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('dashboard/profile*')) ? 'active' : '' }}">
            <a href="{{ route("dashboard.profile.index", ["id"=>"maven-harry"]) }}" class="menu-link">
                <span class="icon lh-0">
                    <i class="bi-person-bounding-box p-1"></i>
                </span>
                <span class="title">Profile</span>
            </a>
        </li>
    </ul>
</nav>
