@extends('layouts.app-master')
@section('title', 'Permissions')
@section('content')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Permissions</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection


@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Permissions</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        
                    <form method="POST" action="{{ route('admin.permissions.store') }}">
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
        
                        <button type="submit" class="btn btn-primary">Save permission</button>
                        <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">Back</a>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
    </div>
</div>

@endsection