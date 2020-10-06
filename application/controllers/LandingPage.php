<?php

class LandingPage extends CI_Controller
{
  public function index()
  {
    $data['isLoggedIn'] = $this->session->userdata('status') == "login";

    $this->load->view('templates/header');
    $this->load->view('landing_page', $data);
    $this->load->view('templates/footer');
  }

  public function pom() {
    $data["jenisKendaraan"] = '';
    $data["jenisBBM"] = '';
    $data["jumlahBeli"] = '';
    $data["jumlahLiter"] = '';
    $data["peringatan"] = null;

    $this->load->view('pom', $data);
  }

  public function hasil() {
    $jenisKendaraan = $this->input->post('jenisKendaraan');
    $jenisBBM = $this->input->post('jenisBBM');
    $jumlahBeli = $this->input->post('jumlahBeli');

    $hargaPerLiter = 0;

    if($jenisBBM == "solar") {
      $hargaPerLiter = 6250;
    } else if ($jenisBBM == "premium") {
      $hargaPerLiter = 6920;
    } else if ($jenisBBM == "pertalite") {
      $hargaPerLiter = 7480;
    } else if ($jenisBBM == "pertamax") {
      $hargaPerLiter = 9550;
    } else if ($jenisBBM == "pertamax-dex") {
      $hargaPerLiter = 10250;
    }

    $jumlahLiter = $jumlahBeli / $hargaPerLiter;

    $peringatan = null;

    if(($jenisKendaraan == "motor" && (int) $jumlahBeli > 50000) || ($jenisKendaraan == "mobil" && (int) $jumlahBeli > 500000)) {
      $peringatan = "Tangki tidak cukup";
    }

    $data["jenisKendaraan"] = $jenisKendaraan;
    $data["jenisBBM"] = $jenisBBM;
    $data["jumlahBeli"] = $jumlahBeli;
    $data["jumlahLiter"] = $jumlahLiter;
    $data["peringatan"] = $peringatan;

    $this->load->view('pom', $data);
  }
}
