<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Subcategory\SubcategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class SubcategoryController extends Controller
{
    private $subcategory;

    public function __construct(CategoryRepository $category, SubcategoryRepository $subcategory){
        $this->category = $category;
        $this->subcategory = $subcategory;
    }


    public function index()
    {
        $details=$this->subcategory->orderBy('created_at', 'desc')->get();
        return view('admin.subcategory.list', compact('details'));
    }

    public function create()
    {
        $categories = $this->category->where('publish', 1)->get();
        return view('admin.subcategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $value=$request->except('publish');
        $value['publish']= is_null($request->publish)? 0 : 1;

        $value['user_id'] = Auth::id();
        $value['category_id'] = $request->category_id;

        if($request->hasFile('image')){
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }
        $value['slug']= Str::slug($request->name, '-');

        $this->subcategory->create($value);

        DB::table('seo_categories')->insert([
            'meta_title'=>$request->name,
            'meta_description' => is_null($request->description)?$request->name:$request->description,
            'meta_phrase' => is_null($request->description)?$request->name:$request->description,
            'keyword'=> $request->name,
            'publish'=> $value['publish']
        ]);

        return redirect()->route('admin.subcategory.index')->with('message','Subcategory Added Successfully');
    }

    public function edit($id)
    {
        $detail = $this->subcategory->find($id);
        $categories = $this->category->where('publish', 1)->get();
        return view('admin.subcategory.edit', compact('detail', 'categories'));   
    }

    public function update(Request $request, $id)
    {
        $old=$this->subcategory->find($id);

        $this->validate($request, $this->rulesForUpdate($id));
        $value=$request->except('publish');

        $value['publish']= is_null($request->publish)? 0 : 1;
        $value['category_id'] = $request->category_id;
        $value['slug']= Str::slug($request->name, '-');

        if($request->hasFile('image')){
            if($old->image){
                $thumbPath = public_path('images/subcategory');
                if((file_exists($thumbPath.'/'.$old->image))){
                    unlink($thumbPath.'/'.$old->image);
                }
            }
            $image=$this->imageProcessing($request->file('image'));
            
            $value['image']=$image;
        }
        $this->subcategory->update($value, $id);

        DB::table('seo_categories')->where('id', $id)->update([
            'meta_title'=>$request->name,
            'meta_description' => is_null($request->description)?$request->name:$request->description,
            'meta_phrase' => is_null($request->description)?$request->name:$request->description,
            'keyword'=> $request->name,
            'publish'=> $value['publish']
        ]);

        return redirect()->route('admin.subcategory.index')->with('message','Subcategory Updated Successfully');
    }


    public function destroy($id)
    {
        $value['status'] =0;
        $this->category->update($value, $id);

        $this->category->destroy($id);
        return redirect()->route('admin.category.index')->with('message','Subcategory Deleted Successfully');
    }

    public function imageProcessing($image){
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $thumbPath = public_path('images/subcategory');
        if (!file_exists($thumbPath)) {
            mkdir($thumbPath, 0755, true);
        }

        $img1 = Image::make($image->getRealPath());
        $img1->save($thumbPath.'/'.$input['imagename']);
        return $input['imagename'];   
    }

    public function rules()
    {
        $rules =  [
            'name' => 'required',
            'order'=> 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,png'
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){

        $rules =  [
            'name' => 'required|unique:users,name,'. $oldId,
            'order'=> 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'sometimes|mimes:jpg,jpeg,png'
        ];

        return $rules;
    }
}
