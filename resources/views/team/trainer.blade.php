@extends('layouts.main')

@section('content')
    <h3>{{$title}}</h3>
  
@foreach ($trainers as $trainer)
   <section>
    <img src="{{$trainer->img}}" alt="{{$trainer->name}}">
    <h4>{{$trainer->name}}</h4>
    <p>{!!$trainer->description!!}</p>
    {{-- <div class="trainer-galery">{{$trainer->pictures}}</div> --}}
    </section> 
@endforeach

@endsection