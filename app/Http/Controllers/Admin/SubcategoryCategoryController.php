<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Subcategory\SubcategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class SubcategoryCategoryController extends Controller
{
    private $subcategory;

    public function __construct(SubcategoryRepository $subcategory){
        $this->subcategory=$subcategory;
    }


    public function index()
    {
        $details=$this->subcategory->orderBy('order', 'asc')->get();
        return view('admin.subcategory.list', compact('details'));
    }

    public function create()
    {
        return view('admin.subcategory.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('publish');
        $value['publish']=$request->publish =="on"? 1 : 0 ;
        $value['user_id'] = Auth::id();

        if($request->hasFile('feature_image')){
            $image=$this->imageProcessing($request->file('feature_image'));
            $value['feature_image']=$image;
        }

        $this->subcategory->create($value);

        DB::table('seo_categories')->insert([
            'meta_title'=>$request->name,
            'meta_description' => is_null($request->name)?$request->name:$request->name,
            'meta_phrase' => is_null($request->name)?$request->name:$request->name,
            'keyword'=> $request->name,
            'publish'=> $value['publish']
        ]);

        return redirect()->route('admin.subcategory.index')->with('message','Product Variety Added Successfully');
    }

    public function edit($id)
    {
        $detail = $this->subcategory->find($id);
        return view('admin.subcategory.edit', compact('detail'));   
    }

    public function update(Request $request, $id)
    {
        $old=$this->subcategory->find($id);
        $this->validate($request, $this->rulesForUpdate($id));
        $value=$request->except('publish');

        $value['publish']=$request->publish =="on"? 1 : 0 ;

        if($request->hasFile('feature_image')){
            $image = $this->subcategory->find($id);
            if($image->feature_image){
                $thumbPath = public_path('images/subcategorydddd');
                if((file_exists($thumbPath.'/'.$image->feature_image))){
                    unlink($thumbPath.'/'.$image->feature_image);
                }
            }
            $image=$this->imageProcessing($request->file('feature_image'));
            
            $value['feature_image']=$image;
        }
        $this->subcategory->update($value, $id);

        DB::table('seo_categories')->where('id', $id)->update([
            'meta_title'=>$request->name,
            'meta_description' => is_null($request->name)?$request->name:$request->name,
            'meta_phrase' => is_null($request->name)?$request->name:$request->name,
            'keyword'=> $request->name,
            'publish'=> $value['publish']
        ]);


        return redirect()->route('admin.subcategory.index')->with('message','Product Variety Updated Successfully');
    }


    public function destroy($id)
    {
        $value['status'] =0;
        $this->subcategory->update($value, $id);

        $this->subcategory->destroy($id);
        return redirect()->route('admin.subcategory.index')->with('message','Product Variety Deleted Successfully');
    }

    public function imageProcessing($image){
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $thumbPath = public_path('images/subcategory');

        $img1 = Image::make($image->getRealPath());
        $img1->fit(856, 642)->save($thumbPath.'/'.$input['imagename']);
        return $input['imagename'];   
    }

    public function rules($oldId = null)
    {
        $rules =  [
            'name' => 'required',
            'order'=> 'required|numeric'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'name' => 'required|unique:users,name,'. $oldId,
            'order'=> 'required|numeric'
        ];

        return $rules;
    }
}
