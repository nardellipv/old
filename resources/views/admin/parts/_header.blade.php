<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {{-- <div class="logo-pro">
                <img class="main-logo" src="{{ asset('assets/logo.png') }}" />
            </div> --}}
        </div>
    </div>
</div>
<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <img class="main-logo" src="{{ asset('assets/logo.png') }}" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                class="nav-link dropdown-toggle">
                                                <i class="fa fa-user adminpro-user-rounded header-riht-inf"
                                                    aria-hidden="true"></i>
                                                <span class="admin-name">Hola, {{ Auth::user()->name }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                @if (Auth::user()->type == 'Admin')
                                    <li>
                                        <a href="{{ route('dashboard') }}" aria-expanded="false"><i
                                                class="fa big-icon fa-dashboard icon-wrap"></i>
                                            <span class="mini-click-non">Escritorio</span></a>
                                    </li>

                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false"><i
                                                class="fa big-icon fa-edit icon-wrap"></i> <span
                                                class="mini-click-non">ABM</span></a>
                                        <ul class="submenu-angle" aria-expanded="false">
                                            <li><a title="Inbox" href="{{ route('product.list') }}"><i
                                                        class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> <span
                                                        class="mini-sub-pro">Productos</span></a></li>
                                            <li><a title="Compose Mail" href="{{ route('client.list') }}"><i
                                                        class="fa fa-users sub-icon-mg" aria-hidden="true"></i> <span
                                                        class="mini-sub-pro">Agregar Cliente</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('notification.list') }}" aria-expanded="false"><i
                                                class="fa big-icon fa-bullhorn icon-wrap"></i>
                                            <span class="mini-click-non">Notificaciones</span></a>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false"><i
                                                class="fa big-icon fa-barcode icon-wrap"></i> <span
                                                class="mini-click-non">Ventas</span></a>
                                        <ul class="submenu-angle" aria-expanded="false">
                                            <li>
                                                <a href="{{ route('sale.add') }}" aria-expanded="false"><i
                                                        class="fa big-icon fa-cart-plus icon-wrap"></i>
                                                    <span class="mini-click-non">Agregar Ventas</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('sale.list') }}" aria-expanded="false"><i
                                                        class="fa big-icon fa-credit-card icon-wrap"></i>
                                                    <span class="mini-click-non">Listado Ventas</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('sale.accumulated') }}" aria-expanded="false"><i
                                                        class="fa big-icon fa-balance-scale icon-wrap"></i>
                                                    <span class="mini-click-non">Ventas Acumuladas</span></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false"><i
                                                class="fa big-icon fa-exchange icon-wrap"></i> <span
                                                class="mini-click-non">Canjes</span></a>
                                        <ul class="submenu-angle" aria-expanded="false">
                                            <li>
                                                <a href="{{ route('exchange.list') }}" aria-expanded="false"><i
                                                        class="fa big-icon fa-qrcode icon-wrap"></i>
                                                    <span class="mini-click-non">Listado de Canjes</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('exchange.accumulated') }}" aria-expanded="false"><i
                                                        class="fa big-icon fa-arrows-alt icon-wrap"></i>
                                                    <span class="mini-click-non">Canjes Acumulados</span></a>
                                            </li>

                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            aria-expanded="false"><i class="fa big-icon fa-sign-out icon-wrap"></i>
                                            <span class="mini-click-non">Salir</span></a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <li>
                                        <a href="{{ route('clientDashboard') }}" aria-expanded="false"><i
                                                class="fa big-icon fa-dashboard icon-wrap"></i>
                                            <span class="mini-click-non">Dashboard</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('client.showProfile', Auth::user()->id) }}"
                                            aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i>
                                            <span class="mini-click-non">Perfil</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('point.listExchengeClient') }}" aria-expanded="false"><i
                                                class="fa big-icon fa-qrcode icon-wrap"></i>
                                            <span class="mini-click-non">Listado de Canjes</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            aria-expanded="false"><i class="fa big-icon fa-sign-out icon-wrap"></i>
                                            <span class="mini-click-non">Salir</span></a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
