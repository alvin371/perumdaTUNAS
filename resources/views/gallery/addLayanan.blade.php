@extends('template/adminView')
@section('title','Admin Gallery Tambah Layanan')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Layanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form method="post" enctype="multipart/form-data" action="{{url('/admin/gallery/layananStore')}}">
                    @csrf
                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" name="caption" class="form-control" id="caption"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="gambar">Gambar</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input  @error('gambar') is-invalid @enderror"
                                        value="{{old('gambar')}}" name="gambar"
                                        id="gambar" aria-describedby="inputGroupFileAddon01" >
                                    @error('gambar')
                                    <div id="gambar" class="invalid-feedback">{{$message}}
                                    </div>
                                    @enderror
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="ml-auto p-2">

                                <button type="submit" class="btn btn-primary  mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
@section('javascript')
<script src="{{asset('cssAdmin/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('artikel');

</script>
<script>    
    $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
@endsection