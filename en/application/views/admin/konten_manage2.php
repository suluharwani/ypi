<?php $base_url_id = $this->config->item('base_url_id');?>
  <!-- bootstrap-daterangepicker -->
    <link href="<?php echo $base_url_id?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo $base_url_id?>assets/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
 


  <script src="<?php echo $base_url_id?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
        <!-- page content --> 
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage <?=$nama_halaman?> <small></small> </h3>
              </div>

            </div>
<!-- 5k -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$nama_halaman?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>

<!-- table -->


                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Versi Halaman</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                <?php
                 $no = 1;
                foreach ($query_merchant->result() as $row ) {
                
                  $edit_item_url = $base_url_id."adminccm/merchant/".$row->id;
                  $kategori = $row->kategori;
                  if ($kategori==1) {
                    $kategori_desc = "Bahasa Indonesia";
                   } else {
                    $kategori_desc = "English";
                   }
              
                ?>




                <tr>
                <td><?= $no++?></td>
                <td class="center"><?= $row->judul?></td>
                <td class="center"><?= $kategori_desc?></td>
                <td class="center">
                  <a class="btn btn-success" href="#">
                    <i class="glyphicon glyphicon-eye-open">  Lihat</i>  
                  </a>
                  <a class="btn btn-info" href=<?= $edit_item_url?>>
                    <i class="glyphicon glyphicon-edit">  Edit</i>  
                  </a>
                  
                </td>
              </tr>
                  <?php }?>
                      </tbody>
                    </table>

    


<!-- table -->






















          </div>
        </div>

        <script src="<?=$base_url_id?>/assets/admin/cleditor.js"></script>

        <!-- /page content -->
  <!-- bootstrap-daterangepicker -->
    <script src="<?php echo $base_url_id?>assets/admin/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo $base_url_id?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo $base_url_id?>assets/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>