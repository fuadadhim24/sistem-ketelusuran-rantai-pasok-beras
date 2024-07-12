<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JejakPadi | beras terstandar lisensi ekspor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('asset/custom/img/landingpage/ic_logo_1.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/`2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

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

    {{-- traceability --}}
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
    <script src="https://unpkg.com/quagga"></script>
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
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="/">
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landing_page') }}/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Temukan Beras Premium Indonesia
                                    </h1>
                                    <a href="{{ route('products') }}"
                                        class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Jelajahi
                                        Produk</a>
                                    <a href="{{ route('about') }}"
                                        class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Pelajari Tentang Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('landing_page') }}/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Rasakan Keunggulan Beras Indonesia</h1>
                                    <a href="{{ route('products') }}"
                                        class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Jelajahi
                                        Produk</a>
                                    <a href="{{ route('about') }}"
                                        class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Pelajari Tentang Kami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('landing_page') }}/img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Temukan Beras Indonesia Kualitas Premium dan Medium</h1>
                    <p class="mb-4">Kami berdedikasi untuk memberikan Anda beras dengan kualitas terbaik dari Indonesia.
                         Komitmen kami terhadap kesempurnaan memastikan bahwa setiap butir beras memenuhi standar
                          yang ketat, sehingga memberikan Anda pengalaman kuliner yang menyenangkan</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Dipilih dari lahan-lahan terbaik di Indonesia</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Diproses di bawah kontrol kualitas yang ketat</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Tersedia dalam kelas premium dan menengah</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Traceability Start -->
    <style>
        .modal-dialog {
            max-width: 50%;
            height: 90vh;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 5vh;
        }

        .modal-body {
            height: 80%;
        }

        .modal-content {
            width: 80%;
            height: 80%;
            margin: auto;
        }

        #cameraPreview,
        #scanner-container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
        }

        #webcam-preview {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .modal-dialog {
                max-width: 100%;
                max-height: 50%;
                margin-top: 0;
            }

            .modal-body {
                height: 50%;
            }

            .modal-content {
                width: 80%;
                height: 50%;
                margin: auto;
            }
        }
    </style>
    <!-- HTML structure -->
    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 1000px;">
                <h1 class="display-5 mb-3">Ketertelusuran Beras</h1>
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <a href="{{ asset('asset/custom/img/landingpage2/traceability.jpg') }}"
                                class="popup-link">
                                <img class="img-fluid w-100"
                                    src="{{ asset('asset/custom/img/landingpage2/traceability.jpg') }}"
                                    alt="Traceability Image" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                            <p class="mb-4" style="font-size: 16px; line-height: 1.6;">Kami mematuhi standar Ketertulusuran yang ditetapkan oleh <span
                                    style="background-color: #f1c40f; color: #333; padding: 2px 5px; border-radius: 3px;">Permentan
                                    No. 31 Tahun 2017</span>, memastikan transparansi dan akuntabilitas di seluruh rantai pasokan kami.
                                    Sistem penelusuran kami memungkinkan kami untuk melacak setiap batch beras dari asalnya
                                     di Indonesia melalui tahap budidaya, pemrosesan, dan pengemasan. Hal ini memastikan
                                     bahwa beras kami memenuhi standar klasifikasi kualitas ekspor yang diamanatkan oleh
                                     peraturan pertanian Indonesia.</p>
                            <p style="font-size: 14px; font-style: italic;">Rasakan keunggulan beras Indonesia bersama kami,
                                di mana setiap butirnya mencerminkan komitmen kami terhadap kualitas, integritas, dan
                                pengalaman kuliner yang unggul.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        {{-- <img class="img-fluid mb-4" src="{{ asset('landing_page') }}img/icon-1.png" alt=""> --}}
                        <h4 class="mb-3">Unggah Kode QR</h4>
                        <p class="mb-4">Punya kode QR pada kemasan beras UD Tani Rejo Anda? Unggah di
                             sini untuk mengetahui lebih lanjut tentang asal usul dan perjalanannya.</p>
                        <input type="file" id="uploadFileInput" class="mb-4" accept="image/*">
                        <button id="scanButton" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill"
                            onclick="handleFileUpload()">Memindai File</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        {{-- <img class="img-fluid mb-4" src="{{ asset('landing_page') }}img/icon-2.png" alt=""> --}}
                        <h4 class="mb-3">Pindai Kode QR</h4>
                        <p class="mb-4">Lebih suka memindai? Gunakan ponsel cerdas Anda untuk memindai kode QR pada kemasan
                             beras UD Tani Rejo untuk mendapatkan akses cepat ke detail penelusuran.</p>
                        <button class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" onclick="openCameraModal()">Buka Kamera</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Judul Modal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="closeCameraModal()"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="webcam-preview" class="embed-responsive-item"></video>
                    </div>
                    <p id="result"></p>
                    <script>
                        let codeReader = null;

                        function openCameraModal() {
                            codeReader = new ZXing.BrowserQRCodeReader();
                            codeReader.decodeFromVideoDevice(null, 'webcam-preview', (result, err) => {
                                if (result) {
                                    window.location.href = result.text;
                                }
                                if (err) {
                                    if (err instanceof ZXing.NotFoundException) {
                                        console.log('No QR code found.');
                                    } else if (err instanceof ZXing.ChecksumException) {
                                        console.log('A code was found, but its read value was not valid.');
                                    } else if (err instanceof ZXing.FormatException) {
                                        console.log('A code was found, but it was in an invalid format.');
                                    } else {
                                        console.error('Error:', err);
                                    }
                                }
                            });
                        }

                        function closeCameraModal() {
                            if (codeReader) {
                                codeReader.reset();
                                codeReader.stopStreams();
                                codeReader = null;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript for QR Code functionalities -->
    <script>
        function handleScanResult(resultText) {
            // Assuming resultText is a valid URL
            window.location.href = resultText;
        }

        function handleFileUpload() {
            var fileInput = document.getElementById('uploadFileInput');
            var file = fileInput.files[0];

            if (file) {
                document.getElementById('scanButton').textContent = 'To Destination Page';
                const codeReader = new ZXing.BrowserQRCodeReader();
                const imgUrl = URL.createObjectURL(file);
                codeReader
                    .decodeFromImage(undefined, imgUrl)
                    .then(result => {
                        handleScanResult(result.text);
                    })
                    .catch(err => console.error(err));
            }
        }
    </script>
    {{-- end-javascript --}}
    <!-- Traceability End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Fitur Kami</h1>
                <p>Temukan mengapa beras Indonesia kami menonjol di antara yang lain</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landing_page') }}/img/icon-1.png" alt="">
                        <h4 class="mb-3">Pemrosesan Alami</h4>
                        <p class="mb-4">Beras kami menggunakan teknik pengolahan
                             alami untuk menjaga kualitas dan nilai gizinya.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landing_page') }}/img/icon-2.png" alt="">
                        <h4 class="mb-3">Standar Kualitas Tinggi</h4>
                        <p class="mb-4">Kami menjunjung tinggi standar kualitas yang ketat untuk memastikan
                            bahwa beras kami memenuhi ekspektasi kualitas premium.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landing_page') }}/img/icon-3.png" alt="">
                        <h4 class="mb-3">Ketertelusuran dan Keamanan</h4>
                        <p class="mb-4">Beras kami aman secara biologis dan dapat
                            dilacak, memastikan transparansi dan kepercayaan konsumen.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Varietas Padi Kami</h1>
                        <p>Jelajahi pilihan beras premium dan beras Indonesia kelas menengah kami.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                                href="#tab-1">Premium</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill"
                                href="#tab-2">Medium</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @forelse ($produkPremium as $index => $product)
                            @php
                                // Hitung ulang index untuk mengatur delay
                                $delay = ($index % 4) * 0.2 + 0.1;
                            @endphp
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="{{ $delay }}s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('landing_page') }}/img/{{ $product->foto }}"
                                            alt="">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Baru</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="">{{ $product->nama_produk }}</a>
                                        <span class="text-primary me-1">Rp. {{ $product->harga }}</span>
                                        {{-- <span class="text-body text-decoration-line-through">$29.00</span> --}}
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="w-50 text-center border-end py-2">
                                            <a class="text-body" href=""><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat Detail</a>
                                        </small>
                                        <small class="w-50 text-center py-2">
                                            <a class="text-body" href=""><i
                                                    class="fa fa-shopping-bag text-primary me-2"></i>Pesan Sekarang</a>
                                        </small>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <div class="col-xl-12 col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="/">Cobalah untuk Menyegarkan</a>
                                        <span class="text-primary me-1">Tidak Ada Entri Data</span>
                                        {{-- <span class="text-body text-decoration-line-through">$29.00</span> --}}
                                    </div>
                                </div>
                            </div>
                        @endforelse

                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Jelajahi Lebih Banyak Produk</a>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @forelse ($produkMedium as $index => $product)
                            @php
                                // Hitung ulang index untuk mengatur delay
                                $delay = ($index % 4) * 0.2 + 0.1;
                            @endphp
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay="{{ $delay }}s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('landing_page') }}/img/{{ $product->foto }}"
                                            alt="">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Baru</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="">{{ $product->nama_produk }}</a>
                                        <span class="text-primary me-1">Rp. {{ $product->harga }}</span>
                                        {{-- <span class="text-body text-decoration-line-through">$29.00</span> --}}
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="w-50 text-center border-end py-2">
                                            <a class="text-body" href=""><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat Detail</a>
                                        </small>
                                        <small class="w-50 text-center py-2">
                                            <a class="text-body" href=""><i
                                                    class="fa fa-shopping-bag text-primary me-2"></i>Pesan Sekarang</a>
                                        </small>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <div class="col-xl-12 col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="/">Cobalah untuk Menyegarkan</a>
                                        <span class="text-primary me-1">Tidak Ada Entri Data</span>
                                        {{-- <span class="text-body text-decoration-line-through">$29.00</span> --}}
                                    </div>
                                </div>
                            </div>
                        @endforelse

                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Jelajahi Lebih Banyak Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Product End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Jelajahi Pertanian Kami</h1>
                    <p class="text-white mb-0">Berdasarkan hasil wawancara yang dilakukan pada
                         tanggal 17 Februari 2024, UD Tani Rejo memiliki peran strategis dalam
                          menjamin kualitas beras yang diekspor melalui manajemen yang sesuai
                          dengan standar prosedur operasional yang dimiliki. Setiap tahapan
                          produksi dan distribusi beras dicatat secara transparan dan
                          terdokumentasi. Informasi mengenai asal usul beras, proses pengolahan, dan
                           kondisi penyimpanan dapat diakses melalui catatan yang disampaikan secara
                            lisan.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5"
                        href="https://maps.app.goo.gl/5SaVWbzJNhodxAJ28" target="_blank">Kunjungi Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Testimoni Pelanggan</h1>
                <p>Pelanggan kami menyukai produk dan layanan kami. Inilah yang mereka katakan tentang kami:</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Pengalaman yang luar biasa dengan UD Tani Rejo! Komitmen mereka terhadap kualitas dan
                        transparansi dalam produk mereka patut dipuji. Saya sangat merekomendasikan mereka!"</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle"
                            src="{{ asset('landing_page') }}/img/testimonial-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">John Doe</h5>
                            <span>CEO, Tech Solutions Inc.</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"UD Tani Rejo menyediakan layanan yang sangat baik dan produk mereka adalah yang terbaik
                        . Kami   senang dengan profesionalisme mereka dan pasti akan memilih mereka lagi!"</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle"
                            src="{{ asset('landing_page') }}/img/testimonial-2.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Jane Smith</h5>
                            <span>Marketing Manager, Global Foods Ltd.</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Saya terkesan dengan kualitas dan rasa produk dari UD Tani Rejo. Dedikasi
                         mereka  dedikasi mereka terhadap kesegaran dan keberlanjutan benar-benar luar biasa."</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle"
                            src="{{ asset('landing_page') }}/img/testimonial-3.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Michael Brown</h5>
                            <span>Food Critic, Tasting Times</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Produk UD Tani Rejo telah melampaui harapan kami.
                         Komitmen mereka terhadap kualitas dan kepuasan pelanggan tidak tertandingi."</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle"
                            src="{{ asset('landing_page') }}/img/testimonial-4.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Emily Davis</h5>
                            <span>Executive Chef, Gourmet Eats</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Blog Terbaru</h1>
                <p>Jelajahi wawasan dan tips terbaru kami tentang pertanian dan pertanian organik.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('asset/custom/img/landingpage2/konten-1.jpg') }}"
                        alt="" style="object-fit: cover; width: 100%; height: 215.25px;">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4"
                            href="https://berkatgroup.com/2020/12/07/9-beras-produksi-jember-berkualitas-terbaik/"
                            target="_blank">Beras Kualitas Terbaik Diproduksi di Jember</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            {{-- <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>12 Jan, 2024</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('asset/custom/img/landingpage2/konten-2.jpg') }}"
                        alt="" style="object-fit: cover; width: 100%; height: 215.25px;">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4"
                            href="https://www.facebook.com/SyngentaIndonesia/videos/kabupaten-jember-terkenal-sebagai-salah-satu-lumbung-padi-nasional-menurut-data-/994014561749720/"
                            target="_blank">Petani Jember Berhasil Kembangkan Varietas Padi Unggul Baru</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            {{-- <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>05 Jan, 2024</small> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('asset/custom/img/landingpage2/konten-3.jpg') }}"
                        alt="" style="object-fit: cover; width: 100%; height: 215.25px;">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4"
                            href="https://javara.co.id/javaras-heritage-rice-unique-heirloom-rice-from-indonesia/"
                            target="_blank">Beras Pusaka Javara : Beras Pusaka Unik dari Indonesia</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            {{-- <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2024</small> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <img class="mb-4" src="{{ asset('asset/custom/img/landingpage/ic_logo_2.png') }}"
                        alt="logo_ud" />
                    <p>Temukan hasil bumi terbaik langsung dari perkebunan kami ke meja Anda.
                        Kami berkomitmen terhadap kualitas dan keberlanjutan.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Jenggawah Village, Jember, Indonesia</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+087 840 19095</p>
                    <p><i class="fa fa-envelope me-3"></i>jejakpadi@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Tautan Cepat</h4>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Kontak Kami</a>
                    <a class="btn btn-link" href="">Layanan Kami</a>
                    <a class="btn btn-link" href="">Syarat & Ketentuan</a>
                    <a class="btn btn-link" href="">Bantuan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Buletin</h4>
                    <p>Berlangganan buletin kami untuk mendapatkan informasi terbaru mengenai produk segar dan kiat-kiat pertanian.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">JejakPadi</a>, Semua Hak Cipta Dilindungi Undang-Undang.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Dirancang oleh <a href="https://www.instagram.com/pkmpi.jejakpadi/">PKM-PI JejakPadi</a>
                        <br>Didistribusikan oleh: <a href="#" target="_blank">UD Tani Rejo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.popup-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
</body>

</html>
