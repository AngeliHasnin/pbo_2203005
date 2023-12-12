<?php

namespace App\Controllers;

use App\Core\Controller;

class Kosans extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Kosan();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('kosans/index', $data);
	}

	public function input()
	{
		$this->dashboard('kosans/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/kosans');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('kosans/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/kosans');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/kosans');
	}
}
