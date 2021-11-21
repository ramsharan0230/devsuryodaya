@extends('layouts.app-master')
@section('title', 'Settings')

@section('content')
<div class="box mt-4">
    <div class="box-header with-border">
      <h4 class="box-title"> Settings</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
         <!-- Form controls -->
         <div class="col-sm-12">
            @if ($errors->any())
         <div class="alert alert-danger" role="alert">
            <ul>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#000;">
                  <span aria-hidden="true">&times;</span>
               </button>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
            <form class="col-sm-12" enctype="multipart/form-data" action="{{route('admin.site-setting.update', $detail->id)}}" method="POST">
               {{csrf_field()}}
               <input type="hidden" name="_method" value="PUT">
               {{-- start new --}}
               <div class="panel panel-bd lobidrag">
                  <div class="panel-heading"> SEO Details</div>
                  <div class="panel-body">
                     <div class="form-group">
                        <label>Meta Title</label>
                        <input class="form-control input-bordered" type="text" name="meta_title" id="meta_title" 
                            value="{{ $seo_siteSettings->meta_title }}" placeholder="Enter Meta Title">
                            <div id="seo_title"></div>
                    </div>
             
                    <div class="form-group">
                        <label for="editor">Meta Description</label>
                        <textarea name="meta_description" id="editor" 
                            class="form-control" rows="4" placeholder="Enter Meta Description"
                            cols="80">{{ $seo_siteSettings->meta_description  }} </textarea>
                            <div id="seo_desc"></div>
                    </div>
             
                    <div class="form-group">
                        <label>Meta phrase</label>
                        <input class="form-control input-bordered" type="text" value="{{ $seo_siteSettings->meta_phrase }}"
                            name="meta_phrase" placeholder="Enter Meta phrase">
                    </div>
             
                    <div class="form-group">
                        <label>Keywords</label>
                        <input class="form-control input-bordered" type="text" value="{{ $seo_siteSettings->keyword }}" name="keyword"
                            placeholder="Enter Keywords">
                    </div>
                  </div>
               </div>
               {{-- end new --}}

               <div class="panel panel-bd lobidrag">
                  <div class="panel-body">
                     <div class="form-group col-sm-6">
                        <label for="site_name">Site Name:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->site_name}}" name="site_name" id="site_name" required>
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->email}}" name="email" id="email">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->address}}" name="address" id="address">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="landline">Landline:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->landline}}" name="landline" id="landline">
                     </div>
                     <div class="form-group col-sm-6">
                        <label for="mobile">Mobile:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->mobile}}" name="mobile" id="mobile">
                     </div>


                     <div class="form-group col-sm-6">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->location}}" name="location" id="location" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="location_url">Location Url:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->location_url}}" name="location_url" id="location_url" >
                     </div>


                     <div class="form-group col-sm-6">
                        <label for="map">Map:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->map}}" name="map" id="map" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->facebook}}" name="facebook" id="facebook" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="twiter">Twiter</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->twiter}}" name="twiter" id="twiter" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->instagram}}" name="instagram" id="instagram" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="customer_care_phone">Customer Care Phone</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->customer_care_phone}}" name="customer_care_phone" id="customer_care_phone">
                     </div>
                     <div class="form-group col-sm-6">
                        <label for="customer_care_email">Customer Care Email</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->customer_care_email}}" name="customer_care_email" id="instagram">
                     </div>
                  </div>
               </div>
               <div class="panel panel-bd lobidrag">
                  <div class="panel-body">
                     <div class="col-sm-12">
                        <div class="form-group col-sm-6">
                           <label>Logo</label>
                           <input type="file" name="logo">
                           @if(!empty($detail->logo))
                           <?php //dd($detail->logo) ?>
                           <input type="hidden" name="current_image" value="{{@$detail->logo}}">
                           <img style="width:100px; margin-top: 10px;" src="{{asset('images/main'.'/'.@$detail->logo)}}">
                           @endif
                        </div>
                        <div class="form-group col-sm-4">
                           <label>Banner Logo</label>
                           <input type="file" name="service_banner1">
                           @if(!empty($detail->service_banner1))
                           <input type="hidden" name="banner_image" value="{{$detail->service_banner1}}">
                           <img style="width:100px; margin-top: 10px;" src="{{asset('uploads/SiteSetting/'. @$detail->service_banner1)}}">
                           @endif
                        </div>
                        <div class="form-group col-sm-4">
                           <label>Service Banner</label>
                           <input type="file" name="service_banner2">
                           @if(!empty($detail->service_banner2))
                           <input type="hidden" name="service_banner2" value="{{$detail->service_banner2}}">
                           <img style="width:100px; margin-top: 10px;" src="{{asset('uploads/SiteSetting/'. @$detail->service_banner2)}}">
                           @endif
                        </div>
                        <div class="form-group col-sm-4">
                           <label>Service Banner</label>
                           <input type="file" name="service_banner3">
                           @if(!empty($detail->service_banner3))
                           <input type="hidden" name="service_banner3" value="{{$detail->service_banner3}}">
                           <img style="width:100px; margin-top: 10px;" src="{{asset('uploads/SiteSetting/'. @$detail->service_banner3)}}">
                           @endif
                        </div>
                     </div>

                     <div class="reset-button col-sm-12">
                        <input type="submit" class="btn btn-success" value="Update Site Setting">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
</div>
</section>
<!-- /.content -->
</div>

@endsection
@push('scripts')
	<script src="{{ asset('assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
	<script src="{{ asset('src/js/pages/editor.js') }}"></script>

	<script>
		$('.date').datepicker({
			format:'yyyy-mm-dd',
		}).datepicker("setDate",'now');
	</script>
@endpush
