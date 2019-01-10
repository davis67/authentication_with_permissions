@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-80">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Log In</h1>
                <form action="{{ route('login') }}" method="POST" role="form">
                    @csrf
                <div class="field">
                    <label for="email" class="label">Email Address</label>
                    <p class="control">
                        <input class="input {{ $errors->has('email') ? 'has-danger':'' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email')}}">

                    </p>
                    @if($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                        <input class="input {{ $errors->has('password ') ? 'has-danger':'' }}" type="password" name="password" id="password" >
                    </p>
                    @if($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>
                <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>

                <button class="button is-primary is-outlined is-fullwidth m-t-50" >Log In</button>
              </form>
            </div>
            <h5 class="has-text-centered p-b-30">
                <a href="{{ route('password.request') }}" class="is-muted">Forgot Your Password?</a>
            </h5>
        </div>
    </div>
</div>

@endsection
