@extends('layouts.main')


@section('content')
    
@foreach ($holls as $holl)
<h3 class="table">{{$holl->name}}</h3>    
<div><img src="{{$holl->timetable_img}}" alt=""></div>
@endforeach

{{-- <div class="table-img"><img src="gallery/table/table_1.jpg" alt=""></div>
<h3 class="table">Зал №2 Южный мкр-н</h3>
<div class="table-img"><img src="gallery/table/table_2.jpg" alt=""></div>
<h3 class="table">Зал №3 ост. Техникум Комунарский р-н</h3>
<div class="table-img"><img src="gallery/table/table_3.jpg" alt=""></div> --}}



@endsection