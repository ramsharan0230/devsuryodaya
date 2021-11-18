@extends('layouts.app-master')
@section('title', 'Testimonial Edit')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Testimonial</x-slot>
    <x-slot name="subTitle"> Edit</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Testimonial</h4>
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
				<form method="post" action="{{route('admin.testimonial.update', $detail->id)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">
					<div class="row">
						<div class="col-md-8">

							<div class="form-group">
								<label for="name">Name (required)</label>
								<input type="text" name="name" class="form-control input-bordered" value="{{$detail->name}}">
							</div>

							<div class="form-group">
								<label for="designation">Designation</label>
								<textarea class="form-control input-bordered" id="designation" name="designation" rows="3">{{$detail->designation}}</textarea>
							</div>
							<div class="form-group">
								<label for="quote">Quote</label>
								<textarea class="form-control input-bordered" name="quote" rows="3" placeholder="Enter your Quote...">{{$detail->quote??old('quote')}}</textarea>
							</div>
						</div>
						<div class="col-md-4">
									<div class="form-group">
									<label>Upload Image</label>
									<input type="file" name="image" class="form-control input-bordered" value="{{ $detail->image }}">
									@if($detail->image)
									<img width="400px" height="200px" src="{{ asset('images/testimonial').'/'.$detail->image }}" alt="">
									@endif
									</div>

									<div class="form-group">
										<label for="order">Order</label>
										<input type="text" name="order" id="order" class="form-control input-bordered" value="{{ $detail->order }}" placeholder="Type Order ...">
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