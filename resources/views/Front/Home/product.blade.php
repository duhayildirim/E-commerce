@extends('Front.main')
@section('content')
    <div class="page-top-info">
        <div class="container">
            <h4>Ürün Sayfası</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Shop</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- product section -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-pic-zoom">
                        <img class="product-big-img" src="{{\Illuminate\Support\Facades\Storage::url($product -> img_url)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 product-details">
                    <h2 class="p-title">{{$product -> name}}</h2>
                    <h3 class="p-price">{{$product -> price}}</h3>
                    <h4 class="p-stock"> <span>Stokta Var</span> </h4>
                    <div class="fw-size-choose">
                        <p>Beden</p>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="xs-size">
                            <label for="xs-size">{{$product -> sizeidrelation -> title}}</label>
                        </div>
                    </div>
                    <div class="quantity">
                        <p>Adet</p>
                        <div class="pro-qty">
                            <input id="unit" type="text" value="1">
                        </div>
                    </div>
                    <a onclick="basket({{$product -> id}})" id="buton" class="site-btn">Sepete ekle</a>
                    <div id="accordion" class="accordion-area">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Ürün Açıklaması</button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body">
                                    <p> {{ $product -> explanation }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingThree">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">İade Koşulları</button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="panel-body">
                                    <h4>7 Days Returns</h4>
                                    <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function basket(id)
                    {
                        var unit = $('#unit').val();
                        $.ajax({
                            type:"get",
                            url:"{{route('add_basket')}}",
                            data: {
                                _token: '{{ csrf_token() }}' ,
                                productid: id,
                                unit: unit
                            },
                            success:function (result) {
                                console.log(result);
                                if (result['message'] === "ok") {
                                    alert("Ürün Sepete Eklendi");
                                }
                            }
                        })
                    }
                </script>
            </div>

        </div>
    </section>

    <!-- product section end -->

    <!-- RELATED PRODUCTS section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>İlgini Çekebilir</h2>
            </div>
            <div class="product-slider owl-carousel" >
                @foreach($new as $n)
                    <div class="product-item">
                        <div class="pi-pic"  >
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($n -> img_url) }}" style="width: 100%; height: 400px" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>Sepete Ekle</span></a>
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
@endsection

