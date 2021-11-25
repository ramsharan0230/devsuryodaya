@extends('layouts.app-master')
@section('title', 'Roles')

@push('styles')
<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('src/js/pages/data-table.js') }}"></script>
@endpush

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Roles</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="col-12">
    <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title"> Roles</h4>
          <a href="{{ route('admin.roles.create') }}" class="btn btn-success pull-right"> Add</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <div class="mt-2">
                    @include('layouts.partials.messages')
                </div>
        
                <table class="table table-bordered">
                  <tr>
                     <th width="1%">No</th>
                     <th>Name</th>
                     <th width="3%" colspan="3">Action</th>
                  </tr>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('admin.roles.show', $role->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role->id) }}">Edit</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $roles->links() !!}
            </div>              
        </div>
        <!-- /.box-body -->
      </div>
</div>

@endsection



