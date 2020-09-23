<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
        .error{
    		color:red;
    		font-weight: normal;
    	}
    	
        .btn_upload {
                  cursor: pointer;
                  display: inline-block;
                  overflow: hidden;
                  position: relative;
                  color: #fff;
                  background-color: #3c8dbc;
                  border: 1px solid #166b8a;
                  padding: 5px 10px;
        }

        .btn_upload:hover,
        .btn_upload:focus {
          background-color: #7ca9e6;
        }

        .yes {
          display: flex;
          align-items: flex-start;
          margin-top: 10px !important;
        }

        .btn_upload input {
          cursor: pointer;
          height: 100%;
          position: absolute;
          filter: alpha(opacity=1);
          -moz-opacity: 0;
          opacity: 0;
        }

        .it {
          height: 100px;
          margin-left: 10px;
        }

        .color {
            margin: 20px;
            display:flex;  
            list-style:none;
        }

        .input-color {
            position: relative;
        }
        
        .input-color input {
            padding-left: 20px;
        }
        
        .input-color .color-box {
            width: 10px;
            height: 10px;
            display: inline-block;
            background-color: #ccc;
            position: absolute;
            left: 5px;
            top: 5px;
        }
    </style>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
       <script type="text/javascript">
     jQuery(document).delegate('a.add-record', 'click', function(e) {
     e.preventDefault();
     var content = jQuery('#sample_table tr'),
     size = jQuery('#tbl_posts >tbody >tr').length + 1,
     element = null,
     element = content.clone();
     element.attr('id', 'rec-'+size);
     element.find('.delete-record').attr('data-id', size);
     element.appendTo('#tbl_posts_body');
     element.find('.sn').html(size);
   });
 </script>
   <script type="text/javascript">
    jQuery(document).delegate('a.delete-record', 'click', function(e) {
     e.preventDefault();
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec-' + id).remove();

    //regnerate index number on table
    $('#tbl_posts_body tr').each(function(index) {
      //alert(index);
      $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
   </script>