<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tastehabit extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('taste_model');
    }

    public function taste_list() {
        $data['title'] = "Customer Taste Habits";
        $data['habits'] = $this->taste_model->get_all_habits();
        $data['module'] = "tastehabit";
        $data['page']   = "taste_list";
        echo Modules::run('template/layout', $data);
    }
}
