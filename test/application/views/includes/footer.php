

    <footer class="main-footer">
           </footer>
    
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>

    <script type="text/javascript">
function readURL(input, imgControlName) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
           reader.onload = function(e) {
            $(imgControlName).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            }
          }

          $("#imag").change(function() {
            // add your logic to decide which image control you'll use
            var imgControlName = "#ImgPreview";
          readURL(this, imgControlName);
            $('.preview1').addClass('it');
           $('.btn-rmv1').addClass('rmv');
          });

          $("#removeImage1").click(function(e) {
           e.preventDefault();
           $("#imag").val("");
           $("#ImgPreview").attr("src", "");
           $('.preview1').removeClass('it');
           $('.btn-rmv1').removeClass('rmv');
          });
</script>

<script type="text/javascript">
    function readURL(input, imgControlName) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
       reader.onload = function(e) {
        $(imgControlName).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
      }

      $("#imag").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview";
      readURL(this, imgControlName);
        $('.preview1').addClass('it');
       $('.btn-rmv1').addClass('rmv');
      });

      $("#removeImage1").click(function(e) {
       e.preventDefault();
       $("#imag").val("");
       $("#ImgPreview").attr("src", "");
       $('.preview1').removeClass('it');
       $('.btn-rmv1').removeClass('rmv');
      });

    $('document').ready(function()
    {
    $('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
     );
    });
</script>



  </body>
</html>