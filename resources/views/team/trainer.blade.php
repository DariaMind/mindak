@extends('layouts.main')

@section('content')
    <h3>{{$title}}</h3>
 
@foreach ($trainers as $trainer)
   <section class="trainer-section">
        <div class="box-img-trainer">
             <img src="{{$trainer->img}}"alt="{{$trainer->name}}">   
        </div>
        <div class="text-box-trainer">
          <h4>{{$trainer->name}}</h4>
          <p id="pp">{!!$trainer->description!!}</p>  
        </div>
 </section>     
    {{-- <div class="trainer-galery">{{$trainer->pictures}}</div> --}}
 
@endforeach
 
@endsection


