@extends('layouts.default')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h3>Sample Message</h3>
        </div>
        <div class="card-block ml-3 mt-3">
            <h4 class="card-title">Message</h4>
            <p class="card-text">This is the static content for now. Redirecting to respective pages (dynamically) will be done after DB is covered</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Subject: Issue while logging in</li>
                    <li class="list-group-item">From Email: abc@gmail.com</li>
                    <li class="list-group-item">Message: Hello.. I am not able to login to my account</li>
                </ul>
            </div>

        </div>
    <a href="/viewmessages" class="btn btn-primary mt-2">View Messages</a>
@endsection