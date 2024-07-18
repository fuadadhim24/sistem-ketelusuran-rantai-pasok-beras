@extends('template')
@section('main')
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
                <li class="breadcrumb-item"><a href="#">JejakPadi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengolahan</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Pengolahan</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card border-0 shadow components-section">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                    <h2 class="fs-5 fw-bold mb-0">Riwayat Pengolahan</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="daftar-pengolahan" class="table table-centered table-nowrap mb-0 rounded"
                            style="width:100%">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0">No</th>
                                    <th class="border-0">ID Pengolahan</th>
                                    <th class="border-0">ID Produksi</th>
                                    <th class="border-0">Tanggal</th>
                                    <th class="border-0">Hasil</th>
                                    <th class="border-0">Gudang Penyimpanan</th>
                                    <th class="border-0">Metode</th>
                                    <th class="border-0">Lama Pengolahan</th>
                                    <th class="border-0">Deskripsi</th>
                                    <th class="border-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="pengolahan-table-body">
                                <!-- Data will be populated dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="card border-0 shadow components-section">
                <form id="pengolahanForm" action="{{ route('pengolahan.store') }}" method="POST">
                    @csrf
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Tambah Pengolahan</h2>
                        <button type="submit" class="btn btn-sm btn-primary" id="simpan">Simpan</button>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-6 col-sm-6">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label class="my-1 me-2" for="idProduksi">ID Produksi</label>
                                    <select class="form-select" name="id_produksi" id="idProduksi"
                                        aria-label="Default select example">
                                        <option selected>Pilih ID Produksi</option>
                                        <!-- Options will be populated dynamically -->
                                    </select>
                                    <small id="Help" class="form-text text-muted">merupakan hasil panen yang belum
                                        diolah.</small>
                                </div>
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="disabledTextInput">Jumlah Panen</label>
                                    <input type="text" id="jumlah_panen" class="form-control"
                                        placeholder="Disabled input" disabled>
                                </div>
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="disabledTextInput">Tanggal Produksi</label>
                                    <input type="text" id="tanggal_produksi" class="form-control"
                                        placeholder="Disabled input" disabled>
                                </div>
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="disabledTextInput">Tanggal Panen</label>
                                    <input type="text" id="tanggal_panen" class="form-control"
                                        placeholder="Disabled input" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput">Nama Padi</label>
                                    <input type="text" id="nama_padi" class="form-control"
                                        placeholder="Disabled input" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput">Nama Lahan</label>
                                    <input type="text" id="nama_lahan" class="form-control"
                                        placeholder="Disabled input" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="mb-4">
                                    <label for="metode">Metode</label>
                                    <input type="metode" class="form-control" name="metode" id="metode">
                                </div>
                                <div class="mb-3">
                                    <label for="birthday">Tanggal Pengolahan</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input data-datepicker="" class="form-control" name="tanggal_pengolahan"
                                            id="tanggal_pengolahan" type="text" placeholder="dd/mm/yyyy" required>
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Enter your message..." rows="4"></textarea>
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="lama">Lama Pengolahan</label>
                                    <input type="text" class="form-control" placeholder="cth: 10" id="lama"
                                        name="lama">
                                    <small id="emailHelp" class="form-text text-muted">satuan jam.</small>
                                </div>
                                <div class="mb-4">
                                    <label for="hasil">Hasil (ton)</label>
                                    <input type="text" placeholder="cth: 55,5" class="form-control" id="hasil"
                                        name="hasil">
                                    <small id="emailHelp" class="form-text text-muted">satuan ton.</small>
                                </div>
                                <!-- End of Form -->
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- Modal Edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Pengolahan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editPengolahanForm" action="#" method="POST">
                            @csrf
                            <input type="hidden" name="_method" id="editMethod" value="PUT">
                            <input type="hidden" id="edit_id" name="edit_id" value="">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-lg-6 col-sm-6">
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label class="my-1 me-2" for="editIdProduksi">ID Produksi</label>
                                            <select class="form-select" name="id_produksi" id="editIdProduksi"
                                                aria-label="Default select example">
                                                <option selected>Pilih ID Produksi</option>
                                                <!-- Options will be populated dynamically -->
                                            </select>
                                            <small id="editHelp" class="form-text text-muted">merupakan hasil panen yang
                                                sudah
                                                diolah.</small>
                                        </div>
                                        <!-- Form -->
                                        <div class="mb-3">
                                            <label for="editJumlahPanen">Jumlah Panen</label>
                                            <input type="text" id="editJumlahPanen" class="form-control"
                                                placeholder="Jumlah Panen" disabled>
                                        </div>
                                        <!-- Form -->
                                        <div class="mb-3">
                                            <label for="editTanggalProduksi">Tanggal Produksi</label>
                                            <input type="text" id="editTanggalProduksi" class="form-control"
                                                placeholder="Tanggal Produksi" disabled>
                                        </div>
                                        <!-- Form -->
                                        <div class="mb-3">
                                            <label for="editTanggalPanen">Tanggal Panen</label>
                                            <input type="text" id="editTanggalPanen" class="form-control"
                                                placeholder="Tanggal Panen" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editNamaPadi">Nama Padi</label>
                                            <input type="text" id="editNamaPadi" class="form-control"
                                                placeholder="Nama Padi" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editNamaLahan">Nama Lahan</label>
                                            <input type="text" id="editNamaLahan" class="form-control"
                                                placeholder="Nama Lahan" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="mb-4">
                                            <label for="editMetode">Metode</label>
                                            <input type="text" class="form-control" name="metode" id="editMetode"
                                                placeholder="Metode">
                                        </div>
                                        <div class="mb-3">
                                            <label for="editTanggalPengolahan">Tanggal Pengolahan</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                                <input data-datepicker="" class="form-control" name="tanggal_pengolahan"
                                                    id="editTanggalPengolahan" type="text" placeholder="dd/mm/yyyy"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="editDeskripsi">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="editDeskripsi" placeholder="Deskripsi" rows="4"></textarea>
                                        </div>
                                        <!-- End of Form -->
                                        <!-- Form -->
                                        <div class="mb-4">
                                            <label for="editLama">Lama Pengolahan</label>
                                            <input type="text" class="form-control" placeholder="cth: 10"
                                                id="editLama" name="lama">
                                            <small id="editEmailHelp" class="form-text text-muted">satuan jam.</small>
                                        </div>
                                        <div class="mb-4">
                                            <label for="editHasil">Hasil (ton)</label>
                                            <input type="text" placeholder="cth: 55,5" class="form-control"
                                                id="editHasil" name="hasil">
                                            <small id="editEmailHelp" class="form-text text-muted">satuan ton.</small>
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of Card Body -->
                            <div class="card-footer border-top d-flex align-items-center justify-content-end">
                                <button type="submit" class="btn btn-sm btn-primary" id="simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
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

    <script>
        document.getElementById('idProduksi').addEventListener('change', function() {
            var selectedIndex = this.selectedIndex;
            var selectedOption = this.options[selectedIndex];
            var produksiData = JSON.parse(selectedOption.getAttribute('data-produksi'));
            console.log(produksiData);

            document.getElementById('jumlah_panen').value = produksiData.jumlah_benih;
            document.getElementById('tanggal_produksi').value = produksiData.tanggal_produksi;
            document.getElementById('tanggal_panen').value = produksiData.panen ? produksiData.panen.created_at :
                '';
            document.getElementById('nama_padi').value = produksiData.padi ? produksiData.padi.varietas : '';
            document.getElementById('nama_lahan').value = produksiData.lahan ? produksiData.lahan.nama_lahan : '';
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch pengolahan data pertama kali saat halaman dimuat
            function fetchPengolahan() {
                $.ajax({
                    url: "{{ route('pengolahan.fetch') }}",
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.length > 0) {
                            let html = '';
                            $.each(response, function(index, item) {
                                html += '<tr id="row-' + item.id + '">';
                                html += '<td>' + (index + 1) + '</td>';
                                html += '<td>PG00' + item.id + '</td>';
                                html += '<td>PB00' + (item.produksi ? item.produksi.id : '-') +
                                    '</td>';
                                html += '<td>' + item.created_at + '</td>';
                                html += '<td>' + item.hasil + '</td>';
                                html += '<td>' + (item.gudang ? item.gudang.nama_gudang : '-') +
                                    '</td>';
                                html += '<td>' + item.metode + '</td>';
                                html += '<td>' + item.lama + '</td>';
                                html += '<td>' + item.deskripsi + '</td>';
                                html += '<td>';
                                html +=
                                    '<button class="btn btn-sm btn-outline-tertiary btn-edit" type="button" data-toggle="modal" data-target="#editModal" data-id="' +
                                    item.id + '">Ubah</button>';
                                html +=
                                    '<button class="btn btn-sm btn-outline-danger btn-delete" type="button" data-id="' +
                                    item.id + '">Hapus</button>';
                                html += '</td>';
                                html += '</tr>';
                            });
                            $('#pengolahan-table-body').html(html);
                        } else {
                            $('#pengolahan-table-body').html(
                                '<tr><td colspan="10">Tidak ada data</td></tr>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        $('#pengolahan-table-body').html(
                            '<tr><td colspan="10">Error fetching data</td></tr>');
                    }
                });
            }

            // Fetch unPengolahan data untuk dropdown saat halaman dimuat
            function fetchUnPengolahan() {
                $.ajax({
                    url: "{{ route('unpengolahan.fetch') }}",
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.length > 0) {
                            let html = '<option selected>Pilih ID Produksi</option>';
                            $.each(response, function(index, item) {
                                html += '<option value="' + item.id + '" data-produksi=\'' +
                                    JSON.stringify(item) + '\'>PB00' + item.id + '</option>';
                            });
                            $('#idProduksi').html(html);
                        } else {
                            $('#idProduksi').html('<option selected>Tidak ada data</option>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        $('#idProduksi').html('<option selected>Error fetching data</option>');
                    }
                });
            }
            $('#pengolahanForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('pengolahan.store') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        alert('Data berhasil disimpan!');
                        $('#pengolahanForm')[0].reset();
                        fetchPengolahan(); // Refresh tabel setelah berhasil menyimpan
                        fetchUnPengolahan(); // Refresh dropdown setelah berhasil menyimpan
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                        alert('Terjadi kesalahan! Silakan coba lagi.');
                    }
                });
            });

            // Event listener untuk tombol "Ubah" pada setiap baris tabel
            $(document).on('click', '.btn-edit', function() {
                var id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url: '/pengolahan/' + id + '/edit',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#editIdProduksi').empty();
                        $('#editIdProduksi').append('<option value="' + response.id_produksi +
                            '">' + 'PB00' + response.id_produksi + '</option>');
                        $('#editMetode').val(response.metode);
                        var tanggalPengolahan = response.updated_at ? response.updated_at :
                            response.created_at;
                        $('#editTanggalPengolahan').val(tanggalPengolahan);
                        $('#editDeskripsi').val(response.deskripsi);
                        $('#editLama').val(response.lama);
                        $('#editHasil').val(response.hasil);

                        $('#edit_id').val(id); // Set nilai edit_id untuk form edit

                        $('#editPengolahanForm').attr('action', '/pengolahan/' + id +
                        '/update');
                        $('#editMethod').val('PUT');
                        $('#editModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Terjadi kesalahan! Silakan coba lagi.');
                    }
                });
            });

            // Event listener untuk submit form edit melalui AJAX
            $('#editPengolahanForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                var id = $('#edit_id').val();
                var csrfToken = $('meta[name="csrf-token"]').attr(
                    'content');
                $.ajax({
                    url: '/pengolahan/' + id + '/update',
                    type: 'PUT',
                    data: formData,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        $('#editModal').modal('hide');
                        alert('Data berhasil diperbarui!');
                        fetchPengolahan();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Terjadi kesalahan! Silakan coba lagi.');
                    }
                });
            });

            // Event listener untuk tombol "Hapus"
            $(document).on('click', '.btn-delete', function() {
                var id = $(this).data('id');
                deleteData(id); // Panggil fungsi deleteData untuk menghapus data
            });

            function deleteData(id) {
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/pengolahan/' + id + '/delete',
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            $('#row-' + id).remove();
                            fetchUnPengolahan();
                            alert('Data berhasil dihapus!');
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            alert('Terjadi kesalahan! Silakan coba lagi.');
                        }
                    });
                }
            }

            fetchPengolahan();
            fetchUnPengolahan();
        });
    </script>
@endsection
