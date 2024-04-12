@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Change Password Page</h4>
                        <hr>
                        <br>
                        <br>

                        @if(count($errors))

                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $error }}
                                </p>
                            @endforeach

                        @endif

                        <form method="post" action="{{ route('update.password') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="oldpassword" value="" id="oldpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="newpassword" value="" id="newpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="confirm_password" value="" id="confirm_password">
                                </div>
                            </div>

                            <hr>
                            <input class="btn btn-info btn-rounded waves-effect waves-light" type="submit" value="Change Password"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
