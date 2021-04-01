@extends('layouts.main')

@section('content')
   

<title>o nas</title>
<div class="baner"><img src="media/baner/baner.jpg" alt="baner"></div>
<h2>our team</h2>

@foreach ($galleries as $gallery)
    <h4><a href="{{$gallery->name}}">{{$gallery->name}}</a> </h4>
    <div><img src="{{$gallery->pic}}" alt=""></div>
@endforeach


@endsection

