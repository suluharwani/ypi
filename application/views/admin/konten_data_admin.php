       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
       <div class="right_col" role="main">
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
                  <h3>Data Admin</h3>
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

                  </div>
                  <div>
                    <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambahadmin">
                      <span data-feather="plus-circle"></span>
                      Tambah Admin
                    </button>
                  </div> 
                  <hr>
                  <table id="admin" class="display" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>No Hp</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>

                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>No Hp</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- start Modal Admin -->
      <div class="modal fade" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">
              Tambah Data Admin
            </h4>
            <button type="button" class="close" data-dismiss="modal">
             <span aria-hidden="true">&times;</span>
             <span class="sr-only">Close</span>
           </button>

         </div>

         <!-- Modal Body -->
         <div class="modal-body">

          <form class="form-horizontal" role="form" method="POST">
            <div class="form-group">
              <label  class="col-sm-2 control-label" >Username</label>
              <div class="col-sm-10">
                <input type="text" name="username" class="form-control" 
                id="username" placeholder="Username" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" >Password</label>
              <div class="col-sm-10">
                <input type="password" name="password"  class="form-control"
                id="password" placeholder="Password" >
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" >Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" 
                id="nama" placeholder="Nama">
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" >No Hp</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp" class="form-control" 
                id="nohp" placeholder="No Hp">
              </div>
            </div>    
            <div class="form-group">
              <label  class="col-sm-2 control-label" >Level</label>
              <div class="col-sm-10">
                <select name="level" class="form-control" required>
                  <option value="1" class="form-control">Super Admin</option>
                  <option value="2" class="form-control">Admin</option>
                </select>
              </div>
            </div>                   
          
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" name="submit" value="submit"  class="btn btn-primary btn-md"><span class="text-white" data-feather="save"></span>Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end Modal Admin -->  


  <script type="text/javascript">

    $(document).ready(function() {
      var table =   $('#admin').DataTable({
        scrollY: '', /*'65vh'*/
        "iDisplayLength": 20,    
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
              "url": "<?php echo site_url('adm/ajax_list_admin')?>",
              "type": "POST"
            },

            columns: [
                {}, //no
                {}, //Nama 
                {}, //username
                {}, //no hp
                {
                  mRender: function (data, type, row) {
                  if (row[4] == 1) {
                    return'Super Admin'
                  }else if(row[4] == 2){
                    return'Admin'
                  }
                }
                }, // level 
                {
                 mRender: function (data, type, row) {
                  if (row[4] == 1) {
                    return '<a class="btn btn-sm btn-warning warning">Tidak dapat dihapus</a>'
                  }else if(row[4] == 2){
                    return '<a class="btn btn-sm btn-danger delete"  href="<?= base_url() ?>adm/ajax_delete_admin/'+row[5]+'" onclick="return confirm(`Apakah anda yakin untuk menghapus data ini?`)"  title="delete"   >DELETE</a>'
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


