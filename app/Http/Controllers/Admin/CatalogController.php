<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Catalog\CatalogRepository;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Http\Request;
use Redirect;

class CatalogController extends Controller
{
    private $catalog;
    private $product;

    public function __construct(CatalogRepository $catalog, ProductRepository $product){
        $this->catalog = $catalog;
        $this->product = $product;
    }


    public function index()
    {
        $details=$this->catalog->orderBy('created_at', 'desc')->get();
        $products = $this->product->where('publish', 1)->get();
        return view('admin.catalog.list', compact('details', 'products'));
    }

    public function create()
    {
        $products = $this->product->where('publish', 1)->get();
        return view('admin.catalog.create', compact('products'));
    }

    public function store(Request $request)
    {
        if($request->product_id != null){
            if(!is_numeric($request->product_id))
                return back()->withInput()->withErrors(['product_id.numeric', 'Product must be numeric']);
        }

        $this->validate($request, $this->rules());

        $value=$request->except('publish');
        $value['publish']=is_null($request->publish)? 0 : 1 ;

        if($request->hasFile('catalog_file')){
            $fileName = time().'.'.$request->catalog_file->extension();  
            $request->catalog_file->move(public_path('catalogs'), $fileName);
            $value['catalog_file'] = $fileName;
        }
        
        $this->catalog->create($value);
        return redirect()->route('admin.catalog.index')->with('message','Catalog Added Successfully');
    }

    public function edit($id)
    {
        $detail = $this->catalog->find($id);
        $products = $this->product->where('publish', 1)->get();
        return view('admin.catalog.edit', compact('detail', 'products'));   
    }

    public function update(Request $request, $id)
    {
        $old=$this->catalog->find($id);
        $this->validate($request, $this->rulesForUpdate($id));
        
        if($request->product_id != null){
            if(!is_numeric($request->product_id))
                return back()->withInput()->withErrors(['product_id.numeric', 'Product must be numeric']);
        }

        $value=$request->except('publish');

        $value['publish']=is_null($request->publish)? 0 : 1 ;

        if($request->hasFile('catalog_file')){
            $fileName = time().'.'.$request->catalog_file->extension();  
            $request->catalog_file->move(public_path('catalogs'), $fileName);
            $value['catalog_file'] = $fileName;
        }


        $this->catalog->update($value, $id);
        return redirect()->route('admin.catalog.index')->with('message','Catalog Updated Successfully');
    }


    public function destroy($id)
    {
        $value['status'] =0;
        $this->catalog->update($value, $id);

        $this->catalog->destroy($id);
        return redirect()->route('admin.catalog.index')->with('message','Catalog Deleted Successfully');
    }

    public function rules()
    {
        $rules =  [
            'title' => 'required',
            'order'=> 'required|numeric',
            'catalog_file' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf,docx',
        ];

        return $rules;
    }

    public function rulesForUpdate($oldId = null){
        $rules =  [
            'title' => 'required|unique:users,name,'. $oldId,
            'order'=> 'required|numeric',
            'catalog_file' => 'sometimes|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf,docx'
        ];
        return $rules;
    }
}
