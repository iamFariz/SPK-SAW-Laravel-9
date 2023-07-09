
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Normalisasi</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Tahun</th>
                    <th>Kapasitas Mesin</th>
                    <th>Seater</th>
                    <th>Transmisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tbody>
                    <tr>
                            <td>{{$item->nama }}</td>
                            <td>{{$C1min['alternatifs'] / $item->C1}}</td>
                            <td>{{$item->C2 / $C2max['alternatifs']}}</td>
                            <td>{{$item->C3 / $C3max['alternatifs']}}</td>
                            <td>{{$item->C4 / $C4max['alternatifs']}}</td>
                            <td>{{$item->C5 / $C5max['alternatifs']}}</td>
                        {{--@endif--}}
                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
