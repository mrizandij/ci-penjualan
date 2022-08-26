<?php
class Model_barang extends CI_Model
{
    function getDataBarang()
    {
        // query dari tabel barang master
        return $this->db->get('barang_master');
    }

    function insertBarang($data)
    {
        // quert memasukkan data ke tabel        
        $simpan = $this->db->insert('barang_master', $data);
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }

    function getBarang($kodebarang)
    {
        return $this->db->get_where("barang_master", array('kode_barang' => $kodebarang));
    }

    function updateBarang($data, $kodebarang)
    {
        $simpan = $this->db->update('barang_master', $data, array('kode_barang' => $kodebarang));
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }

    function deleteBarang($kodebarang)
    {
        $hapus = $this->db->delete("barang_master", array('kode_barang' => $kodebarang));
        if ($hapus) {
            return 1;
        } else {
            return 0;
        }
    }

    function getDataHarga()
    {
        // query dari tabel barang harga
        return $this->db->get('barang_harga');
        $this->db->join('barang_master', 'barang_harga.kode_barang = barang_master.kode_barang');
    }
}