@extends('layouts.default')
@section('content')
    <table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Message</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>
            <a href="{{route('viewcardmessage')}}" class="card-link" data-id="message1" class="viewmessages"><p>Click here to go to Message</p></a>

        </td>
        <td>
            <button type="submit" class="btn btn-primary">Delete</button>
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>
            <a href="{{route('viewcardmessage')}}" class="card-link" class="viewmessages"><p>Click here to go to Message</p></a>
        </td>
        <td>
            <button type="submit" class="btn btn-primary">Delete</button>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>
            <a href="{{route('viewcardmessage')}}" class="card-link" class="viewmessages"><p>Click here to go to Message</p></a>
        </td>
        <td>
            <button type="submit" class="btn btn-primary">Delete</button>
        </td>
    </tr>
    </tbody>

</table>
    @endsection
