@extends('template/adminView')
@section('title','Admin Artikel')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-1 text-gray-800">Artikel</h1>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/admin/artikel/add')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Artikel</span>
                    </a>
                </div>
            </div>
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
            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Artikel</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Photo</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($artikel as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->judul}}</td>
                            <td>{{$row->deskripsi}}</td>
                            <td><img src="{{asset('storage/'.$row->gambar)}}" alt="" class="img-fluid"></td>
                            <td>
                                <form action="{{url('/admin/artikel/delete/'.$row->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{url('/admin/artikel/edit/'.$row->id)}}" class="btn btn-primary btn-circle btn-sm">
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