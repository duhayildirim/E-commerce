@extends('CMS.main')
@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Ürün <small>Listesi</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <!-- start project list -->
                                    <table class="table table-striped projects">
                                            <tbody>
                                            <tr>
                                                <td style="width: 5%">ID</td>
                                                <td style="width: 10%">
                                                    <a>CİNSİYET</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>KATEGORİ</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>BEDEN</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>RENK</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>FİYAT</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>İSİM</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>RESİM</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>AÇIKLAMA</a>
                                                </td>
                                                <td style="width: 5%">
                                                    <a> SİL/DÜZENLE </a>
                                                </td>
                                            </tr>
                                        @foreach($element7 as $e)
                                            <tr>
                                                <td style="width: 5%">{{$e -> id}}</td>
                                                <td style="width: 10%">
                                                    <a>{{$e -> gender}}</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>{{$e -> producttypeidrelation -> title}}</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>{{$e -> sizeidrelation->title}}</a>
                                                </td>
                                                <td style="width: 10%">
                                                    @foreach($e->colors as $key =>$colorProduct)
                                                        <a>{{isset($colorProduct->color)?$colorProduct->color->title:""}}</a><br>
                                                    @endforeach
                                                </td>
                                                <td style="width: 10%">
                                                    <a>{{$e -> price}}</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>{{$e -> name}}</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>{{$e -> img_url}}</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <a>{{$e -> explanation}}</a>
                                                </td>
                                                <td style="width: 5%">
                                                    <a href="{{route('CMS.edit.delete' , $e -> id )}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Sil </a>
                                                    <a href="{{route('CMS.edit.edit_new' , $e -> id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Düzenle </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!-- end project list -->
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

