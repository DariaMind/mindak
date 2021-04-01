@extends('layouts.main')

@section('content')

@foreach ($holls as $holl)
    

<h3>{{$holl->holl_number}}</h3>
<div><p>{!!$holl->address!!}</p></div>
<div><img src="{{$holl->map_img}}" alt=""></div>

@endforeach



{{-- <h3 class="table">Зал №2 Южный мкр-н</h3>
<div class="table-img"><img src="gallery/maps/table_1.jpg" alt=""></div>
<h3 class="table">Зал №3 ост. Техникум Комунарский р-н</h3>
<div class="table-img"><img src="gallery/maps/table_1.jpg" alt=""></div> --}}

    
@endsection

{{-- @section('title', 'contact', $holls) --}}