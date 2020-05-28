<?php
class Export_model extends CI_Model
{
    public function employeeList()
    {
        $query=$this->db->select(['name','email','feedback1'])
        ->form('feedback')
        ->get();
        return $query->result();
    }
}




?>