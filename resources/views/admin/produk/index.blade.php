@extends('template')
@section('main')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
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
                                        <th scope="col">Kode Produksi</th>
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
<div class="modal fade" id="addProdukModal" tabindex="-1" role="dialog" aria-labelledby="addProdukModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="addProdukForm" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <label for="kodeProduksi">Kode Produksi</label>
                        <input type="text" class="form-control" id="kodeProduksi" name="kode_produksi" required>
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
<div class="modal fade" id="updateProdukModal" tabindex="-1" role="dialog" aria-labelledby="updateProdukModalLabel" aria-hidden="true">
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
                    <div class="form-group">
                        <label for="u-kodeProduksi">Kode Produksi</label>
                        <input type="text" class="form-control" id="u-kodeProduksi" name="kode_produksi" required>
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
<div class="modal fade" id="showPhotoModal" tabindex="-1" role="dialog" aria-labelledby="showPhotoModalLabel" aria-hidden="true">
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
            url: '{{ route("Produk.index") }}',
            method: 'GET',
            success: function(data) {
                var tableBody = $('#ProdukTable tbody');
                tableBody.empty();
                data.Produk.forEach(function(Produk) {
                    tableBody.append(`
                        <tr id="Produk-${Produk.id}">
                            <td>${Produk.nama_produk}</td>
                            <td>${Produk.jumlah_unit}</td>
                            <td>${Produk.harga}</td>
                            <td>${Produk.deskripsi}</td>
                            <td>${Produk.kode_produksi}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary btn-update" data-id="${Produk.id}">Ubah</button>
                                <button class="btn btn-sm btn-outline-danger btn-delete" data-id="${Produk.id}">Hapus</button>
                                <button class="btn btn-sm btn-outline-info btn-show-photo" data-photo="{{ asset('${Produk.foto}') }}">Tampilkan Foto</button>
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
            url: '{{ route("Produk.store") }}',
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
                $('#u-kodeProduksi').val(data.Produk.kode_produksi);
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
            url: `/Produks/${id}/edit`,
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

    $(document).on('click', '.btn-delete', function() {
        var id = $(this).data('id');
        if (confirm('Are you sure you want to delete this Produk?')) {
            $.ajax({
                url: `/Produks/${id}`,
                method: 'DELETE',
                success: function(data) {
                    loadProduks();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });

    $(document).on('click', '.btn-show-photo', function() {
        var photoUrl = $(this).data('photo');
        $('#productPhoto').attr('src', photoUrl);
        $('#showPhotoModal').modal('show');
    });
});
</script>
@endsection
