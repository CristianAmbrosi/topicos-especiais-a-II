<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('css/home/materialize.css') }}" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/home/style.css') }}" rel="stylesheet" media="screen,projection">
</head>
<!--     <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->
<body>
  <div id="navbar" class="navbar-fixed scrollspy">
    <nav  class="nav-transparent">
      <div class="nav-wrapper container">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <ul class="hide-on-med-and-down center">
          <li><a class="head-link blue-text text-lighten-5" href="#about">About</a></li>
          <li><a class="head-link blue-text text-lighten-5" href="#contactus">Contact</a></li>
          @if (Route::has('login'))
              @auth
                <li class="right"><a class="blue-text text-lighten-5" href="{{ url('/users') }}">Home</a></li>
              @else
                <li class="right"><a class="blue-text text-lighten-5" href="{{ route('login') }}">Login</a></li>
                <li class="right"><a class="blue-text text-lighten-5" href="{{ route('register') }}">Register</a></li>
              @endauth
          @endif
        </ul>

        <ul class="right side-nav " id="mobile-demo">
          <li><a class="head-link" href="#about">About</a></li>
          <li><a class="head-link" href="#contactus">Contact</a></li>
          <li><a class="head-link" href="#">Login</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">

        <h1 class="header center blue-text text-lighten-1">Learn Flows</h1>
        <div class="row center">
          <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
        </div>
        <div class="row center">
          <a href="#about" class="btn-floating btn-large waves-effect waves-light head-link z-depth-0 btn-custom"><i class="material-icons">arrow_downward</i></a>
        </div>

      </div>
    </div>
    <div class="parallax">
      <img src="{{ asset('images/intro1.jpg') }}" alt="Unsplashed background img 2">
      <!--<video autoplay loop muted>
        <source src="images/stranger-things-2.mp4" type="video/mp4" />
      </video>-->
    </div>
  </div>

  <div class="container">
    <div class="section" id="about">

      <div class="row">
        <div class="col s12 m6 l6">
          <div class="icon-block">
            <h2 class="center" style="color:#333"><i class="large material-icons">school</i></h2>
            <h5 class="center">Students</h5>
            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore distinctio error nemo illum voluptas sapiente quae natus, doloribus cupiditate labore expedita culpa alias molestias laudantium id, sequi impedit. Consequatur, illo.</p>
          </div>
        </div>

        <div class="col s12 m6 l6">
          <div class="icon-block">
            <h2 class="center" style="color:#333"><i class="large material-icons">location_city</i></h2>
            <h5 class="center">Companies / Institutions</h5>
            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam tenetur et ducimus veniam animi non nam voluptate minima qui perferendis, laborum doloremque rem unde saepe quas error placeat, iste quod.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper section scrollspy">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="center row col s3">
          <h3 class="blue-text text-lighten-1">About Us</h3>
        </div>
        <div class="center row col s12">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
    <div class="parallax">
      <img src="{{ asset('images/About.jpg') }}" alt="img">
    </div>
  </div>

  <div class="container section scrollspy" id="contactus">
    <div class="section">
    <br>
    <br>
    <h2 class="blue-text text-lighten-1">Contact Us</h2>
    <div class="row">

      <form class="col s8">
        <div class="row">
          <div class="input-field col s6">
            <input id="name" type="text" class="validate">
            <label for="name">Your Name</label>
          </div>
          <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email">Your Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="message-sub" type="email" class="validate">
            <label for="message-sub">Message Subject</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="text_area" class="materialize-textarea"></textarea>
            <label for="text_area">Your Message</label>
          </div>
        </div>

        <div>
          <a class="waves-effect waves-light btn send-btn">Send message<i class="material-icons right">send</i></a>
        </div>
      </form>

      <div class="col s12 m4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur fuga neque minus quas voluptates nostrum quasi eos doloremque atque quaerat voluptatibus culpa numquam tenetur obcaecati, quisquam quis, unde rem hic?</p>
        <!-- <ul class="share-buttons">
          <li><a href="#" target="_blank" title="Share on Facebook"><img src="images/flat_web_icon_set/inverted/Facebook.png"></a></li>
          <li><a href="#" target="_blank" title="Tweet"><img src="images/flat_web_icon_set/inverted/Twitter.png"></a></li>
          <li><a href="#" target="_blank" title="Share on Google+"><img src="images/flat_web_icon_set/inverted/GooglePlus.png"></a></li>
        </ul> -->
      </div>

      </div>
    </div>
  </div>

  <footer class="page-footer">
    <div class="footer-copyright center">
      <div class="container">
        <p>Copyright © CLLM</p>
      </div>
    </div>
  </footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/default.js') }}"></script>

<script>
$(document).ready(function(){
  $('.materialboxed').materialbox();
  $('.button-collapse').sideNav();
});
</script>
<script>
  $('.head-link').click(function(e) {
    e.preventDefault();
    var goto = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(goto).offset().top
    }, 1000);
  });
</script>
<script>
  $(function() {
  $(window).on("scroll", function() {
    if($(window).scrollTop() > 10) {
      $("nav").addClass("nav-back");
    } else {
      $("nav").removeClass("nav-back");
    }
  });
});
</script>

</body>
</html>
