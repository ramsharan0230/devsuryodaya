<?php
namespace App\Repositories\Contact;
use App\Models\Contact;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class ContactRepository extends CrudRepository implements ContactInterface{

	public function __construct(Contact $contact){
		$this->model = $contact;
	}
	public function create($input){
		$value=$input;
		$this->model->create($value);
	}
	public function update($input,$id){
		
		$contact=$this->model->find($id);

		$value=$input;
		$this->model->find($id)->update($value);
	}
}