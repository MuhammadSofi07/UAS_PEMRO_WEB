<?php

class Cafe extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Cafe';
        $data['cfe'] = $this->model('Cafe_model')->getAllCafe();
        $this->view('templates/header', $data);
        $this->view('cafe/index', $data);
        $this->view('templates/footer');
    }
}