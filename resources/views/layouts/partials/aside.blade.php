<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item nav-home">
            <a class="nav-link {{ request()->routeIs('home') ? '' : 'collapsed' }}" href="{{ route('home') }}">
                <i class="ri-home-heart-fill"></i>
                <span>Inicio</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item nav-clients-index">
            <a class="nav-link {{ request()->routeIs('clients.*') ? '' : 'collapsed' }}"
                href="{{ route('clients.index') }}">
                <i class="bi bi-person"></i>
                <span>Clientes</span>
            </a>
        </li><!-- End Clients Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
