<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailproperti extends CI_Controller {

    public function index() {
        $data['title'] = 'Details Properti';
        $data['content'] = $this->load->view('content/view_properti-details', [], true);
        $this->load->view('layouts/template', $data);
    }
}
