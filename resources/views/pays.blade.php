
@extends('layouts.app')
@section('title')
   {{$title}}   
@endsection

@section('content')
    <h1>Listes des pays</h1>
    @foreach ($table as $key => $pays)
    <p><a href="{{route("single", ['id'=>($key+1)])}}">{{$pays}}</a> </p>
    @endforeach
@endsection
    