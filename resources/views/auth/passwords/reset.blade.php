@extends('layouts.app')

@section('content')
<div class="container">
     @if (session('status'))
                        <div class="notification is-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-80">
        <div class="card">
            <div class="card-content">
                <h1 class="title is-text-center">Reset your Password </h1>
                <form action="{{ route('register') }}" method="POST" role="form">
                    @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                 <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                        <input class="input {{ $errors->has('name') ? 'has-danger':'' }}" type="text" name="name" id="name" placeholder="eg john doe" value="{{ old('name')}}">

                    </p> 
                    @if($errors->has('name'))
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="email" class="label">Email Address</label>
                    <p class="control">
                        <input class="input {{ $errors->has('email') ? 'has-danger':'' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email')}}">

                    </p>
                    @if($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="columns">
                    <div class="column">
                      <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input class="input {{ $errors->has('password ') ? 'has-danger':'' }}" type="password" name="password" id="password" >
                        </p>
                    @if($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                    </div>  
                   </div>
                <div class="column">
                   <div class="field">
                    <label for="password_confirmation" class="label">Confirm password </label>
                    <p class="control">
                        <input class="input {{ $errors->has('password_confirmation ') ? 'has-danger':'' }}" type="password" name="password_confirmation" id="password_confirmation" >
                    </p>
                    @if($errors->has('password_confirmation'))
                    <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>  
                </div>
             </div>
                
                <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>

                <button class="button is-primary is-outlined is-fullwidth m-t-50" >Register</button>
              </form>
            </div>
            <h5 class="has-text-centered p-b-30">
                <a href="{{ route('login') }}" class="is-muted">Already Have An Account?</a>
            </h5>
        </div>
    </div>
</div> 
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
