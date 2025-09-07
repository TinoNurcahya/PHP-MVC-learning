<?php

class Home extends Controller
{
  public function index()
  {
    // set judul halaman
    $data['judul'] = 'Home';

    // ambil data user dari model
    $data['nama'] = $this->model('User_model')->getUser();

    // render view dengan data
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}

