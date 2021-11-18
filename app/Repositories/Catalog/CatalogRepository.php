<?php
namespace App\Repositories\Catalog;

use App\Models\Catalog;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class CatalogRepository extends CrudRepository implements CatalogInterface{

	public function __construct(Catalog $catalog){
		$this->model = $catalog;
	}
	public function create($input){
		$value=$input;
		$this->model->create($value);
	}
	public function update($input,$id){
		$catalog=$this->model->find($id);
		$value=$input;
		$this->model->find($id)->update($value);
	}
}