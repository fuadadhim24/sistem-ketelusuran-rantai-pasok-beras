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
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css' rel='stylesheet' />

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


                    <div class="group-645">
                        <div class="frame-632">
                            <div class="group-624">
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
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
                                            src="{{ asset('asset/img/produk/' . $produksi->produk->foto) }}"
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
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                    <th width="30px">:</th>
                                    <th>{{ $produksi->padi->jenis_musim ?? 'Tidak ada data' }}</th>
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
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
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionPricing">
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
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionPricing">
                                                    <div class="accordion-body">
                                                        <th>{{ $produksi->padi->ketahanan_hama_penyakit ?? 'Tidak ada data' }}
                                                        </th>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </span>


                            </div>

                        </div>

                    </div>
                </div>

                <div class="group-642">


                    <div class="container-14">
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
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-21">
                                    QR Code
                                </span>


                            </div>
                            <div class="group-635">

                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                    <th width="30px">:</th>
                                    <th>{{ $produksi->id }}</th>
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                    <th width="30px">:</th>
                                    <th>{{ $produksi->tanggal_produksi }}</th>
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-20">
                                    : <button type="button" class="btn btn-block btn-primary mb-3"
                                        data-bs-toggle="modal" data-bs-target="#modal-default">Detail</button>
                                    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                                        aria-labelledby="modal-default" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="h6 modal-title">Detail Produksi</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
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
                                {{-- <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-11">
                                    <img src="data:image/png;base64, {{ $qrCode }}" alt="QR Code">
                                </span> --}}


                            </div>
                            <div class="group-637">
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
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                    Metode
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-12">
                                    Catatan
                                </span>

                            </div>
                            <div class="group-634">
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
                <div class="group-643">


                    <div class="container-14">
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
                            <div class="group-639">
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-5">
                                    MAP
                                </span>
                                <span
                                    class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-7">
                                    <div id='map-lokasi' class="w-100" style='height: 300px; margin-bottom:20px'>
                                    </div>
                                </span>
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
                                        center: [{{ $produksi->lahan->latitude }}, {{ $produksi->lahan->longitude }}],
                                        zoom: 9
                                    });

                                    // Tambahkan marker untuk lokasi lahan
                                    var marker = new mapboxgl.Marker()
                                        .setLngLat([{{ $produksi->lahan->latitude }}, {{ $produksi->lahan->longitude }}])
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
                <div class="group-644">


                    <div class="container-14">
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
                            <div class="group-635">
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
                            <div class="group-634">
                                @if ($produksi->pengolahan)
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-8">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->pengolahan->hasil }} Ton</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-9">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->pengolahan->metode }}</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-91">
                                        <th width="30px">:</th>
                                        <th>{{ $produksi->pengolahan->lama }} Hari</th>
                                    </span>
                                    <span
                                        class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup-222">
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




            <div class="divcopyright">
                <div class="ud-tani-rejo-politeknik-negerri-jember-all-rights-reserved">
                    © 2024 UD Tani Rejo | Politeknik Negerri Jember. All rights reserved.
                </div>
                <div class="container-12">
                    <div class="list-item-link">
                        <img class="vector"
                            src="{{ asset('asset/custom/vectorshasilpengolahan/vector5_x2.svg') }}" />
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
