@extends('template')
@section('main')

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
                </div>
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
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow components-section">
                        <div class="card-header row border-bottom d-flex align-items-center justify-content-between">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Daftar Produk</h2>
                                <p class="mb-0">Ditampilkan pada halaman utama<span style="color: red">*</span></p>
                            </div>
                            <div class="col text-end">
                                <button id="addProdukBtn" class="btn btn-sm btn-primary">Tambah Produk</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="ProdukTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Jumlah Unit</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Other content -->
            </div>
        </div>
    </div>

    <!-- Add Produk Modal -->
    <div class="modal fade" id="addProdukModal" tabindex="-1" role="dialog" aria-labelledby="addProdukModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="addProdukForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProdukModalLabel">Tambah Produk</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="namaProduk">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlahUnit">Jumlah Unit</label>
                            <input type="number" class="form-control" id="jumlahUnit" name="jumlah_unit" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Produk Modal -->
    <div class="modal fade" id="updateProdukModal" tabindex="-1" role="dialog"
        aria-labelledby="updateProdukModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="updateProdukForm" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateProdukModalLabel">Update Produk</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="u-id" name="id">
                        <div class="form-group">
                            <label for="u-namaProduk">Nama Produk</label>
                            <input type="text" class="form-control" id="u-namaProduk" name="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="u-jumlahUnit">Jumlah Unit</label>
                            <input type="number" class="form-control" id="u-jumlahUnit" name="jumlah_unit" required>
                        </div>
                        <div class="form-group">
                            <label for="u-foto">Foto</label>
                            <input type="file" class="form-control" id="u-foto" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="u-harga">Harga</label>
                            <input type="number" class="form-control" id="u-harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="u-deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="u-deskripsi" name="deskripsi" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Show Photo Modal -->
    <div class="modal fade" id="showPhotoModal" tabindex="-1" role="dialog" aria-labelledby="showPhotoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showPhotoModalLabel">Tampilkan Foto</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="productPhoto" src="" alt="Foto Produk" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus lahan ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function loadProduks() {
                $.ajax({
                    url: '{{ route('Produk.index') }}',
                    method: 'GET',
                    success: function(data) {
                        var tableBody = $('#ProdukTable tbody');
                        tableBody.empty();
                        data.Produk.forEach(function(Produk) {
                            var photoUrl = '{{ asset('assets/img/produk') }}/' + Produk.foto;
                            tableBody.append(`
                    <tr id="Produk-${Produk.id}">
                        <td>${Produk.nama_produk}</td>
                        <td>${Produk.jumlah_unit}</td>
                        <td>${Produk.harga}</td>
                        <td>${Produk.deskripsi}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary btn-update" data-id="${Produk.id}">Ubah</button>
                            <button class="btn btn-sm btn-outline-danger btn-delete" data-id="${Produk.id}">Hapus</button>
                            <button class="btn btn-sm btn-outline-info btn-show-photo" data-photo="${photoUrl}">Tampilkan Foto</button>
                        </td>
                    </tr>
                `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            loadProduks();


            $('#addProdukBtn').click(function() {
                $('#addProdukModal').modal('show');
            });

            $('#addProdukForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '{{ route('Produk.store') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $('#addProdukModal').modal('hide');
                        loadProduks();
                        $('#addProdukForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.btn-update', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: `/Produks/${id}/edit`,
                    method: 'GET',
                    success: function(data) {
                        $('#u-id').val(data.Produk.id);
                        $('#u-namaProduk').val(data.Produk.nama_produk);
                        $('#u-jumlahUnit').val(data.Produk.jumlah_unit);
                        $('#u-harga').val(data.Produk.harga);
                        $('#u-deskripsi').val(data.Produk.deskripsi);
                        $('#updateProdukModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#updateProdukForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var id = $('#u-id').val();
                formData.append('_method', 'PUT');
                $.ajax({
                    url: `/Produks/${id}/update`,
                    method: 'POST', // Using POST with _method trick for PUT request
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $('#updateProdukModal').modal('hide');
                        loadProduks();
                        $('#updateProdukForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            var deleteProdukId;
            $(document).on('click', '.btn-delete', function() {
                deleteProdukId = $(this).data('id');
                $('#confirmDeleteModal').modal('show');
            });

            $('#confirmDeleteBtn').click(function() {
                $.ajax({
                    url: `/Produks/${deleteProdukId}`,
                    method: 'DELETE',
                    success: function(data) {
                        $('#confirmDeleteModal').modal('hide');
                        loadProduks();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.btn-show-photo', function() {
                var photoUrl = $(this).data('photo');
                $('#productPhoto').attr('src', photoUrl);
                $('#showPhotoModal').modal('show');
            });

        });
    </script>
@endsection
