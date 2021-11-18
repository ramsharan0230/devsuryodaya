<?php
namespace App\Repositories\Catalog;
use App\Repositories\Crud\CrudInterface;

interface CatalogInterface extends CrudInterface {
	
	public function create($input);
	public function update($input,$id);
}