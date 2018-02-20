@extends('layouts.default')
@section('content')
    <div class="container">
    <h2 class="h2 mt-4">Please sign in here</h2>

        <form>
                <div class="form-group mt-3">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="emailaddress">Email address</label>
                            <input type="email" class="form-control" id="emailaddress"
                                   placeholder="email@example.com">
                        </div>
                    </div>
                </div>
                <div class="form-group">
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

        </form>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">New around here? Sign up</a>
        <a class="dropdown-item" href="#">Forgot password?</a>
    </div>
@endsection