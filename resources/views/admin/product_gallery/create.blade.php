@extends('layouts.app-master')
@section('title', 'Product Gallery Create')
@push('styles')
<style>
.custom-file-upload {
	border: 1px solid #ccc;
	display: inline-block;
	padding: 6px 12px;
	cursor: pointer;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
</style>
@endpush
@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Product Gallery</x-slot>
    <x-slot name="subTitle"> Create</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="box box-bordered border-primary">
            <div class="box-header with-border">
              <h4 class="box-title"> Product Gallery</h4>
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
				<form method="post" action="{{route('admin.product-gallery.store')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="product_id">Select Product (required)</label>
								<select name="product_id" id="product_id" class="form-control input-bordered">
									<option value="" selected disabled>Choose Product</option>
									@foreach ($products as $item)
										<option value="{{ $item->id }}">{{ $item->title }}</option>
									@endforeach
								</select>
							</div>
						
							<div class="form-group multiple-file-uploads">
								<button type="button" id="addUpload" class="btn btn-primary btn-sm">
									<i class="fa fa-plus"></i> Add new upload
									</button>
									<br/><br/>

									<label for="file-upload-1" class="custom-file-upload form-control mb-2 mr-sm-2 col-sm-5">
										Select File
									</label>
									<input id="file-upload-1" class="file-upload" name="file_upload[]" type="file" style="display:none;" multiple>
									
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
	<script>
		var uploads = $('.file-upload');
var currentUploadCount = uploads.length;
uploads.change(setLabel);

function setLabel() {
  var i = $(this).prev('label').clone();
  var file = this.files[0].name;
  $(this).prev('label').text(file);
}

$('#addUpload').click(function() {
  currentUploadCount++;
  $('.multiple-file-uploads').append("<br/>");
  var newId = 'file-upload-' + currentUploadCount;
  var newLabel = $('<label>Select File</label>')
    .attr('for', newId)
    .addClass('custom-file-upload form-control mb-2 mr-sm-2 col-sm-5');
  $('.multiple-file-uploads').append(newLabel);

  var newInput = $('<input>')
    .addClass('file-upload')
    .attr('id', newId)
    .attr('type', 'file')
	.attr('name', 'file_upload[]')
    .change(setLabel)
    .hide();

  $('.multiple-file-uploads').append(newInput);
})
	</script>
@endpush