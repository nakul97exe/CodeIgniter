<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class select_cntr extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('select_model');
    }
    function index()
    {
        $data['state']= $this->select_model->fetch_state();
        $data['city']= $this->select_model->fetch_city();
        $data['country'] = $this->select_model->fetch_country();
        $this->load->view('Home/registration',$data);

    }
}
?>