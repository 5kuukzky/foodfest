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
                    <a class="nav-link  {{ ($title ==='Event') ? 'active' : '' }}" href="/event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($title ==='About Us') ? 'active' : '' }}" href="/about-us">About Us</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            @if(!Auth::check())
            <a href="login" class="btn btn-master btn-secondary mx-3">
                Masuk
            </a>
            <a href="register" class="btn btn-master btn-primary">
                Daftar
            </a>
            @else
            <a href="/logout" class="btn btn-master btn-secondary mx-3">
                Keluar
            </a>
            <a href="/tambah-makanan" class="btn btn-master btn-primary">
                Tambah
            </a>
            @endif


        </div>
    </div>
</nav>

<body>

</body>