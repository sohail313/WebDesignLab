@extends('template')
@section('title','Home Page')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
<main>
	<div class="myPhoto">
		<figure>
			<img src="image/Webdev.jpeg" alt="My Photo" width="30%" height="30%" >
		</figure>
	</div>
	<h1>Arbaz Shaikh</h1>
	<p class="about">
		I'm an Aspiring Web developer based in Mumbai Metropolitan Region (MMR), India. I have passion for database and web development. I love to create and design applications for web and mobile devices.
	</p>
	<div>
		<p>
			<ul>
				<li>Computer science Graduate</li>
				<li>know programming languages like C,JAVA,Python. </li>
				
			</ul>
		</p>
	</div><br>
	<div>
		<a href="resume">Know More About Me!</a>
	</div>
	<div>
		<a href="#">Contact Me</a>
	</div>
	<div>
		<a href="blog">My Blog</a>
	</div>
	<div>
		<a href="gallery">Gallery</a>
	</div>
	
</main>
@endsection

@section('footer')
	@include('partials.footer')
@endsection	