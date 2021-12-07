@extends('layouts.app-master')
@section('title', 'News Event Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> News Event</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> News Event</h4>
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
				<form method="post" action="{{route('admin.news-event.store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="title">Title (required)</label>
								<input type="text" name="title" class="form-control input-bordered" value="{{old('title')}}" placeholder="Type Title">
							</div>

							<div class="form-group">
								<label for="subtitle">Subtitle (optional)</label>
								<input type="text" name="subtitle" class="form-control input-bordered" value="{{old('subtitle')}}" placeholder="Type Subtitle">
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="order">Order (optional)</label>
										<input type="number" name="order" class="form-control input-bordered" value="{{old('order')}}" placeholder="Type Order">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="type">Type (required)</label>
										<select name="type" id="type" class="form-control input-bordered">
											<option value="" selected>Choose Type</option>
											<option value="news">News</option>
											<option value="event">Event</option>
										</select>
									</div>
								</div>
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
								<input type="file" name="image" class="form-control input-bordered" required>
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
		ClassicEditor
		.create( editorElement, {
			ckfinder: {
				uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
			}
		} )
		.then( ... )
		.catch( ... );
	</script>
@endpush