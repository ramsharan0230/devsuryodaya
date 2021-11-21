<?php
namespace App\Repositories\Testimonial;
use App\Repositories\Crud\CrudInterface;

interface TestimonialInterface extends CrudInterface{
	
	public function create($input);
	public function update($input,$id);
}