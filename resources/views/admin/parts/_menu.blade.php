<nav id="sidebar" class="">
    <div class="sidebar-header">

    </div>
    @if (Auth::user()->type == 'Admin')
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a href="{{ route('dashboard') }}" aria-expanded="false"><i
                                class="fa big-icon fa-dashboard icon-wrap"></i>
                            <span class="mini-click-non">Dashboard</span></a>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i
                                class="fa big-icon fa-edit icon-wrap"></i> <span class="mini-click-non">ABM</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="{{ route('product.list') }}"><i class="fa fa-inbox sub-icon-mg"
                                        aria-hidden="true"></i> <span class="mini-sub-pro">Productos</span></a></li>
                            <li><a title="Compose Mail" href="{{ route('client.list') }}"><i
                                        class="fa fa-users sub-icon-mg" aria-hidden="true"></i> <span
                                        class="mini-sub-pro">Listado Cliente</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('notification.list') }}" aria-expanded="false"><i
                                class="fa big-icon fa-bullhorn icon-wrap"></i>
                            <span class="mini-click-non">Notificaciones</span></a>
                    </li>
                    <li>
                        <a href="{{ route('sale.list') }}" aria-expanded="false"><i
                                class="fa big-icon fa-credit-card icon-wrap"></i>
                            <span class="mini-click-non">Ventas</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            aria-expanded="false"><i class="fa big-icon fa-sign-out icon-wrap"></i>
                            <span class="mini-click-non">Salir</span></a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>

            </nav>
        </div>
    @else
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a href="{{ route('clientDashboard') }}" aria-expanded="false"><i
                                class="fa big-icon fa-dashboard icon-wrap"></i>
                            <span class="mini-click-non">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('client.showProfile', Auth::user()->id) }}" aria-expanded="false"><i
                                class="fa big-icon fa-user icon-wrap"></i>
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
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav>
        </div>
    @endif
</nav>
