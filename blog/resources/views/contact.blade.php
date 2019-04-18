@extends('template')
@section('title','Contact Me')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
<main>
	<div class="contact-form">
		<h2>Contact Me</h2>
		<form action="" method="post">
			<label>
				<div>
					Email:
				</div>
				<input id="user-email" type="email" name="usermail" placeholder="Email" required >
			</label>
		<label>
			<div>
				Subject:
			</div>
			<input id="Subject" type="text" name="subject" placeholder="Description about Subject" required>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		</label>
		<label>
			<div>
				Message:
			</div>
			<textarea id="Message" name="message" placeholder="Message"></textarea> 
		</label>
		<div>
			<input id="submit-btn" type="submit"  value="Submit">
		</div>
		
		</form>
	
	</div>
	<div class="social-media">
		<h3>Get Connected</h3>
		<a href="https://facebook.com"><i class="fab fa-facebook-square fa-1x" >Facebook</i></a>
		<a href="https://instagram.com"><i class="fab fa-instagram">instagram</i></a>
		<a href="https://twitter.com"><i class="fab fa-twitter">twitter</i></a>
	</div>
</main>
@endsection

@section('footer')
	@include('partials.footer')
@endsection	