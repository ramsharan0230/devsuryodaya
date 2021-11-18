@extends('layouts.app-master')
@section('title', 'Subcategory Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Subcategory</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Subcategory</h4>
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
				<form method="post" action="{{route('admin.subcategory.store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-8">

							<div class="form-group">
								<label for="category_id">Category (required)</label>
								<select name="category_id" id="category_id" class="form-control input-bordered" >
									<option value="" selected disabled>Choose Category</option>
									@foreach ($categories as $item)
										<option value="{{ $item->id }}">{{ $item->name }}</option>
									@endforeach
								</select>
							</div>
							
							<div class="form-group">
								<label for="title">Name (required)</label>
								<input type="text" name="name" class="form-control input-bordered" value="{{old('name')}}" placeholder="Type Name ...">
							</div>

							<div class="form-group">
								<label>Upload Image</label>
								<input type="file" name="image" class="form-control input-bordered">
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
<!-- Modal -->

  {{-- modal end --}}
@endsection
@push('scripts')
@endpush