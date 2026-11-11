<?php
class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_barang');
    }

    function index(){
        $data['jml'] = $this->db->count_all('barang');

        $q = $this->db->select_sum('stok')->get('barang')->row();
        $data['stok'] = $q->stok ? $q->stok : 0;

        $data['pinjam'] = $this->db->where('status','dipinjam')->count_all_results('peminjaman');
        $data['barang'] = $this->M_barang->ambilSemua();

        $this->load->view('dashboard', $data);
    }
}