@extends('template.homeView')
@section('title', 'Home')
@section('container')
<!--========================== Intro Section ============================-->
<div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src=https://images.unsplash.com/photo-1607664287075-2b23cedfd08c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80"
                        alt="">
                    <div class="text-content">
                        <h3>Welcome To Breezed</h3>
                        <h5>New Bootstrap Template</h5>
                        <a href="#" class="main-stroked-button">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="https://images.unsplash.com/photo-1600195077909-46e573870d99?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80"
                        alt="">
                    <div class="text-content">
                        <h3>Integrated Marketing Media</h3>
                        <h5>Best Digital Marketing</h5>
                        <a href="#" class="main-stroked-button">Read More</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="https://images.unsplash.com/photo-1616724702000-d62ee6558e59?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1052&q=80"
                        alt="">
                    <div class="text-content">
                        <h3>High Performance</h3>
                        <h5>Robust and Speedy</h5>
                        <a href="#" class="main-stroked-button">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
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
                            <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua.</p>
                            <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores
                                neque. Aspernatur
                                consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut
                                quidem alias
                                veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto
                                vel quisquam.
                                Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum
                                iste qui et ut ab
                                alias.</p>
                            <ul>
                                <li>
                                    <i class="ion-android-checkmark-circle"></i>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </li>
                                <li>
                                    <i class="ion-android-checkmark-circle"></i>
                                    Duis aute irure dolor in reprehenderit in voluptate velit.
                                </li>
                                <li>
                                    <i class="ion-android-checkmark-circle"></i>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                    dolore eu fugiat
                                    nulla pariatur.
                                </li>
                            </ul>
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
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="work-img img-fluid">
                                <img class="bg"
                                    src="https://images.unsplash.com/photo-1618371577182-3f12ebf81521?ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                    alt="">
                            </div>
                            <h4 class="title">
                                <a href="">Lorem Ipsum</a>
                            </h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="work-img img-fluid">
                                <img class="bg"
                                    src="https://images.unsplash.com/photo-1618308178796-f4dc0a03bab6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                                    alt="">
                            </div>
                            <h4 class="title">
                                <a href="">Lorem Ipsum</a>
                            </h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="work-img img-fluid">
                                <img class="bg"
                                    src="https://images.unsplash.com/photo-1613269181997-1f948902853f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80"
                                    alt="">
                            </div>
                            <h4 class="title">
                                <a href="">Lorem Ipsum</a>
                            </h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="work-img img-fluid">
                                <img class="bg"
                                    src="https://images.unsplash.com/photo-1616993166667-e3d889d74814?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80"
                                    alt="">
                            </div>
                            <h4 class="title">
                                <a href="">Lorem Ipsum</a>
                            </h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="work-img img-fluid">
                                <img class="bg"
                                    src="https://images.unsplash.com/photo-1618332304972-f016013e4a64?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                                    alt="">
                            </div>
                            <h4 class="title">
                                <a href="">Lorem Ipsum</a>
                            </h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="work-img img-fluid">
                                <img class="bg"
                                    src="https://images.unsplash.com/photo-1618215665030-b10900e0f602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                                    alt="">
                            </div>
                            <h4 class="title">
                                <a href="">Lorem Ipsum</a>
                            </h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
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
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="img/work-1.jpg" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="img/work-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="title">
                                                <a href="">Loreda Cuno Nere</a>
                                            </h4>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span>
                                                /
                                                <span class="w-date">18 Sep. 2018</span>
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2 float-right">
                                                    Cek<i class="fas fa-angle-right ml-1"></i></button>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <div class="w-like">

                        <button type="button" class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2">
                          <i class="fas fa-info-circle"></i>Cek</button>
                      </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="img/work-2.jpg" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="img/work-2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="title">
                                                <a href="">Loreda Cuno Nere</a>
                                            </h4>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span>
                                                /
                                                <span class="w-date">18 Sep. 2018</span>
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2 float-right">
                                                    Cek<i class="fas fa-angle-right ml-1"></i></button>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <div class="w-like">

                        <button type="button" class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2">
                          <i class="fas fa-info-circle"></i>Cek</button>
                      </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="img/work-3.jpg" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="img/work-3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="title">
                                                <a href="">Loreda Cuno Nere</a>
                                            </h4>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span>
                                                /
                                                <span class="w-date">18 Sep. 2018</span>
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2 float-right">
                                                    Cek<i class="fas fa-angle-right ml-1"></i></button>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <div class="w-like">

                        <button type="button" class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2">
                          <i class="fas fa-info-circle"></i>Cek</button>
                      </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="img/work-4.jpg" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="img/work-4.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="title">
                                                <a href="">Loreda Cuno Nere</a>
                                            </h4>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span>
                                                /
                                                <span class="w-date">18 Sep. 2018</span>
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2 float-right">
                                                    Cek<i class="fas fa-angle-right ml-1"></i></button>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <div class="w-like">

                        <button type="button" class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2">
                          <i class="fas fa-info-circle"></i>Cek</button>
                      </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="img/work-5.jpg" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="img/work-5.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="title">
                                                <a href="">Loreda Cuno Nere</a>
                                            </h4>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span>
                                                /
                                                <span class="w-date">18 Sep. 2018</span>
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2 float-right">
                                                    Cek<i class="fas fa-angle-right ml-1"></i></button>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <div class="w-like">

                        <button type="button" class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2">
                          <i class="fas fa-info-circle"></i>Cek</button>
                      </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="img/work-6.jpg" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="img/work-6.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="title">
                                                <a href="">Loreda Cuno Nere</a>
                                            </h4>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span>
                                                /
                                                <span class="w-date">18 Sep. 2018</span>
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2 float-right">
                                                    Cek<i class="fas fa-angle-right ml-1"></i></button>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- <div class="w-like">

                        <button type="button" class="btn btn-outline-primary btn-round mr-md-3 mb-md-0 mb-2">
                          <i class="fas fa-info-circle"></i>Cek</button>
                      </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html">
                                    <img src="img/post-1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Travel</h6>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="">Lorem Ipsum</a>
                                </h4>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="ion-ios-clock-outline"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html">
                                    <img src="img/post-2.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="">Lorem Ipsum</a>
                                </h4>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="ion-ios-clock-outline"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html">
                                    <img src="img/post-3.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="">Lorem Ipsum</a>
                                </h4>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="ion-ios-clock-outline"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
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