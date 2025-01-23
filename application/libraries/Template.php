<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template {

    public function __construct()
    {
		$this->ci = &get_instance();
    }

    public function bs5($content, $data=array())
    {
        $this->ci->load->view('layout/head', $data);
        $this->ci->load->view($content, $data);
        $this->ci->load->view('layout/footer', $data);
    }

}