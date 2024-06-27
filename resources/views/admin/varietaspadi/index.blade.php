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
                <li class="breadcrumb-item active" aria-current="page">Varietas Padi</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Varietas Padi</h1>
            </div>
        </div>
    </div>

<div class="col-12 mb-4">
    <div class="card border-0 shadow">
      <div class="card-body">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
          <h2 class="fs-5 fw-bold mb-0">Daftar Varietas Padi</h2>
          <button  type="button" class="btn btn-block btn-primary" data-bs-toggle="modal" data-bs-target="#modal-form-signup">Tambah Varietas</button>
        </div>
        <!-- Modal Content -->
        <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="card-header border-0 text-center pb-0">
                        <h2 class="mb-1 h5">Tambah Varietas Padi</h2>
                        <p class="mb-3">Informasi lengkap menentukan keputusan anda dalam pemilihan bibit.</p>
                    </div>
                    <div class="card-body p-0 pl-lg-3">
                        <form id="varietasForm" action="{{ route('varietasPadi.store') }}" method="POST">
                            @csrf
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="varietas">Nama Varietas</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                    <input type="text" name="varietas" class="form-control" placeholder="cth: Ciherang" id="varietas" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" class="form-select" id="kategori" aria-label="Default select example">
                                    <option value="Rekomendasi" selected>Rekomendasi</option>
                                    <option value="Selalu">Selalu</option>
                                    <option value="Jarang">Jarang</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder="Enter your message..." id="deskripsi" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="karakteristik_hasil">Karakteristik Hasil</label>
                                <textarea name="karakteristik_hasil" class="form-control" placeholder="cth: tinggi hasil panen, kualitas beras, dll." id="karakteristik_hasil" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="keunggulan">Keunggulan</label>
                                <textarea name="keunggulan" class="form-control" placeholder="cth: hasil beras unggul;tahan terhadap penyakit;padi tinggi;" id="keunggulan" rows="4"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label class="my-1 me-2" for="jenis_musim">Jenis Musim</label>
                                <select name="jenis_musim" class="form-select" id="jenis_musim" aria-label="Default select example">
                                    <option value="Hujan" selected>Hujan</option>
                                    <option value="Kemarau">Kemarau</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="ketahanan_hama_penyakit">Ketahanan Hama Penyakit</label>
                                <input type="text" name="ketahanan_hama_penyakit" class="form-control" placeholder="cth: tahan penyakit A, B, C" id="ketahanan_hama_penyakit" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="lama_tanam">Lama Tanam</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                    <input type="number" name="lama_tanam" class="form-control" placeholder="terhitung sejak awal persemaian hingga panen. cth: 120" id="lama_tanam" required>
                                </div>
                            </div>
                            <!-- End of Form -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-block btn-primary mb-3 w-100">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- End of Modal Content -->
        <div class="table-responsive">
    <table id="daftar-varietas" class="table table-centered table-nowrap mb-0 rounded" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th class="border-0">No</th>
                <th class="border-0">Nama Varietas</th>
                <th class="border-0">Kategori</th>
                <th class="border-0" style="width:15%">Deskripsi</th>
                <th class="border-0" style="width:15%">Karakteristik Hasil</th>
                <th class="border-0" style="width:15%">Keunggulan</th>
                <th class="border-0">Jenis Musim</th>
                <th class="border-0">Lama Tanam</th>
                <th class="border-0" style="width:20%">Ketahanan Hama Penyakit</th>
                <th class="border-0">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Item -->
            @foreach ($padi as $item)
            <tr id="row-{{ $item->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->varietas }}</td>
                <td>{{ $item->kategori }}</td>
                <td class="text-justify text-wrap">{{ $item->deskripsi }}</td>
                <td class="text-justify text-wrap">{{ $item->karakteristik_hasil }}</td>
                <td class="text-justify text-wrap">{{ $item->keunggulan }}</td>
                <td>{{ $item->jenis_musim }}</td>
                <td>{{ $item->lama_tanam }}</td>
                <td class="text-justify text-wrap">{{ $item->ketahanan_hama_penyakit }}</td>
                <td>
                    <button class="btn btn-outline-tertiary btn-ubah-varietas" type="button" 
                        data-id="{{ $item->id }}" 
                        data-varietas="{{ $item->varietas }}" 
                        data-kategori="{{ $item->kategori }}" 
                        data-deskripsi="{{ $item->deskripsi }}" 
                        data-karakteristik-hasil="{{ $item->karakteristik_hasil }}" 
                        data-keunggulan="{{ $item->keunggulan }}" 
                        data-jenis-musim="{{ $item->jenis_musim }}" 
                        data-lama-tanam="{{ $item->lama_tanam }}" 
                        data-ketahanan-hama-penyakit="{{ $item->ketahanan_hama_penyakit }}">Ubah
                    </button>
                    <button class="btn btn-outline-danger btn-hapus-varietas" type="button" data-id="{{ $item->id }}">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


                    <style>
                        .text-wrap {
                            white-space: normal;
                            word-wrap: break-word;
                            overflow-wrap: break-word;
                        }

                        .text-justify {
                            text-align: justify;
                        }

                        td {
                            max-width: 200px; /* Adjust as necessary */
                            height: auto;
                        }
                    </style>

                </div>
                </div>
                </div>
                </div>


                <!-- Modal Content -->
                <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="card-header border-0 text-center pb-0">
                        <h2 class="mb-1 h5">Update Varietas Padi</h2>
                        <p class="mb-3">Informasi lengkap menentukan keputusan anda dalam pemilihan bibit.</p>
                    </div>
                    <div class="card-body p-0 pl-lg-3">
                        <form id="updateForm" action="{{ isset($item) ? route('update-varietas', ['id' => $item->id ]) : '' }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <input type="hidden" name="id" class="form-control" value="{{ isset($item->id) ? $item->id : '' }}" id="u-id">
                                <label for="nama">Nama Varietas</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                    <input type="text" name="varietas" class="form-control" placeholder="cth: Ciherang" id="u-varietas" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" class="form-select" id="u-kategori" aria-label="Default select example">
                                    <option value="Rekomendasi">Rekomendasi</option>
                                    <option value="Selalu">Selalu</option>
                                    <option value="Jarang">Jarang</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder="Enter your message..." id="u-deskripsi" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="karakteristik_hasil">Karakteristik Hasil</label>
                                <textarea name="karakteristik_hasil" class="form-control" placeholder="cth: tinggi hasil panen, kualitas beras, dll." id="u-karakteristik_hasil" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="keunggulan">Keunggulan</label>
                                <textarea name="keunggulan" class="form-control" placeholder="cth: hasil beras unggul;tahan terhadap penyakit;padi tinggi;" id="u-keunggulan" rows="4"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label class="my-1 me-2" for="jenis_musim">Jenis Musim</label>
                                <select name="jenis_musim" class="form-select" id="u-jenis_musim" aria-label="Default select example">
                                    <option value="Hujan">Hujan</option>
                                    <option value="Kemarau">Kemarau</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="ketahanan_hama_penyakit">Ketahanan Hama Penyakit</label>
                                <input type="text" name="ketahanan_hama_penyakit" class="form-control" placeholder="cth: tahan penyakit A, B, C" id="u-ketahanan_hama_penyakit" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="lama_tanam">Lama Tanam</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                    <input type="number" name="lama_tanam" class="form-control" placeholder="terhitung sejak awal persemaian hingga panen. cth: 120" id="u-lama_tanam" required>
                                </div>
                            </div>
                            <!-- End of Form -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-block btn-primary mb-3 w-100">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                  <!-- End of Modal Content -->
                  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus varietas ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
            </div>
        </div>
    </div>
</div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
$(document).ready(function() {
    // Function to show notification
    function showNotification(message, type) {
        const notyf = new Notyf({
            position: {
                x: 'right',
                y: 'top',
            },
            types: [
                {
                    type: type,
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
            message: message,
            duration: 3000,
            icon: false
        });
    }

    // Function to reset form fields
    function resetForm(form) {
        form[0].reset(); // Reset the form using the built-in reset() method
    }

    // Handle click event for "Ubah" button using event delegation
    $(document).on('click', '.btn-ubah-varietas', function() {
        var id = $(this).data('id');
        var varietas = $(this).data('varietas');
        var deskripsi = $(this).data('deskripsi');
        var keunggulan = $(this).data('keunggulan');
        var jenis_musim = $(this).data('jenis-musim');
        var lama_tanam = $(this).data('lama-tanam');
        var ketahanan_hama_penyakit = $(this).data('ketahanan-hama-penyakit');
        var kategori = $(this).data('kategori'); 
        var karakteristik_hasil = $(this).data('karakteristik-hasil'); 

        // Set values to modal fields
        $('#u-id').val(id);
        $('#u-varietas').val(varietas);
        $('#u-deskripsi').val(deskripsi);
        $('#u-keunggulan').val(keunggulan);
        $('#u-country').val(jenis_musim);
        $('#u-ketahanan_hama_penyakit').val(ketahanan_hama_penyakit);
        $('#u-lama_tanam').val(lama_tanam);
        $('#u-kategori').val(kategori);
        $('#u-karakteristik_hasil').val(karakteristik_hasil);

        // Show modal
        var modal = new bootstrap.Modal(document.getElementById('modal-update'));
        modal.show();
    });

    // Handle click event for "Hapus" button using event delegation
    $(document).on('click', '.btn-hapus-varietas', function() {
        var varietasId = $(this).data('id'); 
        $('#confirmDeleteModal').data('id', varietasId).modal('show'); 
    });

    $('#confirmDeleteBtn').on('click', function() {
        var varietasId = $('#confirmDeleteModal').data('id'); 
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); 

        $.ajax({
            type: 'DELETE',
            url: '/hapusvarietas/' + varietasId,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
                $('#row-' + varietasId).remove(); 
                showNotification('Varietas berhasil dihapus', 'info');
                $('#confirmDeleteModal').modal('hide'); 
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Handle submit form untuk penambahan varietas
    $('#varietasForm').submit(function(e) {
        e.preventDefault(); 
        var form = $(this);
        var url = form.attr('action');
        var method = form.attr('method');
        var formData = form.serialize(); 

        $.ajax({
            type: method,
            url: url,
            data: formData,
            success: function(response) {
                console.log(response);
                $('#modal-form-signup').modal('hide');
                resetForm(form); 
                reloadContent();
                showNotification('Varietas berhasil ditambahkan', 'info');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    // Handle submit form for update
    $('#updateForm').submit(function(e) {
        e.preventDefault(); 
        var form = $(this);
        var url = form.attr('action');
        var method = form.attr('method');
        var formData = form.serialize(); 

        $.ajax({
            type: method,
            url: url,
            data: formData,
            success: function(response) {
                console.log(response);
                $('#modal-update').modal('hide'); 
                resetForm(form); 
                reloadContent();
                showNotification('Varietas berhasil diperbarui', 'info');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Function to reload content
    function reloadContent() {
        $.get("{{ route('reload-content-varietas') }}", function(data) {
            var tableBody = $('#daftar-varietas tbody');
            tableBody.empty(); 

            $.each(data.padi, function(index, padi) {
                tableBody.append(
                    '<tr id="row-' + padi.id + '">' +
                    '<td>' + (index + 1) + '</td>' +
                    '<td>' + padi.varietas + '</td>' +
                    '<td>' + padi.kategori + '</td>' +
                    '<td class="text-justify text-wrap">' + padi.deskripsi + '</td>' +
                    '<td class="text-justify text-wrap">' + padi.karakteristik_hasil + '</td>' +
                    '<td class="text-justify text-wrap">' + padi.keunggulan + '</td>' +
                    '<td>' + padi.jenis_musim + '</td>' +
                    '<td>' + padi.lama_tanam + '</td>' +
                    '<td class="text-justify text-wrap">' + padi.ketahanan_hama_penyakit + '</td>' +
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
                    'data-ketahanan-hama-penyakit="' + padi.ketahanan_hama_penyakit + '">' +
                    'Ubah</button>' +
                    '<button class="btn btn-outline-danger btn-hapus-varietas" type="button" data-id="' + padi.id + '">Hapus</button>' +
                    '</td>' +
                    '</tr>'
                );
            });
        });
    }
});
</script>


@endsection
