@extends('template.homeView')
@section('title', 'Produk')
@section('container')
<!-- #header -->>
<main id="main">
        <!--==========================Produk============================-->
        <div class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Selamat Datang di Website Perumda Tugu Aneka Usaha</h2>
            <p class="col-12 text-center">Berikut adalah seluruh produk yang ada di Perumda Tugu Aneka Usaha, Tata Cara Pembelian, Pembayaran dan Pengiriman akan kami informasikan setelah anda menekan tombol Beli</p>
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
                @foreach($produk as $row)
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="{{asset('storage/'.$row->gambar)}}" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">{{$row->nama}}</h4>
                            <p class="tm-gallery-description">{{$row->deskripsi}}</p>
                            <p class="tm-gallery-price">{{$row->harga}}/ {{$row->satuan}}</p>
                            <div class="fh5co_tags_all">
                                <a href="https://wa.me/+6282147040879" class="fh5co_tagg">Beli</a>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                @endforeach
            </div>
            <!-- gallery page 1 -->
        </div>
        <!-- #Produk-->
    </main>
@endsection