<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('savedata');
    }

    function index()
    {
//Including validation library
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//Validating Name Field
        $this->form_validation->set_rules('dname', 'Username', 'required');

//Validating Email Field
        $this->form_validation->set_rules('demail', 'Email', 'required');

//Validating Mobile no. Field
        $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required');

//Validating Address Field
        $this->form_validation->set_rules('daddress', 'Address', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('save');
        } else {
//Setting values for tabel columns
            $data = array(
                'week' => $this->input->post('dname'),
                'liters' => $this->input->post('demail'),
                'km' => $this->input->post('dmobile'),
                'money' => $this->input->post('daddress')
            );
//Transfering data to Model
            $this->savedata->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
//Loading View
            $this->load->view('save', $data);
        }
    }

}