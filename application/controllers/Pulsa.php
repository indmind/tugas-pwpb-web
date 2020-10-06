<?php

class Pulsa extends CI_Controller
{
  public function index() {
    $data["noHP"] = null;
    $data["operator"] = null;
    $data["jumlahPulsa"] = null;
    $data["harga"] = null;

    $this->load->view('pulsa/main', $data);
  }

  public function hasil() {
    $noHP = $this->input->post('noHP');
    $operator = $this->input->post('operator');
    $jumlahPulsa = $this->input->post('jumlahPulsa');

    $keuntungan = 0;

    if ((int) $jumlahPulsa <= 10000) {
      $keuntungan = 10/100;
    } else {
      $keuntungan = 5/100;
    }
    
    $harga = $jumlahPulsa + ($jumlahPulsa * $keuntungan);
    
    $data["noHP"] = $noHP;
    $data["operator"] = $operator;
    $data["jumlahPulsa"] = $jumlahPulsa;
    $data["harga"] = $harga;

    $this->load->view('pulsa/main', $data);
  }
}
