@extends('layouts.default')
@section('content')
    <div class="container h-100 text-center">
        <form action="" class="form-inline justify-content-center">
            <div>
                <img class="mb-3 mt-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72"
                     height="72">
                <h2 class="h3 mb-3 mr-2 font-weight-normal">Please sign in here</h2>

                <div class="form-group mb-2 form-inline justify-content-center">
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <label for="emailaddress">Email address</label>
                            <input type="email" class="form-control" id="emailaddress"
                                   placeholder="email@example.com">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2 form-inline justify-content-center">
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd"
                                   placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input mb-2" id="dropdownCheck">
                    <label class="form-check-label mb-2" for="dropdownCheck">
                        Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
                <a class="dropdown-item" href="#">New around here? Sign up</a>
                <a class="dropdown-item" href="#">Forgot password?</a>
            </div>

        </form>
    </div>

@endsection