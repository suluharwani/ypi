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
                      <th>NISN</th>
                      <th>Nama Depan</th>
                      <th>Nama Belakang</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Angkatan</th>
                      <th>HP</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  
                  <tfoot>
                    <tr>
                      <th>NISN</th>
                      <th>Nama Depan</th>
                      <th>Nama Belakang</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Angkatan</th>
                      <th>HP</th>
                      <th>Email</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
      <br />




      <script type="text/javascript">

        $(document).ready(function() {
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
            {mRender: function (data, type, row) {


              return  row[3]

            }
          },
          {
           mRender: function (data, type, row) {


             return  row[1]

           }

                }, //Nama Depan
                {
                  mRender: function (data, type, row) {


                   return  row[2]

                 }

               }, 
               {  mRender: function (data, type, row) {


                 return  row[9]

               }},
               {mRender: function (data, type, row) {


                 return  row[10]

               }}, 

               {mRender: function (data, type, row) {


                 return  row[4]

               }}, 

               {mRender: function (data, type, row) {


                 return  row[5]

               }}, 
               {
                 mRender: function (data, type, row) {


                   return  row[6]

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


