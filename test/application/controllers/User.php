<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class User extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');   
        $this->load->model('user_model');
        date_default_timezone_set("Asia/Kolkata");
    }    

    public function addemployee()
    {                    
        $data['roles'] = '';
        $this->global['pageTitle'] = 'Demo : Add  New Employee';
        $this->loadViews("emp", $this->global, $data, NULL);      
    }

    public function empListing()
    {       
        $searchText         = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;           
        $count   = $this->user_model->empListingCount($searchText);
        $returns = $this->paginationCompress ( "empListing/", $count, 10 );
        $data['Records'] = $this->user_model->empListing($searchText, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = 'Demo : Employee Listing';
        $this->loadViews("emplist", $this->global, $data, NULL);
     
    }




    public function addNewemp()
    {                   
          $this->form_validation->set_rules('emp_name','Employee Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('address','Address','trim|required');
            $this->form_validation->set_rules('phone','Phone','trim|required|max_length[10]|numeric');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[email]');
            $this->form_validation->set_rules('dob','DOB','trim|required');            
        if($this->form_validation->run() == FALSE)
        {
            $this->addNewemp();
        }
        else
        {   

            $file_path = "uploads";                
            $_FILES['b_imag']['name'];
            $config = array(
                    'upload_path'   => $file_path,
                    'allowed_types' => "*",
                    'overwrite'     => TRUE,
                    'max_size'      => "48000",
                    'file_name'     => 'image_'.uniqid()
                    );        
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('b_imag'))
            { 
                $imageError =  $this->upload->display_errors();
            }
            else
            {
              $img    = $this->upload->data();
            }
                $img    = isset($img['file_name']) ? $img['file_name'] : '';
                $emp_file   = base_url('uploads/'.$img); 
              
            $Info = array(
                    'emp_name'  => $this->security->xss_clean($this->input->post('emp_name')),
                    'address'  => $this->security->xss_clean($this->input->post('address')),
                    'phone'    => $this->security->xss_clean($this->input->post('phone')),
                    'dob'      => $this->security->xss_clean($this->input->post('dob')),
                    'email'      => $this->security->xss_clean($this->input->post('email')),
                    'emp_image'=> $emp_file
                    );                
            
            $result = $this->user_model->addNewemp($Info);                
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Employee created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Employee creation failed');
            }                
            redirect('empListing');
        }           
      
    }

    public function editemp($empid = NULL)
    { 
        if($empid == null)
        {
            redirect('empListing');
        } 
        $data['empInfo'] = $this->user_model->getempInfo($empid);                  
        $this->global['pageTitle'] = 'Demo : Edit Employee';
        $this->loadViews("editemp", $this->global, $data, NULL);     
    }


     public function deleteemp($emp_id = NULL)
    {        
            $Info = array('isDeleted' => '1'); 
            $result = $this->user_model->deleteUser($emp_id, $Info);            
            if($result > 0) 
            { 
                echo(json_encode(array('status'=>TRUE))); 
            }
            else 
            { 
                echo(json_encode(array('status'=>FALSE))); 
            }
            redirect('empListing');
       
    }
    
    
    public function editempz()
    {     
           
            $emp_id = $this->input->post('emp_id');            
            $this->form_validation->set_rules('emp_name','Employee Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('address','Address','trim|required');
            $this->form_validation->set_rules('phone','Phone','trim|required|max_length[10]|numeric');
            $this->form_validation->set_rules('dob','DOB','trim|required');
            $this->form_validation->set_rules('eemail','Email','trim|required|valid_email|is_unique[email]');
            if($this->form_validation->run() == FALSE)
            {
                $this->editemp($emp_id);
            }
            else
            {       
                $file_path = "uploads";                
               if($_FILES['b_imag']['name'] !="")
               {
                $config = array(
                        'upload_path'   => $file_path,
                        'allowed_types' => "*",
                        'overwrite'     => TRUE,
                        'max_size'      => "48000",
                        'file_name'     => 'image_'.uniqid()
                        );            
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                    if(!$this->upload->do_upload('b_imag'))
                    { 
                        $imageError =  $this->upload->display_errors();
                    }
                    else
                    {
                        $img = $this->upload->data();
                    }

                    $img  = isset($img['file_name']) ? $img['file_name'] : '';
                    $emp_file = base_url('uploads/'.$img);
                }
                else
                {
                    $emp_file  = $this->input->post('b_img1');

                }   
                
                $Info      = array();       
                $Info = array(
                    'emp_name'  => $this->security->xss_clean($this->input->post('emp_name')),
                    'address'  => $this->security->xss_clean($this->input->post('address')),
                    'phone'    => $this->security->xss_clean($this->input->post('phone')),
                    'dob'      => $this->security->xss_clean($this->input->post('dob')),
                    'email'      => $this->security->xss_clean($this->input->post('eemail')),
                    'emp_image'=> $emp_file
                    );               
                
                $result = $this->user_model->editempz($Info, $emp_id);                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Employee updated successfully');              
                }
                else
                {
                    $this->session->set_flashdata('error', 'Employee updation failed');
                }                
                redirect('empListing');
            } 
    }  
} 