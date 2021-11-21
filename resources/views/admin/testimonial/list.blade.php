@extends('layouts.app-master')
@section('title', 'Testimonial')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Testimonial</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Testimonial</h4>
      <a href="{{ route('admin.testimonial.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
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
								<th>Name</th>
								<th>Designation</th>
								<th>Image</th>
								<th>Quote</th>
								<th>Status</th>
								<th>Order</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($details as $key=>$detail)
                        <tr>
                        	<td>{{$key+1}}</td>
				            <td>{{$detail->name}}</td>
							<td>{!! $detail->designation !!}</td>
				            <td>@if($detail->image)
								<img width="100" height="100" src="{{asset('images/testimonial/'.$detail->image)}}">
								@else
								<p>N/A</p>
								@endif
				            </td>
							<td>{!! $detail->quote !!}</td>
				            <td>
				            	@if((int) $detail->publish==1)
				            	<span class="label label-primary">Active</span>
				            	@else
				            	<span class="label label-danger">Inactive</span>
				            	@endif
				            </td>
							<td>{{ $detail->order }}</td>
				            <td>
				            	<a class="btn btn-info btn-sm edit" href="{{route('admin.testimonial.edit', $detail->id)}}" title="Edit">Edit</a>
				            	<form method="post" action="{{route('admin.testimonial.destroy', $detail->id)}}" class="delete">
                				{{csrf_field()}}
                				<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection
@push('script')
 
@endpush
