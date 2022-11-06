<div>
    <!-- Well begun is half done. - Aristotle -->
    <nav class="navbar bg-primary">
        <div class="container">
            <div class="navbar-collapse d-flex" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logo-header.png') }}" alt="{{ env('APP_NAME') }}" class="img-header">
                </a>
                <form autocomplete="off" action="" method="GET" class="w-100">
                    <div class="position-relative d-flex justify-content-end">
                        <input type="text" name="search" class="form-control custom-search search-control"
                            placeholder="Cari kebutuhan anda">
                        <button type="submit"
                            class="position-absolute top-50 border-0 bg-transparent search-show translate-middle-y pe-3"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
