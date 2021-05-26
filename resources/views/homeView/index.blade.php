@extends('template.homeView')
@section('title', 'Home')
@section('container')
<!--========================== Intro Section ============================-->
<div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
        @foreach($highlights as $row)
            <!-- Item -->
            <div class="item">
                <div class="img-fill" style="background-color:#f8dc81;">
                    <img src="{{asset('storage/'.$row->gambar)}}" style=" object-fit: scale-down; object-position: 50% 0%; !important max-width: 100%;
  !important height: 100px;" alt="">
                    <div class="text-content">
                        <h3 style="color:#eff7e1;font-weight:900; font-size:20px;">{{$row->judul}}</h3>
                        <h5 style="color:#eff7e1; font-weight:900;">{{$row->deskripsi}}</h5>
                        <a href="{{url('/artikel')}}" class="main-stroked-button">Learn More</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <!-- #intro -->
    <main id="main">
        <!--==========================About Us Section============================-->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{asset('cssHome/img/about-img.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="about-content">
                            <h2>About Us</h2>
                            <h3>{{$about->judul}}</h3>
                            <p>{{$about->artikel}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #about -->

        <!--========================== Berita ============================-->
        <section id="services" class="section-bg">
            <div class="container">
                <div class="judul">
                    <h2>Berita</h2>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                        vituperatoribus.</p>
                </div>
                <div class="row">
                    @foreach($berita as $beritas)
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="work-img img-fluid">
                                <img class="bg"
                                    src="{{asset('storage/'.$beritas->gambar)}}"
                                    alt="">
                            </div>
                            <h4 class="title">
                                <a href="">{{$beritas->judul}}</a>
                            </h4>
                            <p class="description">{{$beritas->deskripsi}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- #Berita -->



        <!--========================== Pengumuman ============================-->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="judul">
                    <h2>Pengumuman</h2>

                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                        vituperatoribus.</p>
                </div>
                <div class="row">
                @foreach($pengumuman as $pengumumans)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="{{url('/pengumuman')}}" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="{{asset('storage/'.$pengumumans->gambar)}}" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="title">
                                                <a href="">{{$pengumumans->judul}}</a>
                                            </h4>
                                            <div class="w-more">
                                                <span class="w-ctegory">{{$pengumumans->kategori}}</span>
                                                /
                                                <span class="w-date">{{$pengumumans->created_at}}</span>
                                                <button type="button" href="{{url('/pengumuman')}}"
                                                    class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2 float-right">
                                                    Cek<i class="fas fa-angle-right ml-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- #Pengumuman -->

        <!--========================== Artikel ============================-->
        <section id="blog" class="blog-mf sect-pt4 route">
            <div class="container">
                <div class="judul">
                    <h2>Artikel</h2>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                        vituperatoribus.</p>
                </div>
                <div class="row">
                @foreach($artikel as $artikels)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html">
                                    <img src="{{asset('storage/'.$artikels->gambar)}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="title">
                                    <a href="">{{$artikels->judul}}</a>
                                </h4>
                                <p class="card-description">
                                    {{$artikels->deskripsi}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        <!-- #artikel -->

        <!--========================== Clients Section ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <div class="judul">
                    <h2>Kerja Sama</h2>
                </div>
                <div class="owl-carousel clients-carousel">
                    <img src="img/clients/client-1.png" alt="">
                    <img src="img/clients/client-2.png" alt="">
                    <img src="img/clients/client-3.png" alt="">
                    <img src="img/clients/client-4.png" alt="">
                    <img src="img/clients/client-5.png" alt="">
                    <img src="img/clients/client-6.png" alt="">
                    <img src="img/clients/client-7.png" alt="">
                    <img src="img/clients/client-8.png" alt="">
                </div>
            </div>
        </section>
        <!-- #clients -->
    </main>
@endsection