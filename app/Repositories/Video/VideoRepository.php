<?php
namespace App\Repositories\Video;
use App\Models\Video;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Video\VideoInterface;

class VideoRepository extends CrudRepository implements VideoInterface{
	public function __construct(Video $video){
		$this->model=$video;
	}
	public function create($input){
		$value=$input;
		$value['user_id'] = Auth::id();
		$this->model->create($value);
	}
	public function update($input,$id){
		$video=$this->model->find($id);
		$value=$input;

		$this->model->find($id)->update($value);
	}
}