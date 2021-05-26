@extends('template.homeView')
@section('title', 'Layanan')
@section('container')

<!-- #intro -->
<main id="main" class="mt-5">
    <div class="service mt-5">
        <div class="container-fluid">
            <div class="judul">
                <h2>Jenis Layanan</h2>
            </div>
            <!-- DEMO 1 -->
            <div class="py-5">
                <div class="row">
                    @foreach($layanan as $row)
                    <!--Layanan 1-->
                    <div class="col-md-3 mb-3 ">
                        <div class="hover hover-1 text-white rounded"><img src="{{asset('storage/'.$row->gambar)}}"
                                alt="" class="img-fluid">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content ">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span
                                        class="font-weight-light">{{$row->caption}}
                                    </span></h3>
                                <p class="hover-1-description  mb-0 " style="text-shadow: 0 0 3px #080707, 0 0 5px #130a0a;">
                                    <?php echo $row->deskripsi; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Waktu dan Tarif -->
        <div class="service-row">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 d-md-none d-block">
                        <div class="service-row-img">
                            <img src="" alt="Service">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-row-text">

                            <h2>Waktu dan Tarif</h2>

                            <h5 class="section-title">Pelayanan tempat pemotongan setiap hari (Senin sampai dengan
                                Minggu)</h5>
                            <ol>
                                <li>Untuk sapi/kerbau/kuda : jam 23.00 s/d jam 06.00.WIB
                                </li>
                                <li>Untuk kambing/domba : Pagi jam 05.30 s/d 11.00 dan siang jam 15.00 s/d 17.30
                                    WIB.
                                </li>
                                <li>Untuk babi jam 04.30 s/d jam 07.00 WIB
                                </li>
                                <p class="font-italic">Kecuali pemotongan darurat (hewan yang mengalami kecelakaan)
                                    dapat dilalyani
                                    setiap
                                    saat.
                                </p>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6 d-md-block d-none">
                        <div class="service-row-img">
                            <img src="https://images.unsplash.com/photo-1556740714-a8395b3bf30f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Waktu dan Tarif  -->


        <!-- Hal lain yang perlu dilakukan -->
        <div class="service-row">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="service-row-img">
                            <img src="https://images.unsplash.com/photo-1588582669551-8617e4a757bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                alt="Service">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-row-text">
                            <h2>Hal lain yang perlu dilakukan</h2>
                            <ol>
                                <li>Pelayanan kandang penampungan selama 24 jam
                                </li>
                                <li>Pemeriksaan ante mortem dilakukan sebelum hewan dipotong paling lama 15 menit
                                    setiap ekor.</li>
                                <li>Pemeriksaan Post mortem dilakukan sesudah hewan dipotong paling lama 15 menit
                                    setiap ekor.
                                </li>
                                <li>Menjaga kebersihan tempat dan peralatan pemotongan selama 24 jam setiap hari dan
                                    menjaga ketertiban
                                    pemotongan
                                    pada saat dilaksanakannya proses pemotongan.
                                </li>
                                <li>Dilakukan setiap saat dengan sesering mungkin baik melalui surat edaran kepada
                                    seluruh SKPD,
                                    Kecamatan,
                                    dan
                                    Kelurahan di Kota Malang, melalui berbagai pertemuan, melalui media sosial,
                                    melalui pemasangan baner
                                    di
                                    tempat
                                    umum dan melalui Website.
                                </li>
                                <li>Dilakukan setiap saat dengan memproduksi Bakso sapi yang halal dan higines.
                                </li>
                                <li>Dilakukian setiap saat, sesuai kebutuhan lembaga pendidikan dan lembaga diklat
                                    yang bersangkutan.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hal lain yang perlu dilakukan End -->


        <!-- Tarif -->
        <div class="service-row">
            <div class="container">
                <div class="row align-items-center">

                    <div class="service-row-text">
                        <h2>Tarif Layanan Pemotongan</h2>
                        <h7 class="section-title">Pelayanan tempat pemotongan setiap hari (Senin sampai dengan
                            Minggu)</h7>
                        <ol class="tarif">
                            <li>Pemotongan untuk usaha, hajat dan atau kurban keagamaan (Hari Raya Qurban) tiap ekor
                                dikenakan
                                tarip:
                            </li>
                            <div class="row">
                                <div class="col-8">
                                    <p>Sapi/kerbau/kuda, lengkap dengan timbang kulit dan cuci jerohan, sebesar </p>
                                </div>
                                <div class="col-4">
                                    <p> Rp. 55.000,00
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <p>Babi, sebesar </p>
                                </div>
                                <div class="col-4">
                                    <p> Rp. 65.000,00
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <p>Kambing/domba, sebesar</p>
                                </div>
                                <div class="col-4">
                                    <p>Rp 9.000,00
                                    </p>
                                </div>
                            </div>
                            <li> Pemotongan karena keadaan darurat baik untuk usaha dan/atau hajat, tiap ekor
                                dikenakan tarip :
                            </li>
                            <div class="row">
                                <div class="col-8">
                                    <p>Sapi/kerbau/kuda, lengkap dengan timbang kulit dan cuci jerohan sebesar</p>
                                </div>
                                <div class="col-4">
                                    <p>Rp 66.000,00
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <p>Babi, sebesar </p>
                                </div>
                                <div class="col-4">
                                    <p> Rp 76.000,00
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <p>Kambing/domba, sebesar</p>
                                </div>
                                <div class="col-4">
                                    <p> Rp 14.000,00
                                    </p>
                                </div>
                            </div>
                            <li>Penitipan hewan, setiap harinya dikenakan tarip :
                            </li>
                            <div class="row">
                                <div class="col-8">
                                    <p>Sapi/kerbau dan kuda per petak</p>
                                </div>
                                <div class="col-4">
                                    <p>Rp 12.000,00
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <p> Babi per m2 </p>
                                </div>
                                <div class="col-4">
                                    <p>Rp 1.500,00
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <p> Sapi Brahman per ekor </p>
                                </div>
                                <div class="col-4">
                                    <p>Rp. 3.000,00
                                    </p>
                                </div>
                            </div>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tarif end-->


</main>
@endsection
