@extends('template.homeView')
@section('title', 'Berita')
@section('container')
<main id="main">
        <!--==========================Detail Berita============================-->
        <section class="sectionBerita single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb-Judul hidden-xs-down">
                                    <li class="breadcrumb-item">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{url('/berita')}}">Berita</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{$berita->judul}}</li>
                                </ol>
                                <h3 class="Judul-Berita">{{$berita->judul}}</h3>
                                <div class="blog-meta big-meta">
                                    <small>
                                        <a href="{{url('detailBerita/'.$berita->id)}}" title="">{{$berita->created_at}}</a>
                                    </small>
                                </div>
                                <!-- end meta -->
                            </div>
                            <!-- end title -->
                            <div class="single-post-media">
                                <img src="{{asset('storage/'.$berita->gambar)}}" alt="" class="img-fluid">
                            </div>
                            <!-- end media -->
                            <div class="blog-content">  
                                <div class="pp">
                                 <?php echo $berita->artikel; ?>   
                                </div>
                                <!-- end pp -->
                            </div>
                            <!-- end content -->
                        </div>
                        <!-- end page-wrapper -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- #Detail Berita -->
    </main>

@endsection