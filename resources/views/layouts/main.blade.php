<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
   
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @yield('css')
</head>
<body>
   
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">DANCE</a>
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> --}}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">О НАС</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/timetable">РАСПИСАНИЕ И ЦЕНЫ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/trainer">ТРЕНЕРСКИЙ СОСТАВ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/callbacks">ОБРАТНЫЙ ЗВОНОК</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/gallery">ГАЛЕРЕЯ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contacts">КОНТАКТЫ</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
      
<div class="container">
    @yield('content')
</div>

<footer class="footer">
  <div class="social-media">
      <nav>
          <ul>
              <li><a href="">A</a></li>
              <li><a href="">B</a></li>
              <li><a href="">C</a></li>
              <li><a href="">D</a></li>
          </ul>
      </nav>
  </div>
  <div class="adres">
      <ul>
          <li>jwljdwl </li>
          <li>;jd;ljF:WJEF</li>
          <li>kd:lfj;ljf</li>
      </ul>
  </div>
</footer>
   

    <script src="{{asset('js/app.js')}}"></script>

    @yield('js')


</body>
</html>