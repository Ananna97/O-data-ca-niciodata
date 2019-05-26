<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS -->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/skeleton2.css">
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/slideshow.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<!-- Icons -->

<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>

</head>
<body>

<!--Content Part -->
<div id="header">
  <div class="container"> 
    <!-- Menu -->

    <div class="logo"><a href="index"><img src="images/logo.png" alt="" /></a></div>
    <div class="mainmenu">
      <div id="mainmenu">
        <ul class="sf-menu">
          <li><a href="/index" style="color: red">Home</a></li>
          <li><a href="/about" style="color: orange">About</a></li>
          <li><a href="/shop" style="color: yellow">shop</a>
          </li>
          <li><a href="/promotions" style="color: green">Promotions</a></li>
          <li><a href="/contact" style="color: blue">Contact</a></li>
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
          <li><a href="/cart"><img src="images/cart.png" style="width:35px"  id="visited"></a></li>
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

<!-- //header -->
<!--banner-->

  <div class="container">
    <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Shopping Cart</h2>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- contact -->
    <div class="check-out">  

      
    <div class="container">  
   
        <script>$(document).ready(function(c) {
          $('.close1').on('click', function(c){
            $('.cross').fadeOut('slow', function(c){
              $('.cross').remove();
            });
            });   
          });
         </script>
      <script>$(document).ready(function(c) {
          $('.close2').on('click', function(c){
            $('.cross1').fadeOut('slow', function(c){
              $('.cross1').remove();
            });
            });   
          });
         </script>  
         <script>$(document).ready(function(c) {
          $('.close3').on('click', function(c){
            $('.cross2').fadeOut('slow', function(c){
              $('.cross2').remove();
            });
            });   
          });
         </script>  
 <table class="table animated wow fadeInLeft" data-wow-delay=".5s">
    @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if( Cart::count() > 0)


      <tr>
      <th class="t-head head-it ">Item</th>
      <th class="t-head">Price</th>
      <th class="t-head">Quantity</th>
      <th class="t-head">Total</th>
      </tr>




      <tr class="cross">
      <td class="ring-in t-data">
        <a href="single.html" class="at-in">
          <img src="images/pcc.jpg" class="img-responsive" alt="">
        </a>
      <div class="sed">
    <img src="images/item-1.png" style="width: 130px"><br><br>
      <h6>Buchet 11 Trandafiri Albi si Rosii</h6>
      </div>
        <div class="clearfix"> </div>
        <div class="close1"> </div>
       </td>
      <td class="t-data">199,00 lei</td>
      <td class="t-data"><div class="quantity"> 
                <div class="quantity-select">            
                  <div class="entry value-minus">&nbsp;</div>
                    <div class="entry value"><span class="span-1">1</span></div>                  
                  <div class="entry value-plus active">&nbsp;</div>
                </div>
              </div>
      
      </td>
      <td class="t-data">199,00 lei</td>
      
      </tr>




      <tr class="cross1">
      <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="images/pcc2.jpg" class="img-responsive" alt=""></a>
      <div class="sed">
    <img src="images/item-2.png" style="width: 130px"><br><br>
    <h6> $item->name_product </h6>
      </div>
      <div class="clearfix"> </div>
      <div class="close2"> </div></td>
      <td class="t-data">129,00 lei</td>
      <td class="t-data"><div class="quantity"> 
                <div class="quantity-select">            
                  <div class="entry value-minus">&nbsp;</div>
                    <div class="entry value"><span class="span-1">1</span></div>                  
                  <div class="entry value-plus active">&nbsp;</div>
                </div>
              </div>
              <!--quantity-->
    
      </td>
      <td class="t-data">129,00 lei</td>
      
      </tr>




      <tr class="cross2">
      <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="images/pcc1.jpg" class="img-responsive" alt=""></a>
      <div class="sed">
    <img src="images/item-3.png" style="width: 130px"><br><br>
    <h6>Cutie Cadou - 30 de Lalele</h6>
      </div>
      <div class="clearfix"> </div>
      <div class="close3"> </div></td>
      <td class="t-data">350,00 lei</td>
      <td class="t-data">
        <div class="quantity"> 
                <div class="quantity-select">            
                  <div class="entry value-minus">&nbsp;</div>
                    <div class="entry value"><span class="span-1">1</span></div>                  
                  <div class="entry value-plus active">&nbsp;</div>
                </div>
              </div>
            
      </td>


      <td class="t-data">350,00 lei</td>
      
      </tr>






  </table>
        <div class=" cart-total">
      
       <h5 class="continue" >Cart Total</h5>
       <div class="price-details">
         <h3>Price Details</h3>
         <span>Total</span>
         <span class="total1">678,00 lei</span><br>
         <span>Discount</span>
         <span class="total1">---</span><br>
         <span>Delivery Charges</span>
         <span class="total1">15 lei</span>
         <div class="clearfix"></div>        
       </div> 
       <br>
       <ul class="total_price">
         <li class="last_price"><h4>TOTAL 693,00lei</h4></li>  
         <li class="last_price"><span></span></li>
         <div class="clearfix"> </div>
       </ul>
       
      </div>
      
     </div>
         
      @else
        <h3>No itmes in cart!</h3>
      @endif
<br>



<!-- Socialize ==================================================
================================================== -->
<hr class="separator2">
<div class="socialsblock">
  <div class="container socialize">
    <h3>Socialize with us!</h3>
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



<!-- Copyright -->
<div id="copyright">
  <div class="container">
    <p class="copyright">&copy; Copyright 2019. All rights reserved.</p>
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

<script src="js/plus-min-cart.js" type="text/javascript"></script> 
<script src="js/slideshow.js" type="text/javascript"></script> 
</body>
</html>