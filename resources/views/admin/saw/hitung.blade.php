@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Harga</th>
                    <th>Tahun</th>
                    <th>Kapasitas Mesin</th>
                    <th>Seater</th>
                    <th>Transmisi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $widget1['kriterias'] }}</th>
                    <th>{{ $widget2['kriterias'] }}</th>
                    <th>{{ $widget3['kriterias'] }}</th>
                    <th>{{ $widget4['kriterias'] }}</th>
                    <th>{{ $widget5['kriterias'] }}</th>
                </tr>
            </tbody>

        </table>

    </div>
</div>

@include('admin.saw.normalisasi')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Hasil Pemilihan Mobil Terbaik</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                <tbody>
                    <tr>
                        <td>{{$item->nama}}</td>
                            {{-- WSM --}}
                            <td>
                                {{(($C1min['alternatifs'] / $item->C1)*$widget1['kriterias'])+
                                (($item->C2 / $C2max['alternatifs'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['alternatifs'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['alternatifs'])*$widget4['kriterias'])+
                                (($item->C5 / $C5max['alternatifs'])*$widget5['kriterias'])}}
                            </td>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
        {{--<a class="btn btn-primary float-right" href="{{route('normalisasi.create')}}">Save Data</a>--}}
    </div>
</div>
@endsection
