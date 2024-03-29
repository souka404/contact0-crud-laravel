@extends('base')
@section('main')
    <h1>détail d'un contact</h1>
    <table class="table table-bordered">
        <tr>
            <th>id:</th>
            <td>{{ $contact->id }}</td>
        </tr>
        <tr>
            <th>Nom:</th>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <th>email:</th>
            <td>{{ $contact->email }}</td>
        </tr>
    </table>

@endsection
