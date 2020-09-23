<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-tag"></i> Manage Employee 
        <small>Add Employee</small>
      </h1>
    </section>    
    <section class="content">    
        <div class="row">
            <div class="col-md-10">              
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Employee Details</h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addbrand" action="<?php echo base_url() ?>addNewemp" method="post" role="form" enctype='multipart/form-data'>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="b_imag">Image</label>  
                                        <input type="file" id="b_imag" name="b_imag" title=""  required="" class="input-img"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">                      
                                    <div class="form-group">
                                    <label for="emp_name">Employee Name</label>
                                    <input type="text" class="form-control required" value="<?php echo set_value('emp_name'); ?>" id="emp_name" name="emp_name" maxlength="128" placeholder="Employee Name" required >
                                    </div>
                                </div>
                                 <div class="col-md-4">                      
                                    <div class="form-group">
                                    <label for="phone">Employee Phone</label>
                                    <input type="number" class="form-control required" value="<?php echo set_value('phone'); ?>" id="phone" name="phone" maxlength="128" placeholder="Phone" required >
                                    </div>
                                </div>  
                                 <div class="col-md-4">                      
                                    <div class="form-group">
                                    <label for="email">Employee Email</label>
                                    <input type="text" class="form-control required" value="<?php echo set_value('email'); ?>" id="email" name="email" maxlength="128" placeholder="Email" required >
                                    </div>
                                </div>                             
                            </div>

                             <div class="row">
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                    <label for="dob">Employee DOB</label>
                                    <input type="date" class="form-control required" value="<?php echo set_value('dob'); ?>" id="dob" name="dob" maxlength="128" placeholder="DOB" required >
                                    </div>
                                </div>
                                 <div class="col-md-6">                      
                                    <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control required" value="<?php echo set_value('address'); ?>" id="address" name="address" maxlength="128" placeholder="Address" required >
                                    </div>
                                </div>                               
                            </div>     

                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>   
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>