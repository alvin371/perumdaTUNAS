@extends('template/adminView')
@section('title','Admin Edit Direktur')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Direktur</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form method="post" enctype="multipart/form-data" action="{{url('/admin/profile/direkturUpdate/'.$direktur->id)}}">
                    @method('patch')
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$direktur->nama}}" id="nama"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="artikel">Artikel</label>
                            <textarea class="form-control" name="artikel" id="artikel"
                                rows="3" required>{{$direktur->artikel}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" value="{{$direktur->jabatan}}" id="jabatan"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="photo">Direktur Photo</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input  @error('photo') is-invalid @enderror"
                                        value="{{old('photo')}}" name="photo"
                                        id="photo" aria-describedby="inputGroupFileAddon01" required>
                                    @error('photo')
                                    <div id="photo" class="invalid-feedback">{{$message}}
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