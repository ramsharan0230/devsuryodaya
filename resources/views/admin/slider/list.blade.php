@extends('layouts.app-master')
@section('title', 'Sliders')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Sliders</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Sliders</h4>
      <a href="{{ route('admin.slider.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
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
								<th>Link Title</th>
								<th>Link</th>
								<th>Order</th>
								<th>Short Description</th>
								<th>Descriptions</th>
								<th>Image</th>
								<th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
						@php($i=1)
                        @foreach($details as $detail)
                        <tr>
                        	<td>{{$i++}}</td>
				            <td>{{$detail->title}}</td>
				            <td>{{$detail->link_title}}</td>
				            <td>{{$detail->link}}</td>
							<td>{{ $detail->order }}</td>
				            <td>{{$detail->short_description}}</td>
							<td>{!! \Illuminate\Support\Str::limit($detail->description, 75, $end='...') !!}</td>
				            <td>
								@if($detail->image)
								<img width="100" height="100" src="{{asset('images/slider/'.$detail->image)}}">
								@else
								<p>N/A</p>
								@endif
				            </td>
				            <td>
				            	@if((int) $detail->publish==1)
				            	<span class="label label-primary">Active</span>
				            	@else
				            	<span class="label label-danger">Inactive</span>
				            	@endif
				            </td>
				            <td>
				            	<a class="btn btn-info btn-sm edit" href="{{route('admin.slider.edit', $detail->id)}}" title="Edit">Edit</a>
				            	<form method="post" action="{{route('admin.slider.destroy', $detail->id)}}" class="delete">
                				{{csrf_field()}}
                				<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
               				    </form>
				            </td>
				            
                        </tr>
                        @php($i++)
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
  
@endpush
