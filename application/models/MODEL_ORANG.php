<?php

class Model_orang extends CI_Model {

    public function ambilDataOrang() {
        $this->load->database();

        $hasil = $this->db->query("SELECT * FROM orang");
        
        return $hasil->result();
    }

    public function ProsesTambahOrang($nama, $alamat) {
        $this->load->database();

        $this->db->query("INSERT INTO orang(nama, alamat) Values('$nama','$alamat')");

    }

    public function proseshapusorang($id) {
        $this->load->database();

        $this->db->query("DELETE FROM orang WHERE id = $id");
    
        }

    public function prosesUbahOrang($id, $nama, $alamat) {
        $this->load->database();

        $this->db->query("UPDATE orang SET nama ='$nama', alamat ='$alamat' where id = $id");

    }

}
?>