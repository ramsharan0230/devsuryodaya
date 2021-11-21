<?php

namespace App\Repositories\Setting;

use App\Models\SiteSetting;
use App\Repositories\Crud\CrudRepository;

class SettingRepository extends CrudRepository implements SettingInterface
{
	public function __construct(SiteSetting $model)
	{
		$this->model = $model;
	}
	public function create($data)
	{
		$detail = $this->model->create($data);
		return $detail;
	}

	public function update($data, $id)
	{
		return $this->model->find($id)->update($data);
	}

    public function find($id)
	{
		return $this->model->findOrFail($id)->first();
	}

}
