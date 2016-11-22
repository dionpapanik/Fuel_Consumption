<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('fetchdata');
    }

    public function index()
    {
        $this->data['fuel'] = $this->fetchdata->getConsumption();
        $this->data['pagetitle'] = 'Fuel Consumption - Index Page';
        $this->load->view('index', $this->data);
    }
}
