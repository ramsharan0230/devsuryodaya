@extends('admin.layout.master')
@section('title','Client Create')
@push("styles")
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endpush
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Client<small>create</small></h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="{{ route('admin.client.index') }}">Client</a></li>
			<li><a href="">Create</a></li>
		</ol>
	</section>
	<div class="content">
		@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible message">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			{!! Session::get('message') !!}
		</div>
		@endif

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
	<form method="post" action="{{route('admin.client.store')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-header with-heading">
						<h3 class="box-title">Add a Client</h3>
					</div>
					<div class="box-body">

						<div class="form-group">
							<label for="name">Title (required)</label>
							<input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Type Name ...">
						</div>

						<div class="form-group">
							<label for="file">Upload Client</label>
							<input type="file" name="client_file" class="form-control" value="{{old('client_file')}}" >
						</div>

						<div class="form-group">
							<label for="order">Order</label>
							<input type="text" name="order" class="form-control" value="{{old('order')}}" placeholder="Type Oeder 1,2,3 ...">
						</div>

						<div class="form-group">
							<label for="publish"><input type="checkbox" id="publish" name="publish" checked> Publish</label>
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
<!-- Modal -->

  {{-- modal end --}}
@endsection
@push('custom-scripts')
@endpush