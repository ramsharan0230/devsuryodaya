@extends('layouts.app-master')
@section('title', 'Create About')

@section('content')
<div class="box mt-4">
    <div class="box-header with-border">
      <h4 class="box-title"> About</h4>
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
            <form class="col-sm-12" enctype="multipart/form-data" action="{{route('admin.about.update', $detail->id)}}" method="POST">
               {{csrf_field()}}
               <input type="hidden" name="_method" value="PUT">
               {{-- start new --}}
               <div class="panel panel-bd lobidrag">
                  <div class="panel-heading"> SEO Details</div>
                  <div class="row">
                     <div class="col-sm-8">
                        <div class="panel-body" >
                           <div class="form-group">
                              <label for="seo_title">Meta Title</label>
                              <input class="form-control input-bordered" type="text" name="seo_title" id="seo_title" 
                                  value="{{ $detail->seo_title }}" placeholder="Enter Meta Title">
                                  <div id="seo_title"></div>
                           </div>
                   
                          <div class="form-group">
                              <label for="editor">Meta Short Description</label>
                              <textarea name="seo_short_description"  
                                  class="form-control" rows="4" placeholder="Enter Short Description"
                                  cols="80">{{ $detail->seo_short_description  }} </textarea>
                                  <div id="seo_desc"></div>
                          </div>
                   
                          <div class="form-group">
                              <label for="seo_main_description">Meta Main Description</label>
                              <textarea name="seo_main_description" id="editor" 
                                  class="form-control" rows="4" placeholder="Enter Short Description"
                                  cols="80">{{ $detail->seo_short_description  }} </textarea>
                                  <div id="seo_desc"></div>
                          </div>
                   
                          <div class="form-group">
                              <label>Seo About Title Below</label>
                              <input class="form-control input-bordered" type="text" value="{{ $detail->seo_about_title }}" name="seo_about_title"
                                  placeholder="Enter About Title ...">
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- end new --}}

               <div class="panel panel-bd lobidrag">
                  <div class="panel-body">
                     <div class="form-group col-sm-6">
                        <label for="title">Site Name:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->title}}" name="title" id="title" required>
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="short_description">Short_description:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->short_description}}" name="short_description" id="short_description">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="main_description"> Main Description:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->main_description}}" name="main_description" id="main_description">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="first_icon_title">First Icon Title:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->first_icon_title}}" name="first_icon_title" id="first_icon_title">
                     </div>
                     <div class="form-group col-sm-6">
                        <label for="first_icon_description">First Icon Description:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->first_icon_description}}" name="first_icon_description" id="first_icon_description">
                     </div>


                     <div class="form-group col-sm-6">
                        <label for="second_icon_title">Second Icon Title:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->second_icon_title}}" name="second_icon_title" id="second_icon_title" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="second_icon_description">Second Icon Description:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->second_icon_description}}" name="second_icon_description" id="second_icon_description" >
                     </div>


                     <div class="form-group col-sm-6">
                        <label for="third_icon_title">Third Icon Title:</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->third_icon_title}}" name="third_icon_title" id="third_icon_title" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="third_icon_description">Third Icon Description</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->third_icon_description}}" name="third_icon_description" id="third_icon_description" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="fourth_icon_title">Fourth Icon Title</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->fourth_icon_title}}" name="fourth_icon_title" id="fourth_icon_title" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="fourth_icon_description">Fourth Icon Description</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->fourth_icon_description}}" name="fourth_icon_description" id="fourth_icon_description" >
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="about_title">About Title Below</label>
                        <input type="text" class="form-control input-bordered" value="{{@$detail->about_title}}" name="about_title" id="about_title">
                     </div>
                     
                  </div>
               </div>
               <div class="panel panel-bd lobidrag">
                  <div class="panel-body">
                     <div class="col-sm-12">

                        <div class="form-group col-sm-6">
                           <label>Background Image</label>
                           <input type="file" name="background_image">
                           @if(!empty($detail->background_image))
                           <?php //dd($detail->logo) ?>
                           <!-- <input type="hidden" name="background_image" value="{{@$detail->background_image}}"> -->
                           <img style="width:100px; margin-top: 10px;" src="{{asset('images/main'.'/'.@$detail->background_image)}}">
                           @endif
                        </div>

                        <div class="form-group col-sm-6">
                           <label>Main Image</label>
                           <input type="file" name="main_image">
                           @if(!empty($detail->main_image))
                           <?php //dd($detail->logo) ?>
                           <!-- <input type="hidden" name="main_image" value="{{@$detail->main_image}}"> -->
                           <img style="width:100px; margin-top: 10px;" src="{{asset('images/main'.'/'.@$detail->main_image)}}">
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
