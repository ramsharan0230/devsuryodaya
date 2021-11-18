<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Video\VideoRepository;
use Illuminate\Support\Facades\Input as input;
use BenSampo\Embed\Rules\EmbeddableUrl;
use Redirect;

class VideoController extends Controller
{
    private $video;

    public function __construct(VideoRepository $video){
        $this->video = $video;
    }


    public function index()
    {
        $details=$this->video->orderBy('created_at', 'desc')->get();
        return view('admin.video.list', compact('details'));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('publish');
        $value['publish']=is_null($request->publish)? 0 : 1 ;

        if($request->hasFile('video_file')){
            $fileName = time().'.'.$request->video_file->extension();  
            $request->video_file->move(public_path('videos'), $fileName);
            $value['video_file'] = $fileName;
        }
        
        $this->video->create($value);
        return redirect()->route('admin.video.index')->with('message','Video Added Successfully');
    }

    public function edit($id)
    {
        $detail = $this->video->find($id);
        return view('admin.video.edit', compact('detail'));   
    }

    public function update(Request $request, $id)
    {
        $old=$this->video->find($id);
        $this->validate($request, $this->rules($id));

        $value=$request->except('publish');

        $value['publish']=is_null($request->publish)? 0 : 1 ;

        $this->video->update($value, $id);
        return redirect()->route('admin.video.index')->with('message','Video Updated Successfully');
    }


    public function destroy($id)
    {
        $this->video->destroy($id);
        return redirect()->route('admin.video.index')->with('message','Video Deleted Successfully');
    }

    public function rules()
    {
        $rules =  [
            'title' => 'required|max:199',
            'order'=> 'required|numeric',
            'link' => ['required', new EmbeddableUrl],
            'description' => 'sometimes|max:10000'
        ];

        return $rules;
    }
}
