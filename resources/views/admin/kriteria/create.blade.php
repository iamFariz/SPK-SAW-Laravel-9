@extends('layouts.admin')
@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
    @endforeach
  @endif

  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session('success') }}
    </div>

  @endif
  <div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
        </div>
    <div class="card-body">
        <form action="{{ route('kriteria.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>kode</label>
            <input type="text" class="form-control" name="kode">
        </div>
        <div class="form-group">
            <label>nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>bobot</label>
            <input type="text" class="form-control" name="bobot">
        </div>
        <div class="form-group">
            <label>atribut</label>
            <input type="text" class="form-control" name="atribut">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Kriteria</button>
        </div>

        </form>
    </div>
  </div>
</div>

@endsection
