
<?php
                        
                            include ('conn.php');

                            $sql = "SELECT * FROM `record`";
                            $query = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($query) > 0)
                            {
                                while($row = mysqli_fetch_array($query))
                                {
                                   
                                ?>

<!doctype html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/timezone/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 07:48:31 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Watch shop | eCommers</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.html">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
<script nonce="e9fe5a1e-e36c-499a-96eb-856636394dd9">(function(w,d){!function(e,f,g,h){e.zarazData=e.zarazData||{};e.zarazData.executed=[];e.zaraz={deferred:[],listeners:[]};e.zaraz.q=[];e.zaraz._f=function(i){return function(){var j=Array.prototype.slice.call(arguments);e.zaraz.q.push({m:i,a:j})}};for(const k of["track","set","debug"])e.zaraz[k]=e.zaraz._f(k);e.zaraz.init=()=>{var l=f.getElementsByTagName(h)[0],m=f.createElement(h),n=f.getElementsByTagName("title")[0];n&&(e.zarazData.t=f.getElementsByTagName("title")[0].text);e.zarazData.x=Math.random();e.zarazData.w=e.screen.width;e.zarazData.h=e.screen.height;e.zarazData.j=e.innerHeight;e.zarazData.e=e.innerWidth;e.zarazData.l=e.location.href;e.zarazData.r=f.referrer;e.zarazData.k=e.screen.colorDepth;e.zarazData.n=f.characterSet;e.zarazData.o=(new Date).getTimezoneOffset();if(e.dataLayer)for(const r of Object.entries(Object.entries(dataLayer).reduce(((s,t)=>({...s[1],...t[1]})))))zaraz.set(r[0],r[1],{scope:"page"});e.zarazData.q=[];for(;e.zaraz.q.length;){const u=e.zaraz.q.shift();e.zarazData.q.push(u)}m.defer=!0;for(const v of[localStorage,sessionStorage])Object.keys(v||{}).filter((x=>x.startsWith("_zaraz_"))).forEach((w=>{try{e.zarazData["z_"+w.slice(7)]=JSON.parse(v.getItem(w))}catch{e.zarazData["z_"+w.slice(7)]=v.getItem(w)}}));m.referrerPolicy="origin";m.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(e.zarazData)));l.parentNode.insertBefore(m,l)};["complete","interactive"].includes(f.readyState)?zaraz.init():e.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<header>

<div class="header-area">
<div class="main-header header-sticky">
<div class="container-fluid">
<div class="menu-wrapper">

<div class="logo">
<a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
</div>

<div class="main-menu d-none d-lg-block">
<nav>
<ul id="navigation">
<li><a href="index.html">Home</a></li>
<li><a href="shop.html">shop</a></li>
<li><a href="about.html">about</a></li>
<li class="hot"><a href="#">Latest</a>
<ul class="submenu">
<li><a href="shop.html"> Product list</a></li>
<li><a href="product_details.html"> Product Details</a></li>
</ul>
</li>
<li><a href="blog.html">Blog</a>
<ul class="submenu">
<li><a href="blog.html">Blog</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li>
<li><a href="#">Pages</a>
<ul class="submenu">
<li><a href="login.html">Login</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="elements.html">Element</a></li>
<li><a href="confirmation.html">Confirmation</a></li>
<li><a href="checkout.html">Product Checkout</a></li>
</ul>
</li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
</div>

<div class="header-right">
<ul>
<li>
<div class="nav-search search-switch">
<span class="flaticon-search"></span>
</div>
</li>
<li> <a href="login.html"><span class="flaticon-user"></span></a></li>
<li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
</ul>
</div>
</div>

<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>

</header>
<main>

<div class="slider-area ">
<div class="single-slider slider-height2 d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="hero-cap text-center">
<h2>Login</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="login_part section_padding ">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6">
<div class="login_part_text text-center">
<div class="login_part_text_iner">
<h2>New to our Shop?</h2>
<p>There are advances being made in science and technology
everyday, and a good example of this is the</p>
<a href="#" class="btn_3">Create an Account</a>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="login_part_form">
<div class="login_part_form_iner">
<h3>Welcome Back ! <br>
Please Sign in now</h3>
<form class="row contact_form" action="#" method="post" novalidate="novalidate">
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" id="name" name="name" value="" placeholder="Username">
</div>
<div class="col-md-12 form-group p_star">
<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
</div>
<div class="col-md-12 form-group">
<div class="creat_account d-flex align-items-center">
<input type="checkbox" id="f-option" name="selector">
<label for="f-option">Remember me</label>
</div>
<button type="submit" value="submit"  name="r" class="btn_3">
log in
</button>
<a class="lost_pass" href="#">forget password?</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>

</main>
<footer>

<div class="footer-area footer-padding">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">

<div class="footer-logo">
<a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
</div>
<div class="footer-tittle">
<div class="footer-pera">
<p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Quick Links</h4>
<ul>
<li><a href="#">About</a></li>
<li><a href="#"> Offers & Discounts</a></li>
<li><a href="#"> Get Coupon</a></li>
<li><a href="#"> Contact Us</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>New Products</h4>
<ul>
<li><a href="#">Woman Cloth</a></li>
<li><a href="#">Fashion Accessories</a></li>
<li><a href="#"> Man Accessories</a></li>
<li><a href="#"> Rubber made Toys</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Support</h4>
<ul>
<li><a href="#">Frequently Asked Questions</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Report a Payment Issue</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="row align-items-center">
<div class="col-xl-7 col-lg-8 col-md-7">
<div class="footer-copy-right">
<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
</p>
</div>
</div>
<div class="col-xl-5 col-lg-4 col-md-5">
<div class="footer-copy-right f-right">

<div class="footer-social">
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-behance"></i></a>
<a href="#"><i class="fas fa-globe"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>

</footer>

<div class="search-model-box">
<div class="h-100 d-flex align-items-center justify-content-center">
<div class="search-close-btn">+</div>
<form class="search-model-form">
<input type="text" id="search-input" placeholder="Searching key.....">
</form>
</div>
</div>


<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slicknav.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>

<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>

<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>

<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"76e84a95bc4d4b86","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/timezone/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 07:48:31 GMT -->
