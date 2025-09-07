<?php

class Mahasiswa extends Controller
{
  // halaman utama daftar mahasiswa
  public function index()
  {
    $data['judul'] = 'Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }

  // detail 1 mahasiswa
  public function detail($id)
  {
    $data['judul'] = 'Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }

  // tambah data mahasiswa
  public function tambah()
  {
    if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
    }
    header('Location: ' . BASEURL . '/mahasiswa');
    exit;
  }

  // hapus data mahasiswa
  public function hapus($id)
  {
    if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
    }
    header('Location: ' . BASEURL . '/mahasiswa');
    exit;
  }

  // ambil data mahasiswa by id (untuk AJAX ubah)
  public function getubah()
  {
    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
  }

  // ubah data mahasiswa
  public function ubah()
  {
    if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
    }
    header('Location: ' . BASEURL . '/mahasiswa');
    exit;
  }

  // cari mahasiswa
  public function cari()
  {
    $data['judul'] = 'Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }
}
