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
            <h6 class="m-0 font-weight-bold text-primary">Edit Alternatif</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('alternatif.update' , $alternatif->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $alternatif->nama }}">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="C1" value="{{ $alternatif->C1 }}">
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" class="form-control" name="C2" value="{{ $alternatif->C2 }}">
            </div>
            <div class="form-group">
                <label>Kapasitas Mesin(cc)</label>
                <input type="number" class="form-control" name="C3" value="{{ $alternatif->C3 }}">
            </div>
            <div class="form-group">
                <label>Kapasitas Penumpang</label>
                <input type="number" class="form-control" name="C4" value="{{ $alternatif->C4 }}">
            </div>
            <div class="form-group">
                <label>Transmisi</label>
                <input type="number" class="form-control" name="C5" value="{{ $alternatif->C5 }}">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block">Update Data</button>
            </div>
            </form>
        </div>
    </div>
</div>



@endsection
