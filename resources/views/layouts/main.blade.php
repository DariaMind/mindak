<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body>
  <header>
    <nav class="navbar"> 
      <a class="logo" href="/">DANCE</a>
{{-- navbar-light bg-light --}}
      <nav class="navbar navbar-expand-lg  navbar" id="boot-nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon" id="boot-btn"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav top-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">ГЛАВНАЯ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="/timetable">РАСПИСАНИЕ И ЦЕНЫ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/trainer">ТРЕНЕРЫ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts">КОНТАКТЫ</a>
           </li>
           {{-- <li class="nav-item">
            <a class="header-link" href="/callbacks">ОБРАТНЫЙ ЗВОНОК</a>
          </li>   --}}
          {{-- <li>
            <a class="header-link" href="/gallery">ГАЛЕРЕЯ</a>
          </li> --}}                   
            </li>
          </ul>
        </div>
      </nav>
      
         {{-- <ul class="top-nav" id="myTopnav">  
              
              <li>
                <a class="header-link" href="/">ГЛАВНАЯ</a>
              </li>
              <li>
                <a class="header-link" href="/timetable">РАСПИСАНИЕ И ЦЕНЫ</a>
              </li>
              <li >
                <a class="header-link" href="/trainer">ТРЕНЕРЫ</a>
              </li> --}}
              {{-- <li >
                <a class="header-link" href="/callbacks">ОБРАТНЫЙ ЗВОНОК</a>
              </li> --}}
              {{-- <li>
                <a class="header-link" href="/gallery">ГАЛЕРЕЯ</a>
              </li> --}}
              {{-- <li >
                <a class="header-link" href="/contacts">КОНТАКТЫ</a>
              </li>
              
          </ul>
            <a href=""class="icon"><i class="fas fa-align-justify"></i></a> --}}
            {{-- <span class="toggle">☰</span> --}}

               <!-- Authentication Links -->
                <ul id="log">  
                      @role('admin')
                        <li class="nav-item" id="log-ad">
                          <a class="nav-link" href="/admin" style="color: white">Админ панель</a>
                       </li>
                      @endrole

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              <!-- Right Side Of Navbar -->
            </ul>
            <span class="toggle">☰</span>
        {{-- </div> --}}
      </nav>
    </header>
    
    
<div class="container">
    @yield('content')
</div>

<footer class="footer">
 {{-- <p>&copy; Daria Mindak</p> --}}
  <nav class="social-link">    
    <a target="blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a target="blank" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
    <a target="blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
    <a target="blank" href="https://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a>
  </nav>  
 </footer>
   

    <script src="{{asset('js/app.js')}}"></script>

    @yield('js')

    <script src="https://kit.fontawesome.com/927b8b82ad.js" crossorigin="anonymous"></script>
</body>
</html>