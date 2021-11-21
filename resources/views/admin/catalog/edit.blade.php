@extends('layouts.app-master')
@section('title', 'Catalog Update')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Catalog</x-slot>
    <x-slot name="subTitle"> Update</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Catalog</h4>
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
				<form method="post" action="{{route('admin.catalog.update', $detail->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">
					<div class="row">
						<div class="col-md-8">

							<div class="form-group">
								<label for="title">Product (optional)</label>
								<select name="product_id" id="product_id" class="form-control input-bordered">
									<option value="">Choose Product</option>
									@forelse ($products as $product)
										<option value="{{ $product->id }}" {{ $detail->product_id==$product->id?"selected":"" }}>{{ $product->title }}</option>
									@empty
										<option value="">No Product Found!</option>
									@endforelse
								</select>
							</div>

							<div class="form-group">
								<label for="title">Name(required)</label>
								<input type="text" name="title" class="form-control input-bordered" value="{{ $detail->title }}" placeholder="Enter Title ...">
							</div>

							<div class="form-group">
								<label for="file">Upload Catalog</label>
								<input type="file" name="catalog_file" class="form-control input-bordered" value="{{old('catalog_file')}}" >
								@if($detail->catalog_file)
									<span>{{ $detail->catalog_file }}</span>
								@endif
							</div>

							<div class="form-group">
								<label for="order">Order</label>
								<input type="text" name="order" class="form-control input-bordered" value="{{ $detail->order }}" placeholder="Enter order 1,2,3... ">
							</div>

							<div class="form-group">
								<input type="checkbox" value="1" name="publish" id="basic_checkbox_1" class="filled-in" {{ is_null($detail->publish)?"":"checked" }}>
								  <label for="basic_checkbox_1" class="mb-0 h-15">Publish</label>
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

@endsection
@push('custom-scripts')
@endpush