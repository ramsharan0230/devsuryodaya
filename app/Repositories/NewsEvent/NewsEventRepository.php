<?php
namespace App\Repositories\NewsEvent;
use App\Models\NewsEvent;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\NewsEvent\NewsEventInterface;

class NewsEventRepository extends CrudRepository implements NewsEventInterface{
	public function __construct(NewsEvent $newsEvent){
		$this->model=$newsEvent;
	}
	public function create($input){
		$value=$input;
		$value['user_id'] = Auth::id();
		$this->model->create($value);
	}
	public function update($input,$id){
		$newsEvent=$this->model->find($id);
		$value=$input;

		$this->model->find($id)->update($value);
	}
}