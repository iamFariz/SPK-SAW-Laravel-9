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
        <h6 class="m-0 font-weight-bold text-primary">Edit Kriteria</h6>
      </div>
      <div class="card-body">
        <form action="{{ route('kriteria.update' , $kriteria->id ) }}" method="POST">
        @csrf
        @method('PUT')
          <div class="form-group">
              <label>Kode</label>
              <input type="text" class="form-control" name="kode" value="{{ $kriteria->kode }}">
          </div>
          <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="{{ $kriteria->nama }}">
          </div>
          <div class="form-group">
              <label>Bobot</label>
              <input type="text" class="form-control" name="bobot" value="{{ $kriteria->bobot }}">
          </div>
          <div class="form-group">
            <label>Atribut</label>
            <input type="text" class="form-control" name="atribut" value="{{ $kriteria->atribut }}">
        </div>

          <div class="form-group">
              <button class="btn btn-primary btn-block">Update Kriteria</button>
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection
