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
                <h3><?=$headline?> <?=$nama_halaman?> <small></small> </h3>
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

        <!-- page content -->
<?php
if (is_numeric($update_id)) {
  # code...
?>               

          <form class="form-horizontal" method="post" >
                        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form <?=$title_update?> <small></small></h2>
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
                    <br />
                   <!--  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                     <form>
                      <?php 
                     if ($gambar=="") {
                     ?>
                     <a href="<?php echo $base_url_id?>adminccm/upload_image_merchant/<?= $update_id?>"><button type="button" class="btn btn-primary">Upload Gambar merchant</button></a>
                     <?php
                     }else{
                       ?>
                     <a href="<?php echo $base_url_id?>adminccm/hapus_gambar_merchant/<?= $update_id?>"><button type="button" class="btn btn-danger">Hapus Gambar merchant</button></a>
                     <?php }?>   
                     <img src="<?=$base_url_id?>/assets/upload/merchant/<?=$gambar?>" width="100px" alt="">
                      <span class="pull-right">
                      <a href="<?php echo $base_url_id?>adminccm/hapus_merchant/<?= $update_id?>"><button type="button" onclick="return confirm(`Yakin?`)" class="btn btn-danger">Hapus Halaman</button></a>
                     </span>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            </form>
<?php 
}
?>

<!-- batas -->

          <form class="form-horizontal" method="post" >
                        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form <?=$title_create?> <small></small></h2>
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
                    <br />
                   <!--  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                     <?php  echo form_open_multipart('adminccm/merchant');?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="judul" class="form-control col-md-7 col-xs-12" <?php if (is_numeric($update_id)) {
                            echo("value ='$judul'");
                          }?> >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penulis <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="penulis" class="form-control col-md-7 col-xs-12" <?php if (is_numeric($update_id)) {
                            echo("value ='$penulis'");
                          }?> >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal <span >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class='input-group date' id='myDatepicker2'>
   <input type="text" id="last-name" name="tanggal" required="required" class="form-control col-md-7 col-xs-12" <?php if (is_numeric($update_id)) {
                            echo("value ='$tanggal'");
                          }?> >
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>

                        </div>
                      </div>
<!--                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"  >Gambar</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file" name="gambar">
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="kategori" class="btn-group" data-toggle="buttons">
                            <!-- <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default"> -->
                              <input type="radio" name="kategori" value="1" <?php if (is_numeric($update_id) && ($kategori==1)) {
                            echo("checked='checked'");
                          }?> > &nbsp; Indonesia &nbsp;
                          <!--   </label> -->
                           <!--  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default"> -->
                              <input type="radio" name="kategori" value="2" <?php if (is_numeric($update_id) && ($kategori==2)) {
                            echo("checked='checked'");
                          }?> > English
                       <!--      </label> -->
                          </div>
                        </div>
                      </div>
                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Facebook Link 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="facebook"  class="form-control col-md-7 col-xs-12" <?php if (is_numeric($update_id)) {
                            echo("value ='$facebook'");
                          }?> >
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Twitter Link 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="twitter" class="form-control col-md-7 col-xs-12" <?php if (is_numeric($update_id)) {
                            echo("value ='$twitter'");
                          }?> >
                        </div>
                      </div>                   
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Instagram Link 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="instagram" required="required" class="form-control col-md-7 col-xs-12" <?php if (is_numeric($update_id)) {
                            echo("value ='$instagram'");
                          }?> >
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telepon/WA
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="telepon" required="required" class="form-control col-md-7 col-xs-12" <?php if (is_numeric($update_id)) {
                            echo("value ='$telepon'");
                          }?> >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Isi <span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                          <textarea class="ckeditor form-control col-md-7 col-xs-12" name="isi" required="required"><?php if (is_numeric($update_id)) {
                            echo $isi;
                          }?></textarea> 
                        </div>
                      </div>
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <!--     <button class="btn btn-primary" type="button">Cancel</button> -->
                         <button class="btn btn-primary"  type="reset">Reset</button>
                          <button class="btn btn-warning"  type="submit" name="submit" value="cancel" >Cancel</button>
                          <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            </form>
                  </div>
                </div>

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
        format: 'YYYY.MM.DD'
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
<script src="<?=$base_url_id?>assets/ckeditor/ckeditor.js"></script>