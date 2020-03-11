@extends('CMS.main')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Ürün <small>Düzenle</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    @if($errors->any())
                        <div class="alert alert-error">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal form-label-left" action="{{route('CMS.edit.edit_post' , isset($last)?$last->id:0)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h2> Change Gender</h2>
                            <div class="col-sm-12">
                                <select name="gender" class="form-control form-control-lg">
                                    <option {{$last->gender == "Kadın" ? 'selected':''}} value="Kadin" >Kadın</option>
                                    <option {{$last->gender == "Erkek" ? 'selected':''}} value="Erkek">Erkek</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2> Change Type </h2>
                            <div class="col-sm-12">
                                <select name="producttypeid" class="form-control form-control-lg">
                                    @foreach($element as $e)
                                        <option {{$last -> producttypeidrelation->id == $e->id? 'selected': ''}} value="{{$e->id}}">{{$e->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2> Change Color</h2>
                            <div class="col-sm-12">
                                <select name="colorids[]" id="color" class="form-control form-control-lg" multiple="multiple">
                                    @foreach($element3 as $e3)
                                        <option @foreach ($last -> colors as $item) {{$item->color->id == $e3->id? 'selected': ''}} @endforeach value="{{$e3->id}}">{{$e3->title}}</option>
                                    @endforeach
                                </select>
                                <script>
                                    $(document).ready(function () {
                                        $("#color").select2({
                                            maximumSelectionLength: 2
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2> Change Size</h2>
                            <div class="col-sm-12">
                                <select name="sizeid" class="form-control form-control-lg">
                                    @foreach($element2 as $e2)
                                        <option {{$last -> sizeidrelation->id == $e2->id? 'selected': ''}} value="{{$e2->id}}">{{$e2->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2> Change Price</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="price" value="{{$last -> price}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Change Name</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="name" value="{{$last -> name}}" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <img style="width: 16%; " src="{{ \Illuminate\Support\Facades\Storage::url($last -> img_url) }}" alt="image">
                        </div>
                        <div class="form-group">
                            <h2>Change Image</h2>
                            <div class="col-sm-12">
                                <input type="file" id="file1" name="image" class="btn btn-default btn-sm" title="">
                                <input type="hidden" id="img_url" name="img_url">
                            </div>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $('#file1').change(function () {
                                    $('#img_url').val($('#file1')[0].files[0]["name"]);
                                })
                            });
                        </script>
                        <div class="form-group">
                            <h2>Change Explanation</h2>
                            <div class="col-sm-12">
                                <textarea id="summernote" class="summernote" name="explanation" >
                                    {{$last -> explanation}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">KAYDET</button>
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

