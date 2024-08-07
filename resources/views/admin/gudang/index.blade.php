@extends('template')
<link href="https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
                                <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                                aria-label="Search" aria-describedby="topbar-addon">
                        </div>
                    </form>
                    <!-- / Search form -->
                </div>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark notification-bell unread dropdown-toggle"
                            data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-display="static" aria-expanded="false">
                            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                            <div class="list-group list-group-flush">
                                <a href="#"
                                    class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg"
                                                class="avatar-md rounded">
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
                                            <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up"
                                                tomorrow at 12:30 AM.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg"
                                                class="avatar-md rounded">
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
                                            <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new
                                                project".</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg"
                                                class="avatar-md rounded">
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
                                            <p class="font-small mt-1 mb-0">Tagged you in a document called "Financial
                                                plans",</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-4.jpg"
                                                class="avatar-md rounded">
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
                                            <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the
                                                presentation?"</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-5.jpg"
                                                class="avatar-md rounded">
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
                                            <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for
                                                the landing page."</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                    <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    View all
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="media d-flex align-items-center">
                                <img class="avatar rounded-circle" alt="Image placeholder"
                                    src="../../assets/img/team/profile-picture-3.jpg">
                                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                    <span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                My Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Settings
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Messages
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Support
                            </a>
                            <div role="separator" class="dropdown-divider my-1"></div>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
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
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">UD Tani Rejo</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gudang</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Gudang</h1>
                <p class="mb-0">Tempat penyimpanan hasil produksi, hasil penggilingan dan penyimpanan.</p>
            </div>
            <div>
                <p class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Panduan Informatif</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row col-12 col-xl-8">

            <div>
                <div class="card border-0 shadow components-section">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Daftar Gudang</h2>
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#addGudangModal">Tambah Gudang</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-bottom" scope="col">Nama Gudang</th>
                                        <th class="border-bottom" scope="col">Kapasitas</th>
                                        <th class="border-bottom" scope="col">Luas</th>
                                        <th class="border-bottom" scope="col">Lokasi</th>
                                        <th class="border-bottom" scope="col">Status</th>
                                        <th class="border-bottom" scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="gudang-tbody">
                                    <!-- Data will be populated here by AJAX -->
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
                        <h2 class="fs-5 fw-bold mb-0">Lokasi Gudang </h2>
                    </div>
                </div>
                {{-- map lokasi --}}
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div id="mapgudang" class="w-100" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Tambah-->
    <div class="modal fade" id="addGudangModal" tabindex="-1" aria-labelledby="addGudangModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addGudangForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGudangModalLabel">Tambah Gudang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="nama_gudang">Nama Gudang</label>
                            <input type="text" class="form-control" id="nama_gudang" name="nama_gudang"
                                aria-describedby="namaHelp">
                        </div>
                        <div class="mb-4">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                                aria-describedby="kapasitasHelp">
                            <small id="kapasitasHelp" class="form-text text-muted">Satuan ton.</small>
                        </div>
                        <div class="mb-4">
                            <label for="luas">Luas</label>
                            <input type="text" class="form-control" id="luas" name="luas"
                                placeholder="Contoh: 10x50" aria-describedby="luasHelp">
                            <small id="luasHelp" class="form-text text-muted">Satuan meter<sup>2</sup>.</small>
                        </div>
                        <div class="mb-4">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                aria-describedby="lokasiHelp">
                        </div>
                        <div class="mb-4">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status">
                        </div>
                        <div class="mb-4">
                            <label for="latitude">Latitude</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="longitude">Longitude</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" readonly>
                        </div>
                        <div class="mb-4">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div id="tambahmap" class="w-100" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Update-->
    <!-- Modal -->
    <div class="modal fade" id="updateGudangModal" tabindex="-1" aria-labelledby="updateGudangModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="updateGudangForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateGudangModalLabel">Update Gudang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="update_nama_gudang">Nama Gudang</label>
                            <input type="text" class="form-control" id="update_nama_gudang" name="nama_gudang"
                                aria-describedby="namaHelp">
                        </div>
                        <div class="mb-4">
                            <label for="update_kapasitas">Kapasitas</label>
                            <input type="number" class="form-control" id="update_kapasitas" name="kapasitas"
                                aria-describedby="kapasitasHelp">
                            <small id="kapasitasHelp" class="form-text text-muted">Satuan ton.</small>
                        </div>
                        <div class="mb-4">
                            <label for="update_luas">Luas</label>
                            <input type="text" class="form-control" id="update_luas" name="luas"
                                placeholder="Contoh: 10x50" aria-describedby="luasHelp">
                            <small id="luasHelp" class="form-text text-muted">Satuan meter<sup>2</sup>.</small>
                        </div>
                        <div class="mb-4">
                            <label for="update_lokasi">Lokasi</label>
                            <input type="text" class="form-control" id="update_lokasi" name="lokasi"
                                aria-describedby="lokasiHelp">
                        </div>
                        <div class="mb-4">
                            <label for="update_status">Status</label>
                            <input type="text" class="form-control" id="update_status" name="status">
                        </div>
                        <div class="mb-4">
                            <label for="update_latitude">Latitude</label>
                            <input type="text" class="form-control" id="update_latitude" name="latitude" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="update_longitude">Longitude</label>
                            <input type="text" class="form-control" id="update_longitude" name="longitude" readonly>
                        </div>
                        <div class="mb-4">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div id="updatemap" class="w-100" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
        <div class="card-body bg-gray-800 text-white pt-4">
            <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse"
                href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
                <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
                    data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                    data-size="large" data-show-count="true"
                    aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
            </div>
            <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
                class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
                Download
                <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
            <div class="d-flex justify-content-center">
                <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                    target="_blank">
                    <img src="../../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
                </a>
                <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                    <img src="../../assets/img/technologies/react-logo.svg" class="image image-xs">
                </a>
            </div>
        </div>
    </div>

    <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
        <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
            <span class="fw-bold d-inline-flex align-items-center h6">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                Settings
            </span>
        </div>
    </div>
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus fase ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
        type="text/css">
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
    <script>
        $(document).ready(function() {
            const notyf = new Notyf({
                duration: 3000,
                position: {
                    x: 'right',
                    y: 'top'
                }
            });

            // Form submission for adding Gudang
            $('#addGudangForm').on('submit', function(event) {
                event.preventDefault();

                var formData = {
                    _token: $('input[name="_token"]').val(),
                    nama_gudang: $('#nama_gudang').val(),
                    kapasitas: $('#kapasitas').val(),
                    luas: $('#luas').val(),
                    lokasi: $('#lokasi').val(),
                    status: $('#status').val(),
                    latitude: $('#latitude').val(),
                    longitude: $('#longitude').val()
                };

                $.ajax({
                    url: '{{ route('gudang-store') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            $('#addGudangModal').modal('hide');
                            notyf.success('Data berhasil ditambahkan');
                            reloadTableContents();
                        } else {
                            notyf.error('Gagal menambahkan data');
                        }
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value) {
                                errorMessage += value + '\n';
                            });
                            notyf.error('Validation errors:\n' + errorMessage);
                        } else {
                            console.error('AJAX Error: ' + error);
                            notyf.error('Terjadi kesalahan saat menambahkan data');
                        }
                    }
                });
            });

            // Form submission for updating Gudang
            $('#updateGudangForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                let id = $('#updateGudangModal').data('id');

                $.ajax({
                    url: `/gudang/${id}`,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#updateGudangModal').modal('hide');
                        notyf.success('Data gudang berhasil diperbarui');
                        reloadTableContents();
                    },
                    error: function(response) {
                        notyf.error('Gagal memperbarui data gudang');
                    }
                });
            });

            // Function to reload table contents
            function reloadTableContents() {
                $.ajax({
                    url: '{{ route('get-gudang') }}',
                    method: 'GET',
                    success: function(data) {
                        var tbody = $('#gudang-tbody');
                        tbody.empty();
                        data.forEach(function(gudang, index) {
                            var row = `
                            <tr>
                                <th class="text-gray-900" scope="row">
                                    ${gudang.nama_gudang}
                                </th>
                                <td class="fw-bolder text-gray-500">
                                    ${gudang.kapasitas}
                                </td>
                                <td class="fw-bolder text-gray-500">
                                    ${gudang.luas}m<sup>2</sup>
                                </td>
                                <td class="fw-bolder text-gray-500">
                                    ${gudang.lokasi}
                                </td>
                                <td class="fw-bolder text-gray-500">
                                    ${gudang.status}
                                </td>
                                <td>
                                    <button class="btn btn-outline-warning" type="button" onClick="showLocation(${index+1}, '${gudang.lokasi}')">tampilkan</button>
                                    <button class="btn btn-outline-tertiary" type="button" onClick="editGudang(${gudang.id})">ubah</button>
                                    <button class="btn btn-outline-danger" type="button" onClick="deleteGudang(${gudang.id})">hapus</button>
                                </td>
                            </tr>
                        `;
                            tbody.append(row);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + error);
                        notyf.error('Terjadi kesalahan saat mengambil data');
                    }
                });
            }

            // Call reloadTableContents when the document is ready
            reloadTableContents();

            // Function to show location
            window.showLocation = function(index, lokasi) {
                alert('Lokasi: ' + lokasi);
            }

            // Function to edit Gudang
            window.editGudang = function(id) {
                $.ajax({
                    url: `/gudang/${id}/edit`,
                    type: 'GET',
                    success: function(response) {
                        let gudang = response.data;
                        $('#updateGudangModal').data('id', gudang.id);
                        $('#update_nama_gudang').val(gudang.nama_gudang);
                        $('#update_kapasitas').val(gudang.kapasitas);
                        $('#update_luas').val(gudang.luas);
                        $('#update_lokasi').val(gudang.lokasi);
                        $('#update_status').val(gudang.status);
                        $('#update_latitude').val(gudang.latitude);
                        $('#update_longitude').val(gudang.longitude);

                        $('#updateGudangModal').modal('show');
                    },
                    error: function(response) {
                        notyf.error('Gagal mengambil data gudang');
                    }
                });
            };
            // Simpan ID Gudang yang akan dihapus
            let gudangIdToDelete;

            // Fungsi untuk menampilkan Modal Bootstrap untuk konfirmasi
            window.deleteGudang = function(id) {
                gudangIdToDelete = id;
                $('#confirmDeleteModal').modal('show');
            }

            // Tangani klik tombol konfirmasi
            $('#confirmDeleteButton').on('click', function() {
                $.ajax({
                    url: '/gudang/' + gudangIdToDelete + '/delete',
                    method: 'DELETE',
                    data: {
                        _token: $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        notyf.success('Gudang berhasil dihapus');
                        reloadTableContents();
                        $('#deleteGudangModal').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + error);
                        notyf.error('Terjadi kesalahan saat menghapus gudang');
                    }
                });
            });
            // Mapbox and Geocoder Initialization
            mapboxgl.accessToken =
                'pk.eyJ1IjoiZnVhZGFkaGltMjQiLCJhIjoiY2x0ZHNzbDdtMDZyaDJrcDczMnV3emdxaSJ9.ECFyjfuYWvVLH6ya-_P1Vw';

            const map = new mapboxgl.Map({
                container: 'mapgudang',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [113.666039, -8.2885468],
                zoom: 12
            });

            const tambahmap = new mapboxgl.Map({
                container: 'tambahmap',
                style: 'mapbox://styles/mapbox/streets-v12',
                center: [113.666039, -8.2885468],
                zoom: 12
            });

            const geocoder2 = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            });

            // Add the geocoder to the modal map
            tambahmap.addControl(geocoder2);

            // Handle modal show event to resize map
            $('#lahanTambah').on('shown.bs.modal', function() {
                tambahmap.resize();
            });

            var geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl,
                marker: false,
                placeholder: 'Masukan kata kunci...',
                zoom: 20
            });

            tambahmap.addControl(geocoder);

            let marker = null;
            tambahmap.on('click', function(e) {
                if (marker == null) {
                    marker = new mapboxgl.Marker()
                        .setLngLat(e.lngLat)
                        .addTo(tambahmap);
                } else {
                    marker.setLngLat(e.lngLat);
                }
                document.getElementById("latitude").value = e.lngLat.lat;
                document.getElementById("longitude").value = e.lngLat.lng;
            });

            const updateMap = new mapboxgl.Map({
                container: 'updatemap',
                style: 'mapbox://styles/mapbox/streets-v12',
                center: [113.666039, -8.2885468],
                zoom: 12
            });

            const geocoderUpdate = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            });

            updateMap.addControl(geocoderUpdate);

            $('#lahanUpdateModal').on('shown.bs.modal', function() {
                updateMap.resize();
            });

            let updateMarker = null;
            updateMap.on('click', function(e) {
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

            // Notification functions
            window.toggleButtons = function(index) {
                var button1 = document.getElementById("btnLihat" + index);
                var button2 = document.getElementById("btnLoad" + index);

                button2.removeAttribute("hidden");
                button2.removeAttribute("disabled");

                button1.setAttribute("hidden", "true");
                button1.setAttribute("disabled", "true");

                setTimeout(function() {
                    button1.removeAttribute("hidden");
                    button1.removeAttribute("disabled");
                    button2.setAttribute("hidden", "true");
                    button2.setAttribute("disabled", "true");

                    notyf.success('Lokasi berhasil diidentifikasi');
                }, 3000);
            }

            window.toggleButtonVisibleTampilkan = function(iteration) {
                var button1 = document.getElementById("btnTampilkan" + iteration);
                var button2 = document.getElementById("btnSembunyikan" + iteration);

                button2.removeAttribute("hidden");
                button2.removeAttribute("disabled");

                button1.setAttribute("hidden", "true");
                button1.setAttribute("disabled", "true");

                notyf.success('Lokasi berhasil diidentifikasi');
            }

            window.toggleButtonVisibleSembunyikan = function(iteration) {
                var button1 = document.getElementById("btnTampilkan" + iteration);
                var button2 = document.getElementById("btnSembunyikan" + iteration);

                button1.removeAttribute("hidden");
                button1.removeAttribute("disabled");

                button2.setAttribute("hidden", "true");
                button2.setAttribute("disabled", "true");

                notyf.success('Lokasi berhasil diidentifikasi');
            }
        });
    </script>

    {{-- library notify --}}
    <script src="@@path/vendor/bootstrap4-notify/bootstrap-notify.min.js"></script>
@endsection
