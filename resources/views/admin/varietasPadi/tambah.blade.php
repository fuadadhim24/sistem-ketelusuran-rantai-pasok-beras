@extends('template')
@section('main')

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
            <li class="breadcrumb-item active" aria-current="page">Tambah Varietas</li>

        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Tambah Varietas Padi</h1>
        </div>
    </div>
</div>

<!--from-->

<div class="card border-0 shadow components-section">
  <form>
    <div class="row mb-3">
      <label for="inputName" class="col-sm-2 col-form-label" >Nama</label>
      <div class="col-sm-7" >
        <input type="Name" class="form-control" id="inputName" >
    </div>
    </div>
    <div class="row mb-3">
      <label for="inputDeskripsi" class="col-sm-2 col-form-label" >Deskripsi</label>
      <div class="col-sm-10">
        <input type="Deskripsi" class="form-control" id="inputDeskripsi">
      </div>
    </div>
    <div class="row mb-3">
        <label for="inputKeunggulan" class="col-sm-2 col-form-label">Keunggulan</label>
        <div class="col-sm-10">
          <input type="Keunggulan" class="form-control" id="inputKeunggulan">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputJenisMusim" class="col-sm-2 col-form-label">Jenis Musim</label>
        <div class="col-sm-10">
          <input type="Jenis Musim" class="form-control" id="inputJenisMusim">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputLamaTanam" class="col-sm-2 col-form-label">Lama Tanam</label>
        <div class="col-sm-10">
          <input type="Lama Tanam" class="form-control" id="inputLamaTanam">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputKetahananHama" class="col-sm-2 col-form-label">Ketahanan Hama</label>
        <div class="col-sm-10">
          <input type="Ketahanan Hama" class="form-control" id="inputKetahananHama">
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
