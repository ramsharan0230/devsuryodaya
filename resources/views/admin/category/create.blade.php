@extends('layouts.app-master')
@section('title', 'Category Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Category</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Category</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

				@if (count($errors) > 0)
				<div class="alert alert-danger message">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<label for="title">Name (required)</label>
								<input type="text" name="name" class="form-control input-bordered" value="{{old('name')}}" placeholder="Type Name ...">
							</div>
	
							<div class="form-group">
								<label>Upload Image</label>
								<input type="file" name="feature_image" class="form-control input-bordered">
							</div>
	
							<div class="form-group">
								<label for="order">Order</label>
								<input type="text" name="order" class="form-control input-bordered" value="{{old('order')}}" placeholder="Type Order like 1, 2, 3 ...">
							</div>
	
							<div class="form-group">
								<div class="form-group">
									<input type="checkbox" value="1" name="publish" id="basic_checkbox_1" class="filled-in" checked>
									<label for="basic_checkbox_1" class="mb-0 h-15">Publish</label>
								</div>
							</div>
	
							<div class="form-group">
								<input type="submit" name="" class="btn btn-success">
							</div>
									
								
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->

  {{-- modal end --}}
@endsection
@push('scripts')
@endpush