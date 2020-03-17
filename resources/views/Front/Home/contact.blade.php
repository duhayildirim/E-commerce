@extends('Front.main')
@section('content')
    <div class="page-top-info">
        <div class="container">
            <h4>Contact</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- Contact section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-info">
                    <h3>Get in touch</h3>
                    <p>Main Str, no 23, New York</p>
                    <p>+546 990221 123</p>
                    <p>hosting@contact.com</p>
                    <div class="contact-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-error">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="contact-form" action="{{route("contact_store")}}" method="post">
                        {{csrf_field()}}
                        <input type="text" name="name" placeholder="Your name">
                        <input type="text" name="email" placeholder="Your e-mail">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button class="site-btn" >SEND NOW</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
    </section>
    <!-- Contact section end -->


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
                                <a href="{{'basket' , $n -> id}}" class="add-card"><i class="flaticon-bag"></i><span>Sepete Ekle</span></a>
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
