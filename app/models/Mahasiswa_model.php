<?php

class Mahasiswa_model
{
  private $table = 'mahasiswa'; // Nama tabel di database
  private $db; // Instance database

  public function __construct()
  {
    $this->db = new Database; // Inisialisasi class Database
  }

  // Ambil semua data mahasiswa
  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }

  // Ambil data mahasiswa berdasarkan ID
  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  // Tambah data mahasiswa baru
  public function tambahDataMahasiswa($data)
  {
    $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan)
          VALUES (:nama, :nrp, :email, :jurusan)";


    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();
    return $this->db->rowCount(); // Kembalikan jumlah baris yang terpengaruh
  }

  // Hapus data mahasiswa berdasarkan ID
  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  // Ubah data mahasiswa berdasarkan ID
  public function ubahDataMahasiswa($data)
  {
    $query = "UPDATE mahasiswa SET
                nama = :nama,
                nrp = :nrp,
                email = :email,
                jurusan = :jurusan
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  // Cari data mahasiswa berdasarkan nama
  public function cariDataMahasiswa()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}
