@extends('layouts.main')

@section('content')
<section class="conacts-map">


@foreach ($holls as $holl)
    
<div class="add-line">
{{-- {{$holl->holl_number}}  --}}
    <div class="line-text"><h5>{!!$holl->address!!}</h5></div>
    <div class="line-img"><img src="{{$holl->map_img}}" alt=""></div>
  
   
</div>

@endforeach
</section>


{{-- <h3 class="table">Зал №2 Южный мкр-н</h3>
<div class="table-img"><img src="gallery/maps/table_1.jpg" alt=""></div>
<h3 class="table">Зал №3 ост. Техникум Комунарский р-н</h3>
<div class="table-img"><img src="gallery/maps/table_1.jpg" alt=""></div> --}}

    
@endsection

{{-- @section('title', 'contact', $holls) --}}