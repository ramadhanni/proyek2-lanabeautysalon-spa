<?php

namespace App\Controllers;

use App\Core\Controller;

class Setting extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Setting();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('setting/index', $data);
	}

	public function input()
	{
		$this->dashboard('setting/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/setting');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('/setting/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/setting');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/setting');
	}
}
