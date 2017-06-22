<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class="nav-item {{app()->request->is('search*') ? 'active' : ''}}">
                <a href="{{url('search')}}"><i class="icon-search4"></i>
                    <span class="menu-title">Pencarian</span>
                </a>
            </li>
            <li class="nav-item {{app()->request->is('lagu*') ? 'active' : ''}}">
                <a href="{{url('lagu')}}"><i class="icon-list3"></i>
                    <span class="menu-title">Daftar Lagu</span>
                </a>
            </li>
            <li class="nav-item {{app()->request->is('comment*') ? 'active' : ''}}">
                <a href="{{url('comment')}}"><i class="icon-bubble2"></i>
                    <span class="menu-title">Tulis Komentar</span>
                </a>
            </li>
            <li class="nav-item {{app()->request->is('about_us*') ? 'active' : ''}}">
                <a href="{{url('about_us')}}"><i class="icon-info"></i>
                    <span class="menu-title">Tentang Kami</span>
                </a>
            </li>
        </ul>
    </div>
</div>