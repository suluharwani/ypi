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
        <style type="text/css" media="screen">
        .modal.modal-wide .modal-dialog {
          width: 90%;
        }
        .modal-wide .modal-body {
          overflow-y: auto;
        }
        #tallModal .modal-body p { margin-bottom: 900px }
      </style>
      <style type="text/css">
      #image-preview{
        display:none;
        width : 250px;
      }
    </style>
    <script type="text/javascript" charset="utf-8" async defer>
      function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function(oFREvent) {
          document.getElementById("image-preview").src = oFREvent.target.result;
        };
      };
    </script>



    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">

          <div class="row x_title">
            <div class="col-md-6">
              <h3>Data Berita</h3>
            </div>
            <div class="col-md-6">
              <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span><?=$tanggal;?></span> <b class="caret"></b>

              </div>

            </div>
          </div>
          <main role="main" class="col-md-612 ml-sm-auto col-lg-12 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <div class="btn-toolbar mb-2 mb-md-0">
                <button class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambahberita">
                  <span data-feather="plus-circle"></span>
                  Tambah Data Berita
                </button>
                <div class="dropdown">
                  <div class="dropdown-menu" aria-labelledby="ddwaktu">
                    <input type="date" name="" class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body"> 
                    <div class="table-responsive">
                      <table id="tabel_berita" class="table table-striped">
                        <thead>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Gambar</th>
                          <th>tanggal</th>
                          <th>Status</th>
                          <th>Penulis</th>
                          <th>Actions</th>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>   
          </main>
        </div>
      </div>
    </div>
  </div>

  <!-- start Modal Admin -->
  <div class="modal modal-wide fade" id="tambahberita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label  class="col-sm-2 control-label" >Judul Berita</label>
            <div class="col-sm-10">
              <input type="text" name="judul" class="form-control" 
              id="judul" placeholder="Judul Berita" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="gambar">Gambar</label>
            <div class="col-sm-10">
              <img id="image-preview" alt="image preview"/>
              <br/>
              <input type="file" accept=".png, .jpg, .jpeg" id="image-source" name="gambar" onchange="previewImage();"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="isi">Isi Artikel</label>
            <div class="col-sm-10">
              <textarea name="isi" class="form-control" id="berita" rows="1" id="isi" placeholder="Isi Artikel"></textarea>
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
    var table =   $('#tabel_berita').DataTable({
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
              "url": "<?php echo site_url('adm/ajax_list_berita')?>",
              "type": "POST"
            },

            columns: [
                {}, //no
                {}, //
                { mRender: function (data, type, row) {
                  return '<img src="<?=base_url()?>/assets/gambar/berita/'+row[2]+'" class="avatar" alt="Avatar">'
                }}, //
                {}, //
                {
                  mRender: function (data, type, row) {
                    if (row[4]==1) {
                     return '<span class="label label-success">Aktif</span>'
                   }else{
                     return '<span class="label label-danger">Tidak Aktif</span>'

                   }
                 }
                }, //
                {mRender: function (data, type, row) {
                  return row[5]
                }}, //
                {
                 mRender: function (data, type, row) {
                  if (row[4]==1) {
                  return '<a class="btn btn-sm btn-danger delete"  href="<?= base_url() ?>adm/ajax_delete_berita/'+row[6]+'" onclick="return confirm(`Apakah anda yakin untuk menghapus data ini?`)"  title="Hapus"   >DELETE</a><a class="btn btn-sm btn-warning"  href="<?= base_url() ?>adm/ajax_batal_berita/'+row[6]+'" onclick="return confirm(`Apakah anda yakin untuk mebatalkan berita ini?`)"  title="batalkan"   >BATAL</a>'
                }else{
                  return '<a class="btn btn-sm btn-danger delete"  href="<?= base_url() ?>adm/ajax_delete_berita/'+row[6]+'" onclick="return confirm(`Apakah anda yakin untuk menghapus data ini?`)"  title="Hapus"   >DELETE</a><a class="btn btn-sm btn-success"  href="<?= base_url() ?>adm/ajax_confirm_berita/'+row[6]+'"  title="aktifkan"   >AKTIFKAN</a>'
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


