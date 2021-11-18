<?php
namespace App\Repositories\Client;
use App\Repositories\Crud\CrudInterface;

interface ClientInterface extends CrudInterface {
	
	public function create($input);
	public function update($input,$id);
}