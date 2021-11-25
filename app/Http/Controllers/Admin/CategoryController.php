<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Subcategory\SubcategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    private $subcategory;
    private $category;

    public function __construct(CategoryRepository $category, SubcategoryRepository $subcategory){
        $this->subcategory=$subcategory;
        $this->category = $category;
    }


    public function index()
    {
        $details=$this->category->orderBy('order', 'asc')->get();
        return view('admin.category.list', compact('details'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('publish');
        $value['publish']= is_null($request->publish)? 0: 1 ;
        $value['user_id'] = Auth::id();

        if($request->hasFile('image')){
            $image=$this->imageProcessing($request->file('image'));
            $value['feature_image']=$image;
        }

        $this->category->create($value);

        DB::table('seo_categories')->insert([
            'meta_title'=>$request->name,
            'meta_description' => is_null($request->name)?$request->name:$request->name,
            'meta_phrase' => is_null($request->name)?$request->name:$request->name,
            'keyword'=> $request->name,
            'publish'=> $value['publish']
        ]);

        return redirect()->route('admin.category.index')->with('message','Category Added Successfully');
    }

    public function edit($id)
    {
        $detail = $this->category->find($id);
        return view('admin.category.edit', compact('detail'));   
    }

    public function update(Request $request, $id)
    {
        $old=$this->category->find($id);
        $this->validate($request, $this->rulesForUpdate($id));
        $value=$request->except('publish');

        $value['publish']= is_null($request->publish)? 0 : 1 ;

        if($request->hasFile('image')){
            $image = $this->category->find($id);
            if($image->feature_image){
                $thumbPath = public_path('images/category');
                if((file_exists($thumbPath.'/'.$image->feature_image))){
                    unlink($thumbPath.'/'.$image->feature_image);
                }
            }
            $image=$this->imageProcessing($request->file('image'));
            
            $value['feature_image']=$image;
        }
        $this->category->update($value, $id);

        DB::table('seo_categories')->where('id', $id)->update([
            'meta_title'=>$request->name,
            'meta_description' => is_null($request->name)?$request->name:$request->name,
            'meta_phrase' => is_null($request->name)?$request->name:$request->name,
            'keyword'=> $request->name,
            'publish'=> $value['publish']
        ]);


        return redirect()->route('admin.category.index')->with('message','Category Updated Successfully');
    }


    public function destroy($id)
    {
        $value['status'] =0;
        $this->subcategory->update($value, $id);

        $this->subcategory->destroy($id);
        return redirect()->route('admin.category.index')->with('message','Category Deleted Successfully');
    }

    public function imageProcessing($image){
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $thumbPath = public_path('images/category');
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
