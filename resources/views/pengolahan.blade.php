<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('volt/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/custom/css/lendingpage2.css') }}" />
</head>

<body>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <div class="pengolahan">
        <div class="rs-fullwidth-wrap-rs-module-wrap-rs-module-rs-slides-rs-slide">
            <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-rs-layer">
            </div>
            <div class="divheader-secondary-outer">
                <div class="list-1">
                    <div class="item-link">
                        <img class="vector-6" src="{{ asset('asset/custom/vectors2/vector2_x2.svg') }}" />
                    </div>
                    <div class="item-link-1">
                        <img class="vector-7" src="{{ asset('asset/custom/vectors2/vector11_x2.svg') }}" />
                    </div>
                    <div class="item-link-2">
                        <img class="vector-8" src="{{ asset('asset/custom/vectors2/vector7_x2.svg') }}" />
                    </div>
                    <div class="item-link-3">
                        <img class="vector-9" src="{{ asset('asset/custom/vectors2/vector_x2.svg') }}" />
                    </div>
                    <div class="item-link-4">
                        <img class="vector-10" src="{{ asset('asset/custom/vectors2/vector1_x2.svg') }}" />
                    </div>
                </div>
                <div class="list-2">
                    <a href="/" class="item-link-kunjungi-ketelsuruan-produk">
                        Kembali ke halaman utama
                    </a>

                    <div class="item-link-5">
                        <img class="vector-11" src="{{ asset('asset/custom/vectors2/vector4_x2.svg') }}" />
                    </div>
                </div>
            </div>


            <div class="header">
                <div class="container-25">
                    <div class="link-asianagri-logo-white-2-png">
                    </div>
                    <div class="container-19">
                        {{-- @if (Route::has('login'))
                            @auth --}}
                        <div class="item-6">
                            <span class="link-hubungi-kami">
                                <a style="color: white; text-decoration:none" href="{{ url('/dashboard') }}">

                                </a>
                            </span>
                        </div>

                        <div class="item-6">
                            <span class="link-media-publikasi-2">
                                <a style="color: white; text-decoration:none" href="{{ route('login') }}">
                                    Masuk
                                </a>
                            </span>
                        </div>
                        {{-- @if (Route::has('register')) --}}
                        <div class="item-7">
                            <span class="link-media-publikasi-3">
                                <a style="color: white; text-decoration:none" href="{{ route('register') }}">
                                    Daftar
                                </a>
                            </span>
                        </div>
                        {{-- @endif
                            @endauth
                        @endif --}}
                        <div class="item-8">
                            <a href="/pengolahan_en" class="link-id">
                                EN
                            </a>

                        </div>
                    </div>

                </div>


                {{-- <div class="list">
                <div class="item-6">
                  <span class="link-hubungi-kami">
                    Masuk
                  </span>
                </div>
                <div class="item-9">
                    <span class="link-daftar">
                      Daftar
                    </span>
                  </div>
                <div class="item-7">
                  <span class="link-id">
                    ID
                  </span>
                </div>

              </div>
            </div> --}}


                <div class="container-30">
                    <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup">
                        Riwayat Ketertelusuran Produk Beras
                    </div>
                    <div class="frame-633">
                        <div class="heading-6">
                            <div class="camera" id="camera">
                            </div>
                            <div class="link-tentang-kami" id="link-tentang-kami" style="cursor: pointer;">
                                Scan QR Code Produk Beras
                            </div>
                            <!-- Button Modal -->

                            <!-- Modal Content -->
                            <div class="modal fade" id="modalNotification" tabindex="-1" role="dialog"
                                aria-labelledby="modalTitleNotify" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title" id="modalTitleNotify">Hasil Pemindaian Kode QR</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <div id="qr-result" class="py-3 text-center"></div>
                                        <!-- Tempat untuk menampilkan pemindai QR -->
                                        <div id="reader" style="width: 600px;"></div> --}}
                                            <div id="qr-reader" style="width:500px"></div>
                                            <div id="qr-reader-results"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Modal Content -->

                        </div>




                        {{-- <div class="popup" id="popup">
                            <div class="popup-content">
                                <span class="close" id="close">&times;</span>
                                <div class="kamera">
                                    Upload File
                                </div>
                                <div class="camera-image"></div>
                            </div>
                        </div>
                        <script>
                            document.getElementById('link-tentang-kami').addEventListener('click', function() {
                                document.getElementById('popup').style.display = 'block';
                            });

                            document.getElementById('close').addEventListener('click', function() {
                                document.getElementById('popup').style.display = 'none';
                            });

                            document.addEventListener('click', function(event) {
                                if (!event.target.closest('.popup') && !event.target.closest('#link-tentang-kami')) {
                                    document.getElementById('popup').style.display = 'none';
                                }
                            });
                        </script> --}}
                    </div>

                    <div class="container-8">
                        <div class="link-tentang-kami-1">
                            atau cari berdasarkan katalog produk
                        </div>
                        <div class="back-arrow">
                        </div>
                    </div>
                </div>


            </div>
            <div class="div-row-bg-wrap-2">
                <div class="container-12">
                    <div class="kotak-pencarian">
                        <div class="elemen-kotak-pencarian">
                            <span class="kotak-pencarian-1">
                                Kotak Pencarian
                            </span>
                        </div>

                        <div class="kotak-pencarian-2">
                            <div class="epsearch">
                                <img class="vector-12" src="{{ asset('asset/custom/vectors2/vector10_x2.svg') }}" />
                            </div>
                            <form action="{{ url('pengolahan') }}" method="get">
                                {{-- <input type="text" class="cari" placeholder="Cari" /> --}}
                                <input class="cari" type="search" name="katakunci"
                                    value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"
                                    aria-label="Search">

                                {{-- <div class="rectangle-213"></div> --}}

                            </form>
                        </div>



                    </div>

                    <div class="tabel-container">
                        <div class="tabel">
                            <table class="product-table">
                                <thead>
                                    <div>
                                        <tr>
                                            <th>Id Produksi</th>

                                            <th>Tanggal Produksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </div>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->tanggal_produksi }}</td>
                                            {{-- <td>{{ $item->produksi ? $item->produksi->tanggal_kedaluwarsa : 'Tidak ada data'}}</td> --}}
                                            <td><a href="/hasil-pengolahan-in/{{ $item->id }}"
                                                    class="detail-button">Detail</a></td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>


                </div>
            </div>
            {{-- <div class="divfooter-outer">
                <div class="container-13">
                    <div class="container-11">
                        <div class="heading-4-ud-tani-rejo">
                            UD Tani Rejo
                        </div>
                        <span class="list-item-link-visi-dan-misi">
                            Visi dan Misi
                        </span>
                        <span class="list-item-link-nilai-nilai-kami">
                            Nilai-nilai Kami
                        </span>
                        <span class="list-item-link-kemitraan-dengan-petani">
                            Kemitraan Dengan Petani
                        </span>
                        <span class="list-item-link-tonggak-sejarah">
                            Tonggak Sejarah
                        </span>
                    </div>
                    <div class="container-15">
                        <div class="heading-4-bisnis-kami">
                            Bisnis Kami
                        </div>
                        <span class="list-item-link-perkebunan">
                            Pertanian
                        </span>
                        <span class="list-item-link-pabrik">
                            Pabrik
                        </span>
                        <span class="list-item-link-produk">
                            Produk
                        </span>
                        <span class="list-item-link-penelitian-dan-pengembangan">
                            Penelitian dan Pengembangan
                        </span>
                        <span class="list-item-link-benih-topaz">
                            Benih Padi
                        </span>
                    </div>

                    <div class="container-17">
                        <div class="heading-4-keberlanjutan">
                            Keberlanjutan
                        </div>
                        <span class="list-item-link-kebijakan-keberlanjutan">
                            Kebijakan Keberlanjutan
                        </span>
                        <span class="list-item-link-laporan-keberlanjutan">
                            Laporan Keberlanjutan
                        </span>
                        <span class="list-item-link-standar-sertifikasi">
                            Standar &amp; Sertifikasi
                        </span>
                        <span class="list-item-link-sistem-ketertelusuran">
                            Sistem Ketertelusuran
                        </span>
                        <span class="list-item-link-program-inisiatif">
                            Program &amp; Inisiatif
                        </span>
                        <span class="list-item-link-pengaduan">
                            Pengaduan
                        </span>
                    </div>
                    <div class="div-col">
                        <div class="heading-4-media-publikasi">
                            Lokasi
                        </div>
                        <span class="list-item-link-siaran-pers">
                            Alamat Lokasi
                        </span>
                    </div>
                </div>

                <div class="divcopyright">
                    <div class="ud-tani-rejo-politeknik-negerri-jember-all-rights-reserved">
                        © 2024 UD Tani Rejo | Politeknik Negerri Jember. All rights reserved.
                    </div>
                    <div class="container-12">
                        <div class="list-item-link">
                            <img class="vector" src="{{ asset('asset/custom/vectorshasilpengolahan/vector5_x2.svg') }}" />
                        </div>
                        <div class="list-item-link-1">
                            <img class="vector-1"
                                src="{{ asset('asset/custom/vectorshasilpengolahan/vector9_x2.svg') }}" />
                        </div>
                        <div class="list-item-link-2">
                            <img class="vector-2"
                                src="{{ asset('asset/custom/vectorshasilpengolahan/vector4_x2.svg') }}" />
                        </div>
                        <div class="list-item-link-3">
                            <img class="vector-3"
                                src="{{ asset('asset/custom/vectorshasilpengolahan/vector11_x2.svg') }}" />
                        </div>
                        <div class="list-item-link-4">
                            <img class="vector-4"
                                src="{{ asset('asset/custom/vectorshasilpengolahan/vector2_x2.svg') }}" />
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="divfooter-outer">
                <div class="container-3">
                    <div class="container-7">
                        <div class="heading-4-ud-tani-rejo">
                            UD Tani Rejo
                        </div>
                        <span class="list-item-link-visi-dan-misi">
                            Visi dan Misi
                        </span>
                    </div>
                    <div class="container">
                        <div class="heading-4-bisnis-kami">
                            Bisnis Kami
                        </div>
                        <span class="list-item-link-perkebunan">
                            Pertanian
                        </span>
                    </div>
                    <div class="container-11">
                        <div class="heading-4-keberlanjutan">
                            Keberlanjutan
                        </div>
                        <span class="list-item-link-kebijakan-keberlanjutan">
                            Kebijakan Keberlanjutan
                        </span>
                    </div>
                    <div class="div-col">
                        <div class="heading-4-media-publikasi">
                            Lokasi
                        </div>
                        <span class="list-item-link-siaran-pers">
                            Alamat Lokasi
                        </span>
                    </div>
                </div>
                <div class="container-9">
                    <span class="list-item-link-nilai-nilai-kami">
                        Nilai-nilai Kami
                    </span>
                    <span class="list-item-link-pabrik">
                        Pabrik
                    </span>
                    <span class="list-item-link-laporan-keberlanjutan">
                        Laporan Keberlanjutan
                    </span>
                </div>
                <div class="container-14">
                    <span class="list-item-link-kemitraan-dengan-petani">
                        Kemitraan Dengan Petani
                    </span>
                    <span class="list-item-link-produk">
                        Produk
                    </span>
                    <span class="list-item-link-standar-sertifikasi">
                        Standar &amp; Sertifikasi
                    </span>
                </div>
                <div class="container-4">
                    <span class="list-item-link-tonggak-sejarah">
                        Tonggak Sejarah
                    </span>
                    <span class="list-item-link-penelitian-dan-pengembangan">
                        Penelitian dan Pengembangan
                    </span>
                    <span class="list-item-link-sistem-ketertelusuran">
                        Sistem Ketertelusuran
                    </span>
                </div>
                <div class="container-1">
                    <span class="list-item-link-benih-topaz">
                        Benih Padi
                    </span>
                    <span class="list-item-link-program-inisiatif">
                        Program &amp; Inisiatif
                    </span>
                </div>
                <div class="list-item-link-pengaduan">
                    Pengaduan
                </div>
                <div class="divcopyright">
                    <div class="ud-tani-rejo-politeknik-negerri-jember-all-rights-reserved">
                        © 2024 UD Tani Rejo | Politeknik Negerri Jember. All rights reserved.
                    </div>
                    <div class="container-13">
                        <div class="list-item-link">
                            <img class="vector" src="{{ asset('asset/custom/vectors2/vector6_x2.svg') }}" />
                        </div>
                        <div class="list-item-link-1">
                            <img class="vector-1" src="{{ asset('asset/custom/vectors2/vector9_x2.svg') }}" />
                        </div>
                        <div class="container-10">
                            <div class="list-item-link-2">
                                <img class="vector-2" src="{{ asset('asset/custom/vectors2/vector5_x2.svg') }}" />
                            </div>
                            <div class="list-item-link-3">
                                <img class="vector-3" src="{{ asset('asset/custom/vectors2/vector12_x2.svg') }}" />
                            </div>
                        </div>
                        <div class="list-item-link-4">
                            <img class="vector-4" src="{{ asset('asset/custom/vectors2/vector3_x2.svg') }}" />
                        </div>
                    </div>
                </div>
            </div> --}}

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

            <!-- Custom Script to trigger the modal -->
            <script>
                document.getElementById('link-tentang-kami').addEventListener('click', function() {
                    var modal = new bootstrap.Modal(document.getElementById('modalNotification'));
                    modal.show();
                });
            </script>
            <script src="{{ asset('volt/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
            <script src="{{ asset('volt/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <script src="/html5-qrcode.min.js"></script>
            <script>
                function docReady(fn) {
                    // see if DOM is already available
                    if (document.readyState === "complete" ||
                        document.readyState === "interactive") {
                        // call on next available tick
                        setTimeout(fn, 1);
                    } else {
                        document.addEventListener("DOMContentLoaded", fn);
                    }
                }

                docReady(function() {
                    var resultContainer = document.getElementById('qr-reader-results');
                    var lastResult, countResults = 0;

                    function onScanSuccess(decodedText, decodedResult) {
                        if (decodedText !== lastResult) {
                            ++countResults;
                            lastResult = decodedText;
                            // Handle on success condition with the decoded message.
                            console.log(`Scan result ${decodedText}`, decodedResult);
                        }
                    }

                    var html5QrcodeScanner = new Html5QrcodeScanner(
                        "qr-reader", {
                            fps: 10,
                            qrbox: 250
                        });
                    html5QrcodeScanner.render(onScanSuccess);
                });
            </script>
</body>

</html>
