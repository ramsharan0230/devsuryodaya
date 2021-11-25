@extends('layouts.auth-master')
@section('title', 'Forget Password')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Forgot password</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('register.perform') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
                <div class="form-group form-floating mb-3">
                    <input type="email" class="form-control input-bordered" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                    <label for="floatingEmail">Email address</label>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
        
                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                
            </form>
        </div>
    </div>
@endsection
