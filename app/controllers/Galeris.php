<?php

namespace App\Controllers;

use App\Core\Controller;

class Galeris extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Galeri();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('galeris/index', $data);
	}

	public function input()
	{
		$this->dashboard('galeris/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/galeris');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('galeris/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/galeris');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/galeris');
	}
}
