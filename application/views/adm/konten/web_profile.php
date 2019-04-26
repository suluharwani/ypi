  <style type="text/css">
    #image-preview{
      display:none;
      /*  height : 300px;*/
      width: 350px;
    }
    .pagination li {
      display:inline-block;
      padding:5px;
    }
  </style>
  <script type="text/javascript" charset="utf-8" async defer>
    function previewImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("gambar_slider").files[0]);

      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };  
  </script>
  <script type="text/javascript">
    function PreviewImage() {
      pdffile=document.getElementById("uploadPDF").files[0];
      pdffile_url=URL.createObjectURL(pdffile);
      $('#viewer').attr('src',pdffile_url);
    }

  </script>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Web Profile
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('adm')?>"><i class="fa fa-dashboard"></i> Adm</a></li>
        <li><a href="#">Web Profile</a></li>
        <!-- <li class="active">Timeline</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
              <span class="bg-green">
                <button type="button" class="btn btn-block btn-success btn-sm" id="btn_tambah_motto">Tambah Motto</button>
              </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li id="show_motto">
            </li>
            <!-- END timeline item -->

            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
              <span class="bg-green">
                <button type="button" class="btn btn-block btn-success btn-sm" id="btn_tambah_slider">Tambah Slider</button>
              </span>
            </li>
            <!-- /.timeline-label -->

            <!-- timeline item -->
            <li>
              <i class="fa fa-camera bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i></span>

                <h3 class="timeline-header"><a href="#">Slider</a> </h3>

                <div class="timeline-body" id="slider_list">

                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <li class="time-label">
              <span class="bg-green">
                Quotes of the day
              </span>
            </li>
            <li>
              <i class="fa fa-quote-right bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i></span>

                <h3 class="timeline-header"><a href="#">Quotes</a> </h3>

                <div class="timeline-body">
                 <form method="post">
                  <div>
                    <!-- <span ></span> -->
                    <textarea id="quote_isi"  placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                  <div>
                   <input type="text" class="form-control" required name="tokoh_quotes" id="quotes_auth_show" placeholder="tokoh quotes">
                 </div>
                 <div>
                  <button type="button" id="simpan_quotes" class="btn btn-block btn-success btn-sm" >Simpan</button>
                </div>

              </form>
            </div>
          </div>
        </li>
        <!-- timeline item -->
        <li class="time-label">
              <span class="bg-green">
                <button type="button" class="btn btn-block btn-success btn-sm" >Gambar depan</button>
              </span>
            </li>
        <li>
          <i class="fa fa-video-camera bg-maroon"></i>

          <div class="timeline-item">
            <!-- <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span> -->

            <h3 class="timeline-header"><a href="<?=base_url()?>">Gambar Depan</a></h3>

            <div class="timeline-body">
              <div class="embed-responsive embed-responsive-16by9">
                <img class="embed-responsive-item" src="<?=base_url('assets/Maxim/img/bg/')?>"></img>
              </div>
            </div>
            <div class="timeline-footer">
              <a href="#" class="btn btn-xs bg-maroon">See comments</a>
            </div>
          </div>
        </li>
        <!-- END timeline item -->
        <li>
          <i class="fa fa-clock-o bg-gray"></i>
        </li>
      </ul>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-code"></i> Timeline Markup</h3>
        </div>
        <div class="box-body">
          <iframe class="embed-responsive-item" src=""
            frameborder="0" allowfullscreen></iframe>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="ModalTambahMotto">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Motto</h4>
        </div>
        <div class="modal-body">
          <div class="box-body pad">
            <form>
              <textarea class="textarea" id="motto_isi" placeholder="Tambahkan motto di sini"
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="tambah_motto">Tambah</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="Modal_Edit_motto">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Default Modal</h4>
          </div>
          <div class="modal-body">
            <form>
              <input type="hidden" name="id_motto" >
              <textarea class="textarea" id="motto_isi_edit" name="motto_isi_edit" placeholder="Tambahkan motto di sini"
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="simpan_edit_motto">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal_delete_slider">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Hapus Slider</h4>
            </div>
            <div class="modal-body">
              <form accept-charset="utf-8">
                <input name="id_slider_hapus" type="hidden" class="hidden">
                <a href="#" id="gambar_hapus"></a>
              </form>

              Hapus <b id="slider_hapus"></b>?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger" id="btn_hapus_slider">Hapus</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <div class="modal fade" id="Modal_Delete_motto">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Motto</h4>
              </div>
              <div class="modal-body">
                <form accept-charset="utf-8">
                  <input type="hidden" name="id_motto_hapus">
                </form>
                
                Hapus <b id="motto_hapus"></b>?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="btn_hapus_motto">Hapus</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="modal_tambah_slider">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Slider</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form enctype="multipart/form-data" id="submitslider">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" id="title" placeholder="title">
                        </div>
                        <div class="form-group">
                          <label for="gambar_slider">Gambar</label>
                          <input type="file" id="gambar_slider" name="gambar_slider" onchange="previewImage();" required>
                        </div>
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Keterangan"></textarea>
                        </div>
                        
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <img id="image-preview" alt="image preview"/>
                      </div>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="tambah_slider_btn">Tambah</button>
                  </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div id="wait" style="display: none; width: 100%; height: 100%; top: 100px; left: 0px; position: fixed; z-index: 10000; text-align: center;">
            <img src="<?=base_url('assets/admin/load/loader.gif')?>" width="45" height="45" alt="Loading..." style="position: fixed; top: 50%; left: 50%;" />
          </div>
          <script src="<?=base_url('assets/AdminLTE/')?>/bower_components/ckeditor/ckeditor.js"></script>
          <script src="<?=base_url('assets/AdminLTE/')?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
          <script type="text/javascript">
            show_data_motto();
            show_slider();
            show_quotes();
            function show_quotes(){
              $.ajax({
                type  : 'ajax',
                url   : "<?php echo base_url('adm/quotes')?>",
                async : false,
                dataType : 'json',
                success : function(quote){
                  // var quote = '';
                  var nama = '';
                  var i;
                  // for(i=0; i<quote.length; i++){
                  //   no = i+1;
                  //   quote_isi += ''+quote[i].isi_quote+'';
                  //   nama += ''+quote[i].nama_auth+'';
                  // }

                  $('#quote_isi').val(quote[0].isi_quote);
                  $('#quotes_auth_show').val(quote[0].nama_auth);
                }

              });
            }
            function show_slider(){
              $.ajax({
                type  : 'ajax',
                url   : "<?php echo base_url('adm/slider_list')?>",
                async : false,
                dataType : 'json',
                success : function(slider){
                  var html = '';
                  var i;
                  for(i=0; i<slider.length; i++){
                    no = i+1;
                    html += '<a href="javascript:void(0);"> <img src="<?=base_url('assets/slider/thumb/')?>'+slider[i].thumb+'" alt="'+slider[i].nama+'" title="'+slider[i].nama+'" id_hapus_slider = "'+slider[i].id+'" thumb = '+slider[i].thumb+' class="margin" id="delete_slider"><a/>';
                  }
                  $('#slider_list').html(html);
                }

              });
            }
            function show_data_motto(){
              $.ajax({
                type  : 'ajax',
                url   : "<?php echo base_url('adm/motto_list')?>",
                async : false,
                dataType : 'json',
                success : function(data){
                  var html = '';
                  var i;
                  for(i=0; i<data.length; i++){
                    no = i+1;
                    html += '<i class="fa fa-codepen bg-blue"></i>'+
                    '<div class="timeline-item">'+
                    '<span class="time"><i class="fa fa-clock-o"></i> '+data[i].tanggal+'</span>'+
                    '<h3 class="timeline-header"><a href="#">'+data[i].nama_admin+'</a></h3>'+
                    '<div class="timeline-body">'+
                    ''+data[i].isi+''+
                    '</div>'+
                    '<div class="timeline-footer">'+
                    '<a href="javascript:void(0);" class="btn btn-primary btn-xs" motto_isi_edit = "'+data[i].isi+'" id="edit_motto" id_motto = '+data[i].id_motto+'>Edit</a>'+
                    '<a href="javascript:void(0);" class="btn btn-danger btn-xs" id_motto_hapus = '+data[i].id_motto+' id="delete_motto"  motto_isi_hapus = "'+data[i].isi+'">Delete</a>'+
                    '</div>'+
                    '</div>';
                  }
                  $('#show_motto').html(html);
                }

              });
            };
            $('#simpan_quotes').on('click',function() {

              var quote_isi = $('#quote_isi').val();
              var quotes_auth = $('#quotes_auth_show').val();

              $.ajax({
                url: "<?php echo base_url('adm/update_quote')?>",
                type: 'POST',
                dataType: 'json',
                data: {quote_isi:quote_isi,quotes_auth:quotes_auth},
                success: function(data){
                  show_quotes();

                  swal ( "Sukses" ,  " Berhasil diubah!" ,  "success", {
                    buttons: false,
                    timer: 2000,
                  });
                }
              });
            });
//slider

$('#slider_list').on('click','#delete_slider',function(){
  var thumbnail = $(this).attr('thumb');
  var nama_slider = $(this).attr('alt');
  var id_slider = $(this).attr('id_hapus_slider');
  $('[name = "id_slider_hapus"]').val(id_slider);
  $('#gambar_hapus').html('<img src="<?=base_url('assets/slider/thumb/')?>'+thumbnail+'">');
  $('#slider_hapus').html(nama_slider);
  $('#modal_delete_slider').modal('show');
});
$('#btn_tambah_slider').on('click',function(){
  $('#modal_tambah_slider').modal('show');

});
$('#submitslider').submit(function(e){
  e.preventDefault(); 
  
  $.ajax({
   url:"<?php echo site_url('adm/do_upload_slider')?>",
   type:"post",
   data:new FormData(this),
   processData:false,
   contentType:false,
   cache:false,
   async:false,
     // xhr: function(data){
     //  $('#wait').show();
     // },
     beforeSend: function(data) {
      $('#wait').show();
    },
    success: function(data){
     $('#modal_tambah_slider').modal('hide');
     swal ( "Sukses" ,  "Foto Slider Berhasil Ditambahkan!" ,  "success", {
      buttons: false,
      timer: 1000,
    } );

     show_slider();
     $('#wait').hide();
   },
   error:function(data) {
     swal ( "Gagal" ,  "Foto Slider Gagal Ditambahkan!" ,  "error", {
      buttons: false,
      timer: 1000,
    } );
     $('#wait').hide();
   }
 });
});
$('#btn_hapus_slider').on('click',function() {
  var id_slider_hapus = $('[name="id_slider_hapus"]').val();
  $.ajax({
    url: "<?php echo base_url('adm/hapus_slider')?>",
    type: 'POST',
    dataType: 'json',
    data: {id_slider:id_slider_hapus},
    success: function(data){
      $('#modal_delete_slider').modal('hide');
      show_slider();
      swal ( "Sukses" ,  " Berhasil dihapus!" ,  "success", {
        buttons: false,
        timer: 2000,
      });
    }
  });
});

//motto
$('#show_motto').on('click','#edit_motto',function(){
  var motto_isi_edit = $(this).attr('motto_isi_edit');
  var id_motto = $(this).attr('id_motto');
  $('#Modal_Edit_motto').modal('show');
  $('[name="id_motto"]').val(id_motto);
  $('[name="motto_isi_edit"]').val(motto_isi_edit);

});
$('#simpan_edit_motto').on('click',function(){
  var motto = $('#motto_isi_edit').val();
  var id_motto = $('[name="id_motto"]').val();
  var id_admin = "<?=$id_admin?>"
  $.ajax({
    type : "POST",
    url  : "<?php echo base_url('adm/edit_motto')?>",
    dataType : "JSON",
    data : {motto:motto, id_admin:id_admin, id_motto:id_motto},
    success: function(data){
      swal ( "Sukses" ,  " Berhasil diubah!" ,  "success", {
        buttons: false,
        timer: 2000,
      } );
      show_data_motto();
      $('#Modal_Edit_motto').modal('hide');

    }
  });

});



$('#show_motto').on('click','#delete_motto',function(){
  var id_motto = $(this).attr('id_motto_hapus');
  var isi_motto_hapus = $(this).attr('motto_isi_hapus');

  $('[name="id_motto_hapus"]').val(id_motto);
  $('#motto_hapus').html(isi_motto_hapus);
  $('#Modal_Delete_motto').modal('show');
});

$('#tambah_motto').on('click',function(){
  var motto = $('#motto_isi').val();
  var id_admin = "<?=$id_admin?>"
  $.ajax({
    type : "POST",
    url  : "<?php echo base_url('adm/tambah_motto')?>",
    dataType : "JSON",
    data : {motto:motto, id_admin:id_admin},
    success: function(data){
      swal ( "Sukses" ,  " Berhasil ditambahkan!" ,  "success", {
        buttons: false,
        timer: 2000,
      } );
      $('#ModalTambahMotto').modal('hide');
      show_data_motto();
    }
  });
});
$('#btn_hapus_motto').on('click',function() {
  var id_motto_hapus = $('[name="id_motto_hapus"]').val();
  $.ajax({
    url: "<?php echo base_url('adm/hapus_motto')?>",
    type: 'POST',
    dataType: 'json',
    data: {id_motto:id_motto_hapus},
    success: function(data){
      $('#Modal_Delete_motto').modal('hide');
      show_data_motto();
      swal ( "Sukses" ,  " Berhasil dihapus!" ,  "success", {
        buttons: false,
        timer: 2000,
      });
    }
  });
});
$('#btn_tambah_motto').on('click',function(){
  $('#ModalTambahMotto').modal('show');
});
</script>