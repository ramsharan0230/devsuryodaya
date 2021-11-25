@extends('layouts.app-master')
@section('title', 'Users')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Users</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Users</h4>
      <a href="{{ route('admin.users.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
          <table id="example" class="form-input-table display table table-bordered">
            <thead>
                <tr class="text-dark">
                    <th #</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Roles</th>
                    <th>Actions</th>    
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-warning btn-sm pull-right">Show</a>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm pull-left">Edit</a>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>	
        </table>
        {!! $users->links() !!}
        </div>              
    </div>
    <!-- /.box-body -->
  </div>
@endsection



