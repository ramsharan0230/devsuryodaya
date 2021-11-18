@extends('layouts.auth-master')
@section('title', 'Login')
@section('content')
<div class="row align-items-center justify-content-md-center h-p100">	
			
    <div class="col-12">
        <div class="row justify-content-center g-0">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="bg-white rounded10 shadow-lg">
                    <div class="content-top-agile p-20 pb-0">
                        <h2 class="text-primary fw-600">Let's Get Started</h2>
                        <p class="mb-0 text-fade">Sign in to continue to Lion Admin.</p>							
                    </div>
                    <div class="p-40">
                        @include('layouts.partials.messages')

                            <form method="post" action="{{ route('login.perform') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
                                <div class="form-group form-floating mb-3">
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                    <label for="floatingName">Email or Username</label>
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group form-floating mb-3">
                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                    <label for="floatingPassword">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                        
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="remember">Remember me</label>
                                            <input type="checkbox" name="remember" value="1">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <a href="{{ route('forget-password') }}" class="card-text"> Forget Password</a>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary w-p100 mt-10">SIGN IN</button>
                                
                                @include('auth.partials.copy')
                            </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0 text-fade">Don't have an account? <a href="#" class="text-primary ms-5">Sign Up</a></p>
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

