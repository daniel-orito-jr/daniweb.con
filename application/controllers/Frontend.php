<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('frontend_model');
       
    }

    public function index() {
        $arrData['title'] = "Daniweb | Home";
        $this->load->view('header', $arrData);
        $this->load->view('index', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function portfolio() {
        $arrData['title'] = "Daniweb | Portfolio Details";
        $this->load->view('header', $arrData);
        $this->load->view('portfolio-details', $arrData);
        $this->load->view('footer', $arrData);
    }
}