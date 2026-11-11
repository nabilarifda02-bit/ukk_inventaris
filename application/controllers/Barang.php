<?php
class Barang extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_barang');
    }

    function index(){
        $data['barang'] = $this->M_barang->ambilSemua();
        $this->load->view('barang/index', $data);
    }

   function tambah(){
    if($this->input->method() === 'post'){
        $this->M_barang->tambah(
            $this->input->post('nama'),
            $this->input->post('stok')
        );
        redirect('barang');
    }
    $this->load->view('barang/tambah');
}

    function hapus($id){
        $this->M_barang->hapus($id);
        redirect('barang');
    }
}
