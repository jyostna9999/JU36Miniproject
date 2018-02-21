@extends('layouts.default')
@section('content')

    <form action="" class="justify-content-center">
        <div class="form-inline justify-content-center">
            <img class="mb-3 mt-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72"
                 height="72">
        </div>
        <h2 class="text-center mr-5 font-weight-normal">Please Sign in here</h2>
        <div class="container mt-3">


            <div class="form-group row justify-content-center">
                <label for="example-email-input" class="col-2 col-form-label">Email Address</label>
                <div class="col-4">
                    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="example-password-input" class="col-2 col-form-label">Password</label>
                <div class="col-4">
                    <input class="form-control" type="password" value="hunter2" id="example-password-input">
                </div>
            </div>

            <div class="text-center justify-content-center mr-5">
                <button type="submit" class="btn btn-primary">Sign in</button>
                <a class="dropdown-item mt-2 ml-4" href="#">New around here? Sign up</a>
                <a class="dropdown-item mr-2" href="#">Forgot password?</a>
            </div>
        </div>
        </div>
    </form>


@endsection