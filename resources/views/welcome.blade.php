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
    <link rel="stylesheet" href="{{ asset('asset/custom/css/landingpage.css') }}" />
</head>

<body>
    <div class="beranda">
        <div class="div-ocm-effect-wrap">
            <div class="div-inner-wrap-4">
                <div class="rs-fullwidth-wrap-rs-module-wrap-rs-module-rs-slides-rs-slide">
                    <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-rs-layer">
                    </div>
                    <div class="container-19">
                        {{-- @if (Route::has('login'))
                            @auth --}}
                                {{-- <div class="item-6">
                                    <span class="link-media-publikasi-2">
                                        <a style="color: white; text-decoration:none" href="{{ url('/dashboard') }}">

                                        </a>
                                    </span>
                                </div> --}}
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
                            <a href="/welcome_en" class="link-id">
                                EN
                            </a>
                        </div>
                    </div>
                    <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-heading-1-meningkatkan-kualitas-hidup">
                        Meningkatkan kualitas hidup<br />
                        melalui pengembangan sumber<br />
                        daya berkelanjutan.
                    </div>
                    <div class="rs-layer-wrap-rs-loop-wrap-rs-mask-wrap-rs-layer-1">
                    </div>
                </div>
                <div class="div-row-bg-wrap-2">


                    <div class="container-25">
                        <div class="container-100">
                            <div class="heading-5-tentang-kami">
                                Tentang Kami<br />
                            </div>
                            <div class="heading-2-ud-tani-rejo-adalah-perusahaan">


                                UD Tani Rejo adalah perusahaan<br />
                                tani yang menempatkan<br />
                                kemitraan petani di jantung<br />
                                operasinya sehari-hari.
                            </div>
                        </div>

                        <div
                            class="ud-tani-rejo-adalah-salah-satu-perusahaan-swasta-nasional-terkemuka-di-indonesia-yang-memproduksi-minyak-sawit-mentah-melalui-perkebunan-yang-dikelola-secara-berkelanjutan">
                            UD Tani Rejo adalah salah satu perusahaan swasta nasional terkemuka di Indonesia yang<br />
                            memproduksi minyak sawit mentah melalui perkebunan yang dikelola secara berkelanjutan.<br />
                            Bisnis kami meliputi pembibitan, penanaman, hingga pengolahan beras <br />
                            untuk menghasilkan minyak sawit berkelanjutan di pabrik yang berteknologi tinggi dan<br />
                            ramah lingkungan.
                        </div>
                    </div>

                    <div class="heading-61">
                        <div class="link-1">
                        </div>
                        <span class="link-tentang-kami">
                            Tentang Kami
                        </span>
                    </div>
                    <div class="heading-71">
                        <div class="div-divider-small-border-3">
                        </div>
                        <div class="heading-5-penciptaan-nilai-bersama">
                            Penciptaan Nilai Bersama
                        </div>
                    </div>
                    <div class="div-column-bg-overlay-wrap">
                        <div class="icon-2">
                            <img class="vector-8" src="{{ asset('asset/custom/vectors/vector1_x2.svg ') }}" />
                        </div>
                        <div
                            class="heading-4-kami-percaya-bahwa-perusahaan-harus-baik-bagi-masyarakat-baik-bagi-negara-baik-bagi">
                            Kami meyakini bahwa sebuah perusahaan harus memberikan dampak positif bagi masyarakat,
                            negara,
                            lingkungan, dan konsumen sehingga akan menguntungkan perusahaan itu sendiri.
                        </div>
                        <span class="heading-6-emphasis-rge-chairman-founder">
                            — Founder
                        </span>
                    </div>


                </div>
                <div class="div-row-bg-wrap-1">
                    <div class="div-row-bg-overlay-2">
                    </div>
                    <div class="container-13">
                        <div class="container-32">
                            <div class="div-divider-small-border-2">
                            </div>
                            <div class="heading-5-apa-yang-kami-lakukan">
                                Apa Yang Kami Lakukan
                            </div>
                            <div class="list-item-link-kemitraan-dengan-petani" onclick="showContent('content1', this)">
                                Kemitraan Dengan Petani
                            </div>
                            {{-- <span class="list-item-link-penelitian-dan-pengembangan"
                                onclick="showContent('content2', this)">
                                Penelitian dan Pengembangan
                            </span>
                            <div class="list-item-link-benih-topaz" onclick="showContent('content3', this)">
                                Benih Beras
                            </div>
                            <span class="list-item-link-komitmen-keberlanjutan" onclick="showContent('content4', this)">
                                Komitmen Keberlanjutan
                            </span> --}}
                        </div>
                        <div class="container-14">
                            <span class="heading-2-membangun-kemitraan-dengan-petani" id="heading-content">
                                Membangun kemitraan dengan petani<br />
                                menjadi bagian penting dari bisnis kami
                            </span>
                            <div id="content1" class="content" style="display: none;">
                                UD Tani Rejo merupakan
salah satu usaha pertanian yang didirikan pada tahun 2009, berlokasi di Jl.
Tempurejo, Cangkring Baru, Cangkring, Kecamatan Jenggawah, Kabupaten
Jember. Mitra menunjukkan antusiasnya di bidang pertanian bergerak secara aktif
turut berperan dalam produksi dan distribusi pangan lokal ekspor berbagai varietas
pertanian diantaranya beras dan jagung.
                                UD Tani Rejo bermitra dengan lebih dari 20 petani, membantu
                                mereka meningkatkan pendapatan dan menerapkan praktik-
                                praktik berkelanjutan dalam kegiatan bertani.

                            </div>
                            <div id="content2" class="content" style="display: none;">
                                Isi konten untuk Penelitian dan Pengembangan
                            </div>
                            <div id="content3" class="content" style="display: none;">
                                Isi konten untuk Benih Beras
                            </div>
                            <div id="content4" class="content" style="display: none;">
                                Isi konten untuk Komitmen Keberlanjutan
                            </div>
                        </div>
                    </div>


                    <script>
                        document.getElementById('content1').style.display = 'block';

                        function showContent(contentId, element) {
                            var contents = document.getElementsByClassName('content');
                            for (var i = 0; i < contents.length; i++) {
                                contents[i].style.display = 'none';
                            }
                            document.getElementById(contentId).style.display = 'block';

                            var headingContent = document.getElementById('heading-content');
                            if (contentId === 'content1') {
                                headingContent.innerHTML =
                                'Membangun kemitraan dengan petani<br /> menjadi bagian penting dari bisnis kami';
                            } else if (contentId === 'content2') {
                                headingContent.innerHTML = 'Isi konten untuk Penelitian dan Pengembangan';
                            } else if (contentId === 'content3') {
                                headingContent.innerHTML = 'Isi konten untuk Benih Beras';
                            } else if (contentId === 'content4') {
                                headingContent.innerHTML = 'Isi konten untuk Komitmen Keberlanjutan';
                            }

                            var links = document.querySelectorAll(
                                '.list-item-link-kemitraan-dengan-petani, .list-item-link-penelitian-dan-pengembangan, .list-item-link-benih-topaz, .list-item-link-komitmen-keberlanjutan'
                                );
                            for (var i = 0; i < links.length; i++) {
                                links[i].classList.remove('active');
                            }
                            element.classList.add('active');

                            // Menghilangkan konten tambahan jika yang diklik adalah Penelitian dan Pengembangan, Benih Beras, atau Komitmen Keberlanjutan
                            if (contentId !== 'content1') {
                                document.getElementById('ud-tani-rejo').style.display = 'none';
                            } else {
                                document.getElementById('ud-tani-rejo').style.display = 'block';
                            }

                        }
                        document.querySelector('.list-item-link-kemitraan-dengan-petani').click();
                    </script>


                    {{-- <div class="container-2">
                            <div
                                class="ud-tani-rejo-bermitra-dengan-lebih-dari-20-petani-membantu-mereka-meningkatkan-pendapatan-dan-menerapkan-praktik-praktik-berkelanjutan-dalam-kegiatan-bertani">
                                UD Tani Rejo bermitra dengan lebih dari 20 petani, membantu<br />
                                mereka meningkatkan pendapatan dan menerapkan praktik-<br />
                                praktik berkelanjutan dalam kegiatan bertani.
                            </div> --}}
                    <div class="container">
                    </div>
                    <div class="container-21">
                        <div class="heading-5-link-2">
                        </div>
                        <span class="heading-5-link-pelajari-lebih-lanjut">
                            Pelajari Lebih Lanjut
                        </span>
                    </div>
                </div>
                {{-- <div class="div-inner-wrap-4">
                            <div class="home-video-thumb-1-jpg">
                            </div>
                        </div> --}}
            </div>
            <div class="div-inner-wrap-5">
                <div class="frame-608">
                    <div class="div-wpb-wrapper">
                        <div class="country">
                        </div>
                        <div class="heading-4100000">
                            5
                        </div>
                        <span class="hektar-perkebunan-milik-perusahaan">
                            HEKTAR<br />
                            PERKEBUNAN<br />
                            MILIK<br />
                            PERUSAHAAN
                        </span>
                    </div>
                    <div class="div-wpb-wrapper-1">
                        <div class="field">
                        </div>
                        <div class="heading-460000">
                            3
                        </div>
                        <span class="hektar-pertanian-milik-petani-plasma">
                            HEKTAR<br />
                            Pertanian<br />
                            MILIK PETANI plasma
                        </span>
                    </div>
                    <div class="div-wpb-wrapper-2">
                        <div class="farmer">
                        </div>
                        <div class="heading-430000">
                            20
                        </div>
                        <span class="petani">
                            PETANI
                        </span>
                    </div>
                    <div class="div-wpb-wrapper-3">
                        <div class="tractor">
                        </div>
                        <div class="heading-422">
                            2
                        </div>
                        <span class="tempat-pengolahan">
                            Tempat Pengolahan
                        </span>
                    </div>
                </div>
                <div class="container-23">
                    <div class="container-26">
                        <div class="div-divider-small-border-4">
                        </div>
                        <span class="heading-5-bisnis-kami">
                            Bisnis Kami
                        </span>
                    </div>
                    <div class="container-52">
                        <span class="heading-2-petani-merupakan-bagian-yang-tak">
                            Petani merupakan bagian yang tak<br />
                            terpisahkan dari bisnis kami
                        </span>
                        <span class="strong-lebih-dari-40-lahan-tani-ud-tani-rejo-dimiliki-oleh-petani">
                            Lebih dari 40% Lahan Padi UD Tani Rejo Dimiliki oleh Petani.
                        </span>
                        <div
                            class="ud-tani-rejo-mengelola-30-perkebunan-milik-perusahaan-yang-mencakup-lahan-seluas-100000-hektar-dan-sekitar-60000-hektar-perkebunan-dimiliki-oleh-petani-plasma-ud-tani-rejo-memastikan-praktik-praktik-pengembangan-berkelanjutan-diterapkan-di-seluruh-wilayah-operasionalnya-termasuk-di-kebun-kebun-yang-dimiliki-oleh-petani">
                            UD Tani Rejo mengelola 30 perkebunan milik perusahaan yang mencakup lahan seluas 100.000
                            hektar
                            dan sekitar 60.000 hektar perkebunan<br />
                            dimiliki oleh petani plasma. UD Tani Rejo memastikan praktik-praktik pengembangan
                            berkelanjutan
                            diterapkan di seluruh wilayah<br />
                            operasionalnya termasuk di kebun-kebun yang dimiliki oleh petani.
                        </div>
                        <div class="heading-62">
                            <div class="link-3">
                            </div>
                            <span class="link-pelajari-lebih-lanjut">
                                Pelajari Lebih Lanjut
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-inner-wrap-6">
                <div class="div-row-bg-overlay-3">
                </div>

                <div class="container-1">
                    <div class="heading-2-filosofi-bisnis-kami">
                        Filosofi Bisnis Kami
                    </div>
                    <div class="div-divider-small-border-5">
                    </div>
                    <span
                        class="ud-tani-rejo-percaya-bahwa-untuk-menjadi-bisnis-yang-berkelanjutan-semua-kegiatan-perusahaan-harus-bermanfaat-bagi-masyarakat-negara-iklim-pelanggan-dan-kemudian-baru-akan-bermanfaat-bagi-perusahaan-itu-sendiri">
                        UD Tani Rejo percaya bahwa untuk menjadi bisnis yang berkelanjutan, semua kegiatan
                        perusahaan harus<br />
                        bermanfaat bagi masyarakat, negara, iklim, pelanggan, dan kemudian baru akan bermanfaat bagi
                        perusahaan<br />
                        itu sendiri.
                    </span>


                </div>
                <div class="container-3">
                    <div class="div-inner-wrap-outer">
                        <div class="div-nectar-fancy-box">
                            <div class="div-box-bg">
                                <div class="before">
                                </div>
                                <span class="heading-3-masyarakat">
                                    Masyarakat
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="div-inner-wrap-outer-1">
                        <div class="div-nectar-fancy-box-1">
                            <div class="div-box-bg-1">
                                <div class="before-1">
                                </div>
                                <span class="heading-3-negara">
                                    Negara
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="div-inner-wrap-outer-2">
                        <div class="div-nectar-fancy-box-2">
                            <div class="div-box-bg-2">
                                <div class="before-2">
                                </div>
                                <span class="heading-3-iklim">
                                    Iklim
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-inner-wrap">
                <div class="container-29">
                    <div class="div-column-image-bg">
                    </div>
                    <div class="container-11">
                        <div class="icon-1">
                            <img class="vector-2" src="{{ asset('asset/custom/vectors/vector2_x2.svg ') }}" />
                        </div>
                        <div class="heading-4-karier-di">
                            Karier di<br />
                            Pertanian<br />
                            Berkelanjutan
                        </div>
                        <div class="container-9">
                            <div class="heading-5-link-1">
                            </div>
                            <span class="heading-5-link-life-at-aa">
                                Life at AA
                            </span>
                        </div>
                    </div>

                </div>
                <div class="container-31">
                    <div class="container-20">
                        <div class="icon">
                            <img class="vector-1" src="{{ asset('asset/custom/vectors/vector4_x2.svg ') }}" />
                        </div>
                        <div class="heading-4-cerita-kami">
                            Cerita Kami<br />
                            di UD Tani Rejo
                        </div>
                        <div class="container-33">
                            <div class="heading-5-link">
                            </div>
                            <span class="heading-5-link-aa-diary">
                                AA Diary
                            </span>
                        </div>
                    </div>

                    <div class="div-column-image-bg-1">
                    </div>

                </div>
                <div class="container-39">
                    <div class="div-column-image-bg-2">
                    </div>
                </div>
            </div>
            <div class="heading-2-berita">
                Lokasi
            </div>
            <div class="div-divider-small-border">
            </div>

            <div class="heading-6">
                <div class="link">
                </div>
                <span class="link-kunjungi-media-publikasi">
                    Lihat Lokasi Lebih Dekat
                </span>
            </div>
            <div class="div-row-bg-wrap">
                <div class="div-row-bg-overlay">
                </div>
                <div class="heading-2-ayo-terlibat-bersama-kami">
                    Ayo Terlibat Bersama Kami
                </div>
                <div class="container-5">
                    <div class="div-nectar-icon">
                        <img class="vector-3" src="{{ asset('asset/custom/vectors/vector15_x2.svg ') }}" />
                    </div>
                    <div class="div-nectar-icon-1">
                        <img class="vector-4" src="{{ asset('asset/custom/vectors/vector19_x2.svg ') }}" />
                    </div>
                    <div class="div-nectar-icon-2">
                        <img class="vector-5" src="{{ asset('asset/custom/vectors/vector_x2.svg ') }}" />
                    </div>
                    <div class="div-nectar-icon-3">
                        <img class="vector-6" src="{{ asset('asset/custom/vectors/vector16_x2.svg ') }}" />
                    </div>
                    <div class="div-nectar-icon-4">
                        <img class="vector-7" src="{{ asset('asset/custom/vectors/vector7_x2.svg ') }}" />
                    </div>
                </div>
            </div>
            <div class="div-inner-wrap-2">
                <div class="div-row-bg-overlay-1">
                </div>
                <div class="container-17">
                    <div class="heading-2-kantor">
                        Toko <br />
                        UD Tani Rejo
                    </div>
                    <div class="container">
                        <div class="strong-kantor-jakarta">
                            Toko Jenggawah
                        </div>
                        <span
                            class="jl-tempurejo-cangkring-baru-cangkring-kec-jenggawah-kabupaten-jember-jawa-timur-68171">
                            Jl. Tempurejo, Cangkring Baru, Cangkring, Kec. Jenggawah, Kabupaten Jember, Jawa Timur
                            68171
                        </span>
                    </div>
                </div>
                <div class="div-divider-small-border-1">
                </div>
            </div>
            {{-- <div class="divfooter-outer">
                <div class="container-28">
                    <div class="container-4">
                        <div class="heading-4-ud-tani-rejo">
                            UD Tani Rejo
                        </div>
                        <span class="list-item-link-visi-dan-misi">
                            Visi dan Misi
                        </span>
                    </div>
                    <div class="container-15">
                        <div class="heading-4-bisnis-kami">
                            Bisnis Kami
                        </div>
                        <span class="list-item-link-perkebunan">
                            Pertanian
                        </span>
                    </div>
                    <div class="container-8">
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
                <div class="container-30">
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
                <div class="container-18">
                    <span class="list-item-link-kemitraan-dengan-petani-1">
                        Kemitraan Dengan Petani
                    </span>
                    <span class="list-item-link-produk">
                        Produk
                    </span>
                    <span class="list-item-link-standar-sertifikasi">
                        Standar &amp; Sertifikasi
                    </span>
                </div>
                <div class="container-22">
                    <span class="list-item-link-tonggak-sejarah">
                        Tonggak Sejarah
                    </span>
                    <span class="list-item-link-penelitian-dan-pengembangan-1">
                        Penelitian dan Pengembangan
                    </span>
                    <span class="list-item-link-sistem-ketertelusuran">
                        Sistem Ketertelusuran
                    </span>
                </div>
                <div class="container-10">
                    <span class="list-item-link-benih-topaz-1">
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
                    <div class="container-12">
                        <div class="list-item-link">
                            <img class="vector-9" src="{{ asset('asset/custom/vectors/vector6_x2.svg ') }}" />
                        </div>
                        <div class="list-item-link-1">
                            <img class="vector-10" src="{{ asset('asset/custom/vectors/vector11_x2.svg') }}" />
                        </div>
                        <div class="container-7">
                            <div class="list-item-link-2">
                                <img class="vector-11" src="{{ asset('asset/custom/vectors/vector13_x2.svg') }}" />
                            </div>
                            <div class="list-item-link-3">
                                <img class="vector-12" src="{{ asset('asset/custom/vectors/vector20_x2.svg') }}" />
                            </div>
                        </div>
                        <div class="list-item-link-4">
                            <img class="vector-13" src="{{ asset('asset/custom/vectors/vector17_x2.svg') }} " />
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="svg">
                <img class="vector-21" src="{{ asset('asset/custom/vectors/vector5_x2.svg ') }}" />
            </div>

        <div class="divheader-secondary-outer">
            <div class="list-1">
                <div class="item-link">
                    <img class="vector-15" src="{{ asset('asset/custom/vectors/vector21_x2.svg ') }} " />
                </div>
                <div class="item-link-1">
                    <img class="vector-16" src="{{ asset('asset/custom/vectors/vector14_x2.svg ') }} " />
                </div>
                <div class="item-link-2">
                    <img class="vector-17" src="{{ asset('asset/custom/vectors/vector3_x2.svg ') }}" />
                </div>
                <div class="item-link-3">
                    <img class="vector-18" src="{{ asset('asset/custom/vectors/vector8_x2.svg ') }} " />
                </div>
                <div class="item-link-4">
                    <img class="vector-19" src="{{ asset('asset/custom/vectors/vector18_x2.svg ') }}" />
                </div>
            </div>
            <div class="list-2">
                <a href="/pengolahan" class="item-link-kunjungi-ketelsuruan-produk">
                    Kunjungi Ketertelusuran Produk
                </a>
                <div class="item-link-5">
                    <img class="vector-20" src="{{ asset('asset/custom/vectors/vector9_x2.svg ') }}" />
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>

</body>

</html>
