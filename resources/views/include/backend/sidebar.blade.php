<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div style="width: 500px;"
        class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href=""><img src="{{ asset('backend/assets/images/logo11.png') }}" alt="logo" style="width: 300px; height: auto; margin-left: -60px;"></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-compass"></i>
                </span>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="">
                <span class="menu-icon">
                    <i class="mdi mdi-face"></i>
                </span>
                <span class="menu-title">Review</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Data Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('genre.index') }}">Genre</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('film.index') }}">Film</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items" style="position: absolute; bottom: 0; width: 19%;">

            <!-- <a class="nav-link" href="">
                <span class="menu-icon">
                    <i class="mdi mdi-arrow-top-left"></i>
                </span>
                <span class="menu-title">Go to User Page</span>
            </a> -->
        </li>
    </ul>
</nav>
