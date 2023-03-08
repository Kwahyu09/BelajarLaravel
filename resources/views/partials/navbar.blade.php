<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
        <a class="navbar-brand" href="/"><b>Hadiat</b>.<i>store</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Warna Ready") ? 'active' : '' }}" href="/warna">Warna Ready</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Daftar Harga") ? 'active' : '' }}" href="/daftar">Daftar Harga</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Pemesanan") ? 'active' : '' }}" href="/pesan">Pemesanan</a>
            </li>
        </ul>
    </div>
    <div class="text-center text-md-end"><a class="btn btn-light me-3 btn-lg" href="#!" role="button">Login</a></div>
    </div>
    </nav>
