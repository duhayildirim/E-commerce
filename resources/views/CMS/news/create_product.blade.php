@extends('CMS.main')
@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Yeni Ürün Türü Ekle</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" action="{{route('CMS.producttype.create_post')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h2> Ürün Türü</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Ayakkabı , Elbise , Çanta , Pantolon vb...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('vendors/summernote/summernote.js')}}"> </script>
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('styles')
    <link href="{{asset('vendors/summernote/summernote.css')}}" rel="stylesheet" type="text/css">
@endsection


