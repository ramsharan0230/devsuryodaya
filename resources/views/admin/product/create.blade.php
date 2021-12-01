@extends('layouts.app-master')
@section('title', 'Product Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Product</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Product</h4>
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
				<form method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-12">
									<div class="form-group">
										<label for="subcategory_id">Select Subcategory (required)</label>
										<select name="subcategory_id" id="subcategory_id" class="form-control input-bordered">
											<option value="" selected disabled>Choose Subcategory</option>
											@foreach ($subcategories as $item)
												<option value="{{ $item->id }}">{{ $item->name }}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="service_id">Select Service (optional)</label>
										<select name="service_id" id="service_id" class="form-control input-bordered">
											<option value="" selected disabled>Choose Service</option>
											@foreach ($services as $service)
												<option value="{{ $service->id }}">{{ $service->title }}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="title">Title (required)</label>
										<input type="text" name="title" class="form-control input-bordered" value="{{old('title')}}" placeholder="Type Title">
									</div>

									<div class="form-group">
										<label for="subtitle">Subtitle (optional)</label>
										<input type="text" name="subtitle" class="form-control input-bordered" value="{{old('subtitle')}}" placeholder="Type Subtitle">
									</div>

									<div class="form-group">
										<label for="order">Order (required)</label>
										<input type="number" name="order" class="form-control input-bordered" value="{{old('order')}}" placeholder="Type Order">
									</div>

									<div class="form-group">
										<label for="edior1">Short Description</label>
										<textarea class="form-control input-bordered" name="short_description" id="edior1" rows="3" placeholder="Type Description...">{{old('short_description')}}</textarea>
									</div>
									<div class="form-group">
										<label for="editor">Description</label>
										<textarea class="form-control" name="description" id="editor" rows="3" placeholder="Type Description...">{{old('description')}}</textarea>
									</div>
						
							<div class="form-group">
								<label>Upload Image</label>
								<input type="file" name="image" class="form-control input-bordered">
							</div>
							
							<div class="form-group">
								<label>Upload Catalog</label>
								<input type="file" name="catalog_file" class="form-control input-bordered">
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
				</form>
	</div>
</div>
<!-- Modal -->

  {{-- modal end --}}
@endsection
@push('scripts')
	<script src="{{ asset('assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
	<script src="{{ asset('src/js/pages/editor.js') }}"></script>

	<script>
		$('.date').datepicker({
			format:'yyyy-mm-dd',
		}).datepicker("setDate",'now');
	</script>
@endpush