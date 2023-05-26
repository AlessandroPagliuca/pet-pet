@extends('layout.app')
@section('content')

<ul>
    @foreach($pets as $pet)
    <li>{{$pet->name}}</li>
    @endforeach
</ul>
@endsection
