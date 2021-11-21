@extends('layouts.app-master')
@section('title', 'Role Create')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Role</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
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
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ old('name') }}" 
                                type="text" 
                                class="form-control input-bordered" 
                                name="name" 
                                placeholder="Name" required>
                        </div>
                        
                        <label for="permissions" class="form-label">Assign Permissions </label>
                        <br>
                        
                        @foreach($permissions as $permission)
                            <div class="form-group">
                                <input type="checkbox" id="{{ $permission->name }}" name="permission[{{ $permission->name }}]" value="{{ $permission->name }}" />
                                <label for="{{ $permission->name }}"><p class="card-text">{{ $permission->name }}</p></label>
                            </div>
                        @endforeach
        
                        <button type="submit" class="btn btn-primary">Save user</button>
                        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
    </div>
</div>

@endsection

@push('scripts')
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
@endpush