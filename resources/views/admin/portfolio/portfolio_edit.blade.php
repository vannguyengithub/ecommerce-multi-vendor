@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Portfolio Page</h4>
                        <hr>
                        <br>
                        <br>

                        <form method="post" action="{{ route('update.portfolio') }}" enctype="multipart/form-data">
                            @csrf

                            <input class="form-control" type="hidden" name="id" value="{{ $portfolio->id }}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="portfolio_name" value="{{ $portfolio->portfolio_name }}">
                                    @error('portfolio_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="portfolio_title" value="{{ $portfolio->portfolio_title }}">
                                    @error('portfolio_title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="portfolio_description">
                                        {{ $portfolio->portfolio_description}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="portfolio_image" id="image">
                                    @error('portfolio_image')
                                    <span   span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img
                                        id="showImage"
                                        class="rounded avatar-lg"
                                        src="{{  !empty($portfolio->portfolio_image) ? url($portfolio->portfolio_image) : url('upload/no_image.jpg') }}"
                                        alt="home slider"
                                        style="object-fit: cover;"
                                    >
                                </div>
                            </div>
                            <hr>

                            <input class="btn btn-info btn-rounded waves-effect waves-light" type="submit" value="Update Portfolio Data"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });

</script>

@endsection
