@extends('Front.main')
@section('content')
    <div class="page-top-info">
        <div class="container">
            <h4>Sepetindekiler</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Your cart</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Sepetindekiler</h3>
                        <div class="cart-table-warp">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-th">Ürün</th>
                                    <th class="quy-th">Adeti</th>
                                    <th class="size-th">Bedeni</th>
                                    <th class="total-th">Fiyatı</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-col">
                                        <img src="img/cart/1.jpg" alt="">
                                        <div class="pc-title">
                                            <h4>Animal Print Dress</h4>
                                            <p>$45.90</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-col"><h4>Size M</h4></td>
                                    <td class="total-col"><h4>$45.90</h4></td>
                                </tr>
                                <tr>
                                    <td class="product-col">
                                        <img src="img/cart/2.jpg" alt="">
                                        <div class="pc-title">
                                            <h4>Ruffle Pink Top</h4>
                                            <p>$45.90</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-col"><h4>Size M</h4></td>
                                    <td class="total-col"><h4>$45.90</h4></td>
                                </tr>
                                <tr>
                                    <td class="product-col">
                                        <img src="img/cart/3.jpg" alt="">
                                        <div class="pc-title">
                                            <h4>Skinny Jeans</h4>
                                            <p>$45.90</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-col"><h4>Size M</h4></td>
                                    <td class="total-col"><h4>$45.90</h4></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="total-cost">
                            <h6>Total <span>$99.90</span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-right">
                    <a href="{{route('woman')}}" class="site-btn">Alışverişe Devam Et</a>
                    <form class="promo-code-form">
                        <input type="text" placeholder="Promosyon Kodunu Gir">
                        <button>Uygula</button>
                    </form>
                    <a href="{{route('pay')}}" class="site-btn sb-dark">Ödemeye Geç</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Related product section -->

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
