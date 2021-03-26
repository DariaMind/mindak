@extends('layouts.main')

@section('content')
   

<title>o nas</title>
<div class="baner"><img src="media/baner/baner.jpg" alt="baner"></div>
<h2>our team</h2>

@foreach ($gallPhotos as $gallPhoto)
    <h4>Yjknvlknv</h4>
    <div><img src="{{$gallPhoto->pic}}" alt=""></div>
@endforeach


@endsection

