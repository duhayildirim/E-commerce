@extends('Front.main')
@section('content')
    <div class="page-top-info">
        <div class="container">
            <h4>KADIN GİYİM</h4>
            <div class="site-pagination">
                <a href="">woman</a> /
                <a href="">shop</a> /
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- Category section -->
    <section class="category-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="filter-widget">
                        <h2 class="fw-title">Kategoriler</h2>
                        <ul class="category-menu">
                            @foreach($typecategory as $new)
                                <li><a href="#">{{$new -> title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    {{--                    <div class="filter-widget mb-0">--}}
                    {{--                        <h2 class="fw-title">refine by</h2>--}}
                    {{--                        <div class="price-range-wrap">--}}
                    {{--                            <h4>Price</h4>--}}
                    {{--                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">--}}
                    {{--                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>--}}
                    {{--                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">--}}
                    {{--								</span>--}}
                    {{--                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">--}}
                    {{--								</span>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="range-slider">--}}
                    {{--                                <div class="price-input">--}}
                    {{--                                    <input type="text" id="minamount">--}}
                    {{--                                    <input type="text" id="maxamount">--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="filter-widget mb-0">--}}
                    {{--                        <h2 class="fw-title">color by</h2>--}}
                    {{--                        <div class="fw-color-choose">--}}
                    {{--                            <div class="cs-item">--}}
                    {{--                                <input type="radio" name="cs" id="gray-color">--}}
                    {{--                                <label class="cs-gray" for="gray-color">--}}
                    {{--                                    <span>(3)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="cs-item">--}}
                    {{--                                <input type="radio" name="cs" id="orange-color">--}}
                    {{--                                <label class="cs-orange" for="orange-color">--}}
                    {{--                                    <span>(25)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="cs-item">--}}
                    {{--                                <input type="radio" name="cs" id="yollow-color">--}}
                    {{--                                <label class="cs-yollow" for="yollow-color">--}}
                    {{--                                    <span>(112)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="cs-item">--}}
                    {{--                                <input type="radio" name="cs" id="green-color">--}}
                    {{--                                <label class="cs-green" for="green-color">--}}
                    {{--                                    <span>(75)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="cs-item">--}}
                    {{--                                <input type="radio" name="cs" id="purple-color">--}}
                    {{--                                <label class="cs-purple" for="purple-color">--}}
                    {{--                                    <span>(9)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="cs-item">--}}
                    {{--                                <input type="radio" name="cs" id="blue-color" checked="">--}}
                    {{--                                <label class="cs-blue" for="blue-color">--}}
                    {{--                                    <span>(29)</span>--}}
                    {{--                                </label>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">Size</h2>
                        <div class="fw-size-choose">
                            @foreach($sizecategory as $new)
                                <div class="sc-item">
                                    <input type="radio" name="sc" >
                                    <label for="xs-size"><a href="#">{{$new -> title}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="row">
                        @foreach($products as $new)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <div class="tag-sale">ON SALE</div>
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($new -> img_url)}}" alt="">
                                        <div class="pi-links">
                                            <a href="{{route('basket')}}" class="add-card"><i class="flaticon-bag"></i><span>SEPETE EKLE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>{{$new -> price}}</h6>
                                        <p>{{$new -> name}}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
