@extends('layouts.app-master')
@section('title', 'User Update')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> User</x-slot>
    <x-slot name="subTitle"> Update</x-slot>
</x-admin-bradcrumb>
@endsection


@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> User</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('admin.users.update', $user->id) }}">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="{{ $user->name }}" 
                            type="text" 
                            class="form-control" 
                            name="name" 
                            placeholder="Name" required>
    
                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ $user->email }}"
                            type="email" 
                            class="form-control" 
                            name="email" 
                            placeholder="Email address" required>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input value="{{ $user->username }}"
                            type="text" 
                            class="form-control" 
                            name="username" 
                            placeholder="Username" required>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" 
                            name="role" required>
                            <option value="">Select role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ in_array($role->name, $userRole) 
                                        ? 'selected'
                                        : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input 
                                type="password" 
                                class="form-control input-bordered" 
                                name="password" 
                                placeholder="Password ..." >
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
                                placeholder="Confirm Password ..." >
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Update user</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-default">Cancel</button>
                </form>

                </div>
                <!-- /.box-body -->
            </div>
    </div>
</div>

@endsection