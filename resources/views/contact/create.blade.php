@extends('base')
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{route('contacts.store')}}">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Add contact</button>
        </form>
</div>
</div>
@endsection
