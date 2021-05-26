@extends('template/adminView')
@section('title','Admin Edit Profile')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form method="post" enctype="multipart/form-data" action="{{url('/admin/profile/profileUpdate/'.$profile->id)}}">
                    @method('patch')
                    @csrf
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <textarea class="form-control" name="visi" id="visi"
                                rows="3" required>{{$profile->visi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <textarea class="form-control" name="misi" id="misi"
                                rows="3" required>{{$profile->misi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tugasPokok">Tugas Pokok</label>
                            <textarea class="form-control" name="tugasPokok" id="tugasPokok"
                                rows="3" required>{{$profile->tugasPokok}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="fungsi">Fungsi</label>
                            <textarea class="form-control" name="fungsi" id="fungsi"
                                rows="3" required>{{$profile->fungsi}}</textarea>
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
    CKEDITOR.replace('tugasPokok');
    CKEDITOR.replace('fungsi');

</script>
<script>    
    $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
@endsection