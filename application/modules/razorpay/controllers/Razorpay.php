<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Razorpay extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('razorpay_model');
    }

    public function setting() {
        $data['title'] = "Razorpay Settings";
        $data['setting'] = $this->razorpay_model->get_setting();
        $data['module'] = "razorpay";
        $data['page']   = "setting";
        echo Modules::run('template/layout', $data);
    }
}

