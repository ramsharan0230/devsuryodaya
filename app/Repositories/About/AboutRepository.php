<?php
namespace App\Repositories\About;
use App\Models\About;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class AboutRepository extends CrudRepository implements AboutInterface{

	public function __construct(About $about){
		$this->model=$about;
	}

	public function create($input){
		$value=$input;
		$value['user_id'] = Auth::id();
		$this->model->create($value);
	}
	
	public function update($input,$id){
		$about=$this->model->find($id);
		$value=$input;

		$this->model->find($id)->update($value);
	}
}