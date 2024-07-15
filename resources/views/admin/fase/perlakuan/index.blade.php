@extends('template')
@section('main')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
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
                </div>
                <ul class="navbar-nav align-items-center">
                    <!-- Navbar content here... -->
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
                <li class="breadcrumb-item"><a href="#">Fase</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perlakuan</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Perlakuan</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal-form-signup">Tambah Perlakuan</button>
                    </div>
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog"
                        aria-labelledby="modal-form-signup" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card p-3 p-lg-4">
                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="card-header border-0 text-center pb-0">
                                            <h2 class="mb-1 h5">Tambah Perlakuan</h2>
                                        </div>
                                        <div class="card-body p-0 pl-lg-3">
                                            <form action="#">
                                                <div class="form-group mb-4">
                                                    <label for="nama">Nama Perlakuan</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon3"><span
                                                                class="fas fa-envelope"></span></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="cth: Berikan pupuk hari ini" id="nama"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="durasi">Durasi</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon3"><span
                                                                class="fas fa-envelope"></span></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="berlangsungnya perlakuan. cth: 10" id="durasi"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="hari">Hari</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon3"><span
                                                                class="fas fa-envelope"></span></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="terhitung sejak awal fase. cth: 23"
                                                            id="hari" required>
                                                    </div>
                                                </div>
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-block btn-primary mb-3 w-100"
                                                        data-bs-dismiss="modal">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal Tambah -->
                    <!-- Tabel Perlakuan -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Perlakuan</th>
                                    <th>Durasi</th>
                                    <th>Hari</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- Biarkan javascript yang ngeload -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End of Tabel Perlakuan -->
                    <!-- Modal Edit -->
                    <div class="modal fade" id="modal-form-edit" tabindex="-1" role="dialog"
                        aria-labelledby="modal-form-edit" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="card p-3 p-lg-4">
                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="card-header border-0 text-center pb-0">
                                            <h2 class="mb-1 h5">Edit Perlakuan</h2>
                                        </div>
                                        <div class="card-body p-0 pl-lg-3">
                                            <form action="#">
                                                <div class="form-group mb-4">
                                                    <label for="edit-nama">Nama Perlakuan</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon3"><span
                                                                class="fas fa-envelope"></span></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="cth: Berikan pupuk hari ini" id="edit-nama"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="edit-durasi">Durasi</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon3"><span
                                                                class="fas fa-envelope"></span></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="berlangsungnya perlakuan. cth: 10"
                                                            id="edit-durasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="edit-hari">Hari</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon3"><span
                                                                class="fas fa-envelope"></span></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="terhitung sejak awal fase. cth: 23"
                                                            id="edit-hari" required>
                                                    </div>
                                                </div>
                                                <div class="d-grid">
                                                    <button type="button" class="btn btn-block btn-primary mb-3 w-100"
                                                        data-bs-dismiss="modal">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal Edit -->

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="modal-form-delete" tabindex="-1" role="dialog"
                        aria-labelledby="modal-form-delete" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus fase ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal Hapus -->
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
        <div class="row">
            <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a
                        class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
            </div>
            <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                    <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/about">About</a></li>
                    <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/themes">Themes</a></li>
                    <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/blog">Blog</a></li>
                    <li class="list-inline-item px-0 px-sm-2"><a href="https://themesberg.com/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentUrl = window.location.href;
            var id = currentUrl.split('/').pop();
            fetchPerlakuan(id);

            // Fetch all Perlakuan
            function fetchPerlakuan(id) {
                console.log('Fetching Perlakuan...');
                $.ajax({
                    url: '/fase/perlakuan/' + id + '/show',
                    method: 'GET',
                    success: function(response) {
                        console.log('Response:', response);
                        var rows = '';
                        // Memastikan response adalah array
                        if (Array.isArray(response)) {
                            response.forEach(function(item) {
                                rows += `
                        <tr>
                            <td>${item.nama_perlakuan_utama}</td>
                            <td>${item.durasi}</td>
                            <td>${item.hari}</td>
                            <td>
                                <button class="btn btn-warning btn-edit" data-id="${item.id}" data-bs-toggle="modal" data-bs-target="#modal-form-edit">Edit</button>
                                <button class="btn btn-danger btn-delete" data-id="${item.id}" data-bs-toggle="modal" data-bs-target="#modal-form-delete">Delete</button>
                            </td>
                        </tr>
                    `;
                            });
                        } else {
                            // Handle jika response bukan array, misalnya jika hanya satu objek
                            rows += `
                    <tr>
                        <td>${response.nama_perlakuan_utama}</td>
                        <td>${response.durasi}</td>
                        <td>${response.hari}</td>
                        <td>
                            <button class="btn btn-warning btn-edit" data-id="${response.id}" data-bs-toggle="modal" data-bs-target="#modal-form-edit">Edit</button>
                            <button class="btn btn-danger btn-delete" data-id="${response.id}" data-bs-toggle="modal" data-bs-target="#modal-form-delete">Delete</button>
                        </td>
                    </tr>
                `;
                        }
                        $('tbody').html(rows); // Menyisipkan baris-baris tabel ke dalam HTML
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }


            // Add Perlakuan
            $('#modal-form-signup .btn-primary').click(function() {
                console.log('Adding Perlakuan...');
                var nama = $('#nama').val();
                var durasi = $('#durasi').val();
                var hari = $('#hari').val();

                $.ajax({
                    url: '/fase/perlakuan/' + id + '/store',
                    method: 'POST',
                    data: {
                        nama_perlakuan_utama: nama,
                        durasi: durasi,
                        hari: hari,
                        id_fase: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log('Response:', response);
                        $('#modal-form-signup').modal('hide');
                        fetchPerlakuan(id);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });

            // Edit Perlakuan
            $('body').on('click', '.btn-edit', function() {
                var id = $(this).data('id');
                console.log('Editing Perlakuan ID:', id);
                $.ajax({
                    url: `/perlakuan/${id}`,
                    method: 'GET',
                    success: function(response) {
                        $('#edit-nama').val(response.nama_perlakuan_utama);
                        $('#edit-durasi').val(response.durasi);
                        $('#edit-hari').val(response.hari);
                        $('#modal-form-edit .btn-primary').attr('data-id', response.id);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });

            $('#modal-form-edit .btn-primary').click(function() {
                var idPerlakuan = $(this).data('id');
                console.log('Updating Perlakuan ID:', idPerlakuan);
                var nama = $('#edit-nama').val();
                var durasi = $('#edit-durasi').val();
                var hari = $('#edit-hari').val();

                $.ajax({
                    url: `/fase/perlakuan/${idPerlakuan}/update`,
                    method: 'PUT',
                    data: {
                        nama_perlakuan_utama: nama,
                        durasi: durasi,
                        hari: hari,
                        id_fase: id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log('Response:', response);
                        $('#modal-form-edit').modal('hide');
                        fetchPerlakuan(id);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });

            // Delete Perlakuan
            $('body').on('click', '.btn-delete', function() {
                var id = $(this).data('id');
                console.log('Deleting Perlakuan ID:', id);
                $('#confirmDeleteBtn').attr('data-id', id);
            });

            $('#confirmDeleteBtn').click(function() {
                var id = $(this).data('id');
                console.log('Confirmed Deletion of Perlakuan ID:', id);
                $.ajax({
                    url: `/fase/perlakuan/${id}/delete`,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log('Response:', response);
                        $('#modal-form-delete').modal('hide');
                        fetchPerlakuan(id);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
@endsection
