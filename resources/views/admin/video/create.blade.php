@extends('layouts.app-master')
@section('title', 'Video Create')
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Video</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Video</h4>
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
				<form method="post" action="{{route('admin.video.store')}}" >
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-8">
							
								<div class="form-group">
									<label for="title">Title (required)</label>
									<input type="text" name="title" class="form-control input-bordered" value="{{old('title')}}" placeholder="Type Title ...">
								</div>

								<div class="form-group">
									<label for="file">Youtube link</label>
									<input type="text" name="link" class="form-control input-bordered" value="{{old('link')}}" placeholder="Paste youtube video link ...">
								</div>

								<div class="form-group">
									<label for="order">Order</label>
									<input type="number" name="order" class="form-control input-bordered" value="{{old('order')}}" placeholder="Type Oeder 1,2,3 ...">
								</div>

								<div class="form-group">
									<label for="editor">Description</label>
									<textarea class="form-control" name="description" id="editor" rows="3" placeholder="Type Description...">{{old('description')}}</textarea>
								</div>

								<div class="form-group">
									<div class="form-group">
										<input type="checkbox" value="1" name="publish" id="basic_checkbox_1" class="filled-in" checked>
										<label for="basic_checkbox_1" class="mb-0 h-15">Publish</label>
									</div>
								</div>

								<div class="form-group">
									<button class="btn btn-primary btn-sm" type="submit">Save</button>
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