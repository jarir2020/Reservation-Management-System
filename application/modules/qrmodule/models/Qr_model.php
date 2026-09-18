<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qr_model extends CI_Model {
    public function get_all_tables() {
        return $this->db->get('tbl_qr_tables')->result();
    }
}

