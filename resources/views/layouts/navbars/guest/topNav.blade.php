<nav class="navbar navbar-expand-lg bg-none pb-0  pt-0">
    <div class="container bg-success" style="border-bottom:4px solid#1eac6a;">
        <a class="navbar-brand" href="/" style="color:white;"><img src="{{ asset('images/logo-olhiys.png') }}"
                style="width:40px;height35px;" alt="Logo Olhiys"> OLHIY'S</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-0 mt-0" id="navbarTogglerDemo02"
            style="height:50px;margin-bottom:-5px;">
            <ul class="navbar-nav me-auto pt-1">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'galery' ? 'active' : '' }}" href="/guest-galery">Galery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $active === 'about' ? 'active' : '' }}" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/#contactUs">Hubungi kami</a></li>
                        <li><a class="dropdown-item" href="/about/page/visiMisi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="/about/page/so">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Login</a>
                </li>
            </ul>
            <form class="d-flex pt-0 py-1 }}" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
