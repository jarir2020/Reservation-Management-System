<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waste_model extends CI_Model {
    public function get_all_waste() {
        return $this->db->get('tbl_waste_records')->result();
    }
}
