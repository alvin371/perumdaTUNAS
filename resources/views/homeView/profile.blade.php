@extends('template.homeView')
@section('title', 'Profile')
@section('container')
<!-- #header -->
<main id="main">
    <!--==========================Pimpinan============================-->
    <section id="pimpinan">
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
                  Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae
                  velit volutpat venenatis.
                </p>
                <p>
                  Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat,
                  diam a tempus vehicula.
                </p>
              </div>
              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                <img src="{{asset('cssHome/img/author-image.jpg')}}" class="img-responsive" alt="">
                <figcaption>
                  <h3>Dr. Neil Jackson</h3>
                  <p>General Principal</p>
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
                      <p>"Mewujudkan PD. RPH sebagai perusahaan yang sehat, penghasil pendapatan dan pendorong perekonomian daerah melalui sinergi UMKM".</p>
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
                        1.Menumbuh Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <br>2.Membudayakan Donec vitae lorem eget ipsum accumsan tempor at id est
                        <br>3.Menumbuhkembangkan Pellentesque quis tortor eu tortor pretium cursus sed id justo
                        <br>4.Menyediakan Pellentesque quis tortor eu tortor pretium cursus sed id justo
                        <br>5.Menerapkan Donec sollicitudin lorem ut enim egestas, eu pellentesque ante egestas
                      </p>
                    </div>
                  </div>
                </article>
                <article id="tabs-3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display:block;">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 style="text-align: center;">Tugas Pokok</h4>
                      <p>
                        Menyediakan tempat, melaksanakan pemotongan hewan dan pengembangan budidaya hewan protong dalam
                        rangka melayani kebutuhan masyarakat akan daging yang memenuhi syarat kesehatan dan agama serta
                        peraturan perundang-undangan yang berlaku.
                      </p>
                    </div>
                    <div class="col-md-6">
                      <h4 style="text-align: center;">Fungsi</h4>
                      <p>
                        1.Pelaksanaan Pembinaan dan pengelolaan Perusahaan Daerah sesuai kebijakan Pemerintah Daerah;
                        <br> 2.Pelaksanaan Koordinasi dengan instansi terkait yang meliputi segala usaha dan kegiatan
                        guna mewujudkan peningkatan pelayanan kepada masyarakat di bidang pemotongan hewan dan budidaya
                        hewan potong dalam rangka pelayanan kebutuhan daging sehat;
                        <br> 3.Pengawasan dan pengamanan teknis atas segala usaha dan kegiatan tugas pokok sesuai dengan
                        kebijakan Pemerintah Daerah;
                        <br> 4.Pelaksanaan Urusan Tata Usaha Perusahaan Daerah.
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
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href="">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #Strukstur Organisasi -->
  </main>
@endsection