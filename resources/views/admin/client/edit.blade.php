@extends('admin.layout.master')
@section('title','Client Edit')
@push('admin.styles')
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('backend/plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

@endpush
@section('content')
<div class="content-wrapper">
<section class="content-header">
	<h1>Client<small>edit</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="{{ route('admin.client.index') }}">Client</a></li>
		<li><a href="">Edit</a></li>
	</ol>
</section>
<div class="content">
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
<form method="post" action="{{route('admin.client.update', $detail->id)}}" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PUT">
	<div class="row">
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header with-heading">
					<h3 class="box-title">Edit Client</h3>
				</div>
				<div class="box-body">

					<div class="form-group">
						<label for="name">Name (required)</label>
						<input type="text" name="name" class="form-control" value="{{ $detail->name }}" placeholder="Enter Name ...">
					</div>

					<div class="form-group">
						<label for="file">Upload Client</label>
						<input type="file" name="client_file" class="form-control" value="{{old('client_file')}}" >
						@if($detail->image)
							<img src="{{ asset('client').'/'.$detail->image }}" width="200px" height="200px" alt="">
							@endif
					</div>

					<div class="form-group">
						<label for="order">Order</label>
						<input type="text" name="order" class="form-control" value="{{ $detail->order }}" placeholder="Enter order 1,2,3... ">
					</div>

					<div class="form-group">
						<label for="publish"><input type="checkbox"  {{ $detail->publish==1?'checked':'' }} id="publish" name="publish"> Publish</label>
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

@endsection
@push('custom-scripts')
@endpush