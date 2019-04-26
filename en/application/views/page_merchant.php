<?php $base_url_id = $this->config->item('base_url_id');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description: Central Celebes Marathon" content="">
    <meta name="author: Willy Wahyu" content="">
    <link rel="icon" href="https://centralcelebesmarathon.com/assets/template_web/images/ccm.png">

    <title>Central Celebes Marathon: Merchant</title>

    <link href="<?=$base_url_id?>/assets/template_web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$base_url_id?>/assets/template_web/css/bootstrap.css" rel="stylesheet">
    <link href="<?=$base_url_id?>/assets/template_web/css/style.css" rel="stylesheet">
    <script src="<?=$base_url_id?>/assets/template_web/js/ie-emulation-modes-warning.js"></script>
    <script src="<?=$base_url_id?>/assets/template_web/js/jquery.min.js"></script>
    <script src="<?=$base_url_id?>/assets/template_web/js/jquery.countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"></script>
    <script src="<?=$base_url_id?>/assets/template_web/js/datepicker.js"></script>
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
                <li ><a href="<?=base_url()?>">HOME</a></li>
                <li><a class="page-scroll" href="<?=base_url()?>home#jadwal">SCHEDULE</a></li>
                <li><a class="page-scroll" href="<?=base_url()?>home#rute">ROUTE</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENT<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">EVENT 1</a></li>
                    <li><a href="#">EVENT 2</a></li>
                    <li><a href="#">EVENT 3</a></li>
                  </ul>
                </li>-->
                <li><a href="<?=base_url()?>home/pariwisata">TOURISM</a></li>
                <li class="active"> <a href="<?=base_url()?>home/merchant">MERCHANT</a></li>
                <li><a href="<?=base_url()?>home/gallery">GALLERY</a></li>
                <li><a href="<?=base_url()?>home/faq">FAQ</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <form class="navbar-form navbar-right" method="POST">
                    <div class="input-group">
                      <input type="text" class="form-control" name="daftar" placeholder="Lihat no pendaftaran...">
                      <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit" name="submit" value="check"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </span>
                    </div>
                  </form>
                </li>
                <li><a class="page-scroll" href="<?=base_url()?>home#daftar">REGISTER</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--/NAVBAR-->

      <section class="parallax-header">
        <div class="container">
          <div class="col-lg-12">
            <h2 class="judulheader" align="center">Merchant</h2>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <ol class="breadcrumb" style="background-color: transparent; font-size: 17px;">
                <li><a href="#" style="color: #fff;">Home</a></li>
                <li>Merchant</li>
              </ol>
            </div>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </section>
      <section class="other">
        <div class="container">
          <div class="col-lg-12">
            <div align="center">
              <div class="row">
  
<!-- konten -->
  <div class="col-lg-12" style="margin-bottom: 30px;">
            <div>
              <h2><?= $judul?></h2>
              <small>Ditambahkan oleh: <?=$penulis?> <br> Pada tangal: <?=$tanggal?></small>
              <br>
              <?php if ($gambar=="") {?>
            <img src="<?php echo $base_url_id?>assets/upload/empty/notfound.jpg" alt="..." class="img-rounded" >
              <?php }else{ ?>
            <img src="<?php echo $base_url_id?>assets/upload/merchant/<?=$gambar?>" alt="..." class="img-rounded" width="800px">
             <?php }?> 
            </div>

            <br>
            <div >
             
              <p>
                <?= $isi?>
                 <p style="margin-bottom: 30px;">
                  <a href="<?=$facebook?>" target="_blank"><img src="<?php echo $base_url_id?>assets/icon_sosmed/fb.png" style="width: 30px; height: 30px; margin-right: 5px;"></a>

                  <a href="<?=$twitter?>" target="_blank"><img src="<?php echo $base_url_id?>assets/icon_sosmed/tw.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>

                  <a href="<?=$instagram?>" target="_blank"><img src="<?php echo $base_url_id?>assets/icon_sosmed/ig.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>

                  <a href="https://api.whatsapp.com/send?phone=<?=$telepon?>" target="_blank"><img src="<?php echo $base_url_id?>assets/icon_sosmed/wa.ico" style="width: 30px; height: 30px; margin-left: 5px;"></a>
                </p>
              </p>
            </div>
          </div>
<!-- konten -->


              </div>
          <a href="<?=base_url()?>home/merchant">   <button class="btn btn-danger">Kembali</button> </a> 
            </div>
          </div>
        </div>
      </section>

      <!-- FOOTER -->
      <section class="kontak" id="contact">
        <div class="container">
          <div class="col-lg-12" style="margin-top: 70px; margin-bottom: 30px;">
            <div class="row">

              <div class="col-lg-4">
                <p align="left"><b>Contact Us</b></p>
                <p style="margin-bottom: 30px;">
                  <a style="color: #fff; text-decoration: none;" href="#alamat">Address: Jln. Setia Budi No. 61A, Kota Palu.</a><br>
                  <a class="select2" href="tel:+628114563031">Telp: 08114563031</a><br>
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
                  &#9658; <a class="select2" href="<?=base_url()?>home/pariwisata">Tourism</a><br>
                  &#9658; <a class="select2" href="<?=base_url()?>home/merchant" target="_top">Merchant</a><br>
                  &#9658; <a class="select2" href="<?=base_url()?>home/gallery" target="_top">Gallery</a><br>
                  &#9658; <a class="select2" href="<?=base_url()?>home/faq" target="_top">FAQ</a><br>
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
                &copy; 2018 Central Celebes Marathon | 
                Event by LEBAH MADU |
                Powered by <a href="http://paluwebstore.com/" class="select2" target="_blank">Paluwebstore</a> | 
                <!--Dev by <a href="http://weer-indonesia.com/" class="select2" target="_blank">WeeR INDONESIA</a> |-->
                <a href="#" class="select2">Indonesia</a> &middot; 
                <a href="#" class="select2">English</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      </footer>
      
      <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5a77b6d8d7591465c7075e8e/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=$base_url_id?>/assets/template_web/js/jquery.min.js"></script>
    <script src="<?=$base_url_id?>/assets/template_web/js/jquery.countdown.js"></script>
    <script src="<?=$base_url_id?>/assets/template_web/js/jquery.easing.min.js"></script>
    <script src="<?=$base_url_id?>/assets/template_web/js/scrolling-nav.js"></script>
    <script>window.jQuery || document.write('<script src="<?=$base_url_id?>/assets/template_web/js/jquery.min.js"><\/script>')</script>
    <script src="<?=$base_url_id?>/assets/template_web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder <?php echo $base_url_id?>assets/template_web/images/ work. Don't actually copy the next line! -->
    <script src="<?=$base_url_id?>/assets/template_web/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=$base_url_id?>/assets/template_web/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
