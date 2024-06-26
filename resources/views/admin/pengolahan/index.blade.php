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
                            @forelse ($pengolahan as $item)
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
                                <tbody>
                                    <tr id="row-{{ $item->id }}">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>PG00{{ $item->id }}</td>
                                        <td>PB00{{ optional($item->produksi)->id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->hasil }}</td>
                                        <td>{{ optional($item->gudang)->nama_gudang }}</td>
                                        <td>{{ $item->metode }}</td>
                                        <td>{{ $item->lama }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-tertiary" type="button">ubah</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            @empty
                                <tr>
                                    <td colspan="6">Tidak ada data</td>
                                </tr>
                            @endforelse

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
                                        @forelse ($unPengolahan as $item)
                                            <option value="{{ $item->id }}"
                                                data-produksi="{{ json_encode($item) }}">
                                                PB00{{ $item->id }}</option>
                                        @empty
                                        @endforelse
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
                                    <label for="textarea">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" placeholder="Enter your message..." id="deskripsi" rows="4"></textarea>
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

    <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
        <div class="row">
            <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a
                        class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
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

            function showNotification(message, type) {
                const notyf = new Notyf({
                    position: {
                        x: 'right',
                        y: 'top',
                    },
                    types: [{
                        type: type,
                        background: 'blue',
                        icon: {
                            className: 'fas fa-info-circle',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }]
                });
                notyf.success({
                    message: message,
                    duration: 3000,
                    icon: false
                });
            }

            function resetForm(form) {
                form[0].reset();
            }

            $(document).on('click', '.btn-ubah-varietas', function() {
                var id = $(this).data('id');
                var varietas = $(this).data('varietas');
                var deskripsi = $(this).data('deskripsi');
                var keunggulan = $(this).data('keunggulan');
                var jenis_musim = $(this).data('jenis-musim');
                var lama_tanam = $(this).data('lama-tanam');
                var ketahanan_hama_penyakit = $(this).data('ketahanan-hama-penyakit');
                var kategori = $(this).data('kategori'); // New data attribute for category
                var karakteristik_hasil = $(this).data(
                    'karakteristik-hasil'); // New data attribute for characteristic results

                // Set values to modal fields
                $('#u-id').val(id);
                $('#u-varietas').val(varietas);
                $('#u-deskripsi').val(deskripsi);
                $('#u-keunggulan').val(keunggulan);
                $('#u-country').val(jenis_musim);
                $('#u-ketahanan_hama_penyakit').val(ketahanan_hama_penyakit);
                $('#u-lama_tanam').val(lama_tanam);
                $('#u-kategori').val(kategori); // Set value for category field in update modal
                $('#u-karakteristik_hasil').val(
                    karakteristik_hasil); // Set value for characteristic results field in update modal

                // Show modal
                var modal = new bootstrap.Modal(document.getElementById('modal-update'));
                modal.show();
            });


            $(document).on('click', '.btn-hapus-varietas', function() {
                var varietasId = $(this).data('id'); // Get the variety ID from data-id attribute
                if (confirm('Apakah Anda yakin ingin menghapus varietas ini?')) {
                    var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token
                    $.ajax({
                        type: 'DELETE',
                        url: '/hapusvarietas/' + varietasId,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            console.log(response);
                            $('#row-' + varietasId).remove(); // Remove the row from the table
                            // Show success notification
                            showNotification('Varietas berhasil dihapus', 'info');
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });

            $('#pengolahanForm').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission
                var form = $(this);
                var url = form.attr('action');
                var method = form.attr('method');
                var formData = form.serialize(); // Serialize the form data

                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        // $('#modal-form-signup').modal('hide');
                        resetForm(form); // Reset form fields
                        reloadContent();
                        showNotification('Pengolahan berhasil ditambahkan', 'info');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            // Handle submit form for update
            $('#updateForm').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission
                var form = $(this);
                var url = form.attr('action');
                var method = form.attr('method');
                var formData = form.serialize(); // Serialize the form data

                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        $('#modal-update').modal(
                            'hide'); // Hide the modal after successful submission
                        resetForm(form); // Reset form fields
                        // Reload the content if needed
                        reloadContent();
                        // Show success notification
                        showNotification('Varietas berhasil diperbarui', 'info');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            // Function to reload content
            function reloadContent() {
                $.get("{{ route('reload-content-pengolahan') }}", function(data) {
                    var tableBody = $('#daftar-pengolahan tbody');
                    tableBody.empty(); // Clear the table body

                    $.each(data.pengolahan, function(index, pengolahan) {
                        tableBody.append(
                            '<tr id="row-' + padi.id + '">' +
                            '<td>' + (index + 1) + '</td>' +
                            '<td>' + padi.varietas + '</td>' +
                            '<td>' + padi.kategori + '</td>' +
                            '<td class="text-justify text-wrap">' + padi.deskripsi + '</td>' +
                            '<td class="text-justify text-wrap">' + padi.karakteristik_hasil +
                            '</td>' +
                            '<td class="text-justify text-wrap">' + padi.keunggulan + '</td>' +
                            '<td>' + padi.jenis_musim + '</td>' +
                            '<td>' + padi.lama_tanam + '</td>' +
                            '<td class="text-justify text-wrap">' + padi
                            .ketahanan_hama_penyakit + '</td>' +
                            '<td>Foto</td>' +
                            '<td>' +
                            '<button class="btn btn-outline-tertiary btn-ubah-varietas" type="button" ' +
                            'data-id="' + padi.id + '" ' +
                            'data-varietas="' + padi.varietas + '" ' +
                            'data-kategori="' + padi.kategori + '" ' +
                            'data-deskripsi="' + padi.deskripsi + '" ' +
                            'data-karakteristik-hasil="' + padi.karakteristik_hasil + '" ' +
                            'data-keunggulan="' + padi.keunggulan + '" ' +
                            'data-jenis-musim="' + padi.jenis_musim + '" ' +
                            'data-lama-tanam="' + padi.lama_tanam + '" ' +
                            'data-ketahanan-hama-penyakit="' + padi.ketahanan_hama_penyakit +
                            '">' +
                            'Ubah</button>' +
                            '<button class="btn btn-outline-danger btn-hapus-varietas" type="button" data-id="' +
                            padi.id + '">Hapus</button>' +
                            '</td>' +
                            '</tr>'
                            '<tr id="row-' + pengolahan.id + '">' +
                            '<td>' + (index + 1) + '</td>' +
                            '<td>PG00' + pengolahan.id + '</td>' +
                            '<td>PB00' + pengolahan.produksi.id + '</td>' +
                            '<td>' + pengolahan.created_at + '</td>' +
                            '<td>' + pengolahan.hasil + '</td>' +
                            '<td>' + (pengolahan.gudang ? pengolahan.gudang.nama_gudang : '') +
                            '</td>' +
                            '<td>' + pengolahan.metode + '</td>' +
                            '<td>' + pengolahan.lama + '</td>' +
                            '<td>' + pengolahan.deskripsi + '</td>' +
                            '<td>' +
                            '<button class="btn btn-sm btn-outline-tertiary" type="button">ubah</button>' +
                            '<button class="btn btn-sm btn-outline-danger" type="button">hapus</button>' +
                            '</td>' +
                            '</tr>';
                        );
                    });
                });
            }
        });
    </script>
@endsection