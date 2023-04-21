<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class View_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper();
    }

    public function getContactData(){
        $this->db->select('*');
        $this->db->from('contact');
        $query = $this->db->get();
        return $query->result();

    }



}