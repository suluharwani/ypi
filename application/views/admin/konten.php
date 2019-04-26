       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
       <div class="right_col" role="main">
        <style type="text/css" media="screen">
        .btndownload {
          background-color: DodgerBlue;
          border: none;
          color: white;
          padding: 12px 40px;
          cursor: pointer;
          font-size: 20px;
        }

        /* Darker background on mouse-over */
        .btndownload:hover {
          background-color: RoyalBlue;
        }
      </style>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
      <script src="<?=base_url('assets/bootstrap-3.3.7/js/bootstrap.min.js')?>"></script>

      <!-- top tiles -->
      <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Alumni</span>
          <div class="count"><?=$total_alumni?></div>
          <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-clock-o"></i>Total Angkatan</span>
          <div class="count"><?=$total_angkatan?></div>
          <!--       <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i>Belum Dikonfirmasi</span>
          <div class="count green"><?=$orang_baru_belum_dikonfirmasi?></div>
          <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i>Sudah Dikonfirmasi</span>
          <div class="count"><?=$orang_sudah_dikonfirmasi?></div>
          <!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Admin</span>
          <div class="count"><?=$total_Admin?></div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>aktif </i><?=$nama_admin?></span>
        </div>
      </div>
      <!-- /top tiles -->

      <div class="row">
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
        <br />

        <div class="row">


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="x_title">
                <h2>Upload Data Dari Excel</h2>
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
                <form action="<?php echo base_url();?>adm/upload/" method="post" enctype="multipart/form-data">
                  <input type="file" name="file" id="file" accept=".xls, .xlsx" />
                  <input type="submit" name="import" value="Import"/>
                </form>

              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320 overflow_hidden">
              <div class="x_title">
                <h2>Format Excel</h2>
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
                <a href="<?=base_url()?>assets/excel/format%20upload%20alumni.xlsx">
                  <button class="btndownload"><i class="fa fa-download"></i> Download Format Kosong</button>
                </a>
                <a href="<?=base_url()?>excel/import_data.xlsx">
                  <button class="btndownload"><i class="fa fa-download"></i> Download Data Terakhir</button>
                </a>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="x_title">
                <h2>  <a href="<?php echo base_url("adm/form"); ?>">Status Alumni</a><br><br></h2>
                <div>  (<?=$total_alumni;?> Alumni) </div>
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
              <div class="x_content"> <div>
                <p>Kerja (<?=$total_kerja?>)</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=$persentase_kerja?>"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Kuliah (<?=$total_kuliah?>)</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=$persentase_kuliah?>"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-6">
              <div>
                <p>Belum Kerja (<?=$total_belum_kerja;?>)</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=$persentase_belum_kerja?>"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Kuliah Sambil Kerja (<?=$total_kerja_kuliah;?>)</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=$persentase_kerja_kuliah?>"></div>
                  </div>
                </div>
                <div>
                  <p>Ibu Rumah Tangga</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!--MODAL HAPUS-->
<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Hapus Siswa</h4>
      </div>
      <!-- <form method="post" class="form-horizontal"> -->
        <div class="modal-body">

          <input type="hidden" name="id_siswa_hapus" id="id_siswa_hapus">
          <input type="hidden" name="nama_siswa_hapus_val" id="nama_siswa_hapus_val">
          <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus  <span id="nama_siswa_hapus"></span>?</p>
            NISN: <span id="nisn_hapus"></span>
          </div>
          
        </div>
        <!-- </form> -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <!-- <button class="btn btn-danger" id="btn_hapus_siswa">Hapus</button> -->
          <div id="btn_hapus_siswa">Hapus</div>
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
        "iDisplayLength": 500,    
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

        }
      $('#dropdown1').on('change', function () {
        if (!!this.value) {
          table.column(4).search(this.value).draw();
        } else {
          table.column(4).search(this.value).draw();
        }
      } );

    } );

  </script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
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
              show_alumni();
              swal ( "Sukses" ,  " Berhasil Dihapus!" ,  "success", {
              buttons: false,
              timer: 1000,
            } );
            }
          });
          return false;
        });


  </script>


