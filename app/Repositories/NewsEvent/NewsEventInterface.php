<?php
namespace App\Repositories\NewsEvent;
use App\Repositories\Crud\CrudInterface;

interface NewsEventInterface extends CrudInterface{
	
	public function create($input);
	public function update($input,$id);
}