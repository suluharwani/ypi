  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Alumni</span>
              <span class="info-box-number"><?=$total_alumni?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Angkatan</span>
              <span class="info-box-number"><?=$total_angkatan?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Belum Dikonfirmasi</span>
              <span class="info-box-number"><?=$orang_baru_belum_dikonfirmasi?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sudah Dikonfirmasi</span>
              <span class="info-box-number"><?=$orang_sudah_dikonfirmasi?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       <!--  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Admin</span>
              <span class="info-box-number"><?=$total_Admin?></span>
            </div>
      
        </div> -->
        <!-- /.col -->
      </div>
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
                <h3>Data Alumni <small>Semua angkatan</small></h3>
              </div>
              <div class="col-md-6">
                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span><?=$tanggal;?></span> <b class="caret"></b>

                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div id="chart_plot_01" class="demo-placeholder">  

                <div class="row form-inline">
                  <div class="col-md-3" >
                    <span class="control-label">Angkatan</span>

                    <select class="form-control" id="dropdown1">
                      <option value="">Semua</option>
                      <?php
                      foreach ($tahun_angkatan_option as $row) {
                        echo '<option value="'.$row->angkatan.'">'.$row->angkatan.'</option>';
                      }

                      ?>
                      
                      
                    </select>
                    
                  </div>
                </div>
                <hr>
                <table id="alumni" class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>NISN</th>
                      <th>Angkatan</th>
                      <th>HP</th>
                      <th>E-mail</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Depan</th>
                      <th>Nama Belakang</th>
                      <th>NISN</th>
                      <th>Angkatan</th>
                      <th>HP</th>
                      <th>E-mail</th>
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
        <div class="row">
            <div class="col-md-6">
              <!-- Download Format -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Downlaod Format</h3>

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
            <span class="info-box-text">Kerja</span>
            <span class="info-box-number"><?=$total_kerja?></span>

            <div class="progress">
              <div class="progress-bar" style="width: <?=$persentase_kerja?>%"></div>
            </div>
            <span class="progress-description">
              Alumni yang sudah bekerja <?=$persentase_kerja?>%
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-briefcase-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Kuliah </span>
            <span class="info-box-number"><?=$total_kuliah?></script></span>

            <div class="progress">
              <div class="progress-bar" style="width: <?=$persentase_kuliah?>%"></div>
            </div>
            <span class="progress-description">
              Alumni yang Kuliah <?=$persentase_kuliah?>%
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-red">
          <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Belum Kerja</span>
            <span class="info-box-number"><?=$total_belum_kerja;?></span>

            <div class="progress">
              <div class="progress-bar" style="width: <?=$persentase_belum_kerja?>%"></div>
            </div>
            <span class="progress-description">
              Yang belum bekerja <?=$persentase_belum_kerja?>%
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
            <span class="info-box-number"><?=$total_kerja_kuliah;?></span>

            <div class="progress">
              <div class="progress-bar" style="width: <?=$persentase_kerja_kuliah?>%</div>
            </div>
            <span class="progress-description">
              Yang bekerja sambil kuliah <?=$persentase_kerja_kuliah?>"%
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
      <form class="form-horizontal">
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



  <script type="text/javascript">

    $(document).ready(function() {
      show_alumni();
       function show_alumni(){
      var table =   $('#alumni').DataTable({
        scrollY: '', /*'65vh'*/
        "iDisplayLength": 5,    
        dom: 'Bfrtip',
        buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
        ],
        scrollCollapse: true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.


            // Load data for the table's content from an Ajax source
            "ajax": {
              "url": "<?php echo site_url('adm/ajax_list')?>",
              "type": "POST"
            },

            columns: [
                {}, //no
                {
                   mRender: function (data, type, row) {

                
                     return  ''+row[1]+' '+row[2]+''
                 
                }

                }, //Nama Depan
                {
                     mRender: function (data, type, row) {

                  if (row[8]==1) {
                     return '<span class="label label-success">Aktif</span>'
                  }else{
                     return '<span class="label label-danger">Tidak Aktif</span>'

                  }
                }

                }, //Status
                {}, //NISN
                {}, //Angkatan

                {}, //HP

                {}, //Email
                {
                 mRender: function (data, type, row) {

                  if (row[8]==1) {
                     return '<a class="btn btn-sm btn-danger alumni_delete"  id_siswa = "'+row[7]+'" nama_siswa = "'+row[1]+' '+row[2]+'" nisn_siswa="'+row[3]+'"   title="delete"   >DELETE</a>&nbsp;<a class="btn btn-sm btn-default pencil" onclick="return confirm(`Password '+row[1]+' '+row[2]+' akan kembali menjadi '+row[3]+'?`)"  href="<?= base_url() ?>adm/reset_password/'+row[7]+'"  title="Reset Password"   >Reset</a>&nbsp; <a class="btn btn-sm btn-warning sync"  href="<?= base_url() ?>adm/batal_konfirmasi_alumni/'+row[7]+'" onclick="return confirm(`Apakah anda yakin untuk membatalkan '+row[1]+' '+row[2]+'?`)" title="Batal"   >Batalkan</a>'
                  }else{
                     return '<a class="btn btn-sm btn-danger alumni_delete_"  title="delete"   >DELETE</a>&nbsp; <a class="btn btn-sm btn-success pencil" id_siswa = "'+row[7]+'" nama_siswa = "'+row[1]+' '+row[2]+'" nisn_siswa="'+row[3]+'" title="konfirmasi"   >Konfirmasi</a>'

                  }
                }


                }, //action 

                
                
                ],
                "stripeClasses": ['', '']
              });


       $('#dropdown1').on('change', function () {
        if (!!this.value) {
          table.column(4).search(this.value).draw();
        } else {
          table.column(4).search(this.value).draw();
        }
      } );
       function DeleteRow()
    {
      $(this).parents('tr').first().remove();
    }

     return false;  
    };
    $('#btn_hapus_siswa').on('click',function(){
          var id_alumni = $('#id_siswa_hapus').val();
          var nama_siswa = $('#nama_siswa_hapus_val').val();


          $.ajax({
            type : "POST",
            url  : "<?php echo site_url('adm/ajax_delete')?>",
            dataType : "JSON",
            data : {id_alumni:id_alumni},
            success: function(data){
              $('[name="id_siswa_hapus"]').val("");
              $('#Modal_Delete').modal('hide');
              
              swal ( "Sukses" ,  " Berhasil Dihapus!" ,  "success", {
              buttons: false,
              timer: 1000,
            } );
             location.reload();

            }
          });
          return false;
        });

        
     

      // }

      


    } );
//     setInterval( function () {

//     table.ajax.reload();
// }, 1000 );

  </script>

  <script type="text/javascript">
    //get data for delete record
        $('#alumni').on('click','.alumni_delete',function(){
          var id_siswa = $(this).attr('id_siswa');
          var nama_siswa = $(this).attr('nama_siswa');
          var nisn = $(this).attr('nisn_siswa');
          
          $('#id_siswa_hapus').val(id_siswa);
          $('#nama_siswa_hapus').html(nama_siswa);
          $('#nama_siswa_hapus_val').val(nama_siswa);
          $('#nisn_hapus').html(nisn);
          $('#Modal_Delete').modal('show');
         
        });


        //delete record to database

        

  </script>


