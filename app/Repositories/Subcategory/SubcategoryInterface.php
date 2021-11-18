<?php
namespace App\Repositories\Subcategory;
use App\Repositories\Crud\CrudInterface;

interface SubcategoryInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
}