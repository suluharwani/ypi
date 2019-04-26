<?php $base_url_id = $this->config->item('base_url_id');?>
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
                        <span class="control-label">Ditampilkan Status</span>

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
                            <td>Tanggal</td>
                            <td>Kategori Lomba</td>
                            <td>Jersey Size</td>
                            <td>Bukti </td>
                            <td>No Pendaftaran</td>
                            <td>Nama</td>
                            <td>KTP</td>
                            <td>Status</td>
                            <td>Biaya Masuk (Rp)</td>
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
            "iDisplayLength": 5000,    
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
                "url": "<?php echo site_url('adminccm/ajax_list')?>",
                "type": "POST"
            },

            columns: [
                {}, //no
                {}, //tanggal
                {
                    mRender: function (data, type, row) {
                              if(row[2] == 1){
                             return '5K'
                        }else if(row[2] == 2){
                             return '10K'
                        }else if(row[2] == 3){
                             return '21K NAS'
                        }else if(row[2] == 4){
                             return '21K INTER NAS'
                        }else if(row[2] == 5){
                             return '42 K NAS'
                        }else if(row[2] == 6){
                             return '42 K INTER NAS'
                        }else {
                          return 'Belum Dipilih'
                        }

                         
                         
                } 
                }, //kategori lomba
                {
                  mRender: function (data, type, row) {
                             if (row[3] == 1){
                            return 'S'
                        }else if(row[3] == 2){
                             return 'M'
                        }else if(row[3] == 3){
                             return 'L'
                        }else if(row[3] == 4){
                             return 'XL'
                        }else {
                          return 'Belum Dipilih'
                        }

                         
                         
                }


                }, //jersey
                {
                                    mRender: function (data, type, row) {
                            if (row[10] == 1) {
                             return 'Bukti Telah Diupload'
                        }else{
                            return 'Belum Ada Bukti ' ;
                           }
                           
                      

                         
                         
                }
                }, //bukti

                {}, //no pendaftaran

                {}, //nama
                {}, //ktp
               
                /* status */ {
                    mRender: function (data, type, row) {
                        if (row[9] == 1) {
                            return '<td>Sudah Bayar<td>';
                        }else{
                            return '<td>Belum Bayar<td>';
                        }





                    }
                }, //status
                /* hapus */
                {
                    mRender: function (data, type, row) {
                           if(row[2] == 1 && row[9] == 1) {
                             return '125000'
                        }else if(row[2] == 2 && row[9] == 1){
                             return '175000'
                        }else if(row[2] == 3 && row[9] == 1) {
                             return '225000'
                        }else if(row[2] == 4 && row[9] == 1){
                             return '450000'
                        }else if(row[2] == 5 && row[9] == 1){
                             return '350000'
                        }else if(row[2] == 6 && row[9] == 1){
                             return '550000'
                        }else {
                          return '0'
                        }

                    }

                }, //hapus
                //konfirmasi
                {
                  mRender: function (data, type, row) {
                             if (row[9] == 1) {
                            return 'Sudah dikonfirmasi'
                        }else{
                             return 'Belum dikonfirmasi'
                        }

                         
                         
                }

              } 
              //batal konfirmasi
               

            
 
            ],
            "stripeClasses": ['', '']
        });


        $('#dropdown1').on('change', function () {
            if (!!this.value) {
                table.column(9).search(this.value).draw();
            } else {
                table.column(9).search(this.value).draw();
            }
        } );

     $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    } );
 


    } );



</script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>