        <footer>
          <div class="pull-right">
                  <a class="select2" href="" target="_blank"></a> | Dev by
                  <a class="select2" href="" target="_blank">Mayang Arta Mahesi</a> | E-mail:
                  <a class="select2" href="mailto:mayangartha@gmail.com?Subject=" target="_top">mayangartha@gmail.com</a>
            
        
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
   <script src="<?php echo base_url()?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <!-- Chart.js -->
    <script src="<?php echo base_url()?>assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url()?>assets/admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- easy-pie-chart -->
    <script src="<?php echo base_url()?>assets/admin/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>assets/admin/build/js/custom.min.js"></script>

    <!-- datatable -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


    <!-- datatable -->
    <!-- tinymce -->
     <!-- Custom js for this page-->
  <!--<script src="<?=base_url()?>assets/xinha/XinhaEasy.js" type="text/javascript"></script>-->
  <script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->

  <script type="text/javascript">
      tinymce.init({
        selector: '#berita',
        height: 300,
        theme: 'modern',
        plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        automatic_uploads: true,
        image_advtab: true,
        images_upload_url: "<?php echo base_url('adm/upload_tinymce')?>",
        file_picker_types: 'image', 
        paste_data_images:true,
        relative_urls: false,
        remove_script_host: false,
          file_picker_callback: function(cb, value, meta) {
             var input = document.createElement('input');
             input.setAttribute('type', 'file');
             input.setAttribute('accept', 'image/*');
             input.onchange = function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                   var id = 'post-image-' + (new Date()).getTime();
                   var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                   var blobInfo = blobCache.create(id, file, reader.result);
                   blobCache.add(blobInfo);
                   cb(blobInfo.blobUri(), { title: file.name });
                };
             };
             input.click();
          }
      });
  </script>
  </body>
</html>