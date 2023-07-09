@extends('layouts.frontend')

@section('content')
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Penawaran terbaik</h4>
                                    <h2 class="animated fw-900">Harga Terbaik</h2>
                                    <h1 class="animated fw-900 text-brand">Koleksi terbaru dan terlengkap</h1>
                                    <p class="animated">Aman dan Terjamin</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="#"> Beli Sekarang </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{ asset('frontend/imgs/slider/slider-1.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Dp 30 </h4>
                                    <h2 class="animated fw-900">Pilihan Cerdas Beli Mobil</h2>
                                    <h1 class="animated fw-900 text-7">Tanpa Kantong Terkuras</h1>
                                    <p class="animated">koleksi terlengkap dan terbanyak</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="#"> Pilih Sekarang </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="{{ asset('frontend/imgs/slider/slider-2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('frontend/imgs/theme/icons/feature-1.png') }}" alt="" height="100px"
                                weight="100px">
                            <h4 class="bg-1">Toyota</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('frontend/imgs/theme/icons/feature-2.png') }}" alt="" height="100px"
                                weight="100px">
                            <h4 class="bg-3">Honda</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('frontend/imgs/theme/icons/feature-3.png') }}" alt="" height="100px"
                                weight="100px">
                            <h4 class="bg-2">Mercedes-Benz</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('frontend/imgs/theme/icons/feature-4.png') }}" alt="" height="100px"
                                weight="100px">
                            <h4 class="bg-4">Hyundai</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('frontend/imgs/theme/icons/feature-5.png') }}" alt="" height="100px"
                                weight="100px">
                            <h4 class="bg-5">Mitsubishi</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('frontend/imgs/theme/icons/feature-6.png') }}" alt="" height="100px"
                                weight="100px">
                            <h4 class="bg-6">Daihatsu</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py">
            <div class="container">
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ($mobils as $mobil)
                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{route('detail',$mobil->slug)}}">
                                                    <img class="default-img" src="{{ url('/storage/'.$mobil->gambar) }}"
                                                        alt="{{ $mobil->nama }}">
                                                </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{ $mobil->ketersediaan }}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a>{{ $mobil->merek }}</a>
                                            </div>
                                            <h2><a href="{{route('detail',$mobil->slug)}}">{{ $mobil->nama }}</a></h2>
                                            <div class="product-price">
                                                <span>Rp.{{ $mobil->harga }} juta </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Detail" class="action-btn hover-up" href="{{route('detail',$mobil->slug)}}"><i class="fi-rs-file"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="bg-square"></div>
            <div class="container">
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-5">
                            @foreach ($mobils as $mobil)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('detail') }}">
                                                    <img class="default-img"
                                                        src="{{ asset('frontend/imgs/car/mobil-G1693PYQ.png') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a>{{$mobil->merek}}</a>
                                            </div>
                                            <h2><a href="{{ route('detail') }}">{{$mobil->nama}}</a></h2>
                                            <div class="product-price">
                                                <span>{{$mobil->harga}} juta </span>
                                            </div>
                                            <div class="card-footer border-top-0 bg-transparent">
                                                <a class="btn btn-info mt-auto text-white" herf="#">Lihat Detail</a>
                                            </div>
                                        </div>

                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
        </section>

        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('frontend/imgs/banner/banner-1.png') }}" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>new car</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('frontend/imgs/banner/banner-2.png') }}" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="{{ asset('frontend/imgs/banner/banner-3.png') }}" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
