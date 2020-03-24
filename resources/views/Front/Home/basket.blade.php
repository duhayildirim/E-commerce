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
                                    <th class="size-th">Bedeni</th>
                                    <th class="total-th">Fiyatı</th>
                                    <th class="total-th"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($basket as $b )
                                    <tr class="sks">
                                        <td class="product-col">
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($b -> productrelation -> img_url)}}" alt="">
                                            <div class="pc-title">
                                                <h4>{{$b -> productrelation -> name}}</h4>
                                                <p>
                                                    @foreach($b-> productrelation -> colors as $key =>$colorProduct)
                                                        <a>{{isset($colorProduct->color)?$colorProduct->color->title:""}}</a><br>
                                                    @endforeach
                                                </p>
                                            </div>
                                        </td>
                                        <td class="size-col"><h4>{{$b -> productrelation -> sizeidrelation -> title}}</h4></td>
                                        <td class="total-col"><h4>{{$b -> productrelation -> price}}</h4></td>
                                        <td class="total-col" id="delete"><a onclick="basket_delete({{$b -> id}})"  href="#" class="btn btn-secondary btn-lg " role="button" aria-disabled="true">Kaldır</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="total-cost">
                            {{--                            <h6>Toplam <span> {{ $total }} </span></h6>--}}
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
    <script>
        function basket_delete(id)
        {
            $.ajax({
                type:"get",
                url:"{{route('delete_basket')}}",
                data: {
                    _token: '{{ csrf_token() }}' ,
                    id: id
                },
                success:function (result) {
                    if (result['message'] === "ok") {
                        $('.sks').remove();
                        // alert("Ürün Sepetten Çıkarıldı");
                    }
                }
            })
        }
    </script>
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
@endsection
