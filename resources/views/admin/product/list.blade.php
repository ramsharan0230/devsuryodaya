@extends('layouts.app-master')
@section('title', 'Product')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Product</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Product</h4>
      <a href="{{ route('admin.product.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>S.N.</th>
								<th>Title</th>
								<th>Image</th>
								<th>Subcategory</th>
								<th>Order</th>
								<th>Catalog</th>
								<th>Featured</th>
								<th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($details as $key=>$detail)
                        <tr>
                        	<td>{{$key+1}}</td>
				            <td>{{$detail->title}}</td>
							<td>@if($detail->image)
								<img width="100" height="100" src="{{asset('images/product/'.$detail->image)}}">
								@else
								<p>N/A</p>
								@endif
				            </td>
				            <td>{{$detail->subcategory->name}}</td>
				            <td>{{$detail->order}}</td>
				            
							<td>
								@if($detail->catalog)
									{{ $detail->catalog->title }} ({{ $detail->catalog->catalog_file }})
								@else
								<p>N/A</p>
								@endif
							</td>
							<td>
				            	@if((int) $detail->featured == 1)
				            	<span class="label label-primary">Featured</span>
				            	@else
				            	<span class="label label-danger">Normal</span>
				            	@endif
				            </td>
				            <td>
				            	@if((int) $detail->publish == 1)
				            	<span class="label label-primary">Active</span>
				            	@else
				            	<span class="label label-danger">Inactive</span>
				            	@endif
				            </td>

				            <td>
				            	<div class="row">
									<div class="col-sm-9">
										<a class="btn btn-info edit pull-right " href="{{route('admin.product.edit', $detail->id)}}" title="Edit">Edit</a>
										<a class="btn btn-warning pull-right " href="{{route('admin.product.show', $detail->id)}}" title="Show">Show</a>
										<a class="btn btn-primary pull-right" href="{{ route('admin.product.add-gallery', $detail->id)}}" title="Add Gallery">Add Gallery</a>
									</div>
									<div class="col-sm-3">
										<form method= "post" action="{{route('admin.product.destroy', $detail->id)}}" class="delete">
											{{csrf_field()}}
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn  btn-danger btn-delete" data-confirm="Are you sure to delete this item?" style="display:inline">Delete</button>
										</form>
									</div>
								</div>
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
@endsection
@push('scripts')
  <!-- DataTables -->
 
@endpush
