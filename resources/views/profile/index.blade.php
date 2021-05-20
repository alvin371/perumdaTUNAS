@extends('template/adminView')
@section('title','Admin Profile')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-1 text-gray-800">Company Profile Page</h1>
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
            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Visi Misi Tugas Pokok & Fungsi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Remark</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Remark</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Visi</td>
                            <td>{{$profile->visi}}</td>
                            <td>
                                <a href="{{url('/admin/profile/editProfile/1')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Misi</td>
                            <td>{{$profile->misi}}</td>
                            <td>
                                <a href="{{url('/admin/profile/editProfile/1')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tugas Pokok</td>
                            <td>{{$profile->tugasPokok}}</td>
                            <td>
                                <a href="{{url('/admin/profile/editProfile/1')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fungsi</td>
                            <td>{{$profile->fungsi}}</td>
                            <td>
                                <a href="{{url('/admin/profile/editProfile/1')}}" class="btn btn-primary btn-circle btn-sm">
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
            <h1 class="h3 mb-1 text-gray-800">Direktur</h1>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Direktur</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Artikel</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Artikel</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>{{$direktur->nama}}</td>
                            <td><?php echo $direktur->artikel ?></td>
                            <td><img src="{{asset('storage/'.$direktur->photo)}}" alt="" class="img-fluid"></td>
                            <td>
                                </form>
                                <a href="{{url('/admin/profile/editDirektur/1')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Team Here -->
    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-1 text-gray-800">Team Profile</h1>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/admin/profile/addTeam')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Anggota Team</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Anggota Team</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Photo</th>
                            <th>Social Media</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Photo</th>
                            <th>Social Media</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($team as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->jabatan}}</td>
                            <td><img src="{{asset('storage/'.$row->gambar)}}" alt="" class="img-thumbnail" style="width: 200px; height: 200px;"></td>
                            <td>
                                <a href="{{$row->twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{$row->facebook}}">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="{{$row->gmail}}">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="{{$row->linkedin}}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{url('/admin/profile/delete/'.$row->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{url('/admin/profile/editTeam/'.$row->id)}}" class="btn btn-primary btn-circle btn-sm">
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