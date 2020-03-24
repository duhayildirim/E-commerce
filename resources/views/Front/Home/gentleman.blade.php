@extends('Front.main')
@section('content')
    <div class="page-top-info">
        <div class="container">
            <h4>ERKEK GİYİM</h4>
            <div class="site-pagination">
                <a href="">man</a> /
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
                                            <a href="{{route('productweb' , $new -> id)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">İncele</a>
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
