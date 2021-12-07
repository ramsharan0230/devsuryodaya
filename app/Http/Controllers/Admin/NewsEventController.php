<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\NewsEvent\NewsEventRepository;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use DB;

class NewsEventController extends Controller
{
    protected $news_event;

    public function __construct(NewsEventRepository $news_event){
        $this->news_event = $news_event;
    }

    public function index()
    {
        $details=$this->news_event->orderBy('order', 'desc')->get();
        return view('admin.news_event.list', compact('details'));
    }

    public function create()
    {
        return view('admin.news_event.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('image','publish', '_token');

        $value['publish']= is_null($request->publish)? 0 : 1 ;
        $value['slug'] = Str::slug($request->title);
        $value['user_id'] = Auth::id();
         
        if($request->image){
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }

        $value['meta_title']= $request->title;
        $value['meta_subtitle']= $request->subtitle;
        $value['meta_phrase']= $request->title;
        $value['meta_description']= $request->description;
        $value['keyword']= $request->title;
        
        $this->news_event->create($value);

        //data for catalogs
        $news_event = $this->news_event->orderBy('created_at', 'desc')->first();
        $value['news_event_id']=$news_event->id;

        DB::table('seo_news_events')->insert([
            'meta_title'=>$value['meta_title'],
            'meta_subtitle'=>$value['meta_subtitle'],
            'meta_phrase'=>$value['meta_phrase'],
            'meta_description'=>$value['meta_description'],
            'keyword'=>$value['keyword'],
            'news_event_id'=>$value['news_event_id']
        ]);

        return redirect()->route('admin.news-event.index')->with('message','News Or Event Added Successfully');
    }

    public function edit($id)
    {
        $detail=$this->news_event->find($id);
        return view('admin.news_event.edit',compact('detail'));   
    }

    public function show($slug)
    {
        $detail=$this->news_event->where('slug', $slug)->first();
        return view('admin.news_event.show', compact('detail'));   
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
        $old=$this->news_event->find($id);

        $this->validate($request, $this->rules());

        $value = $request->except('image','publish');

        $value['publish']= is_null($request->publish)? 0 : 1 ;
        $value['slug'] = Str::slug($request->title);
        $value['user_id'] = Auth::id();

        if($request->hasFile('image')){
            $image=$this->news_event->find($id);
            if($image->image){
                $thumbPath = public_path('images/news_event');
                if((file_exists($thumbPath.'/'.$image->image))){
                    unlink($thumbPath.'/'.$image->image);
                }
            }
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }
        $this->news_event->update($value, $id);

        //update seo news & event

        DB::table('seo_news_events')->where('news_event_id', $id)->update([
            'meta_title'=>$value['title'],
            'meta_subtitle'=>$value['subtitle'],
            'meta_phrase'=>$value['title'],
            'meta_description'=>$value['description'],
            'keyword'=>$value['title'],
            'news_event_id'=>$id
        ]);

        return redirect()->route('admin.news-event.index')->with('message','News & Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $image=$this->news_event->find($id);
        if($image->image){
            $thumbPath = public_path('images/news_event');
            
            if((file_exists($thumbPath.'/'.$image->image))){
                unlink($thumbPath.'/'.$image->image);
            }
        }
        $this->news_event->destroy($id);
        
        return redirect()->route('admin.news-event.index')->with('message','News or Event Deleted Successfully');
    }

    public function imageProcessing($image){
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/news_event');
        if (!file_exists($thumbPath)) {
            mkdir($thumbPath, 0755, true);
        }
       $img1 = Image::make($image->getRealPath());
       $img1->save($thumbPath.'/'.$input['imagename']);
       
      
       $destinationPath = public_path('/images');
       return $input['imagename'];     
    }

    public function rules($oldId = null){

        $rules =  [
            'title' => 'required|max:255',
            'type' => 'required|in:news,event',
            'image'=>'sometimes|mimes:jpeg,bmp,png,jpg',
            'short_description'=>'sometimes|max: 2500',
            'description'=>'sometimes|max:15000',
            'subtitle' => 'sometimes|max:199'
        ];

        return $rules;
    }
    
}
