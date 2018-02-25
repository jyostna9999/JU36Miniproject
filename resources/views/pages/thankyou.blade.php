@extends('layouts.default')
@section('content')

        <div class="card mt-3">
            <div class="card-header">
                <h3>Thank you {{$name}} for contacting us</h3>
            </div>
            <div class="card-block ml-3 mt-3">
               <p>Following are your details:</p>
                Name: {{$name}} <br>
                Email: {{$email}}

            </div>
@endsection