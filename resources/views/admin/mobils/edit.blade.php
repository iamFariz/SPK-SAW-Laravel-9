@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('mobils.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nopol">Nopol</label>
                    <input type="text" name="nopol" class="form-control" placeholder="Masukan nomor polisi"
                        value="{{ old('nopol', $mobil->nopol) }}" />
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Mobil "
                        value="{{ old('nama', $mobil ->nama) }}" wire:model="nama" wire:keyup="generateSlug" />
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Masukan slug mobil"
                        value="{{ old('slug', $mobil->slug) }}" />
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <img src="{{url('/storage/'.$mobil->gambar)}}" width="100" alt="">
                    <input type="file" name="gambar" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Masukan harga mobil"
                        value="{{ old('harga',$mobil->harga) }}" />
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" name="tahun" class="form-control" placeholder="Masukan tahun"
                        value="{{ old('tahun', $mobil->tahun) }}" />
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <input type="text" name="merek" class="form-control" placeholder="Masukan merek"
                        value="{{ old('merek', $mobil->merek) }}" />
                </div>
                <div class="form-group">
                    <label for="kilometer">Kilometer</label>
                    <input type="text" name="kilometer" class="form-control" placeholder="Masukan Kilometer"
                        value="{{ old('kilometer', $mobil->kilometer) }}" />
                </div>
                <div class="form-group">
                    <label for="bahan_bakar">Bahan Bakar</label>
                    <select class="form-control" name="bahan_bakar" id="bahan_bakar">
                        <option {{$mobil->bahan_bakar == 'Bensin' ? 'selected' : null}} value="Bensin">Bensin</option>
                        <option {{$mobil->bahan_bakar == 'Solar' ? 'selected' : null}} value="Solar">Solar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kapasitas_mesin">Kapasitas Mesin</label>
                    <select class="form-control" name="kapasitas_mesin" id="kapasitas_mesin">
                        <option {{$mobil->kapasitas_mesin == '1000' ? 'selected' : null}} value="1000">1000</option>
                        <option {{$mobil->kapasitas_mesin == '1200' ? 'selected' : null}} value="1200">1200</option>
                        <option {{$mobil->kapasitas_mesin == '1500' ? 'selected' : null}} value="1500">1500</option>
                        <option {{$mobil->kapasitas_mesin == '2000' ? 'selected' : null}} value="2000">2000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipe_mobil">Tipe Mobil</label>
                    <select class="form-control" name="tipe_mobil" id="tipe_mobil">
                        <option {{$mobil->tipe_mobil == 'MPV' ? 'selected' : null}} value="MPV">MPV</option>
                        <option {{$mobil->tipe_mobil == 'SUV' ? 'selected' : null}} value="SUV">SUV</option>
                        <option {{$mobil->tipe_mobil == 'Hatchback' ? 'selected' : null}} value="Hatchback">Hatchback</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jml_kursi">Kapasitas Penumpang</label>
                    <select class="form-control" name="jml_kursi" id="jml_kursi">
                        <option {{$mobil->jml_kursi == '5' ? 'selected' : null}} value="5">5</option>
                        <option {{$mobil->jml_kursi == '7' ? 'selected' : null}} value="7">7</option>
                        <option {{$mobil->jml_kursi == '9' ? 'selected' : null}} value="9">9</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="transmisi">Transmisi</label>
                    <select class="form-control" name="transmisi" id="transmisi">
                        <option {{$mobil->transmisi == 'Manual' ? 'selected' : null}} value="Manual">Manual</option>
                        <option {{$mobil->transmisi == 'Matic' ? 'selected' : null}} value="Matic">Matic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <select class="form-control" name="warna" id="warna">
                        <option {{$mobil->warna == 'Merah' ? 'selected' : null}} value="Merah">Merah</option>
                        <option {{$mobil->warna == 'Silver' ? 'selected' : null}} value="Silver">Silver</option>
                        <option {{$mobil->warna == 'Abu-abu' ? 'selected' : null}} value="Abu-abu">Abu-Abu</option>
                        <option {{$mobil->warna == 'Hitam' ? 'selected' : null}} value="Hitam">Hitam</option>
                        <option {{$mobil->warna == 'Putih' ? 'selected' : null}} value="Putih">Putih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pemilik">Pemilik</label>
                    <textarea class="form-control" name="pemilik" placeholder="Masukan nama pemilik" id="pemilik"
                    >{{ old('pemilik', $mobil->pemilik) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="alamat_pemilik">Alamat Pemilik</label>
                    <textarea class="form-control" name="alamat_pemilik" placeholder="Masukan alamat pemilik" id="alamat_pemilik"
                    >{{ old('alamat_pemilik', $mobil->alamat_pemilik) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="Masukan Deskripsi" id="deskripsi"
                     >{{ old('deskripsi', $mobil->deskripsi) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="ketersediaan">Ketersediaan</label>
                    <select class="form-control" name="ketersediaan" id="ketersediaan">
                        <option {{$mobil->ketersediaan == 'tidak tersedia' ? 'selected' : null}} value="tidak tersedia">Tidak Tersedia</option>
                        <option {{$mobil->ketersediaan == 'tersedia' ? 'selected' : null}} value="tersedia">Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
