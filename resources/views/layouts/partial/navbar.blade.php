<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/assets/images/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link   {{ ($title ==='Home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($title ==='Provinsi') ? 'active' : '' }}" href="/provinsi">Provinsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($title ==='Our Course') ? 'active' : '' }}" href="/course">Our Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($title ==='About Us') ? 'active' : '' }}" href="/about-us">About Us</a>
                </li>
            </ul>


            @if(!Auth::check())

            <a href="/register" class="btn btn-master btn-primary">
                Daftar
            </a>
            <a href="/login" class="btn btn-master btn-secondary mx-3">
                Masuk
            </a>
            @else
            <p></p>

            <a href="/tambah-makanan" class="btn btn-master btn-primary mx-3">
                Tambah
            </a>
            <div class="d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, <strong> {{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/profile">Akun anda</a></li>
                            <li><a class="dropdown-item" href="/logout">Keluar</a></li>
                            <li>
                                <strong> Total poin anda : {{ Auth::User()->poin }}</strong>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</nav>

<body>

</body>