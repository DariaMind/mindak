@extends('layouts.main')

@section('content')
<title>callback</title>
<section class="coll-form">
<h2 class="coll-h">Заполните форму и мы перезвоним</h2>
  @include('main.messages.errors')

    @if (session('success'))
       <div class="alert alert-success"> {{session('success')}}</div>
    @endif

<form action="/callbacks" method="POST">
@csrf
    <div class="form-group">
<label for="name">Имя</label> 
    <input type="text"
           class="form-control @error('name') is-invalid @enderror" 
           name="name" 
           id="name" 
           value="{{old('name')}}">
           @error('name') 
           <div class="invalid-feedback">{{$message}}</div>
           @enderror
</div>

    <div class="form-group">
<label for="holl">Район зала</label>
    <input type="text"
           class="form-control @error('holl') is-invalid @enderror"
           name="holl" 
           id="holl" 
           value="{{old('holl')}}">
           @error('holl') 
           <div class="invalid-feedback">{{$message}}</div>
           @enderror
    </div>
    <div class="form-group">
<label for="phone">Номер телефона</label>
    <input type="text"
           class="form-control @error('phone') is-invalid @enderror"
           name="phone" 
           id="phone"
           value="{{old('phone')}}"> 
           @error('phone') 
           <div class="invalid-feedback">{{$message}}</div>
           @enderror
</div>
<button type="submit" class="btn btn-primary mt-2">Отправить</button>
</form>
</section>

@endsection
