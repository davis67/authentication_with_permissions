@extends('layouts.manage')

@section('content')
<div class="flex-container">

	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">This is the posts.index page
			</h1>
		</div>
		<div class="column">
			<a href="{{route('posts.create') }}" class="button is-primary is-pulled-right">
				<i class="fa fa-plus"></i>
				Create New User
			</a>
			
		</div>
		
	</div>
	<hr class="m-t-0">
	<!-- end of flex-container -->
</div>
@endsection