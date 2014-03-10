@layout('layout.master')

@section('content') 

<div class="jumbotron masthead">
  <div class="container">
    <h1>Alkimia Chapter</h1>
    <p><small>Lambda Sigma Upsilon Latino Fraternity, Inc.</small></p>
    <p>We are not just a fraternity, we are a movement.</p>
	<p><a href="{{ URL::to_route('about') }}" class="btn btn-danger btn-large" >Find out More</a></p>
  </div>
</div>

<div class="container">

  <div class="marketing">

    <!-- Twitter
    ================================================== -->
    <div class="twitter-feed">
        <div id="twitter-icon-wrapper">
            <i class="icon-twitter"></i>
        </div>
        <div id="twitter_update_list"></div>
    </div>
    <hr>

    <h1>Upcoming Events.</h1>
    <p class="marketing-byline">Find out more information and come out to our events.</p>

    <div class="row-fluid">
    	<div class="span3">
    		<a target="_blank" href="https://www.facebook.com/events/810333445649824/" class="thumbnail"><img src="img/StepAbove.jpg" alt=""></a>
    		<div class="event-info">
    			<a target="_blank" href="https://www.facebook.com/events/810333445649824/"><h2>Step Above</h2></a>
    			<time class="clearfix" datetime="">April 14th 2014, 5:30PM</time>
    		</div>
    	</div>
    	<!-- Informational placeholder
    	<div class="span3">
    		<a target="_blank" href="" class="thumbnail"><img src="" alt="" /></a>
    		<div class="event-info">
    			<a target="_blank" href=""><h2>Rum & Salsa Informational</h2></a>
    			<time class="clearfix" datetime="">May 18th 2014, 5:30pm</time>
    		</div>
    	</div>
    	-->
    </div>
    
    
    <hr>

  </div>

</div>

@endsection