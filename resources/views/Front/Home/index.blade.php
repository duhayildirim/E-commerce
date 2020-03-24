@extends('Front.main')
@section('content')
    <section class="hero-section" xmlns:object-fit="http://www.w3.org/1999/xhtml"
             xmlns:object-fit="http://www.w3.org/1999/xhtml" xmlns:object-fit="http://www.w3.org/1999/xhtml">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>Senİn Tarzın</span>
                            <h2>Senİn Ceketİn</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="{{route('woman')}}" class="site-btn sb-line">İncele</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>%</span>
                        <h2>20</h2>
                        <p>İndİrİm</p>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>Özel hİssetmek İstİyorsan</span>
                            <h2>Doğru yerdesİn</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="{{route('woman')}}" class="site-btn sb-line">İncele</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>%</span>
                        <h2>30</h2>
                        <p>İndİrİm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->



    <!-- Features section -->
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/1.png" alt="#">
                        </div>
                        <h2>Hızlı/Güvenİlİr Ödeme</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/2.png" alt="#">
                        </div>
                        <h2>Her An/Her Dakİka İndİrİm</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/3.png" alt="#">
                        </div>
                        <h2>En Çok Tıklanan Sİte</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->


    <!-- letest product section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>En Yeniler</h2>
            </div>
            <div class="product-slider owl-carousel" >
                @foreach($new as $n)
                <div class="product-item">
                    <div class="pi-pic" " >
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($n -> img_url) }}" style="width: 100%; height: 400px" alt="">
                        <div class="pi-links">
                            <a href="{{route('productweb' , $n -> id)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">İncele</a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>{{$n -> name}}</h6>
                        <p>{{$n -> price}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- letest product section end -->



    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>Trendler</h2>
            </div>
            <ul class="product-filter-menu" align="center">
                <li><a>Pantolon</a></li>
                <li><a>Ceket</a></li>
                <li><a>Gömlek</a></li>
                <li><a>Sweat</a></li>
                <li><a>Hırka</a></li>
                <li><a>Bluz</a></li>
                <li><a>Tshirt</a></li>
                <li><a>Etek</a></li>
            </ul>
            <div class="row">
                @foreach($show as $s)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img  src="{{\Illuminate\Support\Facades\Storage::url($s -> img_url)}}" style="width: 100%; height: 400px" alt="">
                            <div class="pi-links">
                                <a href="{{route('productweb' , $s -> id)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">İncele</a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>{{$s -> price}}</h6>
                            <p>{{$s -> name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product filter section end -->


    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="img/banner-bg.jpg">
                <div class="tag-new">TREND</div>
                <span>KALİTELİ</span>
                <h2> YEPYENİ ÜRÜNLER</h2>
                <a href="{{route('woman')}}" class="site-btn">İNCELE</a>
            </div>
        </div>
    </section>
@endsection

