@extends('Front.main')
@section('content')
    <div class="page-top-info">
        <div class="container">
            <h4>ÖDEME</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Your cart</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- checkout section  -->
    <section class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <form class="checkout-form">
                        <div class="row address-inputs">
                            <div class="col-md-6">
                                <input type="text" placeholder="Ad" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Soyad" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Şehir" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="ilçe" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Adres" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Posta Kodu" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Telefon" required>
                            </div>
                        </div>
                        <div class="row shipping-btns">
                            <div class="col-6">
                                <h4>Standard kargo (YURT İÇİ)</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-1" required>
                                        <label for="ship-1">ücretsiz</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>MNG</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-2" required>
                                        <label for="ship-2">7.45TL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>PTT</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-3" required>
                                        <label for="ship-3">10TL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>ARAS</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-4" required>
                                        <label for="ship-4">10TL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="site-btn submit-order-btn">Ödemeyi Bitir</button>
                    </form>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="checkout-cart">
                        <h3>Ürünlerin</h3>
                        @foreach($pay as $p)
                        <ul class="product-list">
                            <li>
                                <div class="pl-thumb"><img src="{{\Illuminate\Support\Facades\Storage::url($p -> productrelation -> img_url)}}}}" alt=""></div>
                                <h6>{{$p -> productrelation -> name}}</h6>
                                <p>{{$p -> productrelation -> price}}</p>
                            </li>
                        </ul>
                        @endforeach
                        <ul class="price-list">
                            <li>Shipping<span>free</span></li>
                            <li class="total">Toplam<span>$99.90</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
