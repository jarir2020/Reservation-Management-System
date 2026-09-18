<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wastetracking extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('waste_model');
    }

    public function waste_list() {
        $data['title'] = "Waste Tracking Records";
        $data['waste_records'] = $this->waste_model->get_all_waste();
        $data['module'] = "wastetracking";
        $data['page']   = "waste_list";
        echo Modules::run('template/layout', $data);
    }
}
