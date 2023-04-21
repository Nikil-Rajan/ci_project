<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('view');
        $this->load->database();
        $this->load->model('view_model');
        $this->load->helper();
    }

    public function contactData()
    {
        $this->load->view('view');
        $this->load->model('view_model');
        $contacts=$this->view_model->getContactData();
        $this->load->view('view',$contacts);

    }

}