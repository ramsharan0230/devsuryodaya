<?php
namespace App\Repositories\Contact;
use App\Repositories\Crud\CrudInterface;

interface ContactInterface extends CrudInterface {
	
	public function create($input);
	public function update($input,$id);
}