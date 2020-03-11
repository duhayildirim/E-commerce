@extends('CMS.main')
@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Ürün Türü  <small>Listesi</small></h3>
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
                                        @foreach($element6 as $e)
                                            <tr>
                                                <td style="width: 5%"></td>
                                                <td style="width: 40%">
                                                    <a>{{$e -> title}}</a>
                                                </td>
                                                <td style="width: 10%">
                                                    <small></small>
                                                </td>
                                                <td style="width: 15%">
                                                    <a href="{{route('CMS.edit.delete_producttype' , $e -> id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> SİL </a>
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

