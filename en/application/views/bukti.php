<?php $base_url_id = $this->config->item('base_url_id');?>
<?php

  foreach ($peserta as $row){
    $id = $row->id;
    $no_daftar = $row->no_daftar;
    $nama = $row->nama;
    $ktp = $row->ktp;
    $nama = $row->nama;
    $gender_o = $row->gender;
    $darah_option = $row->darah;
    $tempat_lahir = $row->tempat_lahir;
    $ttl = $row->ttl;
    $alamat = $row->alamat;
    $kota = $row->kota;
    $provinsi = $row->provinsi;
    $kategori_lomba_option = $row->kategori_lomba;
    $hp = $row->hp;
    $email = $row->email;
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
    $riwayat_penyakit = $row->riwayat_penyakit;
    $jersey_option = $row->jersey;
    //edittgl 5/2/2018
    $bank_asal = $row->bank_asal;
    $ada_bukti = $row->ada_bukti;
    //edittgl 5/2/2018
  } 
if ($darah_option==1) {
  $darah = 'A';
}elseif ($darah_option==2) {
  $darah = 'B'; 
}elseif ($darah_option==3) {
  $darah = 'AB'; 
}elseif ($darah_option==4) {
  $darah = 'O';
}elseif ($darah_option==0) {
  $darah = 'Belum Dipilih';
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
$jumlah_bayar_rupiah= "Rp " . number_format($jumlah_bayar,2,',','.');

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


if ($jersey_option==1) {
  $jersey = 'Size S';
}elseif ($jersey_option==2) {
  $jersey = 'Size M'; 
}elseif ($jersey_option==3) {
  $jersey = 'Size L'; 
}elseif ($jersey_option==4) {
  $jersey = 'Size XL'; 
}elseif ($jersey_option==0) {
  $jersey = 'Belum ada'; 
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
    }elseif ($tipe_bayar==0) {
      $nama_rekening_a= "Belum dipilih";
      $bank_a="Belum dipilih";
      $rekening_a="Belum dipilih";
      $kota_admin_a="Belum dipilih";
      $alamat_admin_a="Belum dipilih";
      $no_hp_a="Belum dipilih";
      $email_a="Belum dipilih";
    }


    $tgl_akhir = date('d-m-Y H:i:s', strtotime('+1 days', strtotime($tgl)));

 ?> 

<!DOCTYPE html>
<html>
<head>
  <title>Konfirmasi Pemabayaran <?=$no_daftar?></title>

  <link href="<?php echo base_url()?>assets/template_web/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/template_web/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/template_web/css/style.css" rel="stylesheet">
  <script src="<?php echo base_url()?>assets/template_web/js/ie-emulation-modes-warning.js"></script>
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

</head>
<body style="background-color: #eee;">

  <section>
    <div class="container thumbnail" style="margin-top: 50px;">
      <div class="col-lg-12" align="center" style="color: #455A64; margin-top: 20px; margin-bottom: 20px;">
          <h2><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> KONFIRMASI PEMBAYARAN <b><?=$no_daftar?></b></h2>
      </div>
      <hr style="border-color: #455A64; border-width: 3px;" width="100%">
      <div class="col-lg-12" style="color: #455A64; margin-top: 20px; margin-bottom: 20px;">
        <div class="col-lg-4" style="font-size: 17px; margin-bottom: 20px;">
          <p>
            Peserta<br>
            <strong><?=$nama?></strong>
            <br><?=$alamat?>
            <br><?php echo ("$kota - $provinsi");?>
            <br>Handphone: <?=$hp?> 
            <br>Handphone Darurat : <?=$darurat?>
            <br>Email : <?=$email?>
            <br>Komunitas: <?=$komunitas?>
          </p>
        </div>
        <div class="col-lg-4" style="font-size: 17px; margin-bottom: 20px;">
          <p>
            Transfer Ke<br>
            <strong>a/n <?=$nama_rekening_a?></strong>
            <br>(<?=$bank_a?>) <?=$rekening_a?>
            <br><?=$alamat_admin_a?>
            <br><?=$kota_admin_a?> 
            <br>Phone: <?=$no_hp_a?>
            <br>Email: <?=$email_a?>
          </p>
        </div>
        <div class="col-lg-4" style="font-size: 17px; margin-bottom: 20px;">
          <p>

            Invoice. <strong><?=$no_daftar?></strong><br>
        
            <strong>Bukti Pembayaran:</strong><br>
               <?php 

          if ($gambar!="") {
          ?>
            <span class="label label-warning">Klik gambar untuk memperbesar</span>
            <div>
              <img id="myImg" src="<?= $base_url_id?>assets/upload/bukti/<?=$gambar ?>" height="100">
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                  <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            </div>
            <div style="margin-top: 20px;">
              <?php $update_id = $this->uri->segment(3);?>
              <a href="<?php echo $base_url_id?>adminccm/delete_image/<?= $update_id?>"><button type="button" class="btn btn-sm btn-danger">Hapus Gambar Bukti </button></a>
            </div>
            <?php } else{?>
            <strong>BELUM ADA GAMBAR BUKTI</strong>
            <?php }?>
          </p>
          <form method="POST" action="http://smsgateway.me/api/v3/messages/send">
              <input hidden="" type="email" name="email" value="willydnld@gmail.com">
              <input hidden="" type="password" name="password" value="willydonald">
              <input hidden="" type="text" name="device" value="82019">
              <input hidden="" type="text" name="number" value="<?=$hp?>">
              <input hidden="" type="text" name="message" value="Invoice. <?=$no_daftar?>. Pembayaran anda telah berhasil kami konfirmasi, mohon untuk mencetak invoice anda di https://centralcelebesmarathon.com/home/bayar/<?=$id?> sebagai bukti pembayaran. Terima kasih partisipasinya. Central Celebes Marathon.">
              <button type="submit" class="btn btn-sm btn-info">Kirim Konfirmasi</button>
            </form>
        </div>
      </div>
      <div class="col-lg-12" style="color: #455A64; margin-top: 20px; margin-bottom: 20px;">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <th>Nama Pemilik Rekening</th>
              <th>Dari Bank</th>
              <th>Nomor Rekening</th>
              <th>Jumlah Transfer</th>
            </thead>
            <tbody>
              <tr>
                <td><?=$namarek?></td>
                <td><?=$bank_asal?></td>
                <td><?=$keterangan?></td>
                <td><?php if (isset($jumlah_bayar)) { echo $jumlah_bayar_rupiah;
              # code...
            } ?></td>
              </tr>
            </tbody>
          </table>
          <form method="POST" action="http://smsgateway.me/api/v3/messages/send">
              <input hidden="" type="email" name="email" value="willydnld@gmail.com">
              <input hidden="" type="password" name="password" value="willydonald">
              <input hidden="" type="text" name="device" value="82019">
              <input hidden="" type="text" name="number" value="<?=$hp?>">
              <input hidden="" type="text" name="message" value="Invoice. <?=$no_daftar?>. Mohon untuk mengupload gambar bukti transfer anda di https://centralcelebesmarathon.com/home/bayar/<?=$id?>. Jika gagal mengupload gambar bukti pembayaran silahkan kirim di email centralcelebesmarathon@gmail.com. Terima kasih.">
              <button type="submit" class="btn btn-sm btn-warning">Kirim Pemberitahuan</button>
            </form><br>
            <form method="POST" action="http://smsgateway.me/api/v3/messages/send">
              <input hidden="" type="email" name="email" value="willydnld@gmail.com">
              <input hidden="" type="password" name="password" value="willydonald">
              <input hidden="" type="text" name="device" value="82019">
              <input hidden="" type="text" name="number" value="<?=$hp?>">
              <input hidden="" type="text" name="message" value="Invoice. <?=$no_daftar?>. Sistem kami menemukan kesamaan bukti pembayaran dengan pendaftar lain, pembayaran anda kami batalkan. Silahkan upload bukti pembayaran yang sah https://centralcelebesmarathon.com/home/bayar/<?=$id?>. Terima Kasih.">
              <button type="submit" class="btn btn-sm btn-danger">Kirim Peringatan</button>
            </form>
        </div>
      </div>
      <div class="col-lg-12" style="color: #455A64; font-size: 17px; margin-top: 20px; margin-bottom: 20px;">
        <div class="col-lg-6">
          <p>
            <strong> Biodata Peserta:</strong><br>
            <table class="table-responsive">
              <tr>
                <td>KTP/SIM/Kartu Pelajar</td>
                <td>:</td>
                <td><?=$ktp ?></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$nama ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?=$gender ?></td>
              </tr>
              <tr>
                <td>Gol. Darah</td>
                <td>:</td>
                <td><?=$darah ?></td>
              </tr>
              <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?=$tempat_lahir?>, <?php echo $ttl?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?=$alamat ?></td>
              </tr>
              <tr>
                <td>Kota</td>
                <td>:</td>
                <td><?=$kota ?></td>
              </tr>
              <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td><?=$provinsi ?></td>
              </tr>
               <tr>
                <td>Riwayat Sakit</td>
                <td>:</td>
                <td><?=$riwayat_penyakit ?></td>
              </tr>
              <tr>
                <td>Jersey Size</td>
                <td>:</td>
                <td><?=$jersey ?></td>
              </tr>
            </table>
          </p>
        </div>
        <div class="col-lg-6">
          <h2>Amount Due: <?=$tgl_akhir?></h2>
          <table class="table table-responsive">
            <tbody>
              <tr>
                <td>Kategori</td>
                <td><?=$kategori_lomba?></td>
              </tr>
              <tr>
                <td>Biaya Pendaftaran</td>
                <td><?=$harga_rupiah ?></td>
              </tr>
              <tr>
                <td>Pajak (0%)</td>
                <td>0</td>
              </tr>
              <tr style="color: red;">
                <td>Total</td>
                <td><?=$harga_rupiah ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-12" style="color: #455A64; font-size: 17px; margin-top: 20px; margin-bottom: 50px;">
        <div class="container">
          <a href="<?php echo base_url()?>adminccm"><button type="button" class="btn btn-lg btn-primary">Kembali</button></a>
          <button class="btn btn-lg btn-info" onclick="window.print();"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Bukti Pembayaran</h4>
        </div>
        <div class="modal-body">

 <a href="<?php echo $base_url_id?>adminccm/delete_image/<?= $update_id?>"><button type="button" class="btn btn-danger">Hapus Gambar Bukti </button></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

  <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"><\/script>')</script>
  <script src="<?php echo $base_url_id?>assets/template_web/js/bootstrap.min.js"></script>
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