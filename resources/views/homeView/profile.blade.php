@extends('template.homeView')
@section('title', 'Profile')
@section('container')
<!-- #header -->
<main id="main">
    <!--==========================Pimpinan============================-->
    <section id="pimpinan" >
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="wow fadeInUp" data-wow-delay="0.6s">
               Selamat Datang di
               <b>T</b>ugu Aneka Usaha Website
              </h2>
              <div class="wow fadeInUp" data-wow-delay="0.8s">
                <p>
                  <?php echo $direktur->artikel ?>
                </p>
              </div>
              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                <img src="{{asset('storage/'.$direktur->photo)}}" class="img-responsive" alt="">
                <figcaption>
                  <h3>{{$direktur->nama}}</h3>
                  <p>{{$direktur->jabatan}}</p>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #pimpinan -->

    <!--==========================Visi Misi Tupoksi==========================-->
    <section class="section why-us" data-section="section2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id='tabs'>
              <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="-1" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="false" aria-expanded="false">
                  <a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Visi</a>
                </li>
                <li class="ui-state-default ui-corner-top" role="tab" tabindex="0" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="true" aria-expanded="true">
                  <a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Misi</a>
                </li>
                <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
                  <a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Tupoksi</a>
                </li>
              </ul>
              <section class='tabs-content'>
                <article id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display:none;">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="img/choose-us-image-01.png" alt="">
                    </div>
                    <div class="col-md-6">
                      <h4>Visi</h4>
                      <p><?php echo $profile->visi; ?></p>
                    </div>
                  </div>
                </article>
                <article id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" style="display:none;">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="img/choose-us-image-02.png" alt="">
                    </div>
                    <div class="col-md-6">
                      <h4>Misi</h4>
                      <p>
                        <?php $profile->misi; ?>
                      </p>
                    </div>
                  </div>
                </article>
                <article id="tabs-3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display:block;">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 style="text-align: center;">Tugas Pokok</h4>
                      <p>
                        <?php echo $profile->tugasPokok; ?>
                      </p>
                    </div>
                    <div class="col-md-6">
                      <h4 style="text-align: center;">Fungsi</h4>
                      <p>
                        <?php echo $profile->fungsi; ?>
                      </p>
                    </div>
                  </div>
                </article>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #Visi Misi Tupoksi -->
    <!--==========================Dasar Hukum==========================-->
    <section id="service" class="services-mf route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">Dasar Hukum</h3>
              <p class="subtitle-a">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-content">
                <h2 class="s-title">PD. RPH Kota malang</h2>
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">PerDa Kota Malang Nomor 17 Tahun 2002</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-content">
                <h2 class="s-title">Pangan</h2>
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">UU Nomor 18 Tahun 2012</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-content">
                <h2 class="s-title">Perlindungan Konsumen</h2>
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">UU Nomor 8 Tahun 1999</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-content">
                <h2 class="s-title">Peternakan dan Kesehatan Hewan</h2>
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">UU Nomor 18 Tahun 2009</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-content">
                <h2 class="s-title">Keamanan Mutu dan Gizi Pangan</h2>
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">PerPres Nomor 28 tahun 2004</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-content">
                <h2 class="s-title">Kesehatan Masyarakat Veteriner Dan Kesejaterahan Hewan</h2>
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">PerPres Nomor 95 Tahun 2012</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-content">
                <h2 class="s-title">Persyaratan RPH R dan Unit Penanganan Daging (Meat Cutting Plant)</h2>
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Permentan Nomor 13 Tahun 2010</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #Dasar Hukum -->
    <!--==========================Strukstur Organisasi==========================-->
    <section id="team">
      <div class="container">
        <div class="judul">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <br>
        <div class="row">
        @foreach($team as $row)
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{asset('storage/'.$row->gambar)}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{$row->nama}}</h4>
                  <span>{{$row->jabatan}}</span>
                  <div class="social">
                    <a href="{{$row->twitter}}">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="{{$row->facebook}}">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="{{$row->gmail}}">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="{{$row->linkedin}}">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    <!-- #Strukstur Organisasi -->
  </main>
@endsection