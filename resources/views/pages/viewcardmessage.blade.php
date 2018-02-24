@extends('layouts.default')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h3>Sample Message</h3>
        </div>
        <div class="card-block ml-3 mt-3">
            <h4 class="card-title">Message</h4>
            <p class="card-text">This is the static content for now. Redirecting to respective pages (dynamically) will be done after DB is covered</p>
            <a href="/viewmessages" class="btn btn-primary">View Messages</a>
        </div>
    </div>
@endsection