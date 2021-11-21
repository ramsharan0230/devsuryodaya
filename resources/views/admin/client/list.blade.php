@extends('admin.layout.master')
@section('title','Clients')
@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables/dataTables.bootstrap.css') }}">
@endpush
@section('content')
<div class="content-wrapper">
<section class="content-header">
	<h1>Client <small>List</small></h1>
	<a href="{{route('admin.client.create')}}" class="btn btn-success">Add Client </a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="{{ route('admin.client.index') }}">Client </a></li>
		<li><a href="#">list</a></li>
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
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Table</h3>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>S.N.</th>
								<th>Title</th>
								<th>Slug</th>
								<th>Image</th>
								<th>Order</th>
								<th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($details as $key=>$detail)
                        <tr>
                        	<td>{{ $key+1 }}</td>
				            <td>{{ $detail->name }}</td>
							<td>{{ $detail->slug }}</td>
							<td> <img src="{{ asset('client').'/'.$detail->image }}" width="100px" height="100px" alt=""></td>
							<td>{{ $detail->order }}</td>

				            <td>
								@if($detail->publish ==1)
								<span class="label label-primary">Active</span>
								@else
								<span class="label label-danger">Disable</span>
								@endif
				            </td>
				            <td>
				            	<a class="btn btn-info mb-1 edit" href="{{route('admin.client.edit', $detail->id)}}" title="Edit">Edit</a>
				            	<form method= "post" action="{{route('admin.client.destroy', $detail->id)}}" class="delete">
                				{{csrf_field()}}
                				<input type="hidden" name="_method" value="DELETE">
               					<button type="submit" class="btn  btn-danger btn-delete" data-confirm="Are you sure to delete this item?" style="display:inline">Delete</button>
               				    </form>
				            </td>
				            
                        </tr>
                        @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
@push('script')
  <!-- DataTables -->
  <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
  
  <script>
	$(function () {
		$("#example1").DataTable();
	});
</script>
@endpush
