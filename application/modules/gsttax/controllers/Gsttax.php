<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gsttax extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('gst_model');
    }

    public function setting() {
        $data['title'] = "Advanced GST Tax Settings";
        $data['setting'] = $this->gst_model->get_setting();
        $data['module'] = "gsttax";
        $data['page']   = "tax_setting";
        echo Modules::run('template/layout', $data);
    }
}
