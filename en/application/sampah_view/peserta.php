<?php
	foreach ($peserta as $row){
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
		$darurat = $row->darurat;
		$komunitas = $row->komunitas;
		$tgl = $row->tgl;
		$option_tipe_bayar = $row->tipe_bayar;
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
// 	$gender = 'Laki-laki'; 
// }elseif ($gender_o==2) {
// 	$gender = 'Perempuan'; 
if ($kategori_lomba_option==1) {
  $kategori_lomba = '5K RUN'; 
}elseif ($kategori_lomba_option==2) {
  $kategori_lomba = '10K RUN'; 
}elseif ($kategori_lomba_option==3) {
  $kategori_lomba = 'HALF MARATHON 21K National'; 
}elseif ($kategori_lomba_option==4) {
  $kategori_lomba = 'HALF MARATHON 21K International'; 
}elseif ($kategori_lomba_option==5) {
  $kategori_lomba = 'FULL MARATHON 42K National';
}elseif ($kategori_lomba_option==6) {
  $kategori_lomba = 'FULL MARATHON 42K International';
}

if ($option_tipe_bayar==0) {
  $tipe_bayar = 0; //ATM BERSAMA
}elseif ($option_tipe_bayar==1) {
  $tipe_bayar = 1; //Bank BRI 
}elseif ($option_tipe_bayar==2) {
  $tipe_bayar = 2; //Bank BCA 
}elseif ($option_tipe_bayar==3) {
  $tipe_bayar = 3 ; //Bank BNI 
}elseif ($option_tipe_bayar==4) {
  $tipe_bayar = 4; //Bank Mandiri
}elseif ($option_tipe_bayar==5) {
  $tipe_bayar = 5; //ATM Bersama
}

if ($gender_o==1) {
  $gender = 'Laki-laki'; 
}elseif ($gender_o==2) {
  $gender = 'Perempuan'; 
}


if ($kategori_lomba_option==1) {
  $kategori_lomba = '5K RUN';
  $harga = 125000; 
  $batas_jersey_s =  $sisa_jersey_5k_s;
  $batas_jersey_m =  $sisa_jersey_5k_m;
  $batas_jersey_l =  $sisa_jersey_5k_l;
  $batas_jersey_xl =  $sisa_jersey_5k_xl;
}elseif ($kategori_lomba_option==2) {
  $kategori_lomba = '10K RUN'; 
  $harga = 175000; 
  $batas_jersey_s =  $sisa_jersey_10k_s;
  $batas_jersey_m =  $sisa_jersey_10k_m;
  $batas_jersey_l =  $sisa_jersey_10k_l;
  $batas_jersey_xl =  $sisa_jersey_10k_xl;
}elseif ($kategori_lomba_option==3) {
  $kategori_lomba = 'HALF MARATHON 21K National'; 
  $harga = 225000; 
  $batas_jersey_s =  $sisa_jersey_21k_s;
  $batas_jersey_m =  $sisa_jersey_21k_m;
  $batas_jersey_l =  $sisa_jersey_21k_l;
  $batas_jersey_xl =  $sisa_jersey_21k_xl;
}elseif ($kategori_lomba_option==4) {
  $kategori_lomba = 'HALF MARATHON 21K International'; 
  $harga = 450000;
  $batas_jersey_s =  $sisa_jersey_21k_s;
  $batas_jersey_m =  $sisa_jersey_21k_m;
  $batas_jersey_l =  $sisa_jersey_21k_l;
  $batas_jersey_xl =  $sisa_jersey_21k_xl; 
}elseif ($kategori_lomba_option==5) {
  $kategori_lomba = 'FULL MARATHON 42K National';
  $harga = 350000; 
  $batas_jersey_s =  $sisa_jersey_42k_s;
  $batas_jersey_m =  $sisa_jersey_42k_m;
  $batas_jersey_l =  $sisa_jersey_42k_l;
  $batas_jersey_xl =  $sisa_jersey_42k_xl;
}elseif ($kategori_lomba_option==6) {
  $kategori_lomba = 'FULL MARATHON 42K International';
  $harga = 550000; 
  $batas_jersey_s =  $sisa_jersey_42k_s;
  $batas_jersey_m =  $sisa_jersey_42k_m;
  $batas_jersey_l =  $sisa_jersey_42k_l;
  $batas_jersey_xl =  $sisa_jersey_42k_xl;
}





$harga_rupiah = "Rp " . number_format($harga,2,',','.');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description: Central Celebes Marathon" content="">
    <meta name="author: Willy Wahyu" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Central Celebes Marathon: Data Peserta</title>

    <link href="<?php echo base_url()?>assets/template_web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template_web/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template_web/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/template_web/js/ie-emulation-modes-warning.js"></script>
    
  </head>

 
  <body>

      <!-- NAVBAR-->

        <nav class="navbar nav-bar navbar-default navbar-fixed-top">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <p align="center" style="padding-top: 23px;">
                    <a href="#" style="font-size: 17px; color: #fff; text-decoration: none; font-family: arial black;">CENTRAL CELEBES MARATHON</a>
                  </p>
                </div>
              <div class="col-lg-4"></div>
            </div>
          </div>
        </nav>

        <nav class="navbar navbar-default navbar-fixed-top nav-bar2" style="margin-top: 70px; color: red;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a class="page-scroll" href="#jadwal">SCHEDULE</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENT<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">EVENT 1</a></li>
                    <li><a href="#">EVENT 2</a></li>
                    <li><a href="#">EVENT 3</a></li>
                  </ul>
                </li>-->
                <li><a href="<?= base_url()?>home/merchant">MERCHANT</a></li>
                <li><a href="#about">PESERTA</a></li>
                <li><a href="#about">PARIWISATA</a></li>
                <li><a href="#about">CONTACT</a></li>
                <li><a href="#about">FAQ</a></li>
              </ul>
             <!--  <ul class="nav navbar-nav navbar-right">
                <li>
                  <div class="navbar-form navbar-right">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Lihat no pendaftaran...">
                      <span class="input-group-btn">
                        <button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </span>
                    </div>
                  </div>
                </li>
                <li><a class="page-scroll" href="#daftar">DAFTAR</a></li>
              </ul> -->
            </div>
          </div>
        </nav>

        <!--/NAVBAR-->

       <section class="parallax-header">
        <div class="container">
          <div class="col-lg-12">
            <h2 class="judulheader" align="center">DATA PESERTA: <span class="judulcari"><?=$nama?></span></h2>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <ol class="breadcrumb" style="background-color: transparent; font-size: 17px;">
                <li><a href="#" style="color: #fff;">Home</a></li>
                <li><a href="#" style="color: #fff;">Peserta</a></li>
                <li class="active"><?=$no_daftar?></li>
              </ol>
            </div>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </section>
      <section class="other">
        <div class="container">
        	<div class="col-lg-12">
        		<div class="col-lg-6" style="margin-bottom: 20px;">
        			<h3><span class="label label-info">Terdaftar pada: <?=$tgl?> WITA</span></h3>
        		</div>
        		<div class="col-lg-6" style="margin-bottom: 20px;">
        			<h3><span class="label label-warning">Biaya Pendaftaran: </span></h3>
        		</div>
        		<div class="col-lg-6">
        			<label>No. Pendaftaran:</label>
        			<div class="input-group">
		                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></span>
		                <input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$no_daftar?>" disabled>
		            </div>
		            <br>
		            <label>No. KTP:</label>
        			<div class="input-group">
		                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span></span>
		                <input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$ktp?>" disabled>
		            </div>
	            	<br>
	            	<label>Nama Peserta:</label>
		            <div class="input-group">
			            <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			            <input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$nama?>" disabled>
		            </div>
	            	<br>
	            	<label>Jenis Kelamin:</label>
	            	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>
	                	<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$gender?>" disabled>
	            	</div>
	             	<br>
	             	<label>Gol. Darah:</label>
	             	<div class="input-group">
	               		<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></span>
	               		<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$darah?>" disabled>
	              	</div>
	              	<br>
	              	<label>Tempat, Tanggal Lahir:</label>
	              	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></span>
	               		<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$tempat_lahir?>, <?=$ttl?>" disabled>
	              	</div>
	              	<br>
	              	<label>Alamat:</label>
	              	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
	                	<textarea type="text" class="form-control" aria-describedby="sizing-addon2" disabled><?=$alamat?></textarea>
	              	</div>
	              	<br>
        		</div>
        		<div class="col-lg-6">
        			<label>Kota:</label>
        			<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
	                	<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$kota?>" disabled>
	              	</div>
	              	<br>
	              	<label>Provinsi:</label>
	              	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
	                	<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$provinsi?>" disabled>
	              	</div>
	              	<br>
	              	<label>Kategori Yang Dipilih:</label>
	              	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
	                	<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$kategori_lomba?>" disabled>
	              	</div>
	              	<br>
	              	<label>No. Handphone:</label>
	              	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
	                	<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$hp?>" disabled>
	              	</div>
	              	<br>
	              	<label>No. Handphone Darurat:</label>
	              	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
	                	<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$darurat?>" disabled>
	              	</div>
	              	<br>
	              	<label>Komunitas:</label>
	              	<div class="input-group">
	                	<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span></span>
	                	<input type="text" class="form-control" aria-describedby="sizing-addon2" value="<?=$komunitas?>" disabled>
	              	</div>
	              	<br>
	              	<div class="alert alert-danger" role="alert">
						Anda <strong>WAJIB</strong> membayar biaya pendaftaran senilai <strong><i><?=$harga_rupiah ?></i></strong> untuk kategori perlombaan <strong><?=$kategori_lomba?></strong>. Terima Kasih
					</div>
					<div align="right">
						<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#metpem">Bayar</button>
					</div>
        		</div>
        	</div>
        </div>
      </section>

      <!-- Modal -->
	<div class="modal fade" id="metpem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Pilih Metode Pembayaran</i></h4>
          </div>
          <form method="POST"> 
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Transfer Bank</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                      <input type="radio" name="tipe_bayar" value="1" checked="checked"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/mandiri.png"> Transfer Bank Mandiri</label><br>
                      <input type="radio" name="tipe_bayar" value="2"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bri.png"> Transfer Bank BRI</label><br>
                      <input type="radio" name="tipe_bayar" value="3"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bca.png"> Transfer Bank BCA</label><br>
                      <input type="radio" name="tipe_bayar" value="4"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bni.png"> Transfer Bank BNI</label><br>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Virtual Account</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">

                      <input type="radio" name="tipe_bayar" value="5"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/mandiri.png">  Mandiri Virtual Account</label><br>
                      <input type="radio" name="tipe_bayar" value="6"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bca.png"> BCA Virtual Account</label><br>
                      <input type="radio" name="tipe_bayar" value="7"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/bni.png"> BNI Virtual Account</label><br>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="col-lg-12">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Pembayaran Instan</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                       <input type="radio" name="tipe_bayar" value="8"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/ecash.png"> Mandiri E-Cash</label><br>
                       <input type="radio" name="tipe_bayar" value="9"><label ><img width="50" src="<?php echo base_url()?>assets/template_web/images/bank/epay.png"> BRI E-Pay</label><br>
                       <input type="radio" name="tipe_bayar" value="10"><label ><img width="30" src="<?php echo base_url()?>assets/template_web/images/bank/klik.png"> Klik BCA</label><br>

                      
                    </div>
                  </div>
                </div>

              </div>
               <div class="col-lg-12">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Pilih Ukuran Jersey</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                <div class="input-group">
                <span class="input-group-addon"  id="sizing-addon2"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span></span>
                <select class="form-control" name="jersey" required="required">
                  <option value="">Ukuran Yang Masih Tersedia</option>
                  <?php if ($batas_jersey_s<=0) {
                  }else{?>
                  <option value="1">Jersey ukuran S</option>
                  <?php }?>
                  <?php if ($batas_jersey_m<=0) {
                  }else{?>
                  <option value="2">Jersey ukuran M</option>
                  <?php }?>
                   <?php if ($batas_jersey_l<=0) {
                  }else{?>
                  <option value="3">Jersey ukuran L</option>
                  <?php }?>
                   <?php if ($batas_jersey_xl<=0) {
                  }else{?>
                  <option value="4">Jersey ukuran XL</option>
                  <?php }?>
                  
                  
                </select>

                </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div> 
            
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Setuju</button>
          </div>
          </form>
        </div>

      </div>
    </div>
    

      <!-- FOOTER -->
      <section class="kontak">
        <div class="container">
          <div class="col-lg-12" style="margin-top: 70px; margin-bottom: 30px;">
            <div class="row">

              <div class="col-lg-4">
                <p align="left"><b>Contact Us</b></p>
                <p style="margin-bottom: 30px;">
                  <a style="color: #fff; text-decoration: none;" href="#alamat">Alamat: Jln. Setia Budi No. 61A, Kota Palu.</a><br>
                  <a class="select2" href="tel:+6282194948781">Telp: 082194948781</a><br>
                  <!--<a class="select2" href="fax:#fax">Fax: 424xxx Kode Pos 4xxx</a><br>-->
                  <a class="select2" href="mailto:centralcelebesmarathon@gmail.com?Subject=" target="_top">E-mail: centralcelebesmarathon@gmail.com</a>
                </p>
              </div>

              <div class="col-lg-4" align="center">
                <p><b>Follow Us</b></p>
                <p style="margin-bottom: 30px;">
                  <a href="https://web.facebook.com/centralcelebesmarathon/" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm1.png" style="width: 14px; height: 30px; margin-right: 5px;"></a>

                  <!--<a href="https://twitter.com/celebessoftware" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm2.png" style="width: 35px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>-->

                  <a href="https://www.instagram.com/centralcelebesmarathon/" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm3.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>

                  <!--<a href="http://line.me/R/ti/p/%40eqf6209h" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm4.png" style="width: 30px; height: 30px; margin-left: 5px;"></a>-->
                </p>
              </div>

              <div class="col-lg-4">
                <p><b>Useful Links</b></p>
                <p>
                  &#9658; <a class="select2" href="#alamat">About</a><br>
                  &#9658; <a class="select2" href="#FAQ" target="_top">Merchant</a><br>
                  &#9658; <a class="select2" href="#FAQ" target="_top">Testimoni</a><br>
                  &#9658; <a class="select2" href="#FAQ" target="_top">FAQ</a><br>
                </p>
              </div>

            </div>
          </div>
        </div>
      </section>

      <footer>
      <section class="footer">
        <div class="container">
          <div class="col-lg-12" style="margin-top: 12px;">
            <div class="row">
              <p class="pull-right">
                <a href="#" class="select2">Back to top</a>
              </p>
              <p style="margin-left: 14px;">
                &copy; 2018 Central Celebes Marathon <!--| Powered by <a href="http://weer-indonesia.com/" class="select2" target="_blank">WeeR INDONESIA</a>--> | 
                <a href="#" class="select2">Indonesia</a> &middot; 
                <a href="#" class="select2">English</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/template_web/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/template_web/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/template_web/js/scrolling-nav.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/template_web/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url()?>assets/template_web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder <?php echo base_url()?>assets/template_web/images/ work. Don't actually copy the next line! -->
    <script src="<?php echo base_url()?>assets/template_web/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url()?>assets/template_web/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
