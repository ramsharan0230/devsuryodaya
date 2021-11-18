<?php
namespace App\Repositories\Product;
use App\Repositories\Crud\CrudInterface;

interface ProductInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
}