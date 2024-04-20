@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Footer Page</h4>
                        <hr>
                        <br>
                        <br>

                        <form method="post" action="{{ route('update.footer') }}">
                            @csrf

                            <input type="hidden" name="id" value="{{ $allfooter->id }}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="number" value="{{ $allfooter->number }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="address" value="{{ $allfooter->address }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" value="{{ $allfooter->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="facebook" value="{{ $allfooter->facebook }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="twitter" value="{{ $allfooter->twitter }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Coppyright</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="coppyright" value="{{ $allfooter->coppyright }}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <textarea required="" name="short_description" class="form-control" rows="5">
                                        {{ $allfooter->short_description }}
                                    </textarea>
                                </div>
                            </div>

                            <hr>

                            <input class="btn btn-info btn-rounded waves-effect waves-light" type="submit" value="Update Footer Page"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
