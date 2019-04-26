  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Guru</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->

      <!-- /.row -->

      
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive" >
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">

                    <div class="row x_title">
                      <div class="col-md-6">
                        <h3>Data Materi Diupload</h3>
                      </div>
                      <div class="col-md-6">
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span><?=$tanggal;?></span> <b class="caret"></b>

                        </div>
                      </div>
                      <div class="col-md-6">
                      </div>
                    </div>
                    <div class="row x_title">
                      <div class="col-md-6">
                       <button type="button" class="btn btn-block btn-primary btn-md tabel_materi_upload">Tambah Materi</button>
                     </div>

                     <div class="col-md-6">
                     </div>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="chart_plot_01" class="demo-placeholder">  

                      <div class="row form-inline">
                        <div class="col-md-3" >
                        </div>
                      </div>
                      <hr>
                      <table id="tabel_materi" class="display" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>File</th>
                            <th>Mata Pelajaran</th>
                            <th>Jurusan</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="show_materi">
                        </tbody>

                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>File</th>
                            <th>Mata Pelajaran</th>
                            <th>Jurusan</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>

                </div>


              </div>

            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-success">

          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="table-responsive" >
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph">

                  <div class="row x_title">
                    <div class="col-md-6">
                      <h3>Data Info Pelajaran</h3>
                    </div>
                    <div class="col-md-6">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span><?=$tanggal;?></span> <b class="caret"></b>

                      </div>
                    </div>
                  </div>
                  <div class="row x_title">
                    <div class="col-md-6">
                     <button type="button" class="btn btn-block btn-primary btn-md tabel_informasi_pengajaran">Tambah Informasi Pengajaran</button>
                   </div>

                   <div class="col-md-6">
                   </div>
                 </div>
                 <div class="col-md-12 col-sm-12 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder">  

                    <div class="row form-inline">
                      <div class="col-md-3" >
                      </div>
                    </div>
                    <hr>
                    <table id="tabel_info" class="display" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Tanggal</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show_info">
                      </tbody>

                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Tanggal</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>

              </div>


            </div>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <div class="row">
        <div class="col-md-6">
          <!-- Download Format -->
          <div class="box box-warning direct-chat direct-chat-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Catatan Dari Admin</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                   <!--  <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button> -->
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <!-- Conversations are loaded here -->
                          <div class="x_content">
                            <a href="<?=base_url()?>assets/excel/format%20upload%20alumni.xlsx">
                              <button class="btndownload"><i class="fa fa-download"></i> Download Format Kosong</button>
                            </a>
                            <a href="<?=base_url()?>excel/import_data.xlsx">
                              <button class="btndownload"><i class="fa fa-download"></i> Download Data Terakhir</button>
                            </a>
                          </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                         <form action="<?php echo base_url();?>adm/upload/" method="post" enctype="multipart/form-data">
                          <input type="file" name="file" id="file" accept=".xls, .xlsx" />
                          <input type="submit" name="import" value="Import"/>
                        </form>
                      </div>
                      <!-- /.box-footer-->
                    </div>
                    <!--/.direct-chat -->
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <!-- USERS LIST -->
                    <div class="box box-danger">
                      <div class="box-header with-border">
                        <h3 class="box-title">Latest Members</h3>

                        <div class="box-tools pull-right">

                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body no-padding">

                        <!-- /.users-list -->
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer text-center">

                      </div>
                      <!-- /.box-footer -->
                    </div>
                    <!--/.box -->
                  </div>
                  <!-- /.col -->
                </div>
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                  <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Materi Pelajaran</span>
                    <span class="info-box-number"></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: %"></div>
                    </div>
                    <span class="progress-description">
                      Materi yang diupload
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-green">
                  <span class="info-box-icon"><i class="ion ion-ios-briefcase-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Info Pengajaran </span>
                    <span class="info-box-number"></script></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: %"></div>
                    </div>
                    <span class="progress-description">
                      Alumni yang Kuliah %
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-red">
                  <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Belum Kerja</span>
                    <span class="info-box-number"></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: %"></div>
                    </div>
                    <span class="progress-description">
                      Yang belum bekerja %
                      <br/>
                      Yang belum memasukkan data tidak dihitung

                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-aqua">
                  <span class="info-box-icon"><i class="ion-ios-pricetag-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Kuliah Sambil Kerja</span>
                    <span class="info-box-number"></span>

                    <div class="progress">
                      <div class="progress-bar" style="width: %</div>
                      </div>
                      <span class="progress-description">
                        Yang bekerja sambil kuliah %
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->

                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->


          <!--MODAL HAPUS-->
          <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
                  <h4 class="modal-title" id="myModalLabel">Hapus Siswa</h4>
                </div>
                <form class="form-horizontal" enctype="multipart/form-data">
                  <div class="modal-body">

                    <input type="hidden" name="id_siswa_hapus" id="id_siswa_hapus">
                    <input type="hidden" name="nama_siswa_hapus_val" id="nama_siswa_hapus_val">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus  <span id="nama_siswa_hapus"></span>?</p>
                      NISN: <span id="nisn_hapus"></span>
                    </div>

                  </div>
                </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button class="btn btn-danger" id="btn_hapus_siswa">Hapus</button>
                </div>

              </div>
            </div>
          </div>
          <!--MODAL tambah info-->
          <div class="modal fade" id="Modal_tambah_info">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Info</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body&hellip;</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!--MODAL tambah materi-->
            <div class="modal fade" id="Modal_tambah_materi">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Tambah Materi</h4>
                    </div>
                    <div class="modal-body">
                      <div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data" id="submitmateri">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama Materi</label>
                              <input type="text" class="form-control" name="nama_materi" id="nama_materi" placeholder="Nama Materi">
                            </div>
                            <div class="form-group">
                              <label class="control-label" >Jurusan/Tingkat</label>      
                              <select name="jurusan" id="jurusan" class="form-control" required="true" >
                                <option value="" selected disabled>--- Pilih Jurusan/Tingkat ---</option>
                                <?php
                                foreach ($jurusan as $key => $value) {
                                  echo "<option value='".$value->id."'>".$value->nama_jurusan."</option>";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">

                              <label class="control-label" > Mata Pelajaran</label>
                              <select name="mata_pelajaran" id="mata_pelajaran" class="form-control"  required="true" >
                                <option selected disabled>Pilih Mata Pelajaran</option>}
                                option
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Keterangan</label>
                              <textarea id="keterangan_materi" name="keterangan_materi" rows="10" cols="80">
                              </textarea>
                            </div>

                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" name="file_materi" id="file_materi">
                            </div>
                          </div>
                          <!-- /.box-body -->

                        </div>
                        <!-- /.box -->
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary" >Save changes</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->


              <script type="text/javascript">

                $(document).ready(function() {
                  show_materi();
                  show_info();

                  
                  function show_materi(){
                    var id_guru = "<?=$id_guru?>";

                    $.ajax({
                      type : "post",
                      url  : "<?php echo site_url('guru/materi')?>",
                      dataType : "JSON",
                      data : {id_guru:id_guru},
                      success: function(materi){

                        var html = '';
                        var i;
                        var no = 1;
                        for(i=0; i<materi.length; i++){
                          html += '<tr>'+
                          '<td>'+ no++ +'</td>'+
                          '<td>'+materi[i].nama_materi+'</td>'+
                          '<td title="'+materi[i].file+'">'+(materi[i].file).substring(0, 10)+'</td>'+
                          '<td>'+materi[i].nama_mata_pelajaran+'-'+materi[i].tingkat+'</td>'+
                          '<td>'+materi[i].nama_jurusan+'</td>'+
                          '<td>'+materi[i].tanggal_buat+'</td>'+
                          '<td style="text-align:right;">'+
                          '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_detail">Detail</a>'+' '+
                          '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit">Edit</a>'+' '+
                          '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete">Delete</a>'+
                          '</td>'+
                          '</tr>';
                        }
                        lap = html;
                        $('#show_materi').html(lap);
                        $('#tabel_materi').DataTable({
                          "pageLength": 5,
                          retrieve: true,
                          dom: 'Bfrtip',
                          buttons: [
                          'copy', 'csv', 'excel', 'pdf', 'print'
                          ]
                        });

                      }
                    });
                  };

                  function show_info(){
                    var id_guru = "<?=$id_guru?>";
                    $.ajax({
                      type : "post",
                      url  : "<?php echo site_url('guru/informasi_pengajaran')?>",
                      dataType : "JSON",
                      data : {id_guru:id_guru},
                      success: function(informasi){

                        var html = '';
                        var i;
                        var no = 1;
                        for(i=0; i<informasi.length; i++){
                          html += '<tr>'+
                          '<td>'+ no++ +'</td>'+
                          '<td>'+informasi[i].judul+'</td>'+
                          '<td>'+informasi[i].tanggal+'</td>'+
                          '<td style="text-align:right;">'+
                          '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_detail">Detail</a>'+' '+
                          '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit">Edit</a>'+' '+
                          '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete">Delete</a>'+
                          '</td>'+
                          '</tr>';
                        }
                        info = html;
                        $('#show_info').html(info);
                        $('#tabel_info').DataTable({
                          "pageLength": 5,
                          retrieve: true,
                          dom: 'Bfrtip',
                          buttons: [
                          'copy', 'csv', 'excel', 'pdf', 'print'
                          ]
                        });

                      }
                    });
                  };

                  $('#submitmateri').submit(function(e){
                    e.preventDefault(); 
                    $.ajax({
                      url:"<?php echo site_url('guru/do_upload')?>",
                      type:"post",
                      data:new FormData(this),
                      processData:false,
                      contentType:false,
                      cache:false,
                      async:false,
                      success: function(data){
                       show_materi();
                       swal ( "Sukses" ,  "Materi Ditambahkan!" ,  "success", {
                        buttons: false,
                        timer: 1000,
                      } );


                       $('#Modal_tambah_materi').modal('hide');


                     }
                   });
                  });

                } );

  $(document).ready(function(){
    $('.tabel_informasi_pengajaran').on('click',function(){
     $('#Modal_tambah_info').modal('show');
   });
  });
  $(document).ready(function(){
    $('.tabel_materi_upload').on('click',function(){
     $('#Modal_tambah_materi').modal('show');
   });
  });
  $(document).ready(function(){
    $('.btn_materi_upload').on('click',function(){


     var id_guru = $('#id_guru').val();
     var password = $('#password').val();
     if(id_guru != '' && password !=''){
      $.ajax({

        url: "<?php echo base_url(); ?>guru/proses_login",
        method: "POST",
        dataType : "JSON",
        data: {id_guru:id_guru, password:password},
        success: function(data){
          swal ( "Login Sukses" ,  "Login guru berhasil! , IP anda <?php if (isset($ip_login)) {echo($ip_login);} ?> " ,  "success", {
            buttons: false,
            timer: 2000,
          } );
          $('#Modal_tambah_materi').modal('hide');
                        // $('#tabel_materi').DataTable().destroy();
                        show_materi();
                      }
                    });
    }
  });

  });

  $(document).ready(function() {
    $('select[name="jurusan"]').on('change keyup blur focus', function() {
      var jurusan_id = $(this).val();
      if(jurusan_id) {
        $.ajax({
          url: "<?php echo site_url('guru/pilih_mata_pelajaran/')?>"+jurusan_id,
          type: "GET",
          dataType: "json",
          success:function(data) {
            $('select[name="mata_pelajaran"]').empty();
            $.each(data, function(key, value) {
              $('select[name="mata_pelajaran"]').append('<option value="'+ value.id +'">'+ value.nama_mata_pelajaran +'-'+value.tingkat+'</option>');
            });
          }
        });
      }else{
        $('select[name="mata_pelajaran"]').empty();
      }
    });
  });



</script>
<!-- CK Editor -->
<script src="<?=base_url('assets/adminLTE')?>/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets/adminLTE')?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('keterangan_materi')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
