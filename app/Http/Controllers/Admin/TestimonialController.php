<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Testimonial\TestimonialRepository;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(TestimonialRepository $testimonial){
        $this->testimonial=$testimonial;
    }

    public function index()
    {
        $details=$this->testimonial->orderBy('order', 'desc')->get();
        return view('admin.testimonial.list', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
        $this->testimonial->create($value);
        return redirect()->route('admin.testimonial.index')->with('message','Testimonial Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail=$this->testimonial->find($id);
        return view('admin.testimonial.edit',compact('detail'));   
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
        $old=$this->testimonial->find($id);
        $this->validate($request, $this->rulesForUpdate());
        $value=$request->except('image','publish');

        $value['publish']=is_null($request->publish)? 0 : 1 ;
        
        if($request->hasFile('image')){
            $image=$this->testimonial->find($id);
            if($image->image){
                $thumbPath = public_path('images/testimonial');
                if((file_exists($thumbPath.'/'.$image->image))){
                    unlink($thumbPath.'/'.$image->image);
                }
            }
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }
        $this->testimonial->update($value,$id);
        return redirect()->route('admin.testimonial.index')->with('message','Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $image=$this->testimonial->find($id);
        if($image->image){
            $thumbPath = public_path('images/testimonial');
            
            if((file_exists($thumbPath.'/'.$image->image))){
                unlink($thumbPath.'/'.$image->image);
            }
        }
        $this->testimonial->destroy($id);
        return redirect()->route('admin.testimonial.index')->with('message','Testimonial Deleted Successfully');
    }

    public function imageProcessing($image){
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/testimonial');

       $img1 = Image::make($image->getRealPath());
       $img1->save($thumbPath.'/'.$input['imagename']);
       
      
       $destinationPath = public_path('/images');
       return $input['imagename'];     
    }
    
    public function rules($oldId = null){

        $rules =  [
            'name' => 'required',
            'image'=>'required|mimes:jpeg,bmp,png,jpg',
            'designation'=>'required|max: 199',
            'quote'=>'sometimes|max:15000'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'name' => 'required',
            'image'=>'sometimes|mimes:jpeg,bmp,png,jpg',
            'designation'=>'required|max: 199',
            'quote'=>'sometimes|max:15000'
        ];

        return $rules;
    }
}
