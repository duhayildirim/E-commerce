@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Üye <small>Listesi</small></h3>
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
                                    <a>AD</a>
                                </td>
                                <td style="width: 10%">
                                    <a>SOYAD</a>
                                </td>
                                <td style="width: 10%">
                                    <a>E-MAİL</a>
                                </td>
                                <td style="width: 10%">
                                    <a>ADRES</a>
                                </td>
                                <td style="width: 5%">
                                    <a>YETKİ</a>
                                </td>
                                <td style="width: 5%">
                                    <a> SİL </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="width: 5%"></td>
                                <td style="width: 10%">
                                    <a></a>
                                </td>
                                <td style="width: 10%">
                                    <a></a>
                                </td>
                                <td style="width: 10%">
                                    <a></a>
                                </td>
                                <td style="width: 10%">
                                    <a></a>
                                </td>
                                <td style="width: 10%">
                                    <a></a>
                                </td>
                                </td>
                                <td style="width: 5%">
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Üyeyi sil </a>
                                </td>
                            </tr>

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
