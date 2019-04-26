 <!-- page content -->
        <div class="right_col" role="main">
           
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $title;?></h2>
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
                 
                    

                    <div class="table-responsive container">
                      <!-- <table class="table table-striped jambo_table bulk_action" id="datatable"> -->
                          <div class="row form-inline">
                    <div class="col-md-3" >
                        <span class="control-label">Ditampilkan</span>

                        <select class="form-control" id="dropdown1">
                            <option value="">Semua</option>
                            <option value="2">Belum bayar</option>
                            <option value="1">Sudah Bayar</option>
                        </select>
                    </div>
                </div>
                <hr>
                         <table id="user_data" class="display">
                        <thead>
                          <tr>

                            <td>No </td>
                            <td>Kategori Lomba</td>
                            <td>Jersey Size</td>
                            <td>Bukti </td>
                            <td>No Pendaftaran</td>
                            <td>Nama</td>
                            <td>KTP</td>
                            <td>Status</td>
                            <td>Delete</td>
                            <td>Konfirmasi</td>
                            
                            <!-- <td>Action</td> -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr></tr>
                         
                        </tbody>
                      </table>
                    </div>
              
            
                  </div>
                </div>
              </div>




        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- datatables -->

<script type="text/javascript">

    $(document).ready(function() {
        var table =   $('#user_data').DataTable({
            scrollY: '', /*'65vh'*/
            scrollCollapse: true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('adminccm/ajax_list')?>",
                "type": "POST"
            },

            columns: [
                {}, 
                {
                    mRender: function (data, type, row) {
                              if(row[1] == 1){
                             return '5K'
                        }else if(row[1] == 2){
                             return '10K'
                        }else if(row[1] == 3){
                             return '21K NAS'
                        }else if(row[1] == 4){
                             return '21K INTER NAS'
                        }else if(row[1] == 5){
                             return '42 K NAS'
                        }else if(row[1] == 6){
                             return '42 K INTER NAS'
                        }else {
                          return 'Belum Dipilih'
                        }

                         
                         
                }
                },
                {
                  mRender: function (data, type, row) {
                             if (row[2] == 1){
                            return 'S'
                        }else if(row[2] == 2){
                             return 'M'
                        }else if(row[2] == 3){
                             return 'L'
                        }else if(row[2] == 4){
                             return 'XL'
                        }else {
                          return 'Belum Dipilih'
                        }

                         
                         
                }


                },
                {
                                    mRender: function (data, type, row) {
                            
                            return '<a class="btn btn-sm btn-default"  href="<?= base_url() ?>adminccm/halaman_bukti/'+row[7]+'" title="bukti" >Lihat Bukti</a>'
                      

                         
                         
                }
                },

                {},

                {},
                {},
               
                /* status */ {
                    mRender: function (data, type, row) {
                        if (row[8] == 1) {
                            return '<td>Sudah Bayar<td>';
                        }else{
                            return '<td>Belum Bayar<td>';
                        }
                    }
                },
                /* hapus */
                {
                    mRender: function (data, type, row) {
                          return '<a class="btn btn-sm btn-danger delete"  href="<?= base_url() ?>adminccm/ajax_delete/'+row[7]+'" onclick="return confirm(`Apakah anda yakin untuk menghapus data ini?`)"  title="delete"   >DELETE</a>'


                    }

                },
                //konfirmasi
                {
                  mRender: function (data, type, row) {
                             if (row[8] == 1) {
                            return '<a class="btn btn-sm btn-warning"  href="<?= base_url() ?>adminccm/ajax_batal_konfirmasi/'+row[7]+'" onclick="return confirm(`Batalkan Konfirmasi Pembayaran?`)"  title="delete" >Batalkan Konfirmasi Pembayaran</a>'
                        }else{
                             return '<a class="btn btn-sm btn-success"  href="<?= base_url() ?>adminccm/ajax_konfirmasi/'+row[7]+'" onclick="return confirm(`Konfirmasi Pembayaran?`)"  title="delete"   >Konfirmasi Pembayaran</a>'
                        }

                         
                         
                }

              }
              //batal konfirmasi
               

            
 
            ],
            "stripeClasses": ['', '']
        });


        $('#dropdown1').on('change', function () {
            if (!!this.value) {
                table.column(8).search(this.value).draw();
            } else {
                table.column(8).search(this.value).draw();
            }
        } );

 


    } );


</script>
