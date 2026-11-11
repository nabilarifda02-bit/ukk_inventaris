<?php
class M_pinjam extends CI_Model {

    function ambilSemua(){
        $this->db->select('p.*, b.nama as nama_barang');
        $this->db->from('peminjaman p');
        $this->db->join('barang b', 'b.id=p.barang_id');
        return $this->db->get()->result_array();
    }

    function cari($id){
        return $this->db->get_where('peminjaman', array('id'=>$id))->row_array();
    }

    function tambahData($nama, $id_barang, $jml){
        $this->db->insert('peminjaman', array(
            'nama_peminjam' => $nama,
            'barang_id'     => $id_barang,
            'jumlah'        => $jml
        ));
    }

    function gantiStatus($id){
        $this->db->update('peminjaman', array('status'=>'kembali'), array('id'=>$id));
    }
}