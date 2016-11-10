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
        $this->form_validation->set_rules('date_from', 'Date From', 'required');
        $this->form_validation->set_rules('date_to', 'Date To', 'required');
        $this->form_validation->set_rules('liters', 'Liters', 'required');
        $this->form_validation->set_rules('km', 'Km', 'required');
        $this->form_validation->set_rules('money', 'Money', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['message'] = 'Error!!';
            $this->load->view('save', $data);
        } else {
            $data = array(
                'date_from' => $this->input->post('date_from'),
                'date_to' => $this->input->post('date_to'),
                'liters' => $this->input->post('liters'),
                'km' => $this->input->post('km'),
                'money' => $this->input->post('money')
            );
//Transfering data to Model
            $this->savedata->form_insert($data);
            $data['message'] = 'Data Inserted in DB Successfully :)';
//Loading View
            $this->load->view('success', $data);
        }
    }

}