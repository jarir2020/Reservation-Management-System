<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapporder extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('whatsapp_model');
    }

    public function setting() {
        $data['title'] = "WhatsApp Settings";
        $data['setting'] = $this->whatsapp_model->get_setting();
        $data['module'] = "whatsapporder";
        $data['page']   = "setting";
        echo Modules::run('template/layout', $data);
    }
}

