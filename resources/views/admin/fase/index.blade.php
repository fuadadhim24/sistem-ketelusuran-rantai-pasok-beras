@extends('template')
@section('main')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Include Notyf CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

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
                        <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                        <div class="list-group list-group-flush">
                            <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                            <!-- Notification items -->
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
                            </svg>My Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>Settings
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path>
                            </svg>Messages
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                            </svg>Support
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>Logout
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
            <li class="breadcrumb-item active" aria-current="page">Fase</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Fase</h1>
            <p class="mb-0">Setiap Fase akan memiliki perlakuan utama dan perlakuan khusus.</p>
        </div>
        <div>
            <p class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Panduan Informatif</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-4">
        <div class="card border-0 shadow components-section">
        <div class="card-header">
                    <h2 class="fs-5 fw-bold mb-0">Tambah Fase</h2>
                </div>
                <div class="modal-body">
                <form id="addFaseForm">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_fase" class="form-label">Nama Fase</label>
                        <input type="text" class="form-control" id="nama_fase" name="nama_fase" required>
                    </div>
                    <div class="mb-3">
                        <label for="durasi" class="form-label">Durasi</label>
                        <input type="text" class="form-control" id="durasi" name="durasi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-8" id="daftar-fase-container">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow mb-2">
                <div class="card-header">
                    <h2 class="fs-5 fw-bold mb-0">Daftar Fase</h2>
                </div>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body" id="daftar-fase">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama Fase</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="faseTableBody">
                            <!-- Data will be populated here via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Edit Fase Modal -->
<div class="modal fade" id="editFaseModal" tabindex="-1" aria-labelledby="editFaseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFaseModalLabel">Edit Fase</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editFaseForm">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" id="edit_fase_id" name="fase_id">
                    <div class="mb-3">
                        <label for="edit_nama_fase" class="form-label">Nama Fase</label>
                        <input type="text" class="form-control" id="edit_nama_fase" name="nama_fase" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_durasi" class="form-label">Durasi</label>
                        <input type="text" class="form-control" id="edit_durasi" name="durasi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    var notyf = new Notyf({ duration: 3000, position: { x: 'right', y: 'top' } });

    fetchFases();

    $('#addFaseForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route('fase-store') }}',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
    
                fetchFases();
                notyf.success('Fase berhasil ditambahkan!');
            },
            error: function(error) {
                console.error('Error adding fase:', error);
                notyf.error('Gagal menambahkan fase!');
            }
        });
    });

    $('#editFaseForm').on('submit', function(e) {
        e.preventDefault();
        var id = $('#edit_fase_id').val();
        $.ajax({
            url: '{{ route('update-fase', '') }}/' + id,
            method: 'PATCH',
            data: $(this).serialize(),
            success: function(response) {
                $('#editFaseModal').modal('hide');
                fetchFases();
                notyf.success('Fase berhasil diubah!');
            },
            error: function(error) {
                console.error('Error updating fase:', error);
                notyf.error('Gagal mengubah fase!');
            }
        });
    });
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('#confirmDeleteBtn').on('click', function() {
        var id = $(this).data('id');
        $.ajax({
            url: '/fase/' + id + '/delete',
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                $('#confirmDeleteModal').modal('hide');
                fetchFases();
                notyf.success('Fase berhasil dihapus!');
            },
            error: function(error) {
                console.error('Error deleting fase:', error);
                notyf.error('Gagal menghapus fase!');
            }
        });
    });
});

function fetchFases() {
    $.ajax({
        url: '{{ route('getfase') }}',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var tableRows = '';
            $.each(data, function(index, fase) {
                tableRows += '<tr id="faseItem' + fase.id + '">';
                tableRows += '<td>' + fase.nama_fase + '</td>';
                tableRows += '<td>' + fase.durasi + '</td>';
                tableRows += '<td class="d-flex">';
                tableRows += '<button class="btn btn-sm btn-outline-success mb-3" onclick="viewFase(' + fase.id + ')">Lihat</button>';
                tableRows += '<button class="btn btn-sm btn-outline-warning mb-3" onclick="editFase(' + fase.id + ')">Ubah</button>';
                tableRows += '<button class="btn btn-sm btn-outline-danger mb-3" onclick="confirmDeleteFase(' + fase.id + ')">Hapus</button>';
                tableRows += '</td>';
                tableRows += '</tr>';
            });
            $('#faseTableBody').html(tableRows);
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            notyf.error('Gagal memuat data fase!');
        }
    });
}

function viewFase(id) {
    window.location.href = '{{ url('/fase/perlakuan') }}/' + id;
}

function editFase(id) {
    $.ajax({
        url: '/fase/' + id + '/edit',
        method: 'GET',
        success: function(data) {
            $('#edit_fase_id').val(data.id);
            $('#edit_nama_fase').val(data.nama_fase);
            $('#edit_durasi').val(data.durasi);
            $('#editFaseModal').modal('show');
        },
        error: function(error) {
            console.error('Error fetching fase data:', error);
            notyf.error('Gagal memuat data fase!');
        }
    });
}

function confirmDeleteFase(id) {
    $('#confirmDeleteBtn').data('id', id);
    $('#confirmDeleteModal').modal('show');
}
</script>
@endsection
