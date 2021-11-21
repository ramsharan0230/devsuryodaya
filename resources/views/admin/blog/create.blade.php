@extends('layouts.app-master')
@section('title', 'Blog Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Blog</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
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

				<form method="post" action="{{route('admin.blog.store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-8">
							<div class="box">
								<div class="box-header with-heading">
									<h3 class="box-title">Add a Blog</h3>
								</div>
								<div class="box-body">
									<div class="form-group">
										<label for="title">Title(required)</label>
										<input type="text" name="title" class="form-control input-bordered" value="{{old('title')}}" >
										@if ($errors->has('title'))
											<span class="text-danger text-left">{{ $errors->first('title') }}</span>
										@endif
									</div>
									
									<div class="form-group">
										<label>Publish date (required)</label> 
										<input type="text" class="date form-control input-bordered" autocomplete="off" data-date-end-date="0d"  id="datepicker" name="published_date" value="{{old('published_date')}}">
										@if ($errors->has('published_date'))
											<span class="text-danger text-left">{{ $errors->first('published_date') }}</span>
										@endif
									</div>

									<div class="form-group">
										<label>Short Description</label>
										<input class="form-control input-bordered" name="short_description" value="{{old('short_description')}}" placeholder="Type Short Descriptions ...">
										@if ($errors->has('short_description'))
											<span class="text-danger text-left">{{ $errors->first('short_description') }}</span>
										@endif
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" name="description" id="editor" rows="5" placeholder="Type description...">{{old('description')}}</textarea>
										@if ($errors->has('description'))
											<span class="text-danger text-left">{{ $errors->first('description') }}</span>
										@endif
									</div>

								</div>
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
										<input type="file" name="image" class="form-control input-bordered">
										@if ($errors->has('image'))
											<span class="text-danger text-left">{{ $errors->first('image') }}</span>
										@endif
									</div>

									<div class="form-group">
										<label for="order">Order</label>
										<input type="text" name="order" id="order" class="form-control input-bordered" placeholder="Type Order ...">
										@if ($errors->has('order'))
											<span class="text-danger text-left">{{ $errors->first('order') }}</span>
										@endif
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