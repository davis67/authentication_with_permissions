@extends('layouts.manage')

@section('content')
<div class="flex-container">
	
	<div class="columns m-t-10 m-b-0">
		<div class="column">
			<h1 class="title is-admin is-3">Add New Blog Post
			</h1>
		</div>
		<div class="column">
			{{-- <a href="{{route('users.create') }}" class="button is-primary is-pulled-right">
				<i></i>
				Create New User
			</a> --}}
			
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{ route('posts.store') }}" method="post">
		@csrf
	<div class="columns">
		<div class="column is-three-quarters-desktop">
		<b-field>
			<b-input type="text" placeholder="Post title" size="is-large" v-model="title"></b-input>
		</b-field>
		<p>
			<slug-widget url="{{ url('/') }}" subdirectory="blog" :title="title" @slugChanged="updateSlug"></slug-widget>
		</p>
		<b-field>
			<b-input type="textarea" placeholder="Compose your master piece" rows="10"></b-input>
		</b-field>
	  </div>
	 <div class="column is-one-quarter-desktop is-narrow-tablet">
	  	<div class="card card-widget">

	  			<div class="author-widget widget-area">
	  				<div class="selected-author">
	  					<img src="https://placehold.it/50x50" class="is-pulled-left">
	  					<div class="author">
	  						<h4>By: Davis Agaba</h4>
	  						<p class="subtitle">(davis67 )</p>
	  					</div>
	  				
	  				</div>
	  			</div>
	  			<div class="post-status-widget widget-area">
  				<div class="status">
  					<div class="status-icon">
  						<b-icon icon="assignment" size="is-medium"></b-icon>
  					</div>
	  				<div class="status-details">	
		  				<h4><span class="status-emphasis"> Draft</span> Saved</h4>
		  				<p>A few minutes Ago (Saved)</p>
	  				</div>
	  	 		   </div>
		     </div>
	  		<div class="publish-buttons-widget widget-area">
	  			<div class="secondary-button-action"> 
	  			<button class="button is-info is-outlined is-fullwidth">
	  				Save Draft
	  			</button>
	  		</div>
	  			<div class="primary-button-action">
	  			<button class="button is-primary is-fullwidth">
	  				Publish
	  			</button>
	  		</div>
	  </div>
	</div>
	</div>
	</form>
	<!-- end of flex-container -->
</div>
@endsection
@section('scripts')
<script>
	var app = new Vue({
		el:'#app',
		data:{
			title:'',
			slug:'',
			api_token:'{{ Auth::user()->api_token }}'
		},
		methods:{
			updateSlug:function(val){

				this.slug = val;

			}
		}
    });
</script>
@endsection