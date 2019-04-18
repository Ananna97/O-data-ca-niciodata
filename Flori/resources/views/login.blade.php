<!--Submit-->

<!DOCTYPE html>
<html lang="en">

<head>

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
          <li><a href="/shop" style="color: yellow">Products</a>
          </li>
          <li><a href="/promotions" style="color: green">Promotions</a></li>
          <li><a href="/contact" style="color: blue" id="visited">Contact</a></li>
          <li><a href="/cart"><img src="images/cart.png" style="width:35px"></a></li>
        </ul>
      </div>



      <form id="responsive-menu" action="#" method="post">
        <select>
          <option value="">Navigation</option>
          <option value="/index">Home</option>
          <option value="/about">About</option>
          <option value="/products">Products</option>
          <option value="/promotions">Promotions</option>
          <option value="/contact">Contact</option>
          <option value="/cart">Shopping Cart</option>
        </select>
      </form>
    </div>

  </div>

</div>



<!--submit Form-->

<body class="body_login">


<form action="/action_page.php" class="form_login left">

  <div class="container_login">

	<h4>Register</h4>
	<br>

    <label for="cnp"><b>CNP</b></label>
    <input type="text" placeholder="Enter cnp" name="cnp" required>

    <label for="first_name"><b>First_name</b></label>
    <input type="text" placeholder="Enter first_name" name="first_name" required>

    <label for="last_name"><b>Last_name</b></label>
    <input type="text" placeholder="Enter last_name" name="last_name" required>


    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>

    <label for="telephone"><b>Telephone</b></label>
    <input type="text" placeholder="Enter telephone" name="telephone" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" required>

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter city" name="city" required>

    <label for="county"><b>County</b></label>
    <input type="text" placeholder="Enter county" name="county" required>

    <label for="postal_Code"><b>Postal_code</b></label>
    <input type="number" placeholder="Enter postal_Code" name="postal_Code" required>
    <br><br>

        
    <button type="submit">Submit</button>
  </div>

</form>


<form action="/action_page.php" class="form_login right">

  <div class="container_login">

<h4>Login Form</h4>
<br>
  <label for="username"><b>Username</b></label>

    <input type="text" placeholder="Enter username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>


    <button type="submit">Login</button>
</div>
</form>
</body>



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
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<!-- Modernizr --> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
</body>
</html>