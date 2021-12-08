<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Repositories\ProductGallery\ProductGalleryRepository;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Str;

class ProductGalleryController extends Controller
{
    protected $product;
    protected $product_gallery;

    public function __construct(ProductGalleryRepository $product_gallery, ProductRepository $product){
        $this->product_gallery = $product_gallery;
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->where('publish', 1)->get();
        $details=$this->product_gallery->orderBy('order', 'desc')->get();
        return view('admin.product_gallery.list', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->product->where('publish', 1)->get();
        return view('admin.product_gallery.create', compact('products'));
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

        $value=$request->except('file_upload','publish', 'product_id');
        $value['product_id']=$request->product_id;

        $value['publish']= is_null($request->publish)? 0 : 1 ;

        foreach($request->file_upload as $key=>$file){
            $image=$this->imageProcessing($file);
            $value['image']=$image;

            $this->product_gallery->create($value);
        }

        $this->product_gallery->create($value);

        return redirect()->route('admin.product-gallery.index')->with('message','Product Gallery Image Added Successfully');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=$this->product_gallery->find($id);
        if($image->image){
            $thumbPath = public_path('images/product_gallery');
            
            if((file_exists($thumbPath.'/'.$image->image))){
                unlink($thumbPath.'/'.$image->image);
            }
        }
        $this->product_gallery->destroy($id);
        
        return redirect()->route('admin.product-gallery.index')->with('message','Product Gallery Image Deleted Successfully');
    }

    public function imageProcessing($image){
       $input['imagename'] = time().rand(0,1000).'.'.$image->getClientOriginalExtension();
       $thumbPath = public_path('images/product_gallery');
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
            'product_id' => 'required|integer',
            'file_upload.*' => "required|mimes:jpg,png,jpeg|max:20000"
        ];

        return $rules;
    }
}
