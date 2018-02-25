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
                    <li class="list-group-item">Subject:</li>
                    <li class="list-group-item">From Email:</li>
                    <li class="list-group-item">Message:</li>
                </ul>
            </div>

        </div>
    <a href="/viewmessages" class="btn btn-primary mt-2">View Messages</a>
@endsection