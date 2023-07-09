@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('mobils.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nopol">Nopol</label>
                    <input type="text" name="nopol" class="form-control" placeholder="Masukan nomor polisi"
                        value="{{ old('nopol') }}" />
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Mobil "
                        value="{{ old('nama') }}" wire:model="nama" wire:keyup="generateSlug" />
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Masukan slug mobil"
                        value="{{ old('slug') }}" />
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control" wire:model="gambar" />
                    {{-- <img src="{{ Storage::url($mobil->gambar) }}" width="100" alt="" /> --}}
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Masukan harga mobil"
                        value="{{ old('harga') }}" />
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" name="tahun" class="form-control" placeholder="Masukan tahun"
                        value="{{ old('tahun') }}" />
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" name="merek" class="form-control" placeholder="Masukan merek"
                        value="{{ old('merek') }}" />
                </div>
                <div class="form-group">
                    <label for="kilometer">Kilometer</label>
                    <input type="text" name="kilometer" class="form-control" placeholder="Masukan Kilometer"
                        value="{{ old('kilometer') }}" />
                </div>
                <div class="form-group">
                    <label for="bahan_bakar">Bahan Bakar</label>
                    <select class="form-control" name="bahan_bakar" id="bahan_bakar">
                        <option value="Bensin">Bensin</option>
                        <option value="Solar">Solar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kapasitas_mesin">Kapasitas Mesin</label>
                    <select class="form-control" name="kapasitas_mesin" id="kapasitas_mesin">
                        <option value="1000">1000</option>
                        <option value="1200">1200</option>
                        <option value="1500">1500</option>
                        <option value="2000">2000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipe_mobil">Tipe Mobil</label>
                    <select class="form-control" name="tipe_mobil" id="tipe_mobil">
                        <option value="MPV">MPV</option>
                        <option value="SUV">SUV</option>
                        <option value="Hatchback">Hatchback</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jml_kursi">Kapasitas Penumpang</label>
                    <select class="form-control" name="jml_kursi" id="jml_kursi">
                        <option value="5">5</option>
                        <option value="7">7</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="transmisi">Transmisi</label>
                    <select class="form-control" name="transmisi" id="transmisi">
                        <option value="Manual">Manual</option>
                        <option value="Matic">Matic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <select class="form-control" name="warna" id="warna">
                        <option value="Merah">Merah</option>
                        <option value="Silver">Silver</option>
                        <option value="Abu-abu">Abu-Abu</option>
                        <option value="Hitam">Hitam</option>
                        <option value="Putih">Putih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pemilik">Pemilik</label>
                    <textarea class="form-control" name="pemilik" placeholder="Masukan nama pemilik" id="pemilik" value="{{ old('pemilik') }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat_pemilik">Alamat Pemilik</label>
                    <textarea class="form-control" name="alamat_pemilik" placeholder="Masukan alamat pemilik" id="alamat_pemilik" value="{{ old('alamat_pemilik') }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Masukan Deskripsi" id="deskripsi" value="{{ old('deskripsi') }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="ketersediaan">Ketersediaan</label>
                    <select class="form-control" name="ketersediaan" id="ketersediaan">
                        <option value="tidak tersedia">Tidak Tersedia</option>
                        <option value="tersedia">Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
