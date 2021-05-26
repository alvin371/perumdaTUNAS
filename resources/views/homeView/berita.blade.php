@extends('template.homeView')
@section('title', 'Berita')
@section('container')
<!-- #intro -->
<main id="main">
        <!--==========================Berita ============================-->
        <section class="sectionBerita">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">
                                    Berita
                                </h4>
                            </div>
                            <!-- end blog-top -->
                            @foreach($berita as $row)
                            <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{url('/detailBerita/'.$row->id)}}" title="">
                                                <img src="{{asset('storage/'.$row->gambar)}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="blog-meta big-meta col-md-8">
                                        <h4 class="beritaJudul">
                                            <a href="{{url('/detailBerita/'.$row->id)}}" title="">{{$row->judul}}</a>
                                        </h4>
                                        <p>{{$row->deskripsi}}</p>
                                        <small>
                                            <a href="{{url('/detailBerita/'.$row->id)}}" title="">{{$row->created_at}}</a>
                                        </small>
                                    </div>
                                    <!-- end meta -->
                                </div>
                                <!-- end blog-box --> 
                            </div>
                            @endforeach
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