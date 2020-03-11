@extends('Front.main')
@section('content')
    <div align="center">
        <div class="col-lg-3 col-sm-6">
        <form>
            <div class="row">
                <div class="col">
                    <label>Ad</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col">
                    <label>Soyad</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Şifre</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Şifre(tekrar)</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" >Adres</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="adres.../ ilçe / şehir"></textarea>
            </div>
            <button class="site-btn">Kayıt Ol</button>
        </form>
        </div>
    </div>
@endsection
