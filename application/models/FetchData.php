<?php
/**
 * @author Dionisis Papanikolaou
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class FetchData extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    function getConsumption()
    {
        $this->db->select("date_from,date_to,liters,km,money");
        $this->db->from('fuel_data');
        $query = $this->db->get();
        return $query->result();
    }

}