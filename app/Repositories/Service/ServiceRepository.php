<?php
namespace App\Repositories\Service;
use App\Models\Service;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class ServiceRepository extends CrudRepository implements ServiceInterface{

	public function __construct(Service $service){
		$this->model=$service;
	}
	public function create($input){
		$value=$input;
		$value['user_id'] = Auth::id();
		$this->model->create($value);
	}
	public function update($input,$id){
		$service=$this->model->find($id);
		$value=$input;
		$value['user_id'] = Auth::id();

		$this->model->find($id)->update($value);
	}
}