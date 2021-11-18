<?php
namespace App\Repositories\Subcategory;
use App\Models\Subcategory;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class SubcategoryRepository extends CrudRepository implements SubcategoryInterface{
	public function __construct(Subcategory $subcategory){
		$this->model=$subcategory;
	}
	public function create($input){
		$value=$input;
		$this->model->create($value);
	}
	public function update($input,$id){
		$value=$input;
		$this->model->find($id)->update($value);
	}
}