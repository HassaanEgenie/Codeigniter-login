<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Form_helper_Controller extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('Formhelperview');

    }

}