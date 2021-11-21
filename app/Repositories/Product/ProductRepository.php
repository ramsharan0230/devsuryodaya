<?php
namespace App\Repositories\Product;
use App\Models\Product;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class ProductRepository extends CrudRepository implements ProductInterface{
	
	public function __construct(Product $product){
		$this->model=$product;
	}

	public function create($input){
		$value=$input;
		$value['user_id'] = Auth::id();
		$this->model->create($value);
	}

	public function update($input,$id){
		$blog=$this->model->find($id);
		$value=$input;

		$this->model->find($id)->update($value);
	}
}