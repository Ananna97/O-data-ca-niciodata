<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- CSS -->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/skeleton2.css">
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
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
                
                <li><a href="/cart"><img src="images/cart.png" style="width:35px"></a></li>
            @endguest
            
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

<!-- //header -->
<!--banner-->

  <div class="container">
    <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Cos de cumparaturi</h2>
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

 <table class="table animated wow fadeInLeft" data-wow-delay=".5s">
   
      
           
 

      <tr>
      <th class="t-head head-it ">Obiect</th>
      <th class="t-head">Pret</th>
      <!--<th class="t-head">Cantitate</th>-->
      <th class="t-head">Stergere</th>
      </tr>



  @foreach ( Cart::content() as $item)
      <tr class="cross">
      <td class="ring-in t-data">
        <a href="single.html" class="at-in">
          <img src="images/pcc.jpg" class="img-responsive" alt="">
        </a>
      <div class="sed">

    <img src="{{ asset('/images/Products'.$item->model->photo) }}"  style="width: 130px"></a><br><br>
      <h6>{{ $item->model->name_product}}</h6>
      </div>
        <div class="clearfix"> </div>
        <div class="close1"> </div>
       </td>
      <td class="t-data">{{ $item->model->price }}</td>
      <!--<td class="t-data"><div class="quantity"> 
                <div class="quantity-select">            
                  <div class="entry value-minus">&nbsp;</div>
                    <div class="entry value"><span class="span-1">1</span></div>                  
                  <div class="entry value-plus active">&nbsp;</div>
                </div>
              </div>
      
      </td>-->
      <td class="t-data"><a class="btn btn-danger" href="{{ url('/delete-cart-product/' .$item->rowId) }}" role="button">Sterge</a></td>
      
      </tr>




      @endforeach
      



  </table>
        <div class=" cart-total">
      
       <h5 class="continue" >Total Cumparaturi</h5>
       <div class="price-details">
         <h3>Ddetalii Pret</h3>
         <span>Total</span>
         <span class="total1">{{ Cart::subtotal() }}</span><br>
         <span>Discount</span>
         <span class="total1">---</span><br>
         <span>Taxa de livrare</span>
         <span class="total1">15 lei</span>
         <div class="clearfix"></div>        
       </div> 
       <br>
       <ul class="total_price">
         <li class="last_price"><h4>{{ Cart::subtotal() + 15 }}</h4></li>  
         <li class="last_price"><span></span></li>
         <div class="clearfix"> </div>
       </ul>
       <br>
       <a href="{{ url('/submitOrder' ) }}" class="btn btn-success" role="button" method="post" >Finalizare Comanda</a>
      </div>
      
      
     </div>
         
      @else
        <h3>Nu aveti obiecte in cosul de cumparaturi!</h3>
      @endif
     
<br>



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


<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 

<!-- Modernizr --> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>

<script src="js/plus-min-cart.js" type="text/javascript"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@section('extra-js')
  <script src="{{ asset('js/app.js') }}" ></script>
  <script>
    (function(){
       const classname = document.querySelectorAll('.t-data')


        Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                  alert('changed');
                  console.log("changed");
                })

    })();
  </script>
@endsection

</body>
</html>
