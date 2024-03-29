@extends('base')
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">edit a contact </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{route('contacts.update',$contact->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name"  value="{{$contact->name}}" >
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="{{$contact->email}}" >
            </div>
            <button type="submit" class="btn btn-primary">edit</button>
        </form>
</div>
</div>
@endsection
