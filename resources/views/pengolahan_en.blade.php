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
    <link rel="stylesheet" href="{{ asset('asset/custom/css/lendingpage2.css') }}" />
</head>

<body>
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
                    <a href="/welcome_en"class="item-link-kunjungi-ketelsuruan-produk">
                        Back to Main Page</a>

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
                        @if (Route::has('login'))
                            @auth
                                <div class="item-6">
                                    <span class="link-hubungi-kami">
                                        <a style="color: white; text-decoration:none" href="{{ url('/dashboard') }}">

                                        </a>
                                    </span>
                                </div>
                                <div class="item-6">
                                    <span class="link-media-publikasi-2">
                                        <a style="color: white; text-decoration:none" href="{{ route('login') }}">
                                            Login
                                        </a>
                                    </span>
                                </div>

                                @if (Route::has('register'))
                                    <div class="item-7">
                                        <span class="link-media-publikasi-3">
                                            <a style="color: white; text-decoration:none" href="{{ route('register') }}">
                                                Register
                                            </a>
                                        </span>
                                    </div>
                                @endif
                            @endauth
                        @endif
                        <div class="item-8">
                            <a href="/pengolahan" class="link-id">
                                ID
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
                        Rice Product Traceability History
                    </div>
                    <div class="frame-633">
                        <div class="heading-6">
                            <div class="camera" id="camera">
                            </div>
                            <div class="link-tentang-kami" id="link-tentang-kami">
                                Scan QR Code of Rice Products
                            </div>
                        </div>

                        <div class="popup" id="popup">
                            <div class="popup-content">
                                <span class="close" id="close">&times;</span>
                                <div class="kamera">
                                    File Upload
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
                        </script>
                    </div>

                    <div class="container-8">
                        <div class="link-tentang-kami-1">
                            or search by product catalog
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
                                Search Box
                            </span>
                        </div>
                        <p class="masukkan-kode-produk-kemudian-klik-cari">
                            <span class="masukkan-kode-produk-kemudian-klik-cari-sub-0"></span><span></span>
                        </p>
                        <div class="kotak-pencarian-2">
                            <div>
                                <input type="text" class="cari" placeholder="Cari" />
                            </div>
                            {{-- <div class="rectangle-213"></div> --}}
                            <div class="epsearch">
                                <img class="vector-12" src="{{ asset('asset/custom/vectors2/vector10_x2.svg') }}" />
                            </div>
                        </div>


                        {{-- <div class="kotak-pencarian-2">
                    <div class="rectangle-212">
                    </div>
                    <div class="rectangle-213">
                    </div>
                    <div class="epsearch">
                      <img class="vector-12" src="{{ asset('asset/custom/vectors2/vector10_x2.svg') }}" />
                    </div>
                    <span class="cari">
                      Cari
                    </span>
                  </div> --}}
                    </div>
                    {{-- <div class="tabel">
                  <div class="container-2">
                    <div class="container-6">
                      <div class="rectangle-2131">
                      </div>
                    </div>
                    <div class="rectangle-215">
                    </div>
                  </div>
                  <div class="rectangle-214">
                  </div>
                  <div class="rectangle-204">
                  </div>
                  <div class="frame-611">
                    <div class="frame-626">
                      <span class="kode-produk">
                        Kode Produk
                      </span>
                      <span class="z">
                        ABC123F
                      </span>
                      <span class="z-1">
                        DSR23XA
                      </span>
                      <span class="z-2">
                        XCA62ZA
                      </span>
                    </div>
                    <div class="group-627">
                      <span class="bps-setra-ramos">
                        BPS Setra Ramos
                      </span>
                      <span class="hariku">
                        Hariku
                      </span>
                      <span class="pawon-mas">
                        Pawon Mas
                      </span>
                      <span class="nama-produk">
                        Nama Produk
                      </span>
                    </div>
                    <div class="group-629">
                      <span class="agustus-2024">
                        27 Agustus 2024
                      </span>
                      <span class="agustus-20241">
                        27 Agustus 2024
                      </span>
                      <span class="maret-2024">
                        11 Maret 2024
                      </span>
                      <span class="tanggal-kadaluasa">
                        Tanggal Kadaluarsa
                      </span>
                    </div>
                    <div class="group-630">
                      <a href="/detailpengolahan" class="rectangle-2141">
                          <!-- Konten di dalam tautan -->
                      </a>
                      <a href="/detailpengolahan" class="rectangle-2151">
                          <!-- Konten di dalam tautan -->
                      </a>
                      <a href="/detailpengolahan" class="rectangle-216">
                          <!-- Konten di dalam tautan -->
                      </a>

                      <span class="detail">
                        Detail
                      </span>
                      <span class="detail-1">
                        Detail
                      </span>
                      <span class="detail-2">
                        Detail
                      </span>
                      <span class="aksi">
                        Aksi
                      </span>
                    </div>
                  </div>
                </div> --}}
                    <div class="tabel">
                        <table class="product-table">
                            <thead>
                                <div>
                                    <tr>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Expiration Date</th>
                                        <th>Action</th>
                                    </tr>
                                </div>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ABC123F</td>
                                    <td>BPS Setra Ramos</td>
                                    <td>27 Agustus 2024</td>
                                    <td><a href="/detailpengolahan_en" class="detail-button">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>DSR23XA</td>
                                    <td>Hariku</td>
                                    <td>27 Agustus 2024</td>
                                    <td><a href="/detailpengolahan_en" class="detail-button">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>XCA62ZA</td>
                                    <td>Pawon Mas</td>
                                    <td>11 Maret 2024</td>
                                    <td><a href="/detailpengolahan_en" class="detail-button">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <div class="divfooter-outer">
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
                <div class="container-9">
                    {{-- <span class="list-item-link-nilai-nilai-kami">
                  Nilai-nilai Kami
                </span> --}}
                    {{-- <span class="list-item-link-kemitraan-dengan-petani">
                    Kemitraan Dengan Petani
                  </span> --}}
                    {{-- <span class="list-item-link-produk">
                    Produk
                  </span> --}}
                    {{-- <span class="list-item-link-standar-sertifikasi">
                    Standar &amp; Sertifikasi
                  </span> --}}
                    {{-- <span class="list-item-link-pabrik">
                  Pabrik
                </span> --}}
                    {{-- <span class="list-item-link-laporan-keberlanjutan">
                  Laporan Keberlanjutan
                </span> --}}
                </div>
                <div class="container-7">
                    {{-- <span class="list-item-link-kemitraan-dengan-petani">
                  Kemitraan Dengan Petani
                </span> --}}
                    {{-- <span class="list-item-link-produk">
                  Produk
                </span>
                <span class="list-item-link-standar-sertifikasi">
                  Standar &amp; Sertifikasi
                </span> --}}
                </div>
                <div class="container-10">
                    {{-- <span class="list-item-link-tonggak-sejarah">
                  Tonggak Sejarah
                </span> --}}
                    {{-- <span class="list-item-link-penelitian-dan-pengembangan">
                  Penelitian dan Pengembangan
                </span> --}}
                    {{-- <span class="list-item-link-sistem-ketertelusuran">
                  Sistem Ketertelusuran
                </span> --}}
                </div>
                {{-- <div class="container-5"> --}}
                {{-- <span class="list-item-link-benih-topaz">
                  Benih Padi
                </span> --}}
                {{-- <span class="list-item-link-program-inisiatif">
                  Program &amp; Inisiatif
                </span>
              </div>
              <div class="list-item-link-pengaduan">
                Pengaduan
              </div> --}}
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
            </div>
</body>

</html>
