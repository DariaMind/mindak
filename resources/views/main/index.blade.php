@extends('layouts.main')


@section('content')
   
                    {{-- /* слайд */ --}}
<title>DANCE</title>
<div class="baner"><img src="media/baner/baner.jpg" alt="baner"></div>
                {{-- /* общий раздел */ --}}
      <h2 class="clab-brend">DANCE</h2>           
<section class="stats wrapper">
   
<div class="stat-text">
    <h2>Our studio <br> lorem, ipsum dolor.</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime impedit id neque maiores quidem voluptatum blanditiis sit numquam, provident laboriosam, magni minima pariatur sint? Placeat nisi quia possimus quas eos.</p>
    <ul>
        <li><i class="fas fa-star"></i>hip-hop</li>
        <li><i class="fas fa-star"></i>k-hop</li>
        <li><i class="fas fa-star"></i>jazz</li>
        <li><i class="fas fa-star"></i>belly</li>
    </ul>
    </div>
<div class="stats-num">
<div class="stat-line">
    <div class="square-line">
      
        <img class="square" src="media/square/hip-hop.jpg" alt="hip-hop">
        <img class="square" src="media/square/k-pop.JPG" alt="k-hop">
        <img class="square" src="media/square/jazz.png" alt="k-hop">
        <img class="square" src="media/square/belly.jpg" alt="k-hop">        
    </div>
</div>
</div>
</section>
                        {{-- /* trainers */ --}}
<section class="trainer">
<div class="wrapper">
<h2 class="clab-brend">Лучшие тренеры</h2>
</div>
<div class="cards">
    <div class="card">
        <img src="media/train/petrova.jpg" alt="">
        <div class="card-container">
            <h4>Lorem Ipsum.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?</p>
        </div>      
    </div>
    <div class="card">
        <img src="media/train/5.jpg" alt="">
        <div class="card-container">
            <h4>Lorem Ipsum.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?</p>
        </div>      
    </div>
    <div class="card">
        <img src="media/train/petrova.jpg" alt="">
        <div class="card-container">
            <h4>Lorem Ipsum.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?</p>
        </div>      
    </div>
    <div class="card">
        <img src="media/train/5.jpg" alt="">
        <div class="card-container">
            <h4>Lorem Ipsum.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eveniet?</p>
        </div>      
    </div>
</div>


</section>




{{-- @foreach ($galleries as $gallery)
    <h4><a href="{{$gallery->name}}">{{$gallery->name}}</a> </h4>
    <div><img src="{{$gallery->pic}}" alt=""></div>
@endforeach --}}


@endsection

