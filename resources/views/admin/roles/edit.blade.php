@extends('layouts.app-master')
@section('title', 'Role Update')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Role</x-slot>
    <x-slot name="subTitle"> Update</x-slot>
</x-admin-bradcrumb>
@endsection


@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Roles</h4>
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

                <form method="POST" action="{{ route('roles.update', $role->id) }}">
                @method('patch')
                @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <thead>
                                <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                <th scope="col" width="20%">Name</th>
                                <th scope="col" width="1%">Guard</th> 
                            </thead>
                        </div>
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ $role->name }}" 
                                type="text" 
                                class="form-control" 
                                name="name" 
                                placeholder="Name" required>
                        </div>
                    </div>
                    
                    <label for="permissions" class="form-label">Assign Permissions</label>

                    <table class="table table-striped">
                        <thead>
                            <th scope="col" width="1%">
                                <input type="checkbox" name="" value="">
                            </th>
                            <th scope="col" width="20%">Name</th>
                            <th scope="col" width="1%">Guard</th> 
                        </thead>

                        @foreach($permissions as $permission)
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" id="{{ $permission->name }}" name="permission[{{ $permission->name }}]" value="{{ $permission->name }}" {{ in_array($permission->name, $rolePermissions) 
                                            ? 'checked'
                                            : '' }}/>
                                        <label for="{{ $permission->name }}"><p class="card-text">{{ $permission->name }}</p></label>
                                    </div>
                                </td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name }}</td>
                            </tr>
                        @endforeach
                    </table>

                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
            </form>

                </div>
                <!-- /.box-body -->
            </div>
    </div>
</div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>
@endsection