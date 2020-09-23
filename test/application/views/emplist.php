<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-tag"></i> Manage Employee 
        <small>Add, Edit</small>
      </h1>
    </section>


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



    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addemployee"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Employee List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>empListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search By Name"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>                    
                        <th class="text-center">ID</th>
                        <th style="text-align:center">Employee Name</th>
                        <th style="text-align:center">Phone</th>
                        <th class="text-center" >Address</th>
                        <th class="text-center" >Image</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($Records))
                    {                       
                        foreach($Records as $record)
                        {
                    ?>
                    <tr>                       
                   
                        <td style="text-align:center"><?php echo $record->emp_id ?></td>
                         <td class="text-center"><?php echo $record->emp_name ?></td>
                         <td class="text-center"><?php echo $record->phone ?></td>
                         <td class="text-center"><?php echo $record->address ?></td>
                         <td class="text-center"><?php echo $record->dob ?></td>
                        <td><img src="<?php echo $record->emp_image ?>" alt="..." height="30px" width="50px" class="img-responsive"/></td>
                        
                        <td class="text-center">                             
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'editemp/'.$record->emp_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>  | 
                            <a class="btn btn-sm btn-danger deletebrand" href="<?php echo base_url().'deleteemp/'.$record->emp_id; ?>" data-userid="<?php echo $record->emp_id; ?>" title="Delete"><i class="fa fa-trash"></i></a> 
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>               
                </div>
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "empListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
