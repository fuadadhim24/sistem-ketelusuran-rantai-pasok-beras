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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
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
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                    <a href="{{ route('products') }}" class="nav-item nav-link">Products</a>
                    <a href="{{ route('pengolahan_en.index') }}" class="nav-item nav-link active">Traceability</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="{{ route('pengolahan_in') }}">
                        IN
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Traceability</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Traceability</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Rice Traceability</h1>
                <p>Explore grade and traceability for UD Tani Rejo rice products from source to market.</p>
            </div>
            <div class="row g-2">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landing_page') }}img/icon-1.png" alt="">
                        <h4 class="mb-3">Upload QR Code</h4>
                        <p class="mb-4">Have a QR code on your UD Tani Rejo rice packaging? Upload it here to learn
                            more about its origin and journey.</p>
                        <input type="file" id="uploadFileInput" class="mb-4" accept="image/*">
                        <button id="scanButton" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill"
                            onclick="handleFileUpload()">Scan File</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('landing_page') }}img/icon-2.png" alt="">
                        <h4 class="mb-3">Scan QR Code</h4>
                        <p class="mb-4">Prefer scanning? Use your smartphone to scan the QR code on your UD Tani Rejo
                            rice packaging for instant access to its traceability details.</p>
                        <button class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" onclick="openCameraModal()">Open Camera</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="closeCameraModal()"></button>
                </div>
                <div class="modal-body">
                    <video id="webcam-preview"></video>
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


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <img class="mb-4" src="{{ asset('asset/custom/img/landingpage/ic_logo_2.png') }}"
                        alt="logo_ud" />
                    <p>Find the best produce straight from our farms to your table. We are committed to quality and
                        sustainability.</p>
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
                    <h4 class="text-light mb-4">Address</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Jenggawah Village, Jember, Indonesia</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+087 840 19095</p>
                    <p><i class="fa fa-envelope me-3"></i>jejakpadi@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('products') }}">Product</a>
                    <a class="btn btn-link" href="{{ route('pengolahan') }}">Traceability</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="mailto:jejakpadi@gmail.com">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Contact Us</h4>
                    <p>Fastest access to connect with JejakPadi.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <a href="mailto:jejakpadi@gmail.com" class="btn btn-primary rounded-pill px-sm-4 ms-3"
                            target="_blank" rel="noopener noreferrer">Email</a>
                        <a href="https://wa.me/6287840199095" class="btn btn-secondary rounded-pill px-sm-4 ms-3"
                            target="_blank" rel="noopener noreferrer">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">JejakPadi</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Distributed By: <a href="#" target="_blank">UD Tani Rejo</a>
                        <br>Supported By <a href="https://www.instagram.com/pkmpi.jejakpadi/">PKM-PI JejakPadi</a>
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
</body>

</html>
