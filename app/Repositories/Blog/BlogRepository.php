<?php
namespace App\Repositories\Blog;
use App\Models\Blog;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class BlogRepository extends CrudRepository implements BlogInterface{
	public function __construct(Blog $blog){
		$this->model=$blog;
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