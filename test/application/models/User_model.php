<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

    
    function addNewemp($empInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_employee', $empInfo);        
        $insert_id = $this->db->insert_id();        
        $this->db->trans_complete();        
        return $insert_id;
    }

    
    function empListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_employee as BaseTbl');
        if(!empty($searchText)) 
        {
            $likeCriteria = "(BaseTbl.emp_name  LIKE '%".$searchText."%')";
            $this->db->where('BaseTbl.isDeleted', '0');                
            $this->db->where($likeCriteria);
        }
         $this->db->where('BaseTbl.isDeleted', '0');  
        $query = $this->db->get();        
        return $query->num_rows();
    }

    
    function empListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.*');
        $this->db->from('tbl_employee as BaseTbl');
       if(!empty($searchText)) 
       {
            $likeCriteria = "(BaseTbl.emp_name  LIKE '%".$searchText."%')";
            $this->db->where('BaseTbl.isDeleted', '0');     
            $this->db->where($likeCriteria);
        } 
         $this->db->where('BaseTbl.isDeleted', '0');  
        $this->db->order_by('BaseTbl.emp_id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();        
        $result = $query->result();        
        return $result;
    }

    function getempInfo($empid)
    {        
        $this->db->select('*');
        $this->db->from('tbl_employee');       
        $this->db->where('emp_id', $empid);
        $query = $this->db->get();    
        return $query->row();
    }

    function editempz($Info, $emp_id)
    {
        $this->db->where('emp_id', $emp_id);
        $this->db->update('tbl_employee', $Info);        
        return TRUE;
    }

    function deleteUser($emp_id, $info)
    {
        $this->db->where('emp_id', $emp_id);
        $this->db->update('tbl_employee', $info);        
        return $this->db->affected_rows();
    }

    
    

}