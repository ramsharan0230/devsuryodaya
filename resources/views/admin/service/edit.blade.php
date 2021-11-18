@extends('layouts.app-master')
@section('title', 'Service Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Service</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Service</h4>
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
				<form method="post" action="{{route('admin.service.update', $detail->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="title">Title (required)</label>
								<input type="text" name="title" class="form-control input-bordered" value="{{ $detail->title?$detail->title:old('title') }}" placeholder="Type Title ...">
							</div>

							<div class="form-group">
								<label for="order">Order</label>
								<input type="text" name="order" class="form-control input-bordered" value="{{ $detail->order?$detail->order:old('order')}}" placeholder="Type Order like 1, 2, 3 ...">
							</div>

							<div class="form-group">
								<label for="editor">Description</label>
								<textarea class="form-control" id="editor" name="description" rows="3">{{ $detail->description?$detail->description:old('description') }}</textarea>
							</div>

							<div class="form-group">
								<label>Upload Image</label>
								<input type="file" name="image" class="form-control input-bordered">
								@if($detail->image)
									<img src="{{ asset('images/service').'/'.$detail->image }}" width="150px" height="100px" alt="">
								@endif
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