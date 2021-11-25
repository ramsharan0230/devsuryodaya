@extends('layouts.app-master')
@section('title', 'Blog Edit')
@push('styles')
<!-- Date Picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

@endpush
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Blog</x-slot>
    <x-slot name="subTitle"> Edit</x-slot>
</x-admin-bradcrumb>
@endsection


@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered">
            <div class="box-header with-border">
              <h4 class="box-title"> Blog</h4>
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
				<form method="post" action="{{route('admin.blog.update', $detail->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">
					<div class="row">
						<div class="col-md-8">

							<div class="form-group">
								<label>Title (required)</label>
								<input type="text" name="title" class="form-control input-bordered" value="{{$detail->title}}">
							</div>
							
							<div class="form-group">
								<label>Publish date (required)</label> 
								<input type="text" class="date form-control input-bordered" autocomplete="off" name="published_date" value="{{ $detail->published_date }}">
							</div>

							<div class="form-group">
								<label>Short Description</label>
								<input class="form-control input-bordered" name="short_description" value="{{$detail->short_description}}">
							</div>
							<div class="form-group">
								<label>Description(required)</label>
								<textarea class="form-control" name="description" id="editor" rows="3">{{$detail->description}}</textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box">
								<div class="box-header with-heading">
									<h3 class="box-title">Image (required)</h3>
								</div>
								<div class="box-body">
									<div class="form-group">
									<label>Upload Image</label>
									<input type="file" name="image" class="form-control" value="{{ $detail->image }}">
									@if($detail->image)
									<img width="200px" height="150px" src="{{asset('images/blog/'.$detail->image)}}">
									@endif
									</div>

									<div class="form-group">
										<label for="order">Order</label>
										<input type="text" name="order" id="order" class="form-control input-bordered" placeholder="Type Order ..." value="{{ $detail->order }}">
									</div>

									<div class="form-group">
										<input type="checkbox" name="publish" id="basic_checkbox_1" class="filled-in" {{ is_null($detail->publish)?"":"checked" }}>
										<label for="basic_checkbox_1" class="mb-0 h-15">Publish</label>
									</div>

									<div class="form-group">
										<input type="submit" name="" class="btn btn-success">
									</div>

								</div>
							</div>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

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