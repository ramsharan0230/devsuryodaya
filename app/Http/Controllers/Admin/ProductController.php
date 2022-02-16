<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Subcategory\SubcategoryRepository;
use App\Repositories\Service\ServiceRepository;
use App\Repositories\Catalog\CatalogRepository;
use App\Repositories\ProductGallery\ProductGalleryRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    protected $subcategory;
    private $service;
    protected $pgallery;

    public function __construct(ProductRepository $product, ServiceRepository $service, CategoryRepository $category, 
    SubcategoryRepository $subcategory, CatalogRepository $catalog, ProductGalleryRepository $productGallery){
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->service = $service;
        $this->catalog = $catalog;
        $this->pgallery = $productGallery;
    }

    public function index()
    {
        $details=$this->product->orderBy('updated_at', 'desc')->get();
        return view('admin.product.list', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = $this->subcategory->where('publish', 1)->get();
        $services = $this->service->where('publish', 1)->get();
        return view('admin.product.create', compact('subcategories', 'services'));
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

        $value=$request->except('image','publish', 'catalog_file', 'subcategory_id');
        $value['subcategory_id']=$request->subcategory_id;

        $value['publish']= is_null($request->publish)? 0 : 1 ;
        $value['featured']= is_null($request->featured)? 0 : 1 ;
        
        if($request->image){
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }

        $value['meta_title']= $request->title;
        $value['meta_description']= $request->description;
        $this->product->create($value);

        //data for catalogs
        $product = $this->product->first();
        if($request->hasFile('catalog_file')){
            $catalog['title'] = $request->title;
            $catalog['slug'] = Str::slug($request->title);
            $fileName = time().'.'.$request->catalog_file->extension();  
            $request->catalog_file->move(public_path('catalogs'), $fileName);
            $catalog['catalog_file'] = $fileName;

            $catalog['order'] = $request->order;
            $catalog['publish'] = $value['publish'];
            $catalog['product_id'] = $product->id;
            $this->catalog->create($catalog);
        }
        // create gallery
        $gallery['image'] = $value['image'];
        $gallery['order'] = $request->order;
        $gallery['publish'] = $value['publish'];
        $gallery['product_id'] = $product->id;
        $this->pgallery->create($gallery);

        return redirect()->route('admin.product.index')->with('message','Product Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail=$this->product->find($id);
        $subcategories = $this->subcategory->where('publish', 1)->get();
        $services = $this->service->where('publish', 1)->get();

        return view('admin.product.edit',compact('detail', 'subcategories', 'services'));   
    }

    public function show($id)
    {
        $detail=$this->product->find($id);
        return view('admin.product.show', compact('detail'));   
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
        $old=$this->product->find($id);

        $this->validate($request, $this->rules());
        $value = $request->except('image','publish');

        $value['publish']= is_null($request->publish)? 0 : 1 ;
        $value['featured']= is_null($request->featured)? 0 : 1 ;

        if($request->hasFile('image')){
            $image=$this->product->find($id);
            if($image->image){
                $thumbPath = public_path('images/product');
                if((file_exists($thumbPath.'/'.$image->image))){
                    unlink($thumbPath.'/'.$image->image);
                }
            }
            $image=$this->imageProcessing($request->file('image'));
            $value['image']=$image;
        }
        $this->product->update($value,$id);

        //update catalog
        $cat = [];
        $cat['title'] = $request->title;
        $cat['slug'] = Str::slug($request->title);

        if($request->hasFile('catalog_file')){
            $fileName = time().'.'.$request->catalog_file->extension();  
            $request->catalog_file->move(public_path('catalogs'), $fileName);
            $cat['catalog_file'] = $fileName;
        };

        $cat['order'] = $request->order;
        $cat['publish'] = $value['publish'];
        $cat['product_id'] = $id;
        $checkCatalog = $this->catalog->where('product_id', $id)->first();

        if($checkCatalog)
            $this->catalog->update($cat, $checkCatalog->id);
        else
            $this->catalog->create($cat);

        return redirect()->route('admin.product.index')->with('message','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=$this->product->find($id);
        if($image->image){
            $thumbPath = public_path('images/product');
            $thumbGalleyPath = public_path('images/product_gallery');
            
            if((file_exists($thumbPath.'/'.$image->image))){
                unlink($thumbPath.'/'.$image->image);
            }

            if((file_exists($thumbGalleyPath.'/'.$image->image))){
                unlink($thumbGalleyPath.'/'.$image->image);
            }
        }
        $this->product->destroy($id);
        $checkCatalog = $this->catalog->where('product_id', $id)->first();
        
        if($checkCatalog)
            $this->catalog->destroy($checkCatalog->id);
        
        $pgallery = $this->pgallery->where('product_id', $id)->delete();
        
        return redirect()->route('admin.product.index')->with('message','Product Deleted Successfully');
    }

    public function categoryByProductVeriety($id){
        $categories = $this->category->where('subcategory_id', $id)->get();
        return response()->json(['data'=>$categories, 'status'=>200], 200);
    }

    public function addGalleryToProduct($product_id){
        return view('admin.product_gallery.create', compact('product_id')); 
    }


    public function imageProcessing($image){
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/product');
        if (!file_exists($thumbPath)) {
            mkdir($thumbPath, 0755, true);
        }
       $img1 = Image::make($image->getRealPath());
       $img1->save($thumbPath.'/'.$input['imagename']);

       $thumbGalleryPath = public_path('images/product_gallery');
        if (!file_exists($thumbGalleryPath)) {
            mkdir($thumbGalleryPath, 0755, true);
        }
       $img1->save($thumbGalleryPath.'/'.$input['imagename']);
       
      
       $destinationPath = public_path('/images');
       return $input['imagename'];     
    }

    public function rules($oldId = null){

        $rules =  [
            'title' => 'required|max:255',
            'image'=>'sometimes|mimes:jpeg,bmp,png,jpg',
            'short_description'=>'sometimes|max: 2500',
            'order'=>'required|Integer',
            'description'=>'sometimes|max:15000',
            'subtitle' => 'sometimes|max:199',
            'subcategory_id' =>'required|numeric',
            'service_id' => 'sometimes|numeric',
            'catalog_file'=> 'exclude_if:null, numeric|mimes:doc,pdf,docx,zip'
        ];

        return $rules;
    }

}
