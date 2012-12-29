@layout('layout.master')

@section('content')

<div class="jumbotron masthead">
  <div class="container">
    <h1>Alkimia Chapter</h1>
    <p>We are not just a fraternity, we are a movement.</p>
	<p><a href="{{ URL::to_route('about') }}" class="btn btn-danger btn-large" >Find out More</a></p>
  </div>
</div>

<div class="container">

  <div class="marketing">

    <h1>Upcoming Events.</h1>
    <p class="marketing-byline">Find out more information and come out to our events.</p>

    <div class="row-fluid">
    	<div class="span3">
    		<a href="#" class="thumbnail"><img src="img/thumbnail.jpg" alt=""></a>
    		<div class="event-info">
    			<a href="#"><h2>Smooth Inception 3</h2></a>
    			<time class="clearfix" datetime="">October 06, 10:00PM</time>
    		</div>
    	</div>
    	<div class="span3">
    		<a href="#" class="thumbnail"><img src="img/thumbnail.jpg" alt=""></a>
    		<div class="event-info">
    			<a href="#"><h2>Smooth Inception 3</h2></a>
    			<time class="clearfix" datetime="">October 06, 10:00PM</time>
    		</div>
    	</div>
    	<div class="span3">
    		<a href="#" class="thumbnail"><img src="img/thumbnail.jpg" alt=""></a>
    		<div class="event-info">
    			<a href="#"><h2>Smooth Inception 3</h2></a>
    			<time class="clearfix" datetime="">October 06, 10:00PM</time>
    		</div>
    	</div>
    	<div class="span3">
    		<a href="#" class="thumbnail"><img src="img/thumbnail.jpg" alt=""></a>
    		<div class="event-info">
    			<a href="#"><h2>Smooth Inception 3</h2></a>
    			<time class="clearfix" datetime="">October 06, 10:00PM</time>
    		</div>
    	</div>
    </div>
    <hr>

    <!-- Twitter
    ================================================== -->
    <div class="twitter-feed">
    	<div id="twitter-icon-wrapper">
    		<i class="icon-twitter"></i>
    	</div>
    	<div id="twitter_update_list"></div>
    </div>
    <hr>

  </div>

</div>

@endsection