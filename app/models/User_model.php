<?php

class User_model
{
  // properti data (sementara hardcode)
  private $nama = 'Tino';

  // ambil data user
  public function getUser()
  {
    return $this->nama;
  }
}
