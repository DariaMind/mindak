@extends('layouts.main')

@section('content')
 
<h3>{{$title}}</h3>

@include('messages.errors')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/callback" method="POST">
   
    @csrf

    <div class="form-group">
        <label for="name">Ваше имя:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" 
               name="name" id="name" 
               value="{{old('name')}}">
        
            @error('name') 
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
    </div>

      {{-- <select class="form-select" aria-label="Default select example" >
        <option selected>Выберите удобный для вас зал:</option>
        <option value="1">Зал №1. бул. Центральный</option>
        <option value="2">Зал №2. Южный р-н</option>
        <option value="3">Зал №3. Комунарский р-н</option>
      </select> --}}

   
    <div class="form-group">
        <label for="phone">Введите номер телефона:</label><br><br>
        <input type="tel"  
                class="form-control @error('phone') is-invalid @enderror" 
                id="phone" name="phone" placeholder="099 123 45 67" 
                pattern="[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" 
                value="{{old('phone')}}" required> 
                <small>Формат: 099 123 45 67</small>
       
            @error('phone') 
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
    </div>


   
    {{-- <div class="form-group">
        <label for="name">Удобное время:</label>
        <textarea class="form-control" name="message" id="message" value="{{old('message')}}"></textarea>
    </div> --}}

    <button class="btn btn-primary mt-2">Отправить</button>

</form>


@endsection
@section('title', 'callback')
    




