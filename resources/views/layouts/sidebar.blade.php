
<div class="sidebar">
    <div class="logo">
        <a href="" class="small_logo d-none">
            <img src="{{asset('backend/assets/images/logo-l.png')}}" alt="small logo">
        </a>
        <a href="" class="big_logo">
            <img src="{{asset('backend/assets/images/logo.png')}}" alt="big logo">
        </a>
    </div>
    <ul id="sidebar-menu">
        <li><a href="{{ route('dashboard') }}" class="active" onclick="closeAllSubMenus()"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="#" onclick="closeAllSubMenus()"><i class="fas fa-bars"></i> <span>Hero</span></a></li>
        <li class="menu">
            <a href="javascript:void(0)" class="menu-toggle" data-submenu="submenu1" onclick="toggleSubMenu(event)">
                <i class="fas fa-bars"></i>
                <span>Menu One <i class="fas fa-angle-right"></i></span>
            </a>
            <ul class="submenu" data-submenu="submenu1">
                <li><a href="{{ route('sub.menu.one') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 1</span></a></li>
                <li><a href="{{ route('sub.menu.two') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 2</span></a></li>
            </ul>
        </li>
        <li class="menu">
            <a href="javascript:void(0)" class="menu-toggle" data-submenu="submenu2" onclick="toggleSubMenu(event)">
                <i class="fas fa-bars"></i>
                <span>Menu Two <i class="fas fa-angle-right"></i></span>
            </a>
            <ul class="submenu" data-submenu="submenu2">
                <li><a href="{{ route('sub.menu.two') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 1</span></a></li>
                <li><a href="{{ route('sub.menu.two') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 1</span></a></li>
            </ul>
        </li>
        <li class="menu">
            <a href="javascript:void(0)" class="menu-toggle" data-submenu="submenu3" onclick="toggleSubMenu(event)">
                <i class="fas fa-bars"></i>
                <span>Menu Three <i class="fas fa-angle-right"></i></span>
            </a>
            <ul class="submenu" data-submenu="submenu3">
                <li><a href="{{ route('sub.menu.two') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 1</span></a></li>
                <li><a href="{{ route('sub.menu.two') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 1</span></a></li>
            </ul>
        </li>
        <li class="menu">
            <a href="javascript:void(0)" class="menu-toggle" data-submenu="submenu4" onclick="toggleSubMenu(event)">
                <i class="fas fa-bars"></i>
                <span>Menu Four <i class="fas fa-angle-right"></i></span>
            </a>
            <ul class="submenu" data-submenu="submenu4">
                <li><a href="{{ route('sub.menu.two') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 1</span></a></li>
                <li><a href="{{ route('sub.menu.two') }}" onclick="preventSubMenuHide(event)"><i class="far fa-circle"></i> <span>Submenu 1</span></a></li>
            </ul>
        </li>
    </ul>
</div>
