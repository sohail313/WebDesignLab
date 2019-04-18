@extends('template')
@section('title','Gallery')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
<main>
	<div class="gallery">
		<h1>GALLAREY</h1>
		<figure >
			<img src="{{asset('img/milky.jpeg')}}" alt="milky " width="500px">
			<figcaption>Milky Way</figcaption>
		</figure>
		<figure>
			<img src="{{asset('img/galaxy.jpeg')}}" alt="galaxy " width="500px">
			<figcaption>galaxy</figcaption>
		</figure>
		<figure>
			<img src="{{asset('img/mount.jpeg')}}" alt="mount " width="500px">
			<figcaption>mount</figcaption>
		</figure>
		<figure>
			<img src="{{asset('img/road.jpeg')}}" alt="road " width="500px">
			<figcaption>road</figcaption>
		</figure>
		<figure>
			<img src="{{asset('img/view.jpeg')}}" alt="view " width="500px">
			<figcaption>View</figcaption>
		</figure>
	</div>
</main>
@endsection

@section('footer')
	@include('partials.footer')
@endsection	