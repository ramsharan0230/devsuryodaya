@extends('layouts.app-master')
@section('title', 'User Create')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> User</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> User</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <div class="row">
        <div class="col-sm-6">
            <div class="container mt-4">
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="{{ old('name') }}" 
                            type="text" 
                            class="form-control input-bordered" 
                            name="name" 
                            placeholder="Name" required>
    
                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ old('email') }}"
                            type="email" 
                            class="form-control input-bordered" 
                            name="email" 
                            placeholder="Email address" required>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input value="{{ old('username') }}"
                            type="text" 
                            class="form-control input-bordered" 
                            name="username" 
                            placeholder="Username" required>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
    
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input 
                            type="password" 
                            class="form-control input-bordered" 
                            name="password" 
                            placeholder="Password ..." required>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input 
                            type="password" 
                            class="form-control input-bordered" 
                            name="password_confirmation" 
                            placeholder="Confirm Password ..." required>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
    
                    <button type="submit" class="btn btn-primary">Save user</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-default">Back</a>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection