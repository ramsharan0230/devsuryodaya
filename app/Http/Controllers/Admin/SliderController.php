<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Slider\SliderRepository;
use Illuminate\Http\Request;
// use Image;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(SliderRepository $slider){
        $this->slider=$slider;
    }

    public function index()
    {
        $details=$this->slider->orderBy('order', 'desc')->get();
        return view('admin.slider.list', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('image','publish');
        $value['publish']=is_null($request->publish)? 0 : 1 ;
        if($request->image){
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }
        $this->slider->create($value);
        return redirect()->route('admin.slider.index')->with('message','Slider Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail=$this->slider->find($id);
        return view('admin.slider.edit',compact('detail'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old=$this->slider->find($id);
        $this->validate($request, $this->rulesForUpdate());
        $value=$request->except('image','publish');

        $value['publish']=is_null($request->publish)? 0 : 1 ;
        
        if($request->hasFile('image')){
            $image=$this->slider->find($id);
            if($image->image){
                $thumbPath = public_path('images/slider');
                if((file_exists($thumbPath.'/'.$image->image))){
                    unlink($thumbPath.'/'.$image->image);
                }
            }
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }
        $this->slider->update($value,$id);
        return redirect()->route('admin.slider.index')->with('message','Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value['status'] =0;
        $this->slider->update($value, $id);

        $image=$this->slider->find($id);
        if($image->image){
            $thumbPath = public_path('images/slider');
            
            if((file_exists($thumbPath.'/'.$image->image))){
                unlink($thumbPath.'/'.$image->image);
            }
        }
        $this->slider->destroy($id);
        return redirect()->route('admin.slider.index')->with('message','Slider Deleted Successfully');
    }

    public function imageProcessing($image){
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/slider');

       $img1 = Image::make($image->getRealPath());
       $img1->save($thumbPath.'/'.$input['imagename']);
       
      
       $destinationPath = public_path('/images');
       return $input['imagename'];     
    }
    
    public function rules($oldId = null){

        $rules =  [
            'title' => 'required',
            'image'=>'required|mimes:jpeg,bmp,png,jpg',
            'short_description'=>'sometimes|max: 2500',
            'description'=>'sometimes|max:15000'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'title' => 'required',
            'image'=>'sometimes|mimes:jpeg,bmp,png,jpg',
            'short_description'=>'sometimes|max: 2500',
            'description'=>'sometimes|max:15000'
        ];

        return $rules;
    }
}
