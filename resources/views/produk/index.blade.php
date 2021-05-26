@extends('template/adminView')
@section('title','Admin Produk')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-1 text-gray-800">User</h1>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/admin/addProduk')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Produk</span>
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
            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga/Satuan</th>
                            <th>Gambar Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga/Satuan</th>
                            <th>Gambar Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($produk as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->deskripsi}}</td>
                            <td>Rp. {{$row->harga}}/{{$row->satuan}}</td>
                            <td><img src="{{asset('storage/'.$row->gambar)}}" class="img-fluid" alt=""></td>
                            <td>
                                <form action="{{url('/admin/deleteProduk/'.$row->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{url('/admin/editProduk/'.$row->id)}}" class="btn btn-primary btn-circle btn-sm">
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