<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taste_model extends CI_Model {
    public function get_all_habits() {
        return $this->db->get('tbl_customer_taste_habits')->result();
    }
}
