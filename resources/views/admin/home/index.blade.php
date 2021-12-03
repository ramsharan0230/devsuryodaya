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
                            <i data-feather="file"></i>
                            <p>{{ $permissionCount }}</p>
                            <h3> <a href="{{ route('admin.permissions.index') }}"><span class="font-bold">Permissions</span></a> </h3>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                          <a href="{{ route('admin.permissions.create') }}" class="btn btn-sm btn-primary">Add</a>
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
                        <i data-feather="aperture"></i>
                          <p>{{ $userCount }}</p>
                          <h3> <a href="{{ route('admin.users.index') }}"><span class="font-bold">Users</span></a> </h3>
                      </div>
                      <div class="col-sm-12 col-md-3 col-lg-3">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary"> Add</a>
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
                      <i data-feather="bookmark"></i>
                        <p>{{ $roleCount }}</p>
                        <h3> <a href="{{ route('admin.roles.index') }}"><span class="font-bold"> Roles</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.roles.create') }}" class="btn btn-sm btn-primary"> Add</a>
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
                        <i data-feather="book"></i>
                        <p>{{ $roleCount }}</p>
                        <h3><a href="{{ route('admin.blog.index') }}"><span class="font-bold"> Blogs</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-flickr bg-inverse pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="layers"></i>
                        <p>{{ $sliderCount }}</p>
                        <h3> <a href="{{ route('admin.slider.index') }}"><span class="font-bold">Sliders</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.slider.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-dropbox bg-inverse pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="hash"></i>
                        <p>{{ $categoryCount }}</p>
                        <h3> <a href="{{ route('admin.category.index') }}"><span class="font-bold">Categories</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-foursquare bg-inverse pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="hard-drive"></i>
                        <p>{{ $subcategoryCount }}</p>
                        <h3> <a href="{{ route('admin.subcategory.index') }}"><span class="font-bold">Subcategories</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.subcategory.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-instagram bg-inverse pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="globe"></i>
                        <p>{{ $testimonialCount }}</p>
                        <h3> <a href="{{ route('admin.testimonial.index') }}"><span class="font-bold">Testimonials</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.testimonial.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-instagram bg-inverse pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="folder"></i>
                        <p>{{ $serviceCount }}</p>
                        <h3> <a href="{{ route('admin.service.index') }}"><span class="font-bold">Services</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.service.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-google pull-up">
            <div class="box-body" style="color:wheat">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="database"></i>
                        <p style="color:wheat">{{ $productCount }}</p>
                        <h3> <a href="{{ route('admin.product.index') }}"><span class="font-bold">Products</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box pull-up">
            <div class="box-body" style="color:wheat">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="aperture"></i>
                        <p style="color:wheat">{{ $catalogCount }}</p>
                        <h3> <a href="{{ route('admin.catalog.index') }}"><span class="font-bold">Catalogs</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.catalog.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-3 col-12">			
        <div class="box bg-github pull-up">
            <div class="box-body">
                <div class="flex-column">
                  <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                      <i data-feather="airplay"></i>
                        <p>{{ $videoCount }}</p>
                        <h3> <a href="{{ route('admin.video.index') }}"><span class="font-bold">Videos</span></a> </h3>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                      <a href="{{ route('admin.video.create') }}" class="btn btn-sm btn-primary"> Add</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>

      
  </section>
@endsection