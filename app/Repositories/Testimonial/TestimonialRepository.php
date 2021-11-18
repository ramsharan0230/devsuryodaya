<?php
namespace App\Repositories\Testimonial;
use App\Models\Testimonial;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Testimonial\TestimonialInterface;

class TestimonialRepository extends CrudRepository implements TestimonialInterface{

	public function __construct(Testimonial $testimonial){
		$this->model=$testimonial;
	}
	public function create($input){
		$value=$input;
		$value['user_id'] = Auth::id();
		$this->model->create($value);
	}
	
	public function update($input,$id){
		$testimonial=$this->model->find($id);
		$value=$input;

		$this->model->find($id)->update($value);
	}
}