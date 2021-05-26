@extends('template.homeView')
@section('title', 'Pengumuman')
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
                                    Pengumuman
                                </h4>
                            </div>
                            <!-- end blog-top -->
                            <div class="blog-list clearfix">
                                <div class="container-fluid">
                                    <div class="row fh5co-post-entry">
                                        @foreach($pengumuman as $row)
                                        <article class="col-lg-4 col-md-4 col-sm-5 col-xs-6 col-xxs-12 animate-box">
                                            <figure>
                                                <a href="{{url('/detailPengumuman/'.$row->id)}}">
                                                    <img src="{{asset('storage/'.$row->gambar)}}" alt="Image" class="img-responsive">
                                                </a>
                                            </figure>
                                            <h2 class="fh5co-article-title">
                                                <a href="{{url('/detailPengumuman/'.$row->id)}}" class="beritaJudul">{{$row->judul}}</a>
                                            </h2>
                                            <span class="fh5co-meta fh5co-date">{{$row->created_at}}</span>
                                        </article>
                                        @endforeach
                                        <div class="clearfix visible-xs-block"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end blog-list -->
                        </div>
                        <!-- end page-wrapper -->
                        <!-- end row -->
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