@extends('template/adminView')
@section('title','Admin Gallery')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-1 text-gray-800">About Us Section</h1>
        </div>
    </div>
    @if (session('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>{{ session('status') }}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rincian About Us</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Part</th>
                            <th>Rincian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Part</th>
                            <th>Rincian</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Judul</td>
                            <td>{{$about->judul}}</td>
                            <td>
                                <a href="{{url('/admin/gallery/editAbout/1')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Artikel</td>
                            <td><?php echo $about->artikel ?></td>
                            <td>
                                <a href="{{url('/admin/gallery/editAbout/1')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Gambar</td>
                            <td><img src="{{asset('storage/'.$about->gambar)}}" alt=""></td>
                            <td>
                                <a href="{{url('/admin/gallery/editAbout/1')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Direktur Page -->
    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-1 text-gray-800">Highlights</h1>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/admin/gallery/addHighlights')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Highlights</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Highlights akan ditampilkan pada Slide Home Website</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Subjudul</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Judul</th>
                            <th>Subjudul</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($highlights as $row)
                        <tr>
                            <td>{{$row->judul}}</td>
                            <td><?php echo $row->subjudul ?></td>
                            <td><img src="{{asset('storage/'.$row->gambar)}}" alt="" class="img-fluid"></td>
                            <td>
                                <form action="{{url('/admin/gallery/deleteHighlights/'.$row->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{url('/admin/gallery/editHighlights/'.$row->id)}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Team Here -->
    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-1 text-gray-800">Halaman Layanan</h1>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/admin/gallery/layananAdd')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Layanan</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Layanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Caption</th>
                            <th>Deskripsi</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Caption</th>
                            <th>Deskripsi</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($layanan as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->caption}}</td>
                            <td>{{$row->deskripsi}}</td>
                            <td><img src="{{asset('storage/'.$row->gambar)}}" alt="" class="img-thumbnail" style="width: 200px; height: 200px;"></td>
                            <td>
                                <form action="{{url('/admin/gallery/deleteLayanan/'.$row->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{url('/admin/gallery/editLayanan/'.$row->id)}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection