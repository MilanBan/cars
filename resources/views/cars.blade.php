@extends('layouts.master')

@section('content')
@foreach($cars as $car)
    <h3><a href="/cars/{{$car->id}}">{{ $car->title }}</a></h3>
@endforeach
@endsection
    
