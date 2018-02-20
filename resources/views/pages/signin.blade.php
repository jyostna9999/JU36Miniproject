@extends('layouts.default')
@section('content')
    <div class="container">
        <form>
            <div class="text-center mb-4 mt-3">
                <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72"
                     height="72">
                <h2 class="h3 mb-3 font-weight-normal">Please sign in here</h2>

        <div class="form-group text-center">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="emailaddress">Email address</label>
                        <input type="email" class="form-control" id="emailaddress"
                               placeholder="email@example.com">
                    </div>
                </div>
        </div>


                <div class="form-group text-center">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd"
                                   placeholder="Password">
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
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