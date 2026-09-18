<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loyalty extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('loyalty_model');
    }

    public function setting() {
        $data['title'] = "Loyalty Program Settings";
        $data['setting'] = $this->loyalty_model->get_setting();
        $data['module'] = "loyalty";
        $data['page']   = "loyalty_setting";
        echo Modules::run('template/layout', $data);
    }
}

