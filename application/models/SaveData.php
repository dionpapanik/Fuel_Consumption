<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveData extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    function form_insert($data)
    {
        $this->db->insert('fuel_data', $data);
    }

}