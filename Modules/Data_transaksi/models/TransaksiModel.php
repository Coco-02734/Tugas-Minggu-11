<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TransaksiModel extends CI_Model
{
    public function dataTrans()
    {
        return $this->db->get('transaksi')->result();
    }
    public function cari($katakunci)
    {
        $this->db->where('id_transaksi', $katakunci);
        $this->db->or_where('nama', $katakunci);
        $this->db->or_where('pesanan', $katakunci);
        $this->db->or_where('alamat', $katakunci);
        $this->db->or_where('status', $katakunci);
        $this->db->or_where('mode_pengiriman', $katakunci);

        $result = $this->db->get('transaksi')->result();

        return $result;
    }
}
