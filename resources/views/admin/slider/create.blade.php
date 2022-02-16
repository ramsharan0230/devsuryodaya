@extends('layouts.app-master')
@section('title', 'Slider Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Slider</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Slider</h4>
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
				<form method="post" action="{{route('admin.slider.store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="title">Title (required)</label>
								<input type="text" name="title" class="form-control input-bordered" value="{{old('title')}}" placeholder="Enter title...">
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Link Title</label>
										<input type="text" name="link_title" class="form-control input-bordered" placeholder="Link Title ...">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Link</label>
										<input type="text" name="link" class="form-control input-bordered" placeholder="Link  ...">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label>Short Description</label>
								<input class="form-control input-bordered" name="short_description" rows="3" value="{{old('short_description')}}"  placeholder="Enter short description..."/>
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control input-bordered" name="description" id="editor" rows="3">{{old('description')}}</textarea>
							</div>
						</div>
						
						<div class="col-md-4">
								<div class="form-group">
									<label>Upload Image</label>
									<input type="file" name="image" class="form-control input-bordered">
								</div>

								<div class="form-group">
									<label for="order">Order</label>
									<input type="text" name="order" id="order" class="form-control input-bordered" placeholder="Type Order ...">
								</div>
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