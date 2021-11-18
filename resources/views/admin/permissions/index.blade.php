@extends('layouts.app-master')
@section('title', 'Permissions')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Permissions</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Permissions</h4>
      <a href="{{ route('admin.permissions.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
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
                    <th>Name</th>
                    <th>Guard Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $key=>$permission)
                    <tr role="row" class="{{ (($key+2) % 2 == 0)?"even":"odd" }}">
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-outline-success pull-right"><i class="fa fa-angle-right pull-right"></i> Edit</a>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>	
        </table>
        {!! $permissions->links() !!}
        </div>              
    </div>
    <!-- /.box-body -->
  </div>
@endsection



