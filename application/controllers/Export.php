<?php
if(!define('BASEPATH'))
exit('No direct script allowed');

class Export extends CI_Controller
{
    public function_construct()
    parent::_construct();
    $this->load->model('Export_model','export');
}

public function index()
{
    $data['title']='Display Feedback data';
    $data['feedbackInfo']=$this->export->employeeList();
    $
}

?>
