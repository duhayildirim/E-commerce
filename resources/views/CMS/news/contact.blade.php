@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><small>İletişim</small></h3>
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
                                <td style="width: 5%">
                                    <a>AD</a>
                                </td>
                                <td style="width: 5%">
                                    <a>E-MAİL</a>
                                </td>
                                <td style="width: 5%">
                                    <a>KONU</a>
                                </td>
                                <td style="width: 20%">
                                    <a>MESAJ</a>
                                </td>
                                <td style="width: 5%">
                                    <a> SİL/CEVAPLA </a>
                                </td>
                            </tr>

                            @foreach($contact as $new)
                            <tr>
                                <td style="width: 5%"></td>
                                <td style="width: 5%">
                                    <a>{{$new -> name}}</a>
                                </td>
                                <td style="width: 5%">
                                    <a>{{$new -> email}}</a>
                                </td>
                                <td style="width: 5%">
                                    <a>{{$new -> subject}}</a>
                                </td>
                                <td style="width: 20%">
                                    <a>{{$new -> message}}</a>
                                </td>
                                </td>
                                <td style="width: 5%">
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Mesajı Sil </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Cevapla </a>
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
