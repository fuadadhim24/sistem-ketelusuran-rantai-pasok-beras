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
                                            Masuk
                                        </a>
                                    </span>
                                </div>
                                {{-- @if (Route::has('register')) --}}
                                    <div class="item-7">
                                        <span class="link-media-publikasi-3">
                                            <a style="color: black; text-decoration:none" href="{{ route('register') }}">
                                                Daftar
                                            </a>
                                        </span>
                                    </div>
                                {{-- @endif
                            @endauth
                        @endif --}}
                        <div class="item-8">
                            {{-- <a href="/detailpengolahan_en" class="link-id">
                                EN
                            </a> --}}

                        </div>
                    </div>

                </div>

            </div>
            <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup">
                Riwayat Ketertelusuran Produk Beras
            </div>


            <div class="rs-fullwidth-wrap-rs-module-wrap-rs-module-rs-slides-rs-slide-1">
                <div class="group-636">


                    <div class="container-14">
                        <div class="frame-632">
                            <div class="group-624">
                                <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
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
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-17">
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
                                <a href="/pengolahan" class="frame-609">
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
                                @foreach ($produksi ->produk as $produk )
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                    <th width="30px">:</th>
                                    <th>{{$produk->nama_produk}}</th>
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                    <th width="30px">:</th>
                                    <th>{{$produk->kode_produk}}</th>
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                    <img alt="Image placeholder"
                                                src="{{ asset('asset\img\produk\3.png') }}"
                                                class="avatar-md rounded"
                                                >
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-18">
                                    <th width="30px">:</th>
                                    <th>{{$produk->harga}}</th>
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-15">
                                    <th width="30px">:</th>
                                    <th>{{$produk->deskripsi}}</th>
                                </span>

                                @endforeach

                            </div>
                            <div class="group-633">
                                <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                    VARIETAS PADI
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                    Nama Varietas
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                    Karakteristik Beras
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
                            <div class="group-634">
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                    : IPR00002313
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                    : 17 November 2023
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-19">
                                    : <span class="badge bg-warning text-dark">kemarau</span>
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                    : 17 November 2023
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                    : 17 November 2023
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-13">
                                    <div class="accordion" id="accordionPricing">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Keunggulan
                                            </button>
                                          </h2>
                                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPricing">
                                            <div class="accordion-body">
                                                At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Deskripsi
                                            </button>
                                          </h2>
                                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPricing">
                                            <div class="accordion-body">
                                                At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Ketahanan Haman dan Penyakit
                                            </button>
                                          </h2>
                                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionPricing">
                                            <div class="accordion-body">
                                                At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            {{-- <div class="container-15">
                                <div
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-6">
                                    Daftar Bahan Ketertelusuran
                                </div> --}}
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
                                {{-- <div class="tabel-2">
                                    <table class="product-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Varietas</th>
                                                <th>Kuantitas</th>
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
                                </div> --}}

                            {{-- </div> --}}
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
            <div class="group-642">


                <div class="container-14">
                    <div class="frame-632">
                        <div class="group-624">
                            <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
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
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                QR Code
                            </span>


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
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                : <button type="button" class="btn btn-block btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">Detail</button>
                                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="h6 modal-title">Detail Produksi</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            {{-- <div class="modal-body">
                                                <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                                                <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                                                    soon as possible of high-risk data breaches that could personally affect them.</p>
                                            </div> --}}
                                            <div class="frame-632">
                                                <div class="group-641">

                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-23">
                                                        Sumber Benih
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                                        Tingkat Kemurnian
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                                        Tingkat Vigor
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                                        Jumlah Benih
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                                        Daftar Petani
                                                    </span>


                                                </div>
                                                <div class="group-640">
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-27">
                                                        : IPR00002313
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                                        : 17 November 2023
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                                        : 10%
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                                        :15%
                                                    </span>
                                                    <span
                                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                                        : 100
                                                    </span>
                                                    <span
                                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                                    :ini
                                                </span>


                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                {{-- <button type="button" class="btn btn-secondary">Accept</button> --}}
                                                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                <img alt="Image placeholder"
                                            src="{{ asset('asset\img\produk\3.png') }}"
                                            class="avatar-md rounded"
                                            >
                            </span>


                        </div>
                        <div class="group-637">
                            <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
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
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                Metode Panen
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                Pasca Panen
                            </span>


                        </div>
                        <div class="group-634">
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                : IPR00002313
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                : 17 November 2023
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-22">
                                : Dipotong
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                : 17 November 2023
                            </span>

                        </div>
                    </div>

                </div>
            </div>
            <div class="group-643">


                <div class="container-14">
                    <div class="frame-632">
                        <div class="group-624">
                            <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
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
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                :20 Hektar
                            </span>



                        </div>
                        <div class="group-637">
                            <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                MAP
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">

                            </span>



                        </div>
                        <div class="group-634">
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                {{-- : IPR00002313 --}}
                            </span>


                        </div>
                        {{-- <div class="container-15">
                            <div
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-6">
                                Daftar Bahan Ketertelusuran
                            </div> --}}
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
                            {{-- <div class="tabel-2">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Varietas</th>
                                            <th>Kuantitas</th>
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
                            </div> --}}

                        {{-- </div> --}}
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
                                <td>1</td>
                                <td>BPS Setra Ramos</td>
                                <td>11 Desember 2023</td>
                                <td>3</td>
                                <td>isi</td>
                            </tr>
                            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="group-644">


                <div class="container-14">
                    <div class="frame-632">
                        <div class="group-624">
                            <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                PENGUJIAN
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                Tingkat Patah
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                Kadar Air
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-17">
                                Kadar Kerusakan
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                Benda Asing
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                Benda Kapur
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                Warna Beras
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                Bau Rasa
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                Keterangan
                            </span>


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
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                : 10%
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                :15%
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                : 10%
                            </span>
                            <span
                            class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                            :15%
                        </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                : 10%
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-26">
                                :Dilengkapi
                            </span>

                        </div>
                        <div class="group-637">
                            <span class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                PENGOLAHAN
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                Hasil Penggilingan
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-10">
                                Kemasan
                            </span>


                        </div>
                        <div class="group-634">
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                : IPR00002313
                            </span>
                            <span
                                class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                : 17 November 2023
                            </span>


                        </div>


                    </div>

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
                    Kunjungi Ketertelusuran Produk
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
