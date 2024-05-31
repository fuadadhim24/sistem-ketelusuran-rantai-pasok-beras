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
    <link rel="stylesheet" href="{{ asset('asset/custom/css/hasilpengolahan.css') }}" />
</head>

<body>
    <div class="hasil-pengolahan">
        <div class="rs-fullwidth-wrap-rs-module-wrap-rs-module-rs-slides-rs-slide">
            <div class="header">

                <div class="container-25">
                    <div class="link-asianagri-logo-white-2-png">
                    </div>
                    <div class="container-19">
                        {{-- @if (Route::has('login'))
                            @auth --}}
                        <div class="item-6">
                            <span class="link-hubungi-kami">
                                <a style="color:black; text-decoration:none" href="{{ url('/dashboard') }}">

                                </a>
                            </span>
                        </div>
                        <div class="item-6">
                            <span class="link-media-publikasi-2">
                                <a style="color: black; text-decoration:none" href="{{ route('login') }}">
                                    Login
                                </a>
                            </span>
                        </div>
                        {{-- @if (Route::has('register')) --}}
                        <div class="item-7">
                            <span class="link-media-publikasi-3">
                                <a style="color: black; text-decoration:none" href="{{ route('register') }}">
                                    Register
                                </a>
                            </span>
                        </div>
                        {{-- @endif
                            @endauth
                        @endif --}}
                        <div class="item-8">
                            <a href="/detailpengolahan"class="link-id">
                                ID
                            </a>

                        </div>
                    </div>

                </div>
                {{-- <div class="link-asianagri-logo-white-2-png">
            </div> --}}

                {{-- <div class="list-2">
              <div class="item-5">
                <span class="link-hubungi-kami">
                  Masuk
                </span>
              </div>
              <div class="item-8">
                <span class="link-id">
                  Daftar
                </span>
              </div>
              <div class="item-6">
                <span class="link-id">
                  ID
                </span>
              </div>
            </div> --}}
            </div>
            <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup">
                Rice Product Traceability History
            </div>
            {{-- <div class="container-2">
            <div class="rectangle-204">
            </div>
            <div class="container-6">
              <div class="container-3">
                <span class="container-1">
                  1
                </span>
                <span class="ciherang">
                  Ciherang
                </span>
              </div>
              <span class="kg">
                1200 Kg
              </span>
            </div>
            <div class="container-4">
              <div class="rectangle-207">
              </div>
            </div>
            <div class="rectangle-206">
            </div>
          </div> --}}
            {{-- <div class="group-621">
            <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-4">
              Catatan
            </span>
            <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-3">
              : -
            </div>
          </div> --}}
            <div class="rs-fullwidth-wrap-rs-module-wrap-rs-module-rs-slides-rs-slide-1">
                <div class="group-636">
                    <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                        Traceability Details
                    </span>
                    <div class="container-14">
                        <div class="frame-632">
                            <div class="group-624">
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                    Traceability Code
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                    Date of Traceability
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                    Status
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-14">
                                    Type of Traceability
                                </span>
                                <a href="/pengolahan_en" class="frame-609">
                                    <div class="group-625">
                                        <div class="back">
                                        </div>
                                        <div class="link-tentang-kami">
                                            Back
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="group-635">
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                    : IPR00002313
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                    : 17 November 2023
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                    : Selesai Diolah
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-13">
                                    : 1. Pemecahan Kulit<br />
                                    {{-- <span class="separasi-1">
                            2.Separasi
                        </span> --}}
                                    &nbsp;&nbsp;2. Separasi<br />
                                    &nbsp;&nbsp;3.Penyosohan<br />
                                    &nbsp;&nbsp;4.Grading<br />
                                    &nbsp;&nbsp;5.Pengemasan<br />
                                    &nbsp;&nbsp;6.Lainnya ( Pengeringan (60°C) - Pecah Kulit - Separasi - Penyosohan -
                                    Grading - Sortasi - Pengemasan)
                                </span>
                            </div>
                            <div class="container-15">
                                <div
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-6">
                                    List of Traceability Materials
                                </div>
                                {{-- <div class="tabel-2">
                          <div class="rectangle-2091">
                          </div>
                          <div class="rectangle-2043">
                          </div>
                          <div class="rectangle-2071">
                          </div>
                          <span class="no">
                            No
                          </span>
                          <span class="no-1">
                            1
                          </span>

                          <span class="ciherang-1">
                            Ciherang
                          </span>
                          <span class="kg-1">
                            1200 Kg
                          </span>
                          <span class="varietas-1">
                            Varietas
                          </span>
                          <span class="kuantitas-1">
                            Kuantitas
                          </span>
                          <div class="rectangle-2061">
                          </div>
                        </div> --}}
                                <div class="tabel-2">
                                    <table class="product-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Varieties</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ciherang</td>
                                                <td>1200 Kg</td>
                                            </tr>
                                            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="container-1">
              <div class="tabel">
                <div class="rectangle-211">
                </div>
                <div class="rectangle-2041">
                </div>
                <div class="frame-611">
                  <div class="group-626">
                    <span class="no">
                      No
                    </span>
                    <span class="container-3">
                      1
                    </span>
                  </div>
                  <div class="group-627">
                    <span class="nama-produk">
                      Nama Produk
                    </span>
                    <span class="bps-setra-ramos">
                      BPS Setra Ramos
                    </span>
                  </div>
                  <div class="group-628">
                    <span class="kode-produksi">
                      Kode Produksi
                    </span>
                    <span class="cxba-02-d">
                      CXBA02D
                    </span>
                  </div>
                  <div class="group-629">
                    <span class="kemasan">
                      Kemasan
                    </span>
                    <span class="high-density-polyethylene-hdpe">
                      High Density Polyethylene (HDPE)
                    </span>
                  </div>
                  <div class="group-630">
                    <span class="jumlah">
                      Jumlah
                    </span>
                    <span class="pcs">
                      235 Pcs
                    </span>
                  </div>
                  <div class="group-631">
                    <span class="tanggal-pengemasan">
                      Tanggal Pengemasan
                    </span>
                    <span class="november-2023">
                      17 November 2023
                    </span>
                  </div>
                  <div class="group-632">
                    <span class="qr-code">
                      QR Code
                    </span>
                    <div class="group-639">
                      <div class="rectangle-214">
                      </div>
                      <span class="lihat-qr-code">
                        Lihat QR Code
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
                <div class="container-1">
                    <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-1">
                        List of Traceability Results
                    </span>
                    <div class="tabel">
                        <table class="product-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>Production Code</th>
                                    <th>Packaging</th>
                                    <th>Quantity</th>
                                    <th>Packaging Date</th>
                                    <th>QR Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>BPS Setra Ramos</td>
                                    <td>CXBA02D</td>
                                    <td>High Density Polyethylene (HDPE)</td>
                                    <td>235 Pcs</td>
                                    <td>17 November 2023</td>
                                    <td>
                                        <a href="#" class="qr-code-link">Lihat QR Code</a>
                                    </td>
                                </tr>
                                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- <div class="container-16">
                <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-2">
                    Daftar Hasil Pengujian
                  </span>
              <div class="tabel-1">
                <div class="rectangle-2111">
                </div>
                <div class="rectangle-2042">
                </div>
                <div class="frame-6111">
                  <div class="group-6261">
                    <span class="no" style="
                    font-weight:700;
                    font-size: 16px;
                    color: white;
                    margin: 30px 0 0px 0;">
                        No
                      </span>
                      <span class="container-3">
                        1
                      </span>
                  </div>
                  <div class="group-6271">
                    <span class="tanggal-pengujian">
                      Tanggal Pengujian
                    </span>
                    <span class="bps-setra-ramos-1">
                      BPS Setra Ramos
                    </span>
                  </div>
                  <div class="group-6291">
                    <span class="tanggal-kadaluarsa">
                      Tanggal Kadaluarsa
                    </span>
                    <span class="desember-2023">
                      11 Desember 2023
                    </span>
                  </div>
                  <div class="group-6301">
                    <span class="mutu">
                      Mutu
                    </span>
                    <span class="premium">
                      Premium
                    </span>
                  </div>
                  <div class="frame-631">
                    <div class="detail">
                      Detail
                    </div>
                    <div class="group-638">
                      <div class="rectangle-2141">
                      </div>
                      <span class="detail-1">
                        Detail
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
                <div class="container-16">
                    <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-2">
                        List of Testing Results
                    </span>
                    <div class="tabel-1">
                        <table class="product-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>Expiration Date</th>
                                    <th>Quality</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>BPS Setra Ramos</td>
                                    <td>11 Desember 2023</td>
                                    <td>Premium</td>
                                    <td><a href="#" class="detail-button">Detail</a></td>
                                </tr>
                                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
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
                <div class="container-8">
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
        <div class="divheader-secondary-outer">
            <div class="list">
                <div class="item-link">
                    <img class="vector-5" src="{{ asset('asset/custom/vectorshasilpengolahan/vector7_x2.svg') }}" />
                </div>
                <div class="item-link-1">
                    <img class="vector-6" src="{{ asset('asset/custom/vectorshasilpengolahan/vector1_x2.svg') }}" />
                </div>
                <div class="item-link-2">
                    <img class="vector-7" src="{{ asset('asset/custom/vectorshasilpengolahan/vector3_x2.svg') }}" />
                </div>
                <div class="item-link-3">
                    <img class="vector-8" src="{{ asset('asset/custom/vectorshasilpengolahan/vector_x2.svg') }}" />
                </div>
                <div class="item-link-4">
                    <img class="vector-9" src="{{ asset('asset/custom/vectorshasilpengolahan/vector10_x2.svg') }}" />
                </div>
            </div>
            <div class="list-1">
                <span class="item-link-kunjungi-ketelsuruan-produk">
                    Visit Product Traceability
                </span>
                <div class="item-link-5">
                    <img class="vector-10" src="{{ asset('asset/custom/vectorshasilpengolahan/vector6_x2.svg') }}" />
                </div>
            </div>
        </div>
    </div>


    <!-- Core -->
    <script src="{{ asset('volt/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('volt/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
