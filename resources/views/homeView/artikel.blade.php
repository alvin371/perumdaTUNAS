@extends('template.homeView')
@section('title', 'Artikel')
@section('container')
<main id="main">
        <!--==========================Berita ============================-->
        <section class="sectionBerita">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">
                                    Artikel
                                </h4>
                            </div>
                            <!-- end blog-top -->
                            <div class="blog-list clearfix">
                                @foreach($artikel as $row)
                                <div class="tm-section tm-container-inner">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <figure class="tm-description-figure">
                                                <img src="{{asset('storage/'.$row->gambar)}}" alt="Image" class="img-fluid" />
                                            </figure>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tm-description-box"> 
                                                <h4 class="beritaJ">{{$row->judul}}</h4>
                                                <p class="tm-mb-45">{{$row->deskripsi}}</p>
                                                <div class="fh5co_tags_all_artikel">
                                                  <a href="{{url('/detailArtikel/'.$row->id)}}" class="fh5co_taggA">Baca Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!-- end blog-list -->
                        </div>
                        <!-- end page-wrapper -->
                        <hr class="invis">
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- #Berita -->
    </main>
@endsection