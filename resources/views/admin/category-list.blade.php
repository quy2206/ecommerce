@extends('admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value )
                <tr>{{$value->id}}</tr>
                <tr>{{$value->name}}</tr>
                <tr>{{$value->status}}</tr>
            @endforeach
        </tbody>
    </table>
@endsection
