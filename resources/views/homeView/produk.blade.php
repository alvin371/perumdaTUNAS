@extends('template.homeView')
@section('title', 'Produk')
@section('container')
<!-- #header -->>
<main id="main">
        <!--==========================Produk============================-->
        <div class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
            <p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax
                effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or
                non-commercial websites.</p>
        </div>
        <!-- Gallery -->
        <div class="row tm-paging-links">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <form action="">
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                                <input type="search" placeholder="Cari Produk" aria-describedby="button-addon1"
                                    class="form-control border-0 bg-light">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link-A">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1 col-md-1">
                    <a href="" class="btn btn-link" id="button-addon1" style="font-size: 20pt;">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-lg-1 col-md-1">
                    <a href="" class="btn btn-link" id="button-addon1" style="font-size: 20pt;">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row tm-gallery">

            <!-- gallery page 1 -->
            <div id="tm-gallery-page-pizza" class="tm-gallery-page">
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Fusce dictum finibus</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$45 / $55</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/02.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$65 / $70</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Sed varius turpis</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$30.50</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Aliquam sagittis</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$25.50</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Maecenas eget justo</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$80.25</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Quisque et felis eros</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$20 / $40 / $60</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Sed ultricies dui</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$94</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">Donec porta consequat</h4>
                            <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
                                amet tellus accumsan</p>
                            <p class="tm-gallery-price">$15</p>
                            <div class="fh5co_tags_all">
                                <a href="#" class="fh5co_tagg">Business</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
            <!-- gallery page 1 -->
        </div>
        <!-- #Produk-->
    </main>
@endsection