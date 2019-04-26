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

    <title>Central Celebes Marathon: FAQ</title>

    <link href="<?php echo $base_url_id?>assets/template_web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url_id?>assets/template_web/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $base_url_id?>assets/template_web/css/style.css" rel="stylesheet">
    <script src="<?php echo $base_url_id?>assets/template_web/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/datepicker.js"></script>
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
                <li><a href="<?=base_url()?>home">HOME</a></li>
                <li><a class="page-scroll" href="<?=base_url()?>home#jadwal">SCHEDULE</a></li>
                <li><a class="page-scroll" href="<?=base_url()?>home#rute">ROUTE</a></li>
                <li><a href="<?=base_url()?>home/pariwisata">TOURISM</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENT<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">EVENT 1</a></li>
                    <li><a href="#">EVENT 2</a></li>
                    <li><a href="#">EVENT 3</a></li>
                  </ul>
                </li>-->
                <li><a href="<?=base_url()?>home/merchant">MERCHANT</a></li>
                <li><a href="<?=base_url()?>home/gallery">GALLERY</a></li>
                <li  class="active"><a href="<?=base_url()?>home/faq">FAQ</a></li>
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
            <h2 class="judulheader" align="center">FAQ</h2>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <ol class="breadcrumb" style="background-color: transparent; font-size: 17px;">
                <li><a href="#" style="color: #fff;">Home</a></li>
                <li class="active">FAQ</li>
              </ol>
            </div>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </section>
      <section class="other">
        <div class="container">
          <div class="col-lg-12" style="margin-bottom: 30px;">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#1" aria-expanded="true" aria-controls="collapseOne">
                      What is Central Celebes Marathon?
                    </a>
                  </h4>
                </div>
                <div id="1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                      Central Celebes Marathon is a sport tourism event held to honor the 54th anniversary of Central Celebes that falls on 13th of April 2018, while Central Celebes Marathon 2018 will be held on Sunday, 15th of April 2018. Targeted participants are expected to be no less than 1500 people, consisting of national and international athletes. Athletes will compete in the 5K, 10K, Half Marathon (21K), and Full Marathon (42K). Central Celebes Marathon 2018 rewards in total hundreds millions Rupiah for the winners. Through this event it is also a bridge to promote culinary scene, nature, and marine tourism of Central Celebes to all participants.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#2" aria-expanded="false" aria-controls="collapseTwo">
                      When will Central Celebes Marathon be held?
                    </a>
                  </h4>
                </div>
                <div id="2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Sunday, 15th of April 2018.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#3" aria-expanded="false" aria-controls="collapseThree">
                      What are the categorizes in Central Celebes Marathon?
                    </a>
                  </h4>
                </div>
                <div id="3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <table class="table table-responsive">
                      <thead>
                        <th>No.</th>
                        <th>Race Category</th>
                        <th>Registration Fee</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>5K RUN</td>
                          <td>Rp. 125.000</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>10K RUN</td>
                          <td>Rp. 175.000</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>HM 21K National</td>
                          <td>Rp. 225.000</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>HM 21K International</td>
                          <td>Rp. 450.000</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>FM 42K National</td>
                          <td>Rp. 350.000</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>FM 42K International</td>
                          <td>Rp. 550.000</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="false" aria-controls="collapseTwo">
                      What is the age limit to participate in Central Celebes Marathon?
                    </a>
                  </h4>
                </div>
                <div id="4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Minimum age requirements  for participant is 13 years old whereas there is no maximum age required.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#5" aria-expanded="false" aria-controls="collapseTwo">
                      How do I sign up for Central Celebes Marathon?
                    </a>
                  </h4>
                </div>
                <div id="5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Registration is only done online on Central Celebes Marathon official site <a href="http://centralcelebesmarathon.com">www.centralcelebesmarathon.com</a>.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#6" aria-expanded="false" aria-controls="collapseTwo">
                      Who can participate in Central Celebes Marathon 2018?
                    </a>
                  </h4>
                </div>
                <div id="6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Participation of Central Celebes Marathon 2018 is open for public, namely;
                    <ul>
                      <li>Licensed Athletes of non-licensed athletes, Indonesian Citizens (WNI).</li>
                      <li>General Public (non-athlete), Indonesian Citizens (WNI).</li>
                      <li>Licensed athletes and non-licensed athletes, Foreigners (WNA.</li>
                      <li>General Public (non-athletes), Foreigners (WNA).</li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#7" aria-expanded="false" aria-controls="collapseTwo">
                      How can I change the marathon category that I registered before? 
                    </a>
                  </h4>
                </div>
                <div id="7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Participants are not allowed to change the registered category. Please consider carefully before registering.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#8" aria-expanded="false" aria-controls="collapseTwo">
                      Can I register on the day of  marathon or race pack collection day?
                    </a>
                  </h4>
                </div>
                <div id="8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Registration is NOT ALLOWED on the day or marathon or race pack collection day. Do register on the specified schedule. Check schedule here (link to schedule page).
                </div>
              </div>
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
                  <a href="https://web.facebook.com/centralcelebesmarathon/" target="_blank"><img src="<?php echo $base_url_id?>assets/template_web/images//sm1.png" style="width: 14px; height: 30px; margin-right: 5px;"></a>

                  <!--<a href="https://twitter.com/celebessoftware" target="_blank"><img src="<?php echo base_url()?>assets/template_web/images//sm2.png" style="width: 35px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>-->

                  <a href="https://www.instagram.com/centralcelebesmarathon/" target="_blank"><img src="<?php echo $base_url_id?>assets/template_web/images//sm3.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>

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
                <a href="https://centralcelebesmarathon.com/home/faq" class="select2">Indonesia</a> &middot; 
                <a href="https://en.centralcelebesmarathon.com/home/faq" class="select2">English</a>
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
    <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.countdown.js"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.easing.min.js"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/scrolling-nav.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder <?php echo $base_url_id?>assets/template_web/images/ work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $base_url_id?>assets/template_web/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
