<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\About\AboutRepository;
use Illuminate\Support\Facades\DB;
use Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(AboutRepository $about){
        $this->about=$about;
    }

    public function index()
    {
        $detail=$this->about->first();
        return view('admin.about.index', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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

        $value=$request->except('background_image', 'main_image','publish');

        $value['publish'] = 1;
        
        if($request->background_image){
            $image=$this->imageProcessing($request->file('background_image'));
            $value['background_image']=$image;
        }

        if($request->main_image){
            $image=$this->imageProcessing($request->file('main_image'));
            $value['main_image']=$image;
        }

        $this->about->create($value);

        return redirect()->route('admin.about.index')->with('message','About Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail=$this->about->find($id);
        return view('admin.about.edit',compact('detail'));   
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
        $old=$this->about->find($id);
        $this->validate($request, $this->rulesForUpdate());
        $value=$request->except('background_image', 'main_image', 'publish');

        $value['publish']= 1;

        if($request->hasFile('background_image')){
            $image=$this->about->find($id);

            if($image->background_image){
                $thumbPath = public_path('images/main');
                if((file_exists($thumbPath.'/'.$image->background_image))){
                    unlink($thumbPath.'/'.$image->background_image);
                }
            }
            $image=$this->imageProcessing($request->file('background_image'));
            $value['background_image']=$image;

            if($image->main_image){
                $thumbPath = public_path('images/main');
                if((file_exists($thumbPath.'/'.$image->main_image))){
                    unlink($thumbPath.'/'.$image->main_image);
                }
            }
            $image=$this->imageProcessing($request->file('main_image'));
            $value['main_image']=$image;
        }

        $this->about->update($value,$id);

        return redirect()->route('admin.about.index')->with('message','About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function imageProcessing($image){
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/main');

       $img1 = Image::make($image->getRealPath());
       $img1->save($thumbPath.'/'.$input['imagename']);
       
      
       $destinationPath = public_path('/images');
       return $input['imagename'];     
    }
    public function rules($oldId = null){

        $rules =  [
            'title' => 'required',
            'background_image'=>'required|mimes:jpeg,bmp,png,jpg',
            'main_image'=>'required|mimes:jpeg,bmp,png,jpg',
            'short_description'=>'sometimes|max: 2500',
            'description'=>'sometimes|max:15000'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'title' => 'required',
            'short_description'=>'sometimes|max:199',
            'background_image'=>'sometimes|mimes:jpeg,bmp,png,jpg',
            'main_image'=>'sometimes|mimes:jpeg,bmp,png,jpg',
            'description'=>'sometimes|max:15000'
        ];

        return $rules;
    }
}
