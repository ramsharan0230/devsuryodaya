<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Service\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    private $service;
    public function __construct(ServiceRepository $service){
        $this->service = $service;
    }


    public function index()
    {
        $details=$this->service->orderBy('order', 'asc')->get();
        return view('admin.service.list', compact('details'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('publish', 'image');
        $value['publish']=is_null($request->publish)? 0 : 1 ;
        $value['user_id'] = Auth::id();

        if($request->hasFile('image')){
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }

        $this->service->create($value);

        DB::table('seo_services')->insert([
            'meta_title'=>$request->title,
            'meta_description' => is_null($request->description)?$request->title:$request->description,
            'meta_phrase' => is_null($request->description)?$request->title:$request->description,
            'keyword'=> $request->title,
            'publish'=> $value['publish']
        ]);


        return redirect()->route('admin.service.index')->with('message','Service Added Successfully');
    }

    public function edit($id)
    {
        $detail = $this->service->find($id);
        return view('admin.service.edit', compact('detail'));   
    }

    public function update(Request $request, $id)
    {
        $old=$this->service->find($id);
        $this->validate($request, $this->rulesForUpdate($id));
        $value=$request->except('publish', '_method', '_token', 'image');

        $value['publish']=is_null($request->publish)? 0 : 1 ;

        if($request->hasFile('image')){
            
            if($old->image){
                $thumbPath = public_path('images/service');
                if((file_exists($thumbPath.'/'.$old->image))){
                    unlink($thumbPath.'/'.$old->image);
                }
            }
            $image = $this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }

        $this->service->update($value, $id);

        DB::table('seo_services')->where('id', $id)->update([
            'meta_title'=>$request->title,
            'meta_description' => is_null($request->description)?$request->title:$request->description,
            'meta_phrase' => is_null($request->description)?$request->title:$request->description,
            'keyword'=> $request->title,
            'publish'=> $value['publish']
        ]);

        return redirect()->route('admin.service.index')->with('message','Service Updated Successfully');
    }


    public function destroy($id)
    {
        $value['publish'] =0;
        $this->service->update($value, $id);

        $this->service->destroy($id);
        return redirect()->route('admin.service.index')->with('message','Service Deleted Successfully');
    }

    public function imageProcessing($image){
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $thumbPath = public_path('images/service');
        if (!file_exists($thumbPath)) {
            mkdir($thumbPath, 0755, true);
        }
        $img1 = Image::make($image->getRealPath());
        $img1->fit(856, 642)->save($thumbPath.'/'.$input['imagename']);
        return $input['imagename'];   
    }


    public function rules($oldId = null)
    {
        $rules =  [
            'title' => 'required',
            'order'=> 'required|numeric',
            'description'=>'sometimes|max:10000',
            'image' => 'required|mimes:jpg,jpeg,png'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'title' => 'required|unique:services,title,'. $oldId,
            'order'=> 'required|numeric',
            'description'=>'sometimes|max:10000',
            'image' => 'sometimes|mimes:jpg,jpeg,png'
        ];

        return $rules;
    }
}
