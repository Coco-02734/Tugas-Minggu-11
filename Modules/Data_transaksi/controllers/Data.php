<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('TransaksiModel');
    }

    public function index()
    {
        $data['title'] = "Halaman Data User";
        $data['trans'] = $this->TransaksiModel->dataTrans();
        $this->load->view('Data_transaksi/index', $data);
    }
    public function cekTransaksi()
    {
        $data['title'] = "Halaman Data User";
        $data['trans'] = $this->TransaksiModel->dataTrans();
        $this->load->view('Data_transaksi/cek', $data);
    }

    public function pencarian()
    {
        $katakunci = $this->input->post('katakunci');
        $data = $this->TransaksiModel->cari($katakunci);

        $hasil = $this->load->view('tabel', array('trans' => $data), true);
        $callback = array(
            'hasil' => $hasil,
        );
        echo json_encode($callback);
    }
}
