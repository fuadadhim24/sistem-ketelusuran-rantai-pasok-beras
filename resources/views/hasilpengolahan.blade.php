<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Ketertelusuran | JejakPadi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('volt/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/custom/css/hasilpengolahan.css') }}" />
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing_page') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('landing_page') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing_page') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing_page') }}/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Jember, Indonesia</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>jejakpadi@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="/" class="navbar-brand ms-4 ms-lg-0">
                <img class="mb-4" src="{{ asset('asset/custom/img/landingpage/ic_logo_2.png') }}" alt="logo_ud" />
                {{-- <h1 class="fw-bold text-primary m-0">J<span class="text-secondary">ejak</span>Padi</h1> --}}
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Beranda</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{ route('products') }}" class="nav-item nav-link">Produk</a>
                    <a href="{{ route('pengolahan_en.index') }}" class="nav-item nav-link">Ketertelusuran</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Kontak Kami</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3"
                        href="./../hasil-pengolahan-en/{{ $produksi->id }}">
                        EN
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="{{ route('login') }}">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="https://wa.me/6287840199095"
                        target="_blank">
                        <small class="bi-whatsapp text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid p-0 mb-5 wow fadeIn">
        <div class="hasil-pengolahan">
            <div class="rs-fullwidth-wrap-rs-module-wrap-rs-module-rs-slides-rs-slide">
                <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup">
                    Riwayat Ketertelusuran Produk Beras
                </div>
                <p class="sub-title">Menampilkan seluruh riwayat ketertelusuran produk beras dari hulu ke hilir</p>

                <div class="rs-fullwidth-wrap-rs-module-wrap-rs-module-rs-slides-rs-slide-1">
                    <div class="group-642">
                        <div class="container-20">
                            <div class="frame-632">
                                <div class="group-624">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                        PRODUKSI
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        Kode Produksi
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Tanggal Produksi
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-17">
                                        Detail Produksi
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        QR Code
                                    </span>


                                </div>
                                <div class="group-647">

                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->id }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                        <th width="30px">:</th>
                                        <th>{{ date('Y-m-d', strtotime($produksi->tanggal_produksi)) }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                        : <button type="button" class="btn btn-block btn-primary mb-3"
                                            data-bs-toggle="modal" data-bs-target="#modal-default">Detail</button>
                                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-default" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="h6 modal-title">Detail Produksi</h2>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="frame-632">
                                                            <div class="group-641">
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-23">
                                                                    Sumber Benih
                                                                </span>
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-23">
                                                                    Tingkat Kemurnian
                                                                </span>
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-23">
                                                                    Tingkat Vigor
                                                                </span>
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-23">
                                                                    Jumlah Benih
                                                                </span>
                                                            </div>
                                                            <div class="group-640">
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-27">
                                                                    <th width="30px">:</th>
                                                                    <th>{{ $produksi->sumber_benih }}</th>
                                                                </span>
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-27">
                                                                    <th width="30px">:</th>
                                                                    <th>{{ $produksi->tingkat_kemurnian }}</th>
                                                                </span>
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-27">
                                                                    <th width="30px">:</th>
                                                                    <th>{{ $produksi->tingkat_vigor }}</th>
                                                                </span>
                                                                <span
                                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-27">
                                                                    <th width="30px">:</th>
                                                                    <th>{{ $produksi->jumlah_benih }}</th>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link text-gray ms-auto"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        : <button type="button" class="btn btn-block btn-primary mb-3"
                                            data-bs-toggle="modal" data-bs-target="#modal-qrCode">Detail</button>
                                        <div class="modal fade" id="modal-qrCode" tabindex="-1" role="dialog"
                                            aria-labelledby="modal-qrCode" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="h6 modal-title">QR Code</h2>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p id="qrCodeText" hidden>
                                                            jejakpadi.com/hasil-pengolahan-in/{{ $produksi->id }}</p>
                                                        <p id="qrcode"></p>
                                                        <p id="idPs" hidden></p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link text-gray ms-auto"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>

                            </div>
                            <div class="frame-632">
                                <div class="group-624">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                        PANEN
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        Kode Panen
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Kuantitas
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-17">
                                        Metode
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Catatan
                                    </span>

                                </div>
                                <div class="group-647">
                                    @if ($produksi->panen)
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->panen->id }}</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->panen->quantity }}</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-22">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->panen->metode_panen }}</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-222">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->panen->catatan }}</th>
                                        </span>
                                    @else
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-22">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                    @endif




                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group-636">
                        <div class="group-645">
                            <div class="frame-632">
                                <div class="group-624">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-6">
                                        PRODUK
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        Nama
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Kode Produk
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-17 ">
                                        Foto
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-16">
                                        Harga
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-14">
                                        Deskripsi
                                    </span>

                                </div>
                                <div class="group-635">
                                    @if ($produksi->produk)
                                        <!-- Check if $produksi->produk exists -->
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->produk->nama_produk }}</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->produk->kode_produk }}</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                            <img alt="Image placeholder"
                                                src="{{ asset('assets/img/produk/' . $product->foto) }}"
                                                class="avatar-md rounded">
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-18">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->produk->harga }}</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-15">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->produk->deskripsi }}</th>
                                        </span>
                                    @else
                                        <!-- Handle case where $produksi->produk does not exist -->
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                            <img alt="Image placeholder" src="" class="avatar-md rounded">
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-18">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-15">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                    @endif

                                </div>


                            </div>
                            <div class="frame-633">
                                <div class="group-633">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                        VARIETAS PADI
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        Nama Varietas
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Karakteristik
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                        Kategori
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                        Jenis Musim
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-14">
                                        Lama Tanam
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-14">
                                        Selengkapnya
                                    </span>

                                </div>
                                <div class="group-649">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->padi->varietas ?? 'Tidak ada data' }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->padi->karakteristik_hasil ?? 'Tidak ada data' }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-19">
                                        : <span class="badge bg-warning text-dark">kemarau</span>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-19">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->padi->jenis_musim ?? 'Tidak ada data' }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-19">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->padi->lama_tanam ?? 'Tidak ada data' }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-13">
                                        <div class="accordion" id="accordionPricing">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Keunggulan
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionPricing">
                                                    <div class="accordion-body">
                                                        <th>{{ $produksi->padi->keunggulan ?? 'Tidak ada data' }}
                                                        </th>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Deskripsi
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionPricing">
                                                        <div class="accordion-body">
                                                            <th>{{ $produksi->padi->deskripsi ?? 'Tidak ada data' }}
                                                            </th>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Ketahanan Haman dan Penyakit
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionPricing">
                                                        <div class="accordion-body">
                                                            <th>{{ $produksi->padi->ketahanan_hama_penyakit ?? 'Tidak ada data' }}
                                                            </th>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </span>


                                    {{-- <a href="/pengolahan" class="frame-609">
                                        <div class="group-625">
                                            <div class="back">
                                            </div>
                                            <div class="link-tentang-kami">
                                                Back
                                            </div>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="group-643">


                        <div class="container-21">
                            <div class="frame-632">
                                <div class="group-624">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                        LAHAN PENANAMAN
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        Nama Lahan
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Detail Lokasi
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-25">
                                        Luas
                                    </span>



                                </div>
                                <div class="group-638">


                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->lahan->nama_lahan ?? 'Tidak ada data' }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->lahan->detail_lokasi ?? 'Tidak ada data' }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->lahan->luas ?? 'Tidak ada data' }}</th>
                                    </span>



                                </div>


                            </div>
                            <div class="frame-635">
                                <div class="group-639">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                        MAP
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        <div id='map-lokasi' class="w-100"
                                            style='height: 300px; margin-bottom:20px'>
                                        </div>
                                    </span>
                                    {{-- <p>{{$produksi->lahan->latitude}}</p>
                                    <p>{{$produksi->lahan->longitude}}</p> --}}
                                    <script>
                                        mapboxgl.accessToken =
                                            'pk.eyJ1IjoiZnVhZGFkaGltMjQiLCJhIjoiY2x0ZHNzbDdtMDZyaDJrcDczMnV3emdxaSJ9.ECFyjfuYWvVLH6ya-_P1Vw';
                                        // var latitude = {!! json_encode($produksi->lahan->latitude) !!};
                                        // var map = new mapboxgl.Map({
                                        //     container: `map-lokasi`,
                                        //     style: 'mapbox://styles/mapbox/streets-v12',
                                        //     center: [{{ $produksi->lahan->latitude }}, {{ $produksi->lahan->longitude }}],
                                        //     zoom: 9
                                        // });

                                        // // Tambahkan marker untuk lokasi lahan
                                        // var marker = new mapboxgl.Marker()
                                        //     .setLngLat([{{ $produksi->lahan->latitude }}, {{ $produksi->lahan->longitude }}])
                                        //     .addTo(map);
                                        var map = new mapboxgl.Map({
                                            container: `map-lokasi`,
                                            style: 'mapbox://styles/mapbox/streets-v12',
                                            center: [{{ $produksi->lahan->longitude }}, {{ $produksi->lahan->latitude }}],
                                            zoom: 9
                                        });

                                        // Tambahkan marker untuk lokasi lahan
                                        var marker = new mapboxgl.Marker()
                                            .setLngLat([{{ $produksi->lahan->longitude }}, {{ $produksi->lahan->latitude }}])
                                            .addTo(map);
                                    </script>
                                </div>
                                <div class="group-634">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                        {{-- : IPR00002313 --}}
                                    </span>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="group-644">


                        <div class="container-26">
                            <div class="frame-632">
                                <div class="group-624">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                        PENGUJIAN
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        Derajat Sosoh
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Kadar Air
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-17">
                                        Beras Kepala
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                        Butir Patah
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                        total butir lainnya
                                    </span>

                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                        Butir Gabah
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                        Benda Lain
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                        Keterangan
                                    </span>


                                </div>
                                <div class="group-646">
                                    @if ($produksi->pengujian)
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->derajat_sosoh }}</th>
                                            <th width="30px">%</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->kadar_Air }}</th>
                                            <th width="30px">%</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->beras_kepala }}</th>
                                            <th width="30px">%</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-32">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->butir_patah }}</th>
                                            <th width="30px">%</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->butir_menir_dsb }}</th>
                                            <th width="30px">%</th>
                                            <span class="popover-trigger">info</span>
                                            <span class="popover-content">
                                                <p>total maksimal butir menir, merah,kuning/rusak, kapur</p>
                                            </span>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-33">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->butir_gabah }}</th>
                                            <th width="30px">%</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->butir_lain }}</th>
                                            <th width="30px">%</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-222">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengujian->keterangan }}</th>
                                        </span>
                                    @else
                                        {{-- If $produksi->pengujian is empty or doesn't exist --}}
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-32">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-33">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-26">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                    @endif
                                </div>







                            </div>
                            <div class="frame-636">
                                <div class="group-637">
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                        PENGOLAHAN
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                        Hasil
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Metode
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Lama
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                        Deskripsi
                                    </span>


                                </div>
                                <div class="group-648">
                                    @if ($produksi->pengolahan)
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengolahan->hasil }} Ton</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-35">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengolahan->metode }}</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-91">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengolahan->lama }} Hari</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-223">
                                            <th width="30px">:</th>
                                            <th>{{ $produksi->pengolahan->deskripsi }}</th>
                                        </span>
                                    @else
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                        <span
                                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                            <th width="30px">:</th>
                                            <th>Tidak ada data</th>
                                        </span>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container-18">
                        <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-2">
                            PERAWATAN
                        </span>
                        <div class="tabel-1">
                            <table class="product-table">
                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Jenis Perawatan</th>
                                        <th>Nama Perwatan</th>
                                        <th>Jumlah</th>
                                        <th>Kebutuhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if ($produksi->perawatan->count() > 0)
                                            @foreach ($produksi->perawatan as $perawatan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $perawatan->jenis_perawatan }}</td>
                                        <td>{{ $perawatan->nama_perawatan }}</td>
                                        <td>{{ $perawatan->jumlah }}</td>
                                        <td>{{ $perawatan->kebutuhan }}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Tidak ada data</td>
                                    </tr>
                                    @endif

                                    </tr>
                                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing_page') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('landing_page') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('landing_page') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('landing_page') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing_page') }}/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#modal-qrCode', function() {
                var itemId = $(this).data('id');
                var qrCodeText = $(this).data('qrcode');
                $('#qrCodeText').text(qrCodeText);
                $('#idPs').text(itemId);
                $('#modal-qrCode').modal('show');
            });
            generateQRCode();

            function generateQRCode() {
                // new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");
                var qrCodeText = $('#qrCodeText').text();
                // alert(qrCodeText);
                new QRCode(document.getElementById("qrcode"), qrCodeText);
            };
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popoverTrigger = document.querySelector(".popover-trigger");
            var popoverContent = popoverTrigger.nextElementSibling;

            popoverTrigger.addEventListener("mouseover", function() {
                popoverContent.style.display = "block";
            });

            popoverTrigger.addEventListener("mouseout", function() {
                popoverContent.style.display = "none";
            });
        });
    </script>
    <!-- Core -->
    <script src="{{ asset('volt/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('volt/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
