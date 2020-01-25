<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- CSS -->

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/skeleton2.css">
    <link rel="stylesheet" href="css/screen.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />

    <!-- Icons -->

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div id="header">
  <div class="container"> 
    <!-- Menu -->

   <div class="logo"><a href="index"><img src="images/logo.png" alt="" /></a></div>
    <div class="mainmenu">
      <div id="mainmenu">
        <ul class="sf-menu">
          <li><a href="/index" style="color: black">Acasa</a></li>
          <li><a href="/about" style="color: black">Despre noi</a></li>
          <li><a href="/shop" style="color: black">Magazin</a>
          </li>
          <li><a href="/promotions" style="color: black">Preparate</a></li>
          <li><a href="/contact" style="color: black" >Contact</a></li>
           @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Logare') }}</a>
                </li>
                @if (Route::has('signup'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}" >Autentificare</a>
                    </li>
                    
                @endif
            @else
                <li class="nav-item dropdown">
                    

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Delogare') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          <li><a href="/cart"><img src="images/cart.png" style="width:35px"></a></li>
        </ul>
      </div>



      <form id="responsive-menu" action="#" method="post">
        <select>
          <option value="">Meniu</option>
          <option value="/index">Acasa</option>
          <option value="/about">Despre noi</option>
          <option value="/shop">Magazin</option>
          <option value="/promotions">Preparate</option>
          <option value="/contact">Contact</option>
          <option value="/cart">Cos de cumparaturi</option>
        </select>
      </form>
    </div>

  </div>

</div>
              
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<!-- Socialize ==================================================
================================================== -->
<hr class="separator2">
<div class="socialsblock">
  <div class="container socialize">
    <h3>Socializeaza cu noi!</h3>
    <section class="socials">
      <ul class="socials">
        <li><a href="https://www.facebook.com/Lazy-Unicorn-403177003801120/?modal=admin_todo_tour"><img src="images/socials/facebook.png" alt="" /></a></li>
        <li><a href="https://www.instagram.com/thelazyunicorn97/"><img src="images/socials/instagram.png" alt="" /></a></li>
        <li><a href="https://www.youtube.com/watch?v=bIB8EWqCPrQ"><img src="images/socials/youtube.png" alt="" /></a></li>
      </ul>
    </section>
  </div>

</div>

<!-- Footer -->
<!-- four columns ends here -->
    <div class="footer">

    <div class="container1">
    <div class="one_fourth">

    <img src="images/zebra.jpg" class="zebra" alt="" />
    </div>

    <div class="one_fourth">
      <h3><a href="contact">Informatii de Contact</a></h3>
      <p style="color:white;"><span class="orange"><strong>Addresa:</strong></span> <br>
        Romania, Bucharest, Sector 1</p>
      <p style="color:white;"><span class="orange"><strong>Telefon:</strong></span> <br>
        +40 728 790 182<br>
      </p>
      <p style="color:white;"><span class="orange"><strong>Email:</strong></span> <br>
        thelazyunicorn97@gmail.com<br>
      </p>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth">
      <h3><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?ref=page_internal">Gallerie</a></h3>
      <ul>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181067134047" class="">Sarate</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181573800663" class="">Dulci</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403182077133946" class="">Cadouri</a></li>
      </ul>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth lastcolumn">
      <h3><a href="about">Despre noi</a></h3>
      <p><a href="about" rel="nofollow">Retete online</a></p>
    </div>
    <!-- four columns ends here --> 
  </div>
  <!-- container ends here --> 
</div>

</div>
<!-- Scripts  --> 
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 

<!-- Modernizr --> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>

<script src="js/slideshow.js" type="text/javascript"></script> 

<script src="{{ asset('js/app.js') }}" defer></script>  
</body>
</html>
</html>
