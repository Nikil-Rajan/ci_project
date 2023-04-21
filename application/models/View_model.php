<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class View_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function getContactData(){
        $this->db->select('*');
        $this->db->from('contacts');
        $query = $this->db->get();
        return $query->row();

    }



}