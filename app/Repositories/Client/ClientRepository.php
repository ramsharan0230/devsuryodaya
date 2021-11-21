<?php
namespace App\Repositories\Client;
use App\Models\Client;
use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Auth;

class ClientRepository extends CrudRepository implements ClientInterface{

	public function __construct(Client $client){
		$this->model = $client;
	}
	public function create($input){
		$value=$input;
		$this->model->create($value);
	}
	public function update($input,$id){
		$client=$this->model->find($id);
		$value=$input;
		$this->model->find($id)->update($value);
	}
}