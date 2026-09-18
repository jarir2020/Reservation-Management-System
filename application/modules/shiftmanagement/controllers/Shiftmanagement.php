<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shiftmanagement extends MX_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('shift_model');
    }

    public function shift_list() {
        $data['title'] = "Shift Roster";
        $data['shifts'] = $this->shift_model->get_all_shifts();
        $data['module'] = "shiftmanagement";
        $data['page']   = "shift_list";
        echo Modules::run('template/layout', $data);
    }
}
