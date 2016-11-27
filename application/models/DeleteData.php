<?php

/*
 * @author Dionisis Papanikolaou
 */

class DeleteData extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    function getConsumption()
    {
        $CI =& get_instance();
        $CI->load->model('fetchdata');
        return $CI->fetchdata->getConsumption();
    }
}