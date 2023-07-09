@extends('layouts.frontend')

@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" rel="nofollow">beranda</a>
                <a rel="nofollow"><span></span> detail </a>
                <span></span> {{ $mobil->nama }}
                <span></span>
            </div>
        </div>
    </div>
    <section class="mt-10 mb-10">
        <div class="container px-5 px-lg mt-10">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5">
                    <div class="detail-gallery">
                        <div class="product-image-slider">
                            <figure class="border-radius-12">
                                <img src="{{ url('/storage/'.$mobil->gambar)}}" alt="{{ $mobil->nama }}">
                            </figure>
                        </div>
                    </div>
                    <div class="card-body card-body-custom pt-4">
                        <div>
                            <h3 data-color="ff7f00">Deskripsi</h3>
                            <p>
                                {{ $mobil->deskripsi }}
                            </p>
                        </div>
                    </div>
                    <div class="card-body card-body-custom pt-4">
                    <div class="social-icons single-share">
                        <ul class="text-grey-5 d-inline-block">
                            <li><strong class="mr-10">Share this:</strong></li>
                            <li class="social-facebook"><a href="#"><img
                                        src="{{ asset('frontend/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                            </li>
                            <li class="social-twitter"> <a href="#"><img
                                        src="{{ asset('frontend/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                            </li>
                            <li class="social-instagram"><a href="#"><img
                                        src="{{ asset('frontend/imgs/theme/icons/icon-instagram.svg') }}"
                                        alt=""></a></li>
                            <li class="social-linkedin"><a href="#"><img
                                        src="{{ asset('frontend/imgs/theme/icons/icon-pinterest.svg') }}"
                                        alt=""></a></li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="detail-info">
                        <h2 class="title-detail"> {{ $mobil->nama }}</h2>
                        <div class="pro-details-brand">
                            <span> Merek: <a href="shop.html">{{ $mobil->merek }}</a></span>
                        </div>
                        <div class="clearfix product-price-cover">
                            <div class="product-price primary-color float-left">
                                <ins><span class="text-brand">Rp.{{ $mobil->harga }} juta</span></ins>
                                {{-- <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                            </div>
                        </div>
                        <ul class="list-unstyled list-style-group">
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Tahun</span>
                                <span style="font-weight: 600">{{ $mobil->tahun }}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Kilometer</span>
                                <span style="font-weight: 600">{{ $mobil->kilometer }} km</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Bahan bakar</span>
                                <span style="font-weight: 600">{{ $mobil->bahan_bakar }}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Kapasitas Mesin</span>
                                <span style="font-weight: 600">{{ $mobil->kapasitas_mesin }} cc</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Tipe</span>
                                <span style="font-weight: 600">{{ $mobil->tipe_mobil }}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Jumlah Kursi</span>
                                <span style="font-weight: 600">{{ $mobil->jml_kursi }} seater</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Transmisi</span>
                                <span style="font-weight: 600">{{ $mobil->transmisi }}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>Warna</span>
                                <span style="font-weight: 600">{{ $mobil->warna }}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>pemilik</span>
                                <span style="font-weight: 600">{{ $mobil->pemilik }}</span>
                            </li>
                            <li class="border-bottom p-2 d-flex justify-content-between">
                                <span>alamat pemilik</span>
                                <span style="font-weight: 600">{{ $mobil->alamat_pemilik }}</span>
                            </li>
                        </ul>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        <div class="detail-extralink">
                            <div class="product-extra-link2">
                                <button type="submit" class="button button-add-to-cart"><i
                                        class="fa fa-whatsapp">Beli</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
