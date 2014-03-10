<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Alkimia Chapter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('css/docs.css') }}" rel="stylesheet">
  <link href="{{ URL::to('css/font-awesome.css') }}" rel="stylesheet">
  <link href="{{ URL::to('css/styles.css') }}" rel="stylesheet">

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::to('ico/apple-touch-icon-144-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::to('ico/apple-touch-icon-114-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::to('ico/apple-touch-icon-72-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" href="{{ URL::to('ico/apple-touch-icon-57-precomposed.png') }}">
  <link rel="shortcut icon" href="{{ URL::to('ico/favicon.ico') }}">

</head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="{{ URL::to_route('home') }}">{{ HTML::image('img/lsu-crest.png', 'LSU') }}</a>
          <a class="brand" href="{{ URL::to_route('home') }}">Alkimia Chapter</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="@if (Request::route()->is('home'))active@endif">
                <a href="{{ URL::to_route('home') }}">Home</a>
              </li>
              <li class="@if (Request::route()->is('about'))active@endif">
                <a href="{{ URL::to_route('about') }}">About</a>
              </li>
              <li class="@if (Request::route()->is('contact'))active@endif">
                <a href="{{ URL::to_route('contact') }}">Contact</a>
              </li>
            </ul>
            <a class="sub-brand pull-right" href="http://www.lsu79.org">Lambda Sigma Upsilon Latino Fraternity, Inc.</a>
          </div>
        </div>
      </div>
    </div>

    @yield('content')

    <!-- Footer
    ================================================== -->

    <footer class="footer">
      <div class="container">
       <div class="social-links">
        <ul>
         <li><a href="http://twitter.com/Alkimia_LSU" target="_blank"><i class="icon-twitter"></i></a></li>
         <li><a href="#"><i class="icon-linkedin"></i></a></li>
         <li><a href="#"><i class="icon-google-plus"></i></a></li>
         <li><a href="http://www.facebook.com/alkimia.chapter" target="_blank"><i class="icon-facebook"></i></a></li>
       </ul>
     </div>
     <address>
      <strong>Alkimia Chapter</strong><br>
      <a href="http://www.lsu79.org">Lambda Sigma Upsilon Latino Fraternity, Inc.</a> <br>
      <a href="http://www.rit.edu">Rochester Institute of Technology</a> <br>
      70 Lomb Memorial Drive<br>
      Rochester, NY 14623<br>
      <a href="mailto:lsualkimia@gmail.com">lsualkimia@gmail.com</a>
    </address>
    @if (Auth::check())
      <p>User: {{ Auth::user()->email }}
    @endif
    </div>
  </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/alkimia_lsu.json?callback=twitterCallback2&count=1"></script>

  </body>
  </html>
