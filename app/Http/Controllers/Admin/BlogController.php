<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Blog\BlogRepository;
use Illuminate\Support\Facades\DB;
use Image;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(BlogRepository $blog){
        $this->blog=$blog;
    }

    public function index()
    {
        $details=$this->blog->orderBy('order', 'desc')->get();
        return view('admin.blog.list', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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

        $value['publish']=$request->publish =="on"? 1 : 0 ;
        
        if($request->image){
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }
        $this->blog->create($value);
        DB::table('seo_blogs')->insert([
            'meta_title'=>$request->title,
            'meta_description' => is_null($request->description)?$request->title:$request->description,
            'meta_phrase' => is_null($request->short_description)?$request->title:$request->short_description,
            'keyword'=> is_null($request->keyword)?$request->title:$request->keyword,
            'publish'=> 1
        ]);

        return redirect()->route('admin.blog.index')->with('message','Blog Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail=$this->blog->find($id);
        return view('admin.blog.edit',compact('detail'));   
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
        $old=$this->blog->find($id);
        $this->validate($request, $this->rulesForUpdate());
        $value=$request->except('image','publish');

        $value['publish']=$request->publish =="on"? 1 : 0 ;

        if($request->hasFile('image')){
            $image=$this->blog->find($id);
            if($image->image){
                $thumbPath = public_path('images/blog');
                if((file_exists($thumbPath.'/'.$image->image))){
                    unlink($thumbPath.'/'.$image->image);
                }
            }
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }

        $this->blog->update($value,$id);

        DB::table('seo_blogs')->where('id', $id)->update([
            'meta_title'=>$request->title,
            'meta_description' => is_null($request->description)?$request->title:$request->description,
            'meta_phrase' => is_null($request->short_description)?$request->title:$request->short_description,
            'keyword'=> is_null($request->keyword)?$request->title:$request->keyword,
            'publish'=> $value['status']
        ]);


        return redirect()->route('admin.blog.index')->with('message','Blog Updated Successfully');
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
        $this->blog->update($value, $id);

        $image=$this->blog->find($id);
        if($image->image){
            $thumbPath = public_path('images/blog');
            
            if((file_exists($thumbPath.'/'.$image->image))){
                unlink($thumbPath.'/'.$image->image);
            }
        }
        $this->blog->destroy($id);
        return redirect()->route('admin.blog.index')->with('message','Blog Deleted Successfully');
    }
    public function imageProcessing($image){
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/blog');

       $img1 = Image::make($image->getRealPath());
       $img1->fit(856, 642)->save($thumbPath.'/'.$input['imagename']);
       
      
       $destinationPath = public_path('/images');
       return $input['imagename'];     
    }
    public function rules($oldId = null){

        $rules =  [
            'title' => 'required',
            'published_date'=>'required|date',
            'image'=>'required|mimes:jpeg,bmp,png,jpg',
            'short_description'=>'sometimes|max: 2500',
            'description'=>'sometimes|max:15000'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'title' => 'required',
            'published_date'=>'required|date',
            'image'=>'sometimes|mimes:jpeg,bmp,png,jpg',
            'short_description'=>'sometimes|max: 2500',
            'description'=>'sometimes|max:15000'
        ];

        return $rules;
    }
}
