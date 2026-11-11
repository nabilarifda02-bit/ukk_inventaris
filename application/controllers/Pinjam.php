<?php
class Pinjam extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->model('M_pinjam');
    }

    function index(){
        $data['list_pinjam'] = $this->M_pinjam->ambilSemua();
        $data['list_barang'] = $this->M_barang->ambilSemua();
        $this->load->view('pinjam/index', $data);
    }

    function simpan(){
        $id   = $this->input->post('id_barang');
        $jml  = $this->input->post('jml');
        $nama = $this->input->post('nama');

        $brg = $this->M_barang->cari($id);

        if($brg['stok'] >= $jml){
            // stok dikurangi dulu
            $this->M_barang->setStok($id, $brg['stok'] - $jml);
            // baru simpan peminjaman
            $this->M_pinjam->tambahData($nama, $id, $jml);
        } else {
            echo "<script>alert('stok kurang');window.location='".base_url('pinjam')."';</script>";
            return;
        }

        redirect('pinjam');
    }

    function balik($id){
        $p   = $this->M_pinjam->cari($id);
        $brg = $this->M_barang->cari($p['barang_id']);

        // stok balik lagi
        // echo "tes"; // (lupa hapus)
        $this->M_barang->setStok($p['barang_id'], $brg['stok'] + $p['jumlah']);

        $this->M_pinjam->gantiStatus($id);

        redirect('pinjam');
    }
}