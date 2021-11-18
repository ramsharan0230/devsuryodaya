@extends('layouts.app-master')
@section('title', 'User Show')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Users</x-slot>
    <x-slot name="subTitle"> Show</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Users</h4>
      <a href="{{ route('users.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <h1>Show user</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div>
</div>

@endsection