@extends('layouts.app-master')
@section('title', 'Blogs')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Blogs</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Blogs</h4>
      <a href="{{ route('admin.blog.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
          <table id="example" class="form-input-table display table table-bordered">
            <thead>
                <tr class="text-dark">
                  <th>S.N.</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Descriptions</th>
                  <th>Order</th>
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
					<td>{{@$detail->user->name}}</td>
					<td>{!! $detail->description !!}</td>
					<td>{{ $detail->order }}</td>
					<td>@if($detail->image)
						<img width="100" height="100" src="{{asset('images/blog/'.$detail->image)}}">
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
						<a class="btn btn-info edit" href="{{route('admin.blog.edit', $detail->id)}}" title="Edit">Edit</a>
						<form method= "post" action="{{route('admin.blog.destroy', $detail->id)}}" class="delete">
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
    <!-- /.box-body -->
  </div>
@endsection


@push('script')
  <!-- DataTables -->
  <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('backend/plugins/fastclick/fastclick.js') }}"></script>
  <script >
  	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
       $('.message').fadeOut(3000);
       $('.delete').submit(function(e){
        e.preventDefault();
        var message=confirm('Are you sure to delete');
        if(message){
          this.submit();
        }
        return;
       });
    });
  </script>
  <script>
  $(function () {
    $("#example1").DataTable();
  });

</script>
@endpush

