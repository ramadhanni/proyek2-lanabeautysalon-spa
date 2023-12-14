<?php

namespace App\Controllers;

use App\Core\Controller;

class Layanan extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Layanan();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('layanan/index', $data);
     }

     public function create()
     {
          // Membuat option categories
        //   $data['optcat'] = $this->model->optCat();

          $this->dashboard('layanan/create');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/layanan');
     }

     public function edit($id)
     {
          // Menampilkan data edit
          $data['row'] = $this->model->edit($id);

          // Membuat option categories
        //   $data['optcat'] = $this->model->optCat();

          $this->dashboard('layanan/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/layanan');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/layanan');
     }
}
