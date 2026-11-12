<?php
class M_barang extends CI_Model {

    function ambilSemua(){
        return $this->db->get('barang')->result_array();
    }

    function cari($id){
        return $this->db->get_where('barang', array('id'=>$id))->row_array();
    }

      function tambah($nama, $stok){
    $this->db->insert('barang', array(
        'nama' => $nama,
        'stok' => $stok,
        'id'   => $id,
        'lokasi'   => $lokasi
    ));
}

    function setStok($id, $stok){
        $this->db->update('barang', array('stok'=>$stok), array('id'=>$id));
    }

    function hapus($id){
        $this->db->delete('barang', array('id'=>$id));
    }
    
}