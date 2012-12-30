@layout('layout.master')

@section('content')

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
	<div class="container">
		<h1>Contact</h1>
		<p class="lead">Contact us for any questions or feedback.</p>
	</div>
</header>

<div class="container">
	<div class="row">
		<div class="span12">
			<section id="contact-form">

				@if ($errors->has())
				<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>Error!</h4>
					<ul>
						@foreach ($errors->all('<li>:message</li>') as $message)
						{{ $message }}
						@endforeach
					</ul>
				</div>
				@endif

				{{ Form::open(URL::to_route('contact'), NULL, array('class'=>'form-horizontal')) }}

					<div class="control-group">
						<label class="control-label" for="name">Name</label>
						<div class="controls">
							<input type="text" name="name" placeholder="Name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
							<input type="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="message">Message</label>
						<div class="controls">
							<textarea class="input-xxlarge" name="message" rows="7" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-info btn-large">Send</button>
						</div>
					</div>

				{{ Form::close() }}
					
			</section>
		</div>
	</div>
</div>

@endsection