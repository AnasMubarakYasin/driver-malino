<section class="container my-4">
    <h2>Layanan Utama</h2>
    <p>Pesan Layanan sesuai kebutuhan</p>
    <ul class="nav nav-pills nav-fill gap-4" id="pills-tab" role="tablist">
        <li class="nav-item bg-secondary rounded" role="presentation">
            <button class="nav-link text-light" id="pills-lodging-tab" data-bs-toggle="pill" data-bs-target="#pills-lodging"
                type="button" role="tab" aria-controls="pills-lodging" aria-selected="true">lodging</button>
        </li>
        <li class="nav-item bg-secondary rounded" role="presentation">
            <button class="nav-link text-light active" id="pills-transportation-tab" data-bs-toggle="pill"
                data-bs-target="#pills-transportation" type="button" role="tab"
                aria-controls="pills-transportation" aria-selected="false">transportation</button>
        </li>
        <li class="nav-item bg-secondary rounded" role="presentation">
            <button class="nav-link text-light" id="pills-culinary-tab" data-bs-toggle="pill"
                data-bs-target="#pills-culinary" type="button" role="tab" aria-controls="pills-culinary"
                aria-selected="false">culinary</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade pt-4" id="pills-lodging" role="tabpanel" aria-labelledby="pills-lodging-tab"
            tabindex="0">
            <div class="container text-center">
                <div class="row g-4 justify-content-center">
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle" style="width: 64px; height: 64px;"></div> --}}
                            {{-- <div>Villa & Homestay</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/hotel.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle" style="width: 64px; height: 64px;"></div> --}}
                            {{-- <div>Hotel</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/lainnya.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle" style="width: 64px; height: 64px;"></div> --}}
                            {{-- <div>Kamar</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle" style="width: 64px; height: 64px;"></div> --}}
                            {{-- <div>Camping Ground</div> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active pt-4" id="pills-transportation" role="tabpanel"
            aria-labelledby="pills-transportation-tab" tabindex="0">
            <div class="container text-center">
                <div class="row g-4 justify-content-center">
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle" style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Ojek Motor</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle" style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Ojek Mobil 4 Seat</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle" style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Ojek Mobil 6 Seat</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid gap-2 bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Sewa Mobil</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Kurir Motor</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Sewa Mobil Pickup/Box</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Sewa Bus</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Becak Motor</div> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade pt-4" id="pills-culinary" role="tabpanel" aria-labelledby="pills-culinary-tab"
            tabindex="0">
            <div class="container text-center">
                <div class="row g-4 justify-content-center">
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Kafe & Resto</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Kue & Roti</div> --}}
                        </button>
                    </div>
                    <div class="col-3 col-xl-2 d-grid" style="place-items: start center">
                        <button class="d-grid bg-transparent border border-0" style="place-items: center">
                            <img src="{{ asset('assets/images/homestay.png') }}" alt="" style="width: 100%">
                            {{-- <div class="border bg-primary shadow-sm rounded-circle"
                                style="width: 64px; height: 64px;">
                            </div> --}}
                            {{-- <div>Oleh-Oleh</div> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
