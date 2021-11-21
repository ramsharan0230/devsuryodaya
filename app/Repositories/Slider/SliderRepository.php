<?php
namespace App\Repositories\Slider;
use App\Models\Slider;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Slider\SliderInterface;

class SliderRepository extends CrudRepository implements SliderInterface{
	public function __construct(Slider $slider){
		$this->model=$slider;
	}
	public function create($input){
		$value=$input;
		$value['user_id'] = Auth::id();
		$this->model->create($value);
	}
	public function update($input,$id){
		$slider=$this->model->find($id);
		$value=$input;

		$this->model->find($id)->update($value);
	}
}