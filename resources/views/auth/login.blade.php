@extends('layouts.auth_app')
@section('content')
<div class="col-sm">
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
    
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
        
        <form class="col-lg-6 offset-lg-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row justify-content-center">
                <h4>Welcome back!</h4>
        <h6 class="font-weight-light">Happy to see you again!</h6>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                          
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" id="email" required autofocus placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                         
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0"
                           name="password"
                           required autocomplete="current-password"
                           id="password" placeholder="Password">
                </div>
            </div><br>
            <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        {{ __('Remember me') }}
                    </label>
                </div>&nbsp; &nbsp;
                @if (Route::has('password.request'))
                    {{-- <a class="auth-link text-black" href="{{ route('password.request') }}">
                         --}}
                         <a class="auth-link text-black" href="#">
                  {{ __('Reset password?') }}
                    </a>
                @endif
            </div>
            <div class="my-3">
                <button class="btn btn-primary btn-lg" type="submit">{{ __('Log in') }}</button>&nbsp;

                
            </div>
            <div class="text-center mt-4 font-weight-light">
                New here? <a href="{{route('register')}}" class="text-primary">Create account</a>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection
