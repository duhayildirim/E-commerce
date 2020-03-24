@extends('Front.main')
@section('content')
    <div align="center">
        <div class="col-lg-3 col-sm-6">
        <form action="#" method="#">
            {{csrf_field()}}
            <div class="row">
                <div class="col">
                    <label>Ad</label>
                    <input name="name" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Şifre</label>
                <input  name="password" type="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Şifre(tekrar)</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button class="site-btn">Kayıt Ol</button>
        </form>
        </div>
    </div>
@endsection
