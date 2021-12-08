<?php
namespace App\Repositories\ProductGallery;
use App\Repositories\Crud\CrudInterface;

interface ProductGalleryInterface extends CrudInterface{
	public function create($input);
	public function update($input,$id);
}