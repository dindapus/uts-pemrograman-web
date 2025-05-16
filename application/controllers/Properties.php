<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends CI_Controller {

    public function index() {
        $data['title'] = 'Properties';
        $data['content'] = $this->load->view('content/view_properties', [], true);
        $this->load->view('layouts/template', $data);
    }
}
