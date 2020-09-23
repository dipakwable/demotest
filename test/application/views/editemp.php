
<div class="content-wrapper">

    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Employee Management
        <small>Edit Employee</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <div class="col-md-8">               
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Employee Details</h3>
                    </div>                    
                    <form role="form" action="<?php echo base_url('editempz') ?>" method="post" id="editUser" role="form" enctype='multipart/form-data'>
                      <div class="box-body">
                            <div class="row">
                                 <div class="col-md-4">                      
                                    <div class="form-group">
                                        <label for="product_image">Image</label> 
                                      <input type="file" name="b_img">
                                        <div class="">
                                            <img id="ImgPreview" src="<?php echo $empInfo->emp_image; ?>" class="preview1"  height="60px" width="60px" class="img-responsive">                                       
                                            <input type="hidden" name="b_img1" value="<?php echo $empInfo->emp_image; ?>" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">Employee Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Full Name" name="emp_name" value="<?php echo $empInfo->emp_name; ?>" maxlength="128">
                                        <input type="hidden" value="<?php echo $empInfo->emp_id; ?>" name="emp_id" id="emp_id" />    
                                    </div>
                                </div>    
                                    <div class="col-md-4">                      
                                    <div class="form-group">
                                        <label for="phone">Employee Phone</label>
                                        <input type="number" class="form-control required" value="<?php echo $empInfo->phone; ?>" id="phone" name="phone" maxlength="128" placeholder="Phone" required >
                                    </div>
                                </div>    
                                    <div class="col-md-4">                      
                                        <div class="form-group">
                                        <label for="email">Employee Email</label>
                                        <input type="text" class="form-control required" value="<?php echo $empInfo->email; ?>" id="eemail" name="eemail"  placeholder="Email" required >
                                        </div>                                
                                    </div>                                     
                                </div>
                                 <div class="row">
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                    <label for="dob">Employee DOB</label>
                                    <input type="date" class="form-control required" id="dob" name="dob" maxlength="128" placeholder="DOB" value="<?php echo $empInfo->dob; ?>" required >
                                    </div>
                                </div>
                                 <div class="col-md-6">                      
                                    <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control required" value="<?php echo $empInfo->address; ?>" id="address" name="address" maxlength="128" placeholder="Address" required >
                                    </div>
                                </div>                               
                            </div>     
                                       
                            </div>
                        </div> <!-- /.box-body -->
    
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

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>