@extends('layouts.app-master')
@section('title', 'Dashboard')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Dashboard</x-slot>
    <x-slot name="subTitle"> Show</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')

  <section class="content">
    <div class="row">
        
        <div class="col-xl-3 col-sm-3 col-12">			
            <div class="box bg-google box-inverse pull-up">
                <div class="box-body">
                    <div class="flex-column">
                      <div class="row">
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <i class="fa fa-google-plus fa-2x ps-5"></i>
                            <p>{{ $permissionCount }}</p>
                            <h3>Now Get <a href="{{ route('admin.permissions.index') }}"><span class="font-bold">Permissions</span></a> </h3>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                          <a href="{{ route('admin.permissions.create') }}" class="btn btn-secondary">Add</a>
                        </div>
                      </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-3 col-12">			
          <div class="box pull-up">
              <div class="box-body">
                  <div class="flex-column">
                    <div class="row">
                      <div class="col-sm-12 col-md-9 col-lg-9">
                          <i class="fa fa-google-plus fa-2x ps-5"></i>
                          <p>{{ $userCount }}</p>
                          <h3>Now Get <a href="{{ route('admin.users.index') }}"><span class="font-bold">Users</span></a> </h3>
                      </div>
                      <div class="col-sm-12 col-md-3 col-lg-3">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success"> Add</a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-google bg-twitter pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <i class="fa fa-google-plus fa-2x ps-5"></i>
                        <p>{{ $roleCount }}</p>
                        <h3>Now Get <a href="{{ route('admin.roles.index') }}"><span class="font-bold"> Roles</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.roles.create') }}" class="btn btn-secondary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-google bg-inverse pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <i class="fa fa-google-plus fa-2x ps-5"></i>
                        <p>{{ $roleCount }}</p>
                        <h3>Now Get <a href="{{ route('admin.roles.index') }}"><span class="font-bold"> Roles</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.roles.create') }}" class="btn btn-secondary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      
  </section>
@endsection