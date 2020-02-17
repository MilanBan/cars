@extends('layouts.master')
@section('content')
<h2>{{ $car->title }}</h2>
<p>{{ $car->producer }}</p>
<p>{{ $car->number_of_doors }}</p>
@endsection