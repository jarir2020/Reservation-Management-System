<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Razorpay_model extends CI_Model {
    public function get_setting() {
        return $this->db->get_where('tbl_razorpay_setting', array('id' => 1))->row();
    }
}
