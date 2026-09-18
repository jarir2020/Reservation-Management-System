<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qrmodule extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('qr_model');
    }

    public function qrlist() {
        $data['title'] = "QR Table Codes";
        $data['tables'] = $this->qr_model->get_all_tables();
        $data['module'] = "qrmodule";
        $data['page']   = "qr_list";
        echo Modules::run('template/layout', $data);
    }
}

