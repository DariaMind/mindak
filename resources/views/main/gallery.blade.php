@extends('layouts.main')

@section('content')

<h1>gallery</h1>

 @foreach ($galleries as $gallery)
    <h4>video-gallery</h4>

        <section class="video-gallery table table-borderless" >
            <div> <video src="{{$gallery->video}}"></video></div>
           
        </section>

    <h4>video-gallery</h4>

        <section class="photo-gallery">
            <img src="{{$gallery->pic}}" alt="">
           
        </section>
 @endforeach   
 @foreach ($galleries as $gallery)
 <h4>video-gallery</h4>

     <section class="video-gallery table table-borderless" >
         <div> <video src="{{$gallery->video}}"></video></div>
        
     </section>

 <h4>video-gallery</h4>

     <section class="photo-gallery">
         <img src="{{$gallery->pic}}" alt="">
        
     </section>
@endforeach   
   
@endsection 

{{-- @section('title', 'gallery') --}}