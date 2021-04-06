@extends('layouts.main')


@section('content')
   <section>
@foreach ($holls as $holl)

<h3 >{{$holl->name}}</h3>    
<div class="table"><img src="{{$holl->timetable_img}}" alt=""></div>
@endforeach
</section> 
{{-- <div class="table-img"><img src="gallery/table/table_1.jpg" alt=""></div>
<h3 class="table">Зал №2 Южный мкр-н</h3>
<div class="table-img"><img src="gallery/table/table_2.jpg" alt=""></div>
<h3 class="table">Зал №3 ост. Техникум Комунарский р-н</h3>
<div class="table-img"><img src="gallery/table/table_3.jpg" alt=""></div> --}}



@endsection