<div style="background-color: #f1602b; position: fixed; width: 100%; top: 0; z-index: 99;">
    <!-- Well begun is half done. - Aristotle -->
    <nav class="navbar navbar-expand-md">
        <div class="container d-block">
            <div class="navbar-collapse d-flex" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logo-header.png') }}" alt="{{ env('APP_NAME') }}" class="img-header">
                </a>
                <form autocomplete="off" action="" method="GET" class="w-100 hiden">
                    <div class="position-relative d-flex justify-content-end">
                        <input type="text" name="search" class="form-control custom-search search-control"
                            placeholder="Cari kebutuhan anda">
                        <button type="submit"
                            class="position-absolute top-50 border-0 bg-transparent search-show translate-middle-y pe-3"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav ms-3 gap-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" title="toko" href="#"><i
                                class="bi bi-shop text-white fs-4"></i></a>
                    </li>
                    <li class="nav-item hiden">
                        <a class="nav-link" aria-current="page" title="keranjang" href="#"><i
                                class="bi bi-cart4 text-white fs-4"></i></a>
                    </li>
                    <li class="nav-item hiden">
                        <a class="nav-link" aria-current="page" title="profil" href="#"><i
                                class="bi bi-person-circle text-white fs-4"></i></a>
                    </li>
                </ul>
            </div>
            {{-- <div class="sub-navbar">
                <div class="content-user">
                    <div class="user">
                        <i class="bi bi-person-fill"></i>
                        <h6 class="m-0 text-white fw-bolder">Name</h6>
                    </div>
                    <div class="text-user text-white">
                        <small>saldo anda saat ini</small>
                        <h5 class="m-0"><b>Rp 0</b></h5>
                        <a href="" class="btn btn-custom hiden"><i class="bi bi-wallet-fill"></i> isi saldo</a>
                    </div>
                </div>
                <div class="content-saldo">
                    <i class="bi bi-cash-coin"></i>
                    <div class="saldo-name text-white">
                        <h5 class="m-0 fw-bolder">POIN 0</h5>
                        <small>Kumpulkan poin anda</small>
                    </div>
                </div>
            </div> --}}
        </div>
    </nav>

</div>
<div class="sub-hero">
    <div class="container">
        <div class="sub-navbar">
            <div class="content-user">
                <div class="user">
                    <i class="bi bi-person-fill"></i>
                    <h6 class="m-0 text-white fw-bolder">Name</h6>
                </div>
                <div class="text-user text-white">
                    <small>saldo anda saat ini</small>
                    <h5 class="m-0"><b>Rp 0</b></h5>
                    <a href="" class="btn btn-custom hiden"><i class="bi bi-wallet-fill"></i> isi saldo</a>
                </div>
            </div>
            <div class="content-saldo">
                <i class="bi bi-cash-coin"></i>
                <div class="saldo-name text-white">
                    <h5 class="m-0 fw-bolder">POIN 0</h5>
                    <small>Kumpulkan poin anda</small>
                </div>
            </div>
        </div>
    </div>
</div>
