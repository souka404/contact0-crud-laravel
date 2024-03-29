@extends('base')
@section('main')

<style>
    .uper{
        margin-top: 40px;
    }
</style>

<div class="uper">
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td >action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>
                    <a href="{{ route('contacts.show',[ 'contact' => $contact ] )}}" class="btn btn-secondary">Show</a><br>
                    <a href="{{route('contacts.edit' , $contact->id)}}" class="btn btn-primary">edit</a>

                    <form action="{{route('contacts.destroy' , $contact->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
@endsection
