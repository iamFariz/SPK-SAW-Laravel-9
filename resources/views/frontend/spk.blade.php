@extends('layouts.frontend')

@section('content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}" rel="nofollow">beranda</a>
            <a href="#"><span></span> rekomendasi </a>
        </div>
    </div>
</div>
<article style="text-align: center; max-width: 1000px; margin: 3em auto">
    <h2>SPK Pembelian mobil bekas terbaik menggunakan metode SAW</h2>
    <table width="100%">
    <tr>
        <td>Nama Mobil</td>
        <td>Hasil</td>
    </tr>
    <tr>
        <td>Honda Brio</td>
        <td>0.81543778801843 </td>
    </tr>
    <tr>
        <td>Toyota Agya</td>
        <td>0.7984126984127  </td>
    </tr>
    <tr>
        <td>Daihatsu Xenia</td>
        <td>0.794206349206357  </td>
    </tr>
    <tr>
        <td>Toyota Innova</td>
        <td>0.78869047619048  </td>
    </tr>
</table>

@endsection
