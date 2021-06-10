<?php

class Cafe extends Controller {
    public function index ()
    {
        $data['judul'] = 'Daftar Cafe';
        $data['cfe'] = $this->model('Cafe_model')->getAllCafe();
        $this->view('templates/header', $data);
        $this->view('cafe/index', $data);
        $this->view('templates/footer');
    }

    public function detail ($id)
    {
        $data['judul'] = 'Detail Cafe';
        $data['cfe'] = $this->model('Cafe_model')->getCafeById($id);
        $this->view('templates/header', $data);
        $this->view('cafe/detail', $data);
        $this->view('templates/footer');
    }
}