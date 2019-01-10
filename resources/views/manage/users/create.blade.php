@extends('layouts.manage')

@section('content')

<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create new User</h1>
		</div>
	</div>

	<hr class="m-t-10">

	<form action="{{ route('users.store') }}" method="POST">
		@csrf
		<div class="field">
			<label for="name" class="label">Name</label>
			<p class="control">
				<input type="text"  class="input" name="name" id="name">
			</p>
		</div>
		<div class="field">
			<label for="email" class="label">email</label>
			<p class="control">
				<input type="text"  class="input" name="email" id="email">
			</p>
		</div>
		<div class="field">
			<label for="password" class="label">Password</label>
			<p class="control">
				<input type="password" class="input" name="passsword" id="password" v-if="!auto_password">
				<b-checkbox class="m-t-10" name="auto_generate" :checked="true" v-model="auto_password">Auto Generate Password</b-checkbox>
			</p>
		</div>
		<button class="button is-primary">Create a User</button>
	</form>
</div> {{-- End od flex-container --}}
@endsection

@section('scripts')

	<script>
		var app = new Vue({
			el:'#app',
			data:{
				auto_password:true 
			}

		});
	</script>
@endsection