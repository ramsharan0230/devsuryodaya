@extends('layouts.app-master')
@section('title', 'Subscriptions')

@section('bradcrumb')
<x-admin-bradcrumb >
    <x-slot name="mainTitle"> Subscriptions</x-slot>
    <x-slot name="subTitle"> List</x-slot>
</x-admin-bradcrumb>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"> Subscriptions</h4>
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
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($details as $key=>$detail)
                        <tr>
                        	<td>{{ $key+1 }}</td>
							<td>{{ $detail->email }}</td>
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
 
@endpush
