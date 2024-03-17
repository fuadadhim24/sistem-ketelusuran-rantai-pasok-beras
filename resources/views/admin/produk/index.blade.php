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
                <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
            <div class="list-group list-group-flush">
              <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="{{ asset('volt/asset/img/team/profile-picture-1.jpg') }}" class="avatar-md rounded">
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
                      <img alt="Image placeholder" src="{{ asset('volt/asset/img/team/profile-picture-2.jpg') }}" class="avatar-md rounded">
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
                      <img alt="Image placeholder" src="{{ asset('volt/asset/img/team/profile-picture-3.jpg') }}" class="avatar-md rounded">
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
                      <img alt="Image placeholder" src="{{ asset('volt/asset/img/team/profile-picture-4.jpg') }}" class="avatar-md rounded">
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
                      <img alt="Image placeholder" src="{{ asset('volt/asset/img/team/profile-picture-5.jpg') }}" class="avatar-md rounded">
                    </div>
                    <div class="col ps-0 ms-2">
                      <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Bapak Fahri</h4>
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
                <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                View all
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown ms-lg-3">
          <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="media d-flex align-items-center">
            <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('volt/assets/img/team/profile-picture-3.jpg') }}">
              <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                <span class="mb-0 font-small fw-bold text-gray-900">Bapak Fahri</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
              My Profile
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
              Settings
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
              Messages
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
              Support
            </a>
            <div role="separator" class="dropdown-divider my-1"></div>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
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
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">JejakTani</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Produk</h1>
        </div>
    </div>
</div>
{{-- Konten --}}
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-header row border-bottom d-flex align-items-center justify-content-between">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Daftar Produk</h2>
                            <p class="mb-0">dihasilkan setelah melalui tahap pengujian dan pengemasan<span style="color: red">*</span></p>
                        </div>
                        <div class="col text-end">
                            <a href="#" class="btn btn-sm btn-primary">Lihat semua</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Nama Produk</th>
                                    <th class="border-bottom" scope="col">Jumlah Unit</th>
                                    <th class="border-bottom" scope="col">Foto</th>
                                    <th class="border-bottom" scope="col">Harga</th>
                                    <th class="border-bottom" scope="col">Deskripsi</th>
                                    <th class="border-bottom" scope="col">Kode Produksi</th>
                                    <th class="border-bottom" scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        nama produk konten
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        325 unit
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <!-- Button Modal -->
                                        <button type="button" class="btn btn-sm btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">lihat</button>
                                        <!-- Modal Content -->
                                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="h6 modal-title">Gambar Produk</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" style="height: auto">
                                                        <img class="w-100" src="{{ asset('asset/img/admin/produk/ciherang.jpg') }}" alt="Foto Produk">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal Content -->
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <div class="d-flex">
                                            Rp. 55.000/5 kg
                                        </div>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        deskripsi konten
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        kode produksi konten
                                    </td>
                                    <td>
                                        <!-- aria-hidden="true" -->
                                        <button class="btn  btn-sm btn-outline-warning" type="button" hidden>tampilkan </button>
                                        <button class="btn  btn-sm btn-outline-gray-500" type="button">sembunyikan</button>
                                        <button class="btn  btn-sm btn-outline-tertiary" type="button">ubah</button>
                                        <button class="btn  btn-sm btn-outline-danger" type="button">hapus</button>
                                      </td>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        nama produk konten
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        325 unit
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <!-- Button Modal -->
                                        <button type="button" class="btn btn-sm btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">lihat</button>
                                        <!-- Modal Content -->
                                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="h6 modal-title">Terms of Service</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                                                        <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                                                            soon as possible of high-risk data breaches that could personally affect them.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary">Accept</button>
                                                        <button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal Content -->
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <div class="d-flex">
                                            Rp. 55.000/5 kg
                                        </div>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        deskripsi konten
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        kode produksi konten
                                    </td>
                                    <td>
                                        <!-- aria-hidden="true" -->
                                        <button class="btn  btn-sm btn-outline-warning" type="button" hidden>tampilkan </button>
                                        <button class="btn  btn-sm btn-outline-gray-500" type="button">sembunyikan</button>
                                        <button class="btn  btn-sm btn-outline-tertiary" type="button">ubah</button>
                                        <button class="btn  btn-sm btn-outline-danger" type="button">hapus</button>
                                      </td>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        nama produk konten
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        325 unit
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <!-- Button Modal -->
                                        <button type="button" class="btn btn-sm btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">lihat</button>
                                        <!-- Modal Content -->
                                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="h6 modal-title">Terms of Service</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                                                        <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                                                            soon as possible of high-risk data breaches that could personally affect them.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary">Accept</button>
                                                        <button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal Content -->
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <div class="d-flex">
                                            Rp. 55.000/5 kg
                                        </div>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        deskripsi konten
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        kode produksi konten
                                    </td>
                                    <td>
                                        <!-- aria-hidden="true" -->
                                        <button class="btn  btn-sm btn-outline-warning" type="button" hidden>tampilkan </button>
                                        <button class="btn  btn-sm btn-outline-gray-500" type="button">sembunyikan</button>
                                        <button class="btn  btn-sm btn-outline-tertiary" type="button">ubah</button>
                                        <button class="btn  btn-sm btn-outline-danger" type="button">hapus</button>
                                      </td>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        nama produk konten
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        325 unit
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <!-- Button Modal -->
                                        <button type="button" class="btn btn-sm btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">lihat</button>
                                        <!-- Modal Content -->
                                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="h6 modal-title">Terms of Service</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                                                        <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                                                            soon as possible of high-risk data breaches that could personally affect them.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary">Accept</button>
                                                        <button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal Content -->
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <div class="d-flex">
                                            Rp. 55.000/5 kg
                                        </div>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        deskripsi konten
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        kode produksi konten
                                    </td>
                                    <td>
                                        <!-- aria-hidden="true" -->
                                        <button class="btn  btn-sm btn-outline-warning" type="button" hidden>tampilkan </button>
                                        <button class="btn  btn-sm btn-outline-gray-500" type="button">sembunyikan</button>
                                        <button class="btn  btn-sm btn-outline-tertiary" type="button">ubah</button>
                                        <button class="btn  btn-sm btn-outline-danger" type="button">hapus</button>
                                      </td>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        nama produk konten
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        325 unit
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <!-- Button Modal -->
                                        <button type="button" class="btn btn-sm btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">lihat</button>
                                        <!-- Modal Content -->
                                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="h6 modal-title">Terms of Service</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                                                        <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                                                            soon as possible of high-risk data breaches that could personally affect them.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary">Accept</button>
                                                        <button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal Content -->
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        <div class="d-flex">
                                            Rp. 55.000/5 kg
                                        </div>
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        deskripsi konten
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        kode produksi konten
                                    </td>
                                    <td>
                                        <!-- aria-hidden="true" -->
                                        <button class="btn  btn-sm btn-outline-warning" type="button" hidden>tampilkan </button>
                                        <button class="btn  btn-sm btn-outline-gray-500" type="button">sembunyikan</button>
                                        <button class="btn  btn-sm btn-outline-tertiary" type="button">ubah</button>
                                        <button class="btn  btn-sm btn-outline-danger" type="button">hapus</button>
                                      </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                       <div class="row">
                            <h2 class="fs-5 fw-bold mb-0">Belum Dikemas</h2>
                            <p class="mb-0">Merupakan hasil pengujian</p>
                       </div>
                        
                        <a href="#" class="btn btn-sm btn-primary">Lihat semua</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar">
                                        <img class="rounded" alt="Image placeholder" src="{{ asset('volt/assets/img/team/exam.png') }}">
                                    </a>
                                </div>
                                <div class="col-auto ms--2">
                                    <h4 class="h6 mb-0">
                                        <a href="#">Pengujian 1:</a>
                                        <small style="margin-left: 1em">10/08/24</small>
                                    </h4>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success dot rounded-circle me-1"></div>
                                        <small>Premuim</small>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                        <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        Kemas
                                    </a>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar">
                                            <img class="rounded" alt="Image placeholder" src="{{ asset('volt/assets/img/team/exam.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-auto ms--2">
                                        <h4 class="h6 mb-0">
                                            <a href="#">Pengujian 2:</a>
                                            <small style="margin-left: 1em">10/08/24</small>
                                        </h4>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-warning dot rounded-circle me-1"></div>
                                            <small>Medium I</small>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                          <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            Kemas
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar">
                                            <img class="rounded" alt="Image placeholder" src="{{ asset('volt/assets/img/team/exam.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-auto ms--2">
                                        <h4 class="h6 mb-0">
                                            <a href="#">Pengujian 3:</a>
                                            <small style="margin-left: 1em">10/08/24</small>
                                        </h4>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-danger dot rounded-circle me-1"></div>
                                            <small>Medium II</small>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                          <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            Kemas
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar">
                                            <img class="rounded" alt="Image placeholder" src="{{ asset('volt/assets/img/team/exam.png') }}">
                                        </a>
                                    </div>
                                    <div class="col-auto ms--2">
                                    <h4 class="h6 mb-0">
                                            <a href="#">Pengujian 4:</a>
                                            <small style="margin-left: 1em">10/08/24</small>
                                    </h4>
                                    <div class="d-flex align-items-center">
                                      <div class="bg-info dot rounded-circle me-1"></div>
                                      <small>Medium I</small>
                                    </div>
                                    </div>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                          <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            Kemas
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Jumlah Grade</h2>
                         <a href="#" class="btn btn-sm btn-primary">Lihat semua</a>
                     </div>
                    <div class="card-body">
                        <!-- Project 2 -->
                        <div class="row align-items-center mb-4">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Premium</div>
                                        <div class="small fw-bold text-gray-500"><span>60 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 3 -->
                        <div class="row align-items-center mb-4">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Medium I</div>
                                        <div class="small fw-bold text-gray-500"><span>45 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 3 -->
                        <div class="row align-items-center mb-3">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Medium II</div>
                                        <div class="small fw-bold text-gray-500"><span>34 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 4 -->
                        <div class="row align-items-center mb-3">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Medium III</div>
                                        <div class="small fw-bold text-gray-500"><span>34 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block">
                        <div class="h6 fw-normal text-gray mb-2">Total minat produk</div>
                        <h2 class="h3 fw-extrabold">452</h2>
                        <div class="small mt-2">                               
                            <span class="fas fa-angle-up text-success"></span>                                   
                            <span class="text-success fw-bold">18.2%</span>
                        </div>
                    </div>
                    <div class="d-block ms-auto">
                        <div class="d-flex align-items-center text-end mb-2">
                            <span class="dot rounded-circle bg-gray-800 me-2"></span>
                            <span class="fw-normal small">July</span>
                        </div>
                        <div class="d-flex align-items-center text-end">
                            <span class="dot rounded-circle bg-secondary me-2"></span>
                            <span class="fw-normal small">August</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
                </div>
            </div>
        </div>
        <div class="col-12 px-0">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h2 class="fs-5 fw-bold mb-1">Acquisition</h2>
                    <p>Tells you where your visitors originated from, such as search engines, social networks or website referrals.</p>
                    <div class="d-block">
                        <div class="d-flex align-items-center me-5">
                            <div class="icon-shape icon-sm icon-shape-danger rounded me-3">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="d-block">
                                <label class="mb-0">Bounce Rate</label>
                                <h4 class="mb-0">33.50%</h4>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <div class="icon-shape icon-sm icon-shape-purple rounded me-3">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path></svg>                                        </div>
                            <div class="d-block">
                                <label class="mb-0">Sessions</label>
                                <h4 class="mb-0">9,567</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path></svg>
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
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
            Settings
        </span>
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
@endsection
