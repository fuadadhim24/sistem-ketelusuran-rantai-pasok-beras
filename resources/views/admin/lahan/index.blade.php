@extends('template')

@section('main')
<meta name="csrf-token" content="{{ csrf_token() }}">

<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <!-- Search form -->
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
                <!-- / Search form -->
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                        <div class="list-group list-group-flush">
                            <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                            <a href="#" class="list-group-item list-group-item-action border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg" class="avatar-md rounded">
                                    </div>
                                    <div class="col ps-0 ms-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                            </div>
                                            <div class="text-end">
                                                <small class="text-danger">a few moments ago</small>
                                            </div>
                                        </div>
                                        <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg" class="avatar-md rounded">
                                    </div>
                                    <div class="col ps-0 ms-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                            </div>
                                            <div class="text-end">
                                                <small class="text-danger">2 hrs ago</small>
                                            </div>
                                        </div>
                                        <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg" class="avatar-md rounded">
                                    </div>
                                    <div class="col ps-0 m-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                            </div>
                                            <div class="text-end">
                                                <small>5 hrs ago</small>
                                            </div>
                                        </div>
                                        <p class="font-small mt-1 mb-0">Tagged you in a document called "Financial plans",</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-4.jpg" class="avatar-md rounded">
                                    </div>
                                    <div class="col ps-0 ms-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                            </div>
                                            <div class="text-end">
                                                <small>1 d ago</small>
                                            </div>
                                        </div>
                                        <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-5.jpg" class="avatar-md rounded">
                                    </div>
                                    <div class="col ps-0 ms-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                            </div>
                                            <div class="text-end">
                                                <small>2 hrs ago</small>
                                            </div>
                                        </div>
                                        <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                            Settings
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path>
                            </svg>
                            Messages
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                            </svg>
                            Support
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">UD Tani Rejo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lahan</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Lahan</h1>
            <p class="mb-0">Tempat untuk memproduksi tanaman pertanian</p>
        </div>
        <div>
            <p class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Panduan Informatif</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="row col-12 col-xl-8">
        <div class="mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                    <h2 class="fs-5 fw-bold mb-0">Daftar Lahan</h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lahanTambah">Tambah</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="lahanTable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Nama Lahan</th>
                                    <th class="border-bottom" scope="col">Luas</th>
                                    <th class="border-bottom" scope="col">Lokasi</th>
                                    <th class="border-bottom" scope="col">Jenis Tanah</th>
                                    
                                    <th class="border-bottom" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rows will be loaded by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow mb-2">
                <div class="card-header">
                    <h2 class="fs-5 fw-bold mb-0">Lokasi Lahan</h2>
                </div>
            </div>
            {{-- map lokasi --}}
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div id="map" class="w-100" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="lahanTambah" tabindex="-1" aria-labelledby="lahanTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lahanTambahLabel">Tambah Lahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="lahanForm" action="{{ route('lahan.store') }}" method="POST" class="form-inline">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="nama_lahan">Nama Lahan</label>
                        <input type="text" class="form-control" id="nama_lahan" name="nama_lahan" required>
                    </div>
                    <div class="form-group">
                        <label for="detail_lokasi">Detail Lokasi</label>
                        <input type="text" class="form-control" id="detail_lokasi" name="detail_lokasi" required>
                    </div>
                    <div class="form-group">
                        <label for="luas">Luas</label>
                        <input type="text" class="form-control" id="luas" name="luas" required>
                    </div>
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" readonly required>
                    </div>
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div id="tambahmap" class="w-100" style="height: 300px;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_tanah">Jenis Tanah</label>
                        <input type="text" class="form-control" id="jenis_tanah" name="jenis_tanah" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="lahanUpdateModal" tabindex="-1" aria-labelledby="lahanUpdateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lahanUpdateModalLabel">Perbarui Lahan</h5>
            
            </div>
            <div class="modal-body">
                <form id="lahanUpdateForm" method="POST" class="form-inline">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="update_id" name="id">
                    <div class="form-group">
                        <label for="update_nama_lahan">Nama Lahan</label>
                        <input type="text" class="form-control" id="update_nama_lahan" name="nama_lahan" required>
                    </div>
                    <div class="form-group">
                        <label for="update_detail_lokasi">Detail Lokasi</label>
                        <input type="text" class="form-control" id="update_detail_lokasi" name="detail_lokasi" required>
                    </div>
                    <div class="form-group">
                        <label for="update_luas">Luas</label>
                        <input type="text" class="form-control" id="update_luas" name="luas" required>
                    </div>
                    <div class="form-group">
                        <label for="update_latitude">Latitude</label>
                        <input type="text" class="form-control" id="update_latitude" name="latitude" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="update_longitude">Longitude</label>
                        <input type="text" class="form-control" id="update_longitude" name="longitude" readonly required>
                    </div>
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div id="updatemap" class="w-100" style="height: 300px;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="update_jenis_tanah">Jenis Tanah</label>
                        <input type="text" class="form-control" id="update_jenis_tanah" name="jenis_tanah" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
    <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
            <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
        </div>
        <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
            <!-- List -->
            <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/about">About</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/themes">Themes</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/blog">Blog</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>

<script>
   $(document).ready(function () {
    // Handle form submission for adding a new land
    $('#lahanForm').submit(function (e) {
        e.preventDefault(); // Prevent the default form submission
        $('#lahanTambah').modal('hide');
        // Serialize form data
        var formData = $(this).serialize();

        // Mengambil nilai longitude dan latitude secara terpisah
        var longitude = $('#longitude').val();
        var latitude = $('#latitude').val();

        // Menambahkan nilai longitude dan latitude ke dalam formData
        formData += '&longitude=' + longitude + '&latitude=' + latitude;

        // Menambahkan token CSRF ke dalam formData
        formData += '&_token=' + $('meta[name="csrf-token"]').attr('content');

        // Submit the form data using AJAX
        $.ajax({
            url: "{{ route('lahan.store') }}",
            type: "POST",
            data: formData,
            success: function (response) {
                console.log(response);
                // Reset form after successful data submission
                $('#lahanForm')[0].reset();

                // Display success notification
                alert('Data lahan berhasil disimpan!');

                reloadContent();
            },
            error: function (xhr) {
                console.log(xhr.responseText);
                // Display error message to user if needed
                alert('Error: ' + xhr.responseText);
            }
        });
    });

    function loadLahans() {
        $.ajax({
            url: '/getlahan',
            type: 'GET',
            success: function(response) {
                var lahans = response.lahans;
                var tableRows = '';
                if (lahans.length > 0) {
                    $.each(lahans, function(index, lahan) {
                        tableRows += '<tr>';
                        tableRows += '<td class="text-gray-900" scope="row">' + lahan.nama_lahan + '</td>';
                        tableRows += '<td class="fw-bolder text-gray-500">' + lahan.luas + '</td>';
                        tableRows += '<td class="fw-bolder text-gray-500">' + lahan.detail_lokasi + '</td>';
                        tableRows += '<td class="fw-bolder text-gray-500">' + lahan.jenis_tanah + '</td>';
                        tableRows += '<td>';
                        tableRows += '<button class="btn btn-sm btn-outline-success mb-3" onclick="viewLahan(' + lahan.id + ')">lihat</button>';
                        tableRows += '<button class="btn btn-sm btn-outline-warning mb-3" onclick="editLahan(' + lahan.id + ')">ubah</button>';
                        tableRows += '<button class="btn btn-sm btn-outline-danger mb-3" onclick="deleteLahan(' + lahan.id + ')">hapus</button>';
                        tableRows += '</td>';
                        tableRows += '</tr>';
                    });
                } else {
                    tableRows = '<tr><td colspan="4">Tidak ada data lahan yang tersedia.</td></tr>';
                }
                $('#lahanTable tbody').html(tableRows);
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    }

    // Panggil fungsi loadLahans saat halaman dimuat
    loadLahans();

    // Function to reload content
    function reloadContent() {
        loadLahans();
    }

    function fillUpdateForm(data) {
        $('#update_id').val(data.id);
        $('#update_nama_lahan').val(data.nama_lahan);
        $('#update_detail_lokasi').val(data.detail_lokasi);
        $('#update_luas').val(data.luas);
        $('#update_latitude').val(data.latitude);
        $('#update_longitude').val(data.longitude);
        $('#update_jenis_tanah').val(data.jenis_tanah);
        // Code untuk menginisialisasi peta dan menetapkan lokasi, jika diperlukan
    }

    // Fungsi untuk membuka modal update dan mengisi form
    function openUpdateModal(data) {
        fillUpdateForm(data);
        $('#lahanUpdateModal').modal('show');
    }

    // Fungsi untuk mengedit lahan (memanggil data lahan dan membuka modal update)
    window.editLahan = function(id) {  // Mendefinisikan fungsi di global scope
        $.ajax({
            url: '/lahan/' + id + '/edit',
            type: 'GET',
            success: function(response) {
                openUpdateModal(response.lahan);
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    };

    // Mengirim form update menggunakan AJAX
    $('#lahanUpdateForm').on('submit', function(e) {
        e.preventDefault();

        var id = $('#update_id').val();
        var formData = {
            _token: $('input[name="_token"]').val(),
            _method: 'PUT',
            nama_lahan: $('#update_nama_lahan').val(),
            detail_lokasi: $('#update_detail_lokasi').val(),
            luas: $('#update_luas').val(),
            latitude: $('#update_latitude').val(),
            longitude: $('#update_longitude').val(),
            jenis_tanah: $('#update_jenis_tanah').val()
        };

        $.ajax({
            url: '/lahan/' + id,
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#lahanUpdateModal').modal('hide');
                $('#lahan-' + id + ' td:nth-child(1)').text(response.nama_lahan);
                $('#lahan-' + id + ' td:nth-child(2)').text(response.luas);
                $('#lahan-' + id + ' td:nth-child(3)').text(response.detail_lokasi);
                alert('Lahan berhasil diperbarui!');
                loadLahans(); // Memuat ulang data setelah pembaruan
            },
            error: function(response) {
                console.log(response);
                alert('Terjadi kesalahan saat memperbarui lahan.');
            }
        });
    });
    window.viewLahan = function(id) {
            $.ajax({
                url: '/lahan/' + id +'/view' ,
                type: 'GET',
                success: function(response) {
                    const lahan = response.lahan;
                    const coordinates = [lahan.longitude, lahan.latitude];

                    // Move the map to the new location
                    map.flyTo({
                        center: coordinates,
                        essential: true, // this animation is considered essential with respect to prefers-reduced-motion
                        zoom: 14
                    });

                    // If a marker exists, update its position
                    if (marker) {
                        marker.setLngLat(coordinates);
                    } else {
                        // Create a new marker if it doesn't exist
                        marker = new mapboxgl.Marker()
                            .setLngLat(coordinates)
                            .addTo(map);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan saat mengambil data lahan.');
                }
            });
        };
  

    mapboxgl.accessToken = 'pk.eyJ1IjoiZnVhZGFkaGltMjQiLCJhIjoiY2x0ZHNzbDdtMDZyaDJrcDczMnV3emdxaSJ9.ECFyjfuYWvVLH6ya-_P1Vw';

    const map = new mapboxgl.Map({
        container: 'map', // ID of the container element
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [113.666039, -8.2885468], // Coordinates for the center of the map
        zoom: 12 // Initial zoom level
    });

    const tambahmap = new mapboxgl.Map({
        container: 'tambahmap', // ID of the container element
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [113.666039, -8.2885468], // Coordinates for the center of the map
        zoom: 12 // Initial zoom level
    });

    const geocoder2 = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });

    // Add the geocoder to the modal map
    tambahmap.addControl(geocoder2);

    // Handle modal show event to resize map
    $('#lahanTambah').on('shown.bs.modal', function () {
        tambahmap.resize();
    });

    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        marker: false,
        placeholder: 'Masukan kata kunci...',
        zoom: 20
    });

    tambahmap.addControl(geocoder); // Add geocoder control to tambahmap

    let marker = null;
    tambahmap.on('click', function (e) { // Change map to tambahmap
        if (marker == null) {
            marker = new mapboxgl.Marker()
                .setLngLat(e.lngLat)
                .addTo(tambahmap); // Change map to tambahmap
        } else {
            marker.setLngLat(e.lngLat);
        }
        document.getElementById("latitude").value = e.lngLat.lat;
        document.getElementById("longitude").value = e.lngLat.lng;
    });

    // Initialize the map for updating
    const updateMap = new mapboxgl.Map({
        container: 'updatemap', // ID of the container element
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [113.666039, -8.2885468], // Coordinates for the center of the map
        zoom: 12 // Initial zoom level
    });

    const geocoderUpdate = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });

    // Add the geocoder to the update modal map
    updateMap.addControl(geocoderUpdate);

    // Handle modal show event to resize map
    $('#lahanUpdateModal').on('shown.bs.modal', function () {
        updateMap.resize();
    });

    let updateMarker = null;
    updateMap.on('click', function (e) {
        if (updateMarker == null) {
            updateMarker = new mapboxgl.Marker()
                .setLngLat(e.lngLat)
                .addTo(updateMap);
        } else {
            updateMarker.setLngLat(e.lngLat);
        }
        $('#update_latitude').val(e.lngLat.lat);
        $('#update_longitude').val(e.lngLat.lng);
    });

    const notyf = new Notyf();

    function toggleButtons() {
        var button1 = document.getElementById("btnLihat");
        var button2 = document.getElementById("btnLoad");
        var toast = document.getElementById("toastLokasiBerhasil");

        // Tampilkan button 2 dan sembunyikan button 1
        button2.removeAttribute("hidden");
        button2.removeAttribute("disabled");

        button1.setAttribute("hidden", "true");
        button1.setAttribute("disabled", "true");

        // Set timeout untuk kembali ke keadaan semula setelah 3 detik
        setTimeout(function() {
            // Set timeout untuk menyembunyikan notif
            button1.removeAttribute("hidden");
            button1.removeAttribute("disabled");
            button2.setAttribute("hidden", "true");
            button2.setAttribute("disabled", "true");

            // notify
            const notyf = new Notyf({
                position: {
                    x: 'right',
                    y: 'top',
                },
                types: [
                    {
                        type: 'info',
                        background: 'blue',
                        icon: {
                            className: 'fas fa-info-circle',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.success({
                message: 'Lokasi berhasil diidentifikasi',
                duration: 3000,
                icon: false
            });
        }, 3000);
    }
});

</script>

{{-- library notify --}}
<script src="@@path/vendor/bootstrap4-notify/bootstrap-notify.min.js"></script>
@endsection
