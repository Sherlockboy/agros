<header class="header_area @if (session()->get('active_menu') == 'marketplace' || session()->get('active_menu') == 'investment') bg-white @endif">
    <nav class="navbar navbar-expand-lg menu_one support_menu">
        <div class="container">
            <a href="{{ route('home') }}">
                <h3 class="f_500" style="color:#051441">AgroS</h3>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-auto menu">
                    <li class="dropdown submenu nav-item @if (session()->get('active_menu') == 'investment') active @endif">
                        <a title="Pages" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false" href="#">
                            Investment
                        </a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('investment.index') }}">Farmers</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('investment.show') }}">Show-room</a></li>
                        </ul>
                    </li>
                    <li class="dropdown submenu nav-item @if (session()->get('active_menu') == 'marketplace') active @endif">
                        <a title="Pages" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false" href="#">
                            Marketplace
                        </a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('marketplace.primary') }}">Goods Market</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('marketplace.secondary') }}">Supplements Market</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('marketplace.product') }}">View product</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('marketplace.order') }}">Order product</a></li>
                        </ul>
                    </li>
                    <li class="nav-item @if (session()->get('active_menu') == 'renting') active @endif">
                        <a class="nav-link dropdown" href="#">
                            Machine Renting
                        </a>
                    </li>
                    <li class="nav-item @if (session()->get('active_menu') == 'collobration') active @endif">
                        <a class="nav-link dropdown" href="#">
                            Collobration
                        </a>
                    </li>
                    <li class="nav-item @if (session()->get('active_menu') == 'fms') active @endif">
                        <a class="nav-link dropdown" href="{{ route('fms') }}">
                            FMS
                        </a>
                    </li>
                </ul>
            </div>
            <div class="alter_nav">
                <ul class="navbar-nav search_cart menu">
                    <li class="nav-item search">
                        <a class="nav-link search-btn m-0" href="javascript:void(0);">
                            <i class="ti-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
