<?php
namespace App\Repositories\ProductGallery;
use App\Models\ProductGallery;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class ProductGalleryRepository extends CrudRepository implements ProductGalleryInterface{
	
	public function __construct(ProductGallery $product_gallery){
		$this->model=$product_gallery;
	}

	public function create($input){
		$value=$input;
		$this->model->create($value);
	}

	public function update($input,$id){
		$productGallery=$this->model->find($id);
		$value=$input;

		$this->model->find($id)->update($value);
	}
}