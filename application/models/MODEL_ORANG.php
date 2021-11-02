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

}
?>