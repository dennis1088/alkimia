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
    		<a target="_blank" href="http://www.facebook.com/events/199651053503128/" class="thumbnail"><img src="img/event1.jpg" alt=""></a>
    		<div class="event-info">
    			<a target="_blank" href="http://www.facebook.com/events/199651053503128/"><h2>World AIDS Day Banquet</h2></a>
    			<time class="clearfix" datetime="">December 01, 6:00PM</time>
    		</div>
    	</div>
    	<div class="span3">
    		<a target="_blank" href="http://www.facebook.com/events/459576450761038/" class="thumbnail"><img src="img/event2.jpg" alt=""></a>
    		<div class="event-info">
    			<a target="_blank" href="http://www.facebook.com/events/459576450761038/"><h2>Noche Buena</h2></a>
    			<time class="clearfix" datetime="">December 15, 5:00PM</time>
    		</div>
    	</div>
    	<div class="span3">
    		<a target="_blank" href="http://www.facebook.com/events/371701576246705/" class="thumbnail"><img src="img/event3.jpg" alt=""></a>
    		<div class="event-info">
    			<a target="_blank" href="http://www.facebook.com/events/371701576246705/"><h2>Dominoes Tournament</h2></a>
    			<time class="clearfix" datetime="">January 24, 8:00PM</time>
    		</div>
    	</div>
    	<div class="span3">
    		<a target="_blank" href="http://www.facebook.com/events/198333466958576/" class="thumbnail"><img src="img/event4.jpg" alt=""></a>
    		<div class="event-info">
    			<a target="_blank" href="http://www.facebook.com/events/198333466958576/"><h2>Date Auction</h2></a>
    			<time class="clearfix" datetime="">January 26, 5:00PM</time>
    		</div>
    	</div>
    </div>
    <hr>

  </div>

</div>

@endsection