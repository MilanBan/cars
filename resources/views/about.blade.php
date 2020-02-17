

@extends('layouts.master')

@section('content')      
@if($name)

        <div class="flex-center position-ref full-height">
            <P>I'm {{ $name }} and I'm {{$age}} year old.</P>
        </div>
        <div class="content">
                <div class="title m-b-md">
                    Welcome, {{ $name }}
                </div>

                <div>
                    <h3>I'm {{ $age }} years old</h3>
                </div>
        </div>
@endif
@endsection
