@extends('layouts.app-master')
@section('title', 'News or Events')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> News or Events</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> News or Events</h4>
      <a href="{{ route('admin.news-event.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
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
								<th>Subtitle</th>
								<th>Short Description</th>
								<th>Descriptions</th>
								<th>Image</th>
								<th>Status</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($details as $key=>$detail)
                        <tr>
                        	<td>{{$key+1}}</td>
				            <td>{{$detail->title}}</td>
							<td>{{@$detail->subtitle}}</td>
							<td>{!! $detail->short_description !!}</td>
							<td>{!! $detail->description !!}</td>
				            <td>@if($detail->image)
								<img width="100" height="100" src="{{asset('images/news_event/'.$detail->image)}}">
								@else
								<p>N/A</p>
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
				            	<a class="btn btn-info edit" href="{{route('admin.news-event.edit', $detail->id)}}" title="Edit">Edit</a>
				            	<form method= "post" action="{{route('admin.news-event.destroy', $detail->id)}}" class="delete">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn  btn-danger btn-delete" data-confirm="Are you sure to delete this item?" style="display:inline">Delete</button>
               				    </form>
								<a class="btn btn-warning" href="{{route('admin.news-event.show', $detail->slug)}}" title="Show">Show</a>
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
