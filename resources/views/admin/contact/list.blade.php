@extends('layouts.app-master')
@section('title', 'Contacts')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Contacts</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Contacts</h4>
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
								<th>Email</th>
								<th>Subject</th>
								<th>Phone</th>
								<th>Message</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
						@php($i=1)
                        @foreach($details as $detail)
                        <tr>
                        	<td>{{ $i++ }}</td>
				            <td>{{ $detail->name }}</td>
							<td>{{ $detail->email }}</td>
							<td>{{ $detail->subject }}</td>
							<td>{{ $detail->phone }}</td>
							<td>{{ $detail->message }}</td>

				            <td>
				            	<form method= "post" action="{{route('admin.contact.destroy', $detail->id)}}" class="delete">
                				{{csrf_field()}}
                				<input type="hidden" name="_method" value="DELETE">
               					<button type="submit" class="btn  btn-danger btn-delete" data-confirm="Are you sure to delete this item?" style="display:inline">Delete</button>
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
</div>
@endsection
@push('script')
 
@endpush
