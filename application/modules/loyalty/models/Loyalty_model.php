<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loyalty_model extends CI_Model {
    public function get_setting() {
        return $this->db->get_where('tbl_loyalty_setting', array('id' => 1))->row();
    }
}

