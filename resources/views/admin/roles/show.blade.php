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
        
        <div class="container mt-4">

            <h3>Assigned permissions</h3>

            <table class="table table-striped">
                <thead>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="1%">Guard</th> 
                </thead>

                @foreach($rolePermissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection