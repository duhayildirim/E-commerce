@extends('Front.main')
@section('content')
    <div class="page-top-info">
        <div class="container">
            <h4>Arama Sonucu</h4>
        </div>
    </div>
                <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="row">
                        @if(count($s)==0)
                            <div class="alert alert-danger" role="alert">
                                OPPPSSS!! <a href="#" class="alert-link">Böyle bir ürün bulamadık</a>.
                            </div>
                        @endif
                        @foreach($s as $ss)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <div class="tag-sale">ON SALE</div>
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($ss -> img_url)}}" alt="">
                                        <div class="pi-links">
                                            <a href="{{route('productweb' , $ss -> id)}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">İncele</a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>{{$ss -> price}}</h6>
                                        <p>{{$ss -> name}}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
@endsection
