<?php

 
  foreach ($peserta as $row){
    $no_daftar = $row->no_daftar;
    $nama = $row->nama;
    $ktp = $row->ktp;
    $nama = $row->nama;
    $gender_o = $row->gender;
    $darah_option = $row->darah;
    $ttl = $row->ttl;
    $alamat = $row->alamat;
    $kota = $row->kota;
    $provinsi = $row->provinsi;
    $kategori_lomba_option = $row->kategori_lomba;
    $hp = $row->hp;
    $darurat = $row->darurat;
    $komunitas = $row->komunitas;
    $tgl = $row->tgl;
    $no_daftar = $row->no_daftar;
    // $tipe_bayar = $row->tipe_bayar;
    $option_tipe_bayar = $row->tipe_bayar;
    $status = $row->status;
    $gambar = $row->gambar;
    $namarek = $row->namarek;
    $keterangan = $row->keterangan;
    $jumlah_bayar = $row->jumlah_bayar;
  } 
if ($darah_option==1) {
  $darah = 'A';
}elseif ($darah_option==2) {
  $darah = 'B'; 
}elseif ($darah_option==3) {
  $darah = 'AB'; 
}elseif ($darah_option==4) {
  $darah = 'O';
} 
// }elseif ($gender_o==1) {
//  $gender = 'Laki-laki'; 
// }elseif ($gender_o==2) {
//  $gender = 'Perempuan'; 
if ($kategori_lomba_option==1) {
  $kategori_lomba = '5K RUN';
  $harga = 125000; 
}elseif ($kategori_lomba_option==2) {
  $kategori_lomba = '10K RUN'; 
  $harga = 175000; 
}elseif ($kategori_lomba_option==3) {
  $kategori_lomba = 'HALF MARATHON 21K National'; 
  $harga = 225000; 
}elseif ($kategori_lomba_option==4) {
  $kategori_lomba = 'HALF MARATHON 21K International'; 
  $harga = 450000; 
}elseif ($kategori_lomba_option==5) {
  $kategori_lomba = 'FULL MARATHON 42K National';
  $harga = 350000; 
}elseif ($kategori_lomba_option==6) {
  $kategori_lomba = 'FULL MARATHON 42K International';
  $harga = 550000; 
}

$harga_rupiah = "Rp " . number_format($harga,2,',','.');


if ($option_tipe_bayar==0) {
  $tipe_bayar = 0; 
}elseif ($option_tipe_bayar==1) {
  $tipe_bayar = 1; 
}elseif ($option_tipe_bayar==2) {
  $tipe_bayar = 2; 
}elseif ($option_tipe_bayar==3) {
  $tipe_bayar = 3 ; 
}elseif ($option_tipe_bayar==4) {
  $tipe_bayar = 4; 
}elseif ($option_tipe_bayar==5) {
  $tipe_bayar = 5; 
}elseif ($option_tipe_bayar==6) {
  $tipe_bayar = 6; 
}elseif ($option_tipe_bayar==7) {
  $tipe_bayar = 7; 
}elseif ($option_tipe_bayar==8) {
  $tipe_bayar = 8 ;  
}elseif ($option_tipe_bayar==9) {
  $tipe_bayar = 9; 
}elseif ($option_tipe_bayar==10) {
  $tipe_bayar = 10; 
}
 


if ($gender_o==1) {
  $gender = 'Laki-laki'; 
}elseif ($gender_o==2) {
  $gender = 'Perempuan'; 
}

    
    $nama_rekening1 = $this->config->item('nama_rekening1');
    $alamat_admin_1 = $this->config->item('alamat_admin_1');  
    $kota_admin1 = $this->config->item('kota_admin1'); 
    $no_hp1 = $this->config->item('no_hp1'); 
    $email1 = $this->config->item('email1'); 
    $bank1 = $this->config->item('bank1'); 
    $rekening1 = $this->config->item('rekening1'); 
    
    $nama_rekening2 = $this->config->item('nama_rekening2');
    $alamat_admin_2 = $this->config->item('alamat_admin_2'); 
    $kota_admin2 = $this->config->item('kota_admin2'); 
    $no_hp2 = $this->config->item('no_hp2'); 
    $email2 = $this->config->item('email2'); 
    $bank2 = $this->config->item('bank2'); 
    $rekening2 = $this->config->item('rekening2');

    $nama_rekening3 = $this->config->item('nama_rekening3');
    $alamat_admin_3 = $this->config->item('alamat_admin_3'); 
    $kota_admin3 = $this->config->item('kota_admin3'); 
    $no_hp3 = $this->config->item('no_hp3'); 
    $email3 = $this->config->item('email3'); 
    $bank3 = $this->config->item('bank3'); 
    $rekening3 = $this->config->item('rekening3');


    $nama_rekening4 = $this->config->item('nama_rekening4');
    $alamat_admin_4 = $this->config->item('alamat_admin_4'); 
    $kota_admin4 = $this->config->item('kota_admin4'); 
    $no_hp4 = $this->config->item('no_hp4'); 
    $email4 = $this->config->item('email4'); 
    $bank4 = $this->config->item('bank4'); 
    $rekening4 = $this->config->item('rekening4');

    $nama_rekening5 = $this->config->item('nama_rekening5');
    $alamat_admin_5 = $this->config->item('alamat_admin_5'); 
    $kota_admin5 = $this->config->item('kota_admin5'); 
    $no_hp5 = $this->config->item('no_hp5'); 
    $email5 = $this->config->item('email5'); 
    $bank5 = $this->config->item('bank5'); 
    $rekening5 = $this->config->item('rekening5');

    $nama_rekening6 = $this->config->item('nama_rekening6');
    $alamat_admin_6 = $this->config->item('alamat_admin_6');  
    $kota_admin6 = $this->config->item('kota_admin6'); 
    $no_hp6 = $this->config->item('no_hp6'); 
    $email6 = $this->config->item('email6'); 
    $bank6 = $this->config->item('bank6'); 
    $rekening6 = $this->config->item('rekening6'); 
    
    $nama_rekening7 = $this->config->item('nama_rekening7');
    $alamat_admin_7 = $this->config->item('alamat_admin_7'); 
    $kota_admin7 = $this->config->item('kota_admin7'); 
    $no_hp7 = $this->config->item('no_hp7'); 
    $email7 = $this->config->item('email7'); 
    $bank7 = $this->config->item('bank7'); 
    $rekening7 = $this->config->item('rekening7');

    $nama_rekening8 = $this->config->item('nama_rekening8');
    $alamat_admin_8 = $this->config->item('alamat_admin_8'); 
    $kota_admin8 = $this->config->item('kota_admin8'); 
    $no_hp8 = $this->config->item('no_hp8'); 
    $email8 = $this->config->item('email8'); 
    $bank8 = $this->config->item('bank8'); 
    $rekening8 = $this->config->item('rekening8');


    $nama_rekening9 = $this->config->item('nama_rekening9');
    $alamat_admin_9 = $this->config->item('alamat_admin_9'); 
    $kota_admin9 = $this->config->item('kota_admin9'); 
    $no_hp9 = $this->config->item('no_hp9'); 
    $email9 = $this->config->item('email9'); 
    $bank9 = $this->config->item('bank9'); 
    $rekening9 = $this->config->item('rekening9');

    $nama_rekening10 = $this->config->item('nama_rekening10');
    $alamat_admin_10 = $this->config->item('alamat_admin_10'); 
    $kota_admin10 = $this->config->item('kota_admin10'); 
    $no_hp10 = $this->config->item('no_hp10'); 
    $email10 = $this->config->item('email10'); 
    $bank10 = $this->config->item('bank10'); 
    $rekening10 = $this->config->item('rekening10');



    if ($tipe_bayar==1) {
      $nama_rekening_a=$nama_rekening1;
      $bank_a=$bank1;
      $rekening_a=$rekening1;
      $kota_admin_a=$kota_admin1;
      $alamat_admin_a=$alamat_admin_1;
      $no_hp_a=$no_hp1;
      $email_a=$email1;
    }elseif ($tipe_bayar==2) {
      $nama_rekening_a=$nama_rekening2;
      $bank_a=$bank2;
      $rekening_a=$rekening2;
      $kota_admin_a=$kota_admin2;
      $alamat_admin_a=$alamat_admin_2;
      $no_hp_a=$no_hp2;
      $email_a=$email2;
    }elseif ($tipe_bayar==3) {
      $nama_rekening_a=$nama_rekening3;
      $bank_a=$bank3;
      $rekening_a=$rekening3;
      $kota_admin_a=$kota_admin3;
      $alamat_admin_a=$alamat_admin_3;
      $no_hp_a=$no_hp3;
      $email_a=$email3;
    }elseif ($tipe_bayar==4) {
      $nama_rekening_a=$nama_rekening4;
      $bank_a=$bank4;
      $rekening_a=$rekening4;
      $kota_admin_a=$kota_admin4;
      $alamat_admin_a=$alamat_admin_4;
      $no_hp_a=$no_hp4;
      $email_a=$email4;
    }elseif ($tipe_bayar==5) {
      $nama_rekening_a=$nama_rekening5;
      $bank_a=$bank5;
      $rekening_a=$rekening5;
      $kota_admin_a=$kota_admin5;
      $alamat_admin_a=$alamat_admin_5;
      $no_hp_a=$no_hp5;
      $email_a=$email5;
    }elseif ($tipe_bayar==6) {
      $nama_rekening_a=$nama_rekening6;
      $bank_a=$bank6;
      $rekening_a=$rekening6;
      $kota_admin_a=$kota_admin6;
      $alamat_admin_a=$alamat_admin_6;
      $no_hp_a=$no_hp6;
      $email_a=$email6;
    }elseif ($tipe_bayar==7) {
      $nama_rekening_a=$nama_rekening7;
      $bank_a=$bank7;
      $rekening_a=$rekening7;
      $kota_admin_a=$kota_admin7;
      $alamat_admin_a=$alamat_admin_7;
      $no_hp_a=$no_hp7;
      $email_a=$email7;
    }elseif ($tipe_bayar==8) {
      $nama_rekening_a=$nama_rekening8;
      $bank_a=$bank8;
      $rekening_a=$rekening8;
      $kota_admin_a=$kota_admin8;
      $alamat_admin_a=$alamat_admin_8;
      $no_hp_a=$no_hp8;
      $email_a=$email8;
    }elseif ($tipe_bayar==9) {
      $nama_rekening_a=$nama_rekening9;
      $bank_a=$bank9;
      $rekening_a=$rekening9;
      $kota_admin_a=$kota_admin9;
      $alamat_admin_a=$alamat_admin_9;
      $no_hp_a=$no_hp9;
      $email_a=$email9;
    }elseif ($tipe_bayar==10) {
      $nama_rekening_a=$nama_rekening10;
      $bank_a=$bank10;
      $rekening_a=$rekening10;
      $kota_admin_a=$kota_admin10;
      $alamat_admin_a=$alamat_admin_10;
      $no_hp_a=$no_hp10;
      $email_a=$email10;
    }


    $tgl_akhir = date('d-m-Y H:i:s', strtotime('+1 days', strtotime($tgl)));

   
    $jumlah_bayar_rupiah= "Rp " . number_format($jumlah_bayar,2,',','.');





 ?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Invoice no  </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url()?>assets/admin/build/css/custom.min.css" rel="stylesheet">

<!-- img-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>

<!-- img -->

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url()?>" class="site_title"> <span>Gamabar Bukti dan Keterangan </span></a>
            </div>

            <div class="clearfix"></div>
           

          <?php 

          if ($gambar!="") {
          ?>
          
                <div class="row-fluid sortable">
            <div class="box span3">
              <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Klik untuk memperbesar</h2>
                  <div class="box-icon">
                <!--  <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a> -->
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                  </div>
              </div>


   <img id="myImg" src="<?= base_url()?>assets/upload/bukti/<?=$gambar ?>" alt="Gambar Bukti" width="200" height="200">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

            </div><!--/span-->
          
          </div><!--/row-->
          <?php }?>

<form method="POST">

 <label for="message">keterangan</label>
 <input type="text" value="<?=$namarek?>">
 <br>
<input type="text" value="<?=$keterangan?>">
<br>
<input type="text" value="<?=$jumlah_bayar_rupiah?>">
 <textarea id="message" required="required" name="keterangan" class="form-control"><?=$keterangan?></textarea>
                          <br/>
   <?php 

          if (!isset($keterangan)) {
          ?>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Kirim</button>
        <?php }else{?>
        <button type="submit" name="submit" value="submit" class="btn btn-danger">Kirim Edit</button>
        <?php }?>                        
</form>

  <!-- /menu footer buttons -->

          </div>
        </div>

        <!-- top navigation -->

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Invoice <small><?=$no_daftar?></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">

                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                          <i class="fa fa-globe"></i> Invoice. <?=$no_daftar?>
                                          <small class="pull-right"><?=$tgl?> </small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          Peserta
                          <address>
                                          <strong><?=$nama?></strong>
                                          <br><?=$alamat?>
                                          <br><?php echo ("$kota - $provinsi");?>
                                          <br>Phone: <?=$hp?> 
                                          <br>Darurat : <?=$darurat?>
                                          <br>Komunitas: <?=$komunitas?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Transfer to




                                     <address>
                                          <strong> a/n <?=$nama_rekening_a?></strong>
                                          <br>(<?=$bank_a?>) <?=$rekening_a?>
                                          <br><?=$alamat_admin_a?>
                                          <br><?=$kota_admin_a?> 
                                          <br>Phone: <?=$no_hp_a?>
                                          <br>Email: <?=$email_a?>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice <?=$no_daftar?></b>
                          <br>
                          <?php 
                          if ($status==1) {?>
                             <b>Pembayaran Inv.<?=$no_daftar?> Telah Lunas </b>
                          <?php }else{?>
                               <b>Batas Bayar:</b> <?=$tgl_akhir?> (Satu hari)
                          <?php }
                          ?>
                         
                          <br>
                         <!--  <b>Account:</b> 968-34567 -->



                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th style="width: 59%">Deskripsi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Cara Transfer</td>
                                <td>Transfer sesuai metode yang dipilih, dengan menyertakan bukti yang dikirim melalui foto.
                                </td>
                               
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Upload Bukti</td>
                                <td>Masuk ke alamat <strong> <?=base_url()?></strong> lalu pada pojok kanan atas akan ada nomor referensi, masukkan nomor <strong><?=$no_daftar?></strong> lalu upload gambar dengan keterangannya berupa nama pada rekenin, nomor rekening dan jumlah yang telah dibayarkan</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Check Status Pembayaran</td>
                                <td>Masuk ke alamat <strong> <?=base_url()?></strong> lalu pada pojok kanan atas akan ada nomor referensi, masukkan nomor <strong><?=$no_daftar?></strong> lalu Lihat keterangan pada Batas Bayar, jika status Telah Lunas, maka pendaftaran telah berhasil dikonfirmasi. Minimal konfirmasi 1x24 Jam dari pembayaran.</td>
                              
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Cetak Invoice</td>
               
                                <td>Teka tombol Print di halaman ini.</td>
                 
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                                  <div class="col-xs-5 invoice-col">
                                      <strong> Keterangan Lomba</strong>
                                      <address>
                                      <table>
  <tr>
    <th>KTP</th>
    <th><?=$ktp ?>s</th>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?=$nama ?></td>
  </tr>  
  <tr>
    <td>Jenis kelamin</td>
    <td><?=$gender ?></td>
  </tr>  
  <tr>
    <td>Gol.Darah</td>
    <td><?=$darah ?></td>
  </tr>  
  <tr>
    <td>Tgl Lahir</td>
    <td><?php echo $ttl?></td>
  </tr>
 <tr>
    <td>Alamat</td>
    <td><?=$alamat ?></td>
  </tr>  
  <tr>
    <td>Provinsi</td>
    <td><?=$provinsi ?></td>
  </tr>  
  <tr>
    <td>Kategori Lomba </td>
    <td>&nbsp;<?=$kategori_lomba?></td>
  </tr>  
</table> 


                                      </address>

                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead">Amount Due <?=$tgl_akhir?></p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td><?=$harga_rupiah ?></td>
                                </tr>
                                <tr>
                                  <th>Tax (0%)</th>
                                  <td>0</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td><?=$harga_rupiah ?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>

                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer>

        </footer>

      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>assets/admin/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>assets/admin/build/js/custom.min.js"></script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
  </body>
</html>