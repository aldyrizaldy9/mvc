<?php

  class koneksi{
    public function __construct(){
        $this->mysqli = new mysqli('localhost', 'root', 'aldy', 'praktikumweb');
      }
    public function getConnection(){
      return $this->mysqli;
    }
  }
