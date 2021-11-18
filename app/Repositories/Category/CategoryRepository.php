<?php
namespace App\Repositories\Category;
use App\Models\Category;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class CategoryRepository extends CrudRepository implements CategoryInterface{

	public function __construct(Category $category){
		$this->model = $category;
	}
	public function create($input){
		$value=$input;
		$this->model->create($value);
	}
	public function update($input,$id){
		$category=$this->model->find($id);
		$value=$input;
		$this->model->find($id)->update($value);
	}
}