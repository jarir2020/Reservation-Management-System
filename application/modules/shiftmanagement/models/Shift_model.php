<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shift_model extends CI_Model {
    public function get_all_shifts() {
        return $this->db->get('tbl_shifts')->result();
    }
}

