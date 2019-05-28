<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS -->

<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/skeleton.css">
<link rel="stylesheet" href="../css/skeleton2.css">
<link rel="stylesheet" href="../css/screen.css">
<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Icons -->

<link rel="shortcut icon" href="../images/favicon.png">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<style>
  .container_prod {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
  }
  /* Columns */
  .left-column_prod {
    width: 65%;
  }
   
  .right-column_prod {
    width: 35%;
    margin-top: 60px;
    }

    /* Left Column */
  .left-column_prod img {
    width: 50%;
    left: 0;
    top: 0;
    opacity: 0;
    transition: all 0.3s ease;
  }
   
  .left-column_prod img.active {
    opacity: 1;
  }

  /* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  margin-bottom: 20px;
  font-size: 45px;
  color: black;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
  line-height: 1.0;
}
.product-description h5 {
  padding-bottom: 20px;
  font-weight: 300;
  font-size: 40px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}
 
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
 
.cart-butn {
  display: inline-block;
  background-color: #f398b9;
  border-radius: 6px;
  font-size: 16px;
  color: #fff;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-butn:hover {
  background-color: #64af3d;
}
</style>  
</head>
<body>

<!--Content Part -->
<div id="header">
  <div class="container"> 
    <!-- Menu -->

   <div class="logo"><a href="index"><img src="../images/logo.png" alt="" /></a></div>
    <div class="mainmenu">
      <div id="mainmenu">
        <ul class="sf-menu">
          <li><a href="/index" style="color: red">Home</a></li>
          <li><a href="/about" style="color: orange">About</a></li>
          <li><a href="/shop" style="color: yellow">Products</a>
          </li>
          <li><a href="/promotions" style="color: green">Promotions</a></li>
          <li><a href="/contact" style="color: blue" id="visited">Contact</a></li>
           @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('signup'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}" >Sign Up</a>
                    </li>
                    
                @endif
            @else
                <li class="nav-item dropdown">
                    

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          <li><a href="/cart"><img src="../images/cart.png" style="width:35px"></a></li>
        </ul>
      </div>



      <form id="responsive-menu" action="#" method="post">
        <select>
          <option value="">Navigation</option>
          <option value="/index">Home</option>
          <option value="/about">About</option>
          <option value="/shop">Products</option>
          <option value="/promotions">Promotions</option>
          <option value="/contact">Contact</option>
          <option value="/cart">Shopping Cart</option>
        </select>
      </form>
    </div>

  </div>

</div>

<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container_prod">
    <header>
      <h3>{{ $product->name_product }}</h3>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 

<!--Product description -->

<main class="container_prod">
 
  <!-- Left Column / Headphones Image -->
  <div class="left-column_prod">
    <img data-image="red" class="active" src="{{asset('../images/Products'.($product->photo))}}" alt="product">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column_prod">
 
    <!-- Product Description -->
    <div class="product-description">
      <span class="name_prod">{{ $product->name_product }}</span>
      <br><br>
      <h5>Category: {{ $product->category }}</h5>
      <br><br>
      <p>{!! $product->description !!}</p>
      <br><br>
    </div>
 
    <!-- Product Configuration -->
    <div class="product-configuration">
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>{{ $product->price }} RON / piece </span>
      
     <form action="{{ route('cart.store') }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name='id_product' value="{{ $product->id_product}}">
       <input type="hidden" name='name_product' value="{{ $product->name_product}}">
        <input type="hidden" name='price' value="{{ $product->price}}">
                    <button type="submit" class="cart-butn">Add to Cart</button>
                </form>
    </div>
  </div>
</main>




<!-- Socialize ==================================================
================================================== -->
<hr class="separator2">
<div class="socialsblock">
  <div class="container socialize">
    <h3>Socialize with us!</h3>
    <section class="socials">
      <ul class="socials">
        <li><a href="https://www.facebook.com/Lazy-Unicorn-403177003801120/?modal=admin_todo_tour"><img src="../images/socials/facebook.png" alt="" /></a></li>
        <li><a href="https://www.instagram.com/thelazyunicorn97/"><img src="../images/socials/instagram.png" alt="" /></a></li>
        <li><a href="https://www.youtube.com/watch?v=bIB8EWqCPrQ"><img src="../images/socials/youtube.png" alt="" /></a></li>
      </ul>
    </section>
  </div>

</div>

<!-- Footer -->
<!-- four columns ends here -->
    <div class="footer">

    <div class="container1">
    <div class="one_fourth">

    <img src="../images/zebra.jpg" class="zebra" alt="" />
    </div>

    <div class="one_fourth">
      <h3><a href="contact">Contact Informations</a></h3>
      <p style="color:white;"><span class="orange"><strong>Address:</strong></span> <br>
        Romania, Bucharest, Sector 1</p>
      <p style="color:white;"><span class="orange"><strong>Phone:</strong></span> <br>
        +40 728 790 182<br>
      </p>
      <p style="color:white;"><span class="orange"><strong>Email:</strong></span> <br>
        thelazyunicorn97@gmail.com<br>
      </p>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth">
      <h3><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?ref=page_internal">Gallery</a></h3>
      <ul>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181067134047" class="">Wedding</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181573800663" class="">Birthday</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403182077133946" class="">Valentine's day</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181720467315" class="">Funerals</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403182367133917" class="">Festival</a></li>
      </ul>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth lastcolumn">
      <h3><a href="about">About</a></h3>
      <p><a href="about" rel="nofollow">Flower shop online</a></p>
    </div>
    <!-- four columns ends here --> 
  </div>
  <!-- container ends here --> 
</div>

<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <div class="container">
    <p class="copyright">&copy; Copyright 2013. &quot;Freebix&quot; by <a href="http://www.anarieldesign.com/" rel="nofollow">Anariel Design</a>. All rights reserved.</p>
  </div>
  <!-- container ends here --> 
</div>
<!-- copyright ends here --> 
<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 

<script src="../js/jquery-1.8.0.min.js" type="text/javascript"></script> 

<!-- Main js files --> 
<script src="../js/screen.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="../js/tabs.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="../js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="../js/superfish.js" type="text/javascript"></script> 
<script src="../js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="../js/jquery.flexslider-min.js" type="text/javascript"></script> 
<!-- Modernizr --> 
<script type="text/javascript" src="../js/modernizr.custom.29473.js"></script>
</body>
</html>