<?php

/*
 * @author Dionisis Papanikolaou
 */

class Delete extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('deletedata');
    }

    function index()
    {
        $this->data['fuel'] = $this->deletedata->getConsumption();
        $this->data['pagetitle'] = 'Fuel Consumption - Delete Page';
        $this->load->view('delete', $this->data);
    }

    function delete_id()
    {
        $id = $this->uri->segment(3); //get 3rd param from url
        $this->deletedata->deleteConsumption($id);
        redirect('/delete/index', 'refresh');
        // $this->index();
    }


}