<?php
/**
 * @author Dionisis Papanikolaou
 */

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
        $config_validation = array(
            array(
                'field' => 'date_from',
                'label' => 'Date From',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Please Insert %s.',
                ),
            ),
            array(
                'field' => 'date_to',
                'label' => 'Date To',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Please Insert %s.',
                ),
            ),
            array(
                'field' => 'liters',
                'label' => 'Liters',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => 'Please Insert %s.',
                    'numeric' => '%s must be a number'
                ),
            ),
            array(
                'field' => 'km',
                'label' => 'Kilometers',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => 'Please Insert %s.',
                    'numeric' => '%s must be a number'
                ),
            ),
            array(
                'field' => 'money',
                'label' => 'Money Spent',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => 'Please Insert %s.',
                    'numeric' => '%s must be a number'
                ),
            )
        );
//Including validation library
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules($config_validation);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('save');
        } else {
            $data = array(
                'date_from' => $this->input->post('date_from'),
                'date_to' => $this->input->post('date_to'),
                'liters' => str_replace(',', '.', $this->input->post('liters')),
                'km' => str_replace(',', '.', $this->input->post('km')),
                'money' => str_replace(',', '.', $this->input->post('money'))
            );
            $this->savedata->form_insert($data); //Transfering data to Model
            $data['message'] = 'Data Inserted in DataBase Successfully';
            $this->load->view('success', $data);
        }
    }

}