@extends('layouts.app-master')
@section('title', 'Subcategory')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Subcategory</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Subcategory</h4>
      <a href="{{ route('admin.subcategory.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>  Add</a>
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
								<th>Slug</th>
                <th>Category</th>
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
							<td>{{ $detail->category->name }}</td>

							<td>
								@if($detail->image)
									<img src="{{ asset('images/subcategory').'/'.$detail->image }}" width="150px" height="100px" alt="feature-image">
								@else
								<p>No Image Found!</p>
								@endif
							</td>
							<td>{{ $detail->order }}</td>
				            <td>
				            	@if((int) $detail->publish==1)
				            	<span class="label label-primary">Active</span>
				            	@else
				            	<span class="label label-danger">Inactive</span>
				            	@endif
				            </td>
				            <td>
				            	<a class="btn btn-info edit" href="{{route('admin.subcategory.edit', $detail->id)}}" title="Edit">Edit</a>
				            	<form method= "post" action="{{route('admin.subcategory.destroy', $detail->id)}}" class="delete">
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
