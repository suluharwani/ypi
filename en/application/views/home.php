<?php $base_url_id = $this->config->item('base_url_id');?>
<?php if (isset($id_peserta)) {
  echo $id_peserta;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description: Central Celebes Marathon" content="">
    <meta name="author: Willy Wahyu" content="">
    <link rel="icon" href="https://centralcelebesmarathon.com/assets/template_web/images/ccm.png">

    <title>Central Celebes Marathon</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="<?php echo $base_url_id?>assets/template_web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url_id?>assets/template_web/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $base_url_id?>assets/template_web/css/style.css" rel="stylesheet">
    <script src="<?php echo $base_url_id?>assets/template_web/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"></script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/datepicker.js"></script>
    <script>
     $( "#dialog" ).hide();
      $( "#target" ).click(function() {
        $( "#dialog" ).show();
         $( "#dialog" ).dialog();
        });
    </script>
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
                <li class="active"><a href="#">HOME</a></li>
                <li><a class="page-scroll" href="#jadwal">SCHEDULE</a></li>
                <li><a class="page-scroll" href="#rute">ROUTE</a></li>
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
                <li><a href="<?=base_url()?>home/faq">FAQ</a></li>
                <!--<li><a href="https://centralcelebesmarathon.com">INDONESIA</a></li>-->
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <form class="navbar-form navbar-right" method="POST">
                    <div class="input-group">
                      <input type="number" class="form-control" name="daftar" placeholder="Check registration number">
                      <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit" name="submit" value="check"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </span>
                    </div>
                  </form>
                </li>
                <li><a class="page-scroll" href="#daftar">REGISTER</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--/NAVBAR-->


    <!-- Carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo $base_url_id?>assets/template_web/images/sampul/1.jpg" alt="First slide">
          <!--<div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>-->
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo $base_url_id?>assets/template_web/images/sampul/2.jpg" alt="Second slide">
          <!--<div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>-->
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo $base_url_id?>assets/template_web/images/sampul/3.jpg" alt="Third slide">
          <!--<div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>-->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!--Halaman Pembuka-->
    <section id="jadwal" class="pembuka">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" style="padding-bottom: 70px;">
                <h2 align="center" style="color: #455A64; font-family: arial black;">ABOUT US</h2>
                <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">
                <p style="color: #455A64; text-align: justify; font-size: 17px;">
                    Central Celebes Marathon 2018 is an International Running Event, for the first time this even is being held and presented by the Provincial Government of Central Sulawesi. Central Celebes Marathon is a sportourism event held to honor the 54th anniversary of Central Sulawesi Province on 13th of April 2018.    
                </p>
                <p style="color: #455A64; text-align: justify; font-size: 17px;">
                    Central Celebes Marathon 2018 will be held on Sunday, 15th of April 2018 in Palu (Capital of Central Sulawesi). Participants target in this event are expected to be no less than 1,500 people consisting of national, international and regional athletes. Athletes will compete in the 5K, 10K, Half Marathon 21K and Full Marathon 42K categories. Runners will run through exotic places in the city of Palu, such as: beaches, valleys, rivers, and hills.
                </p>
                <p style="color: #455A64; text-align: justify; font-size: 17px;">
                    Central Celebes Marathon 2018 grant a total cash bonus of Rp 456.000.000, - for the winners.  
                </p>
                <p style="color: #455A64; text-align: justify; font-size: 17px;">
                    This event, will also promote culinary, nature and marine tourism that is in Central Sulawesi to the participants and spectators who come from the regions in Indonesia and abroad.
                </p>
                <p style="color: #455A64; text-align: justify; font-size: 17px;">
                    The marathon participants will be presented with a cultural antiment from the regencies / cities of Central Sulawesi, at 13 Cultural Spot along the Running track.
                </p>
                <p align="center" style="color: #455A64; font-size: 17px;">Information and Registration: <a href="https://en.centralcelebesmarathon.com/" target="_blank">www.en.centralcelebesmarathon.com</a>
                </p>
            </div>
            <div class="col-lg-12" style="padding-bottom: 100px;" align="center">
              <h2 style="color: #455A64; font-family: arial black;">SCHEDULE</h2>
              <hr style="border-color: #F44336; border-width: 3px;" width="17%">
              <h2 style="color: #455A64; margin-bottom: 70px;">April 15th, 2018</h2>

                  <div class="col-lg-3">
                    <img class="img-responsive" style="margin-bottom: 30px;" src="<?php echo $base_url_id?>assets/template_web/images/cot/a.png" height="100">
                    <!--<a href="#1" class="thumbnail" style="width: 261px; background-color: #FFC107; color: #fff; text-decoration: none; font-size: 30px;">
                      5K RUN
                    </a>-->
                  </div>
                  <div class="col-lg-3">
                    <img class="img-responsive" style="margin-bottom: 30px;" src="<?php echo $base_url_id?>assets/template_web/images/cot/b.png" height="100">
                    <!--<a href="#2" class="thumbnail" style="width: 260px; background-color: #2196F3; color: #fff; text-decoration: none; font-size: 30px;">
                      10K RUN
                    </a>-->
                  </div>
                  <div class="col-lg-3">
                    <img class="img-responsive" style="margin-bottom: 30px;" src="<?php echo $base_url_id?>assets/template_web/images/cot/c.png" height="100">
                    <!--<a href="#3" class="thumbnail" style="width: 262px; background-color: #4CAF50; color: #fff; text-decoration: none; font-size: 30px;">
                      HM 21K
                    </a>-->
                  </div>
                  <div class="col-lg-3">
                    <img class="img-responsive" style="margin-bottom: 30px;" src="<?php echo $base_url_id?>assets/template_web/images/cot/d.png" height="100">
                    <!--<a href="#4" class="thumbnail" style="width: 262px; background-color: #F44336; color: #fff; text-decoration: none; font-size: 30px;">
                      FM 42K
                    </a>-->
                  </div>
            </div>
           <div class="col-lg-12" align="center">
              <h2 style="color: #455A64; font-family: arial black;">REMAINING QUOTA</h2>
              <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">

              <div class="col-lg-2"></div>
              <div class="col-lg-2">
                <div class="thumbnail" style="color: #fff; background-color: #F44336; font-size: 30px; font-family: arial black;"><?=$sisa42k?></div>
                <div class="labelpeserta">FM 42K</div>
              </div>
              <div class="col-lg-2">
                <div class="thumbnail" style="color: #fff; background-color: #4CAF50; font-size: 30px; font-family: arial black;"><?=$sisa21k?></div>
                <div class="labelpeserta">HM 21K</div>
              </div>
              <div class="col-lg-2">
                <div class="thumbnail" style="color: #fff; background-color: #2196F3; font-size: 30px; font-family: arial black;"><?=$sisa10k?></div>
                <div class="labelpeserta">10K RUN</div>
              </div>
              <div class="col-lg-2">
                <div class="thumbnail" style="color: #fff; background-color: #FFC107; font-size: 30px; font-family: arial black;"><?=$sisa5k?></div>
                <div class="labelpeserta">5K RUN</div>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>
    </section>

    <section class="pendaftaran">
      <div class="container">
        <div class="col-lg-12" align="center">
            <h2 style="margin-bottom: 70px">
                <div class="alert alert-success" role="alert">
                   <strong>Please download</strong> the prize list here <a class="btn btn-lg btn-success" href="https://drive.google.com/file/d/1inDvSYgdt2ht0AUYOl6GHgBkSGNDmDKM/view?usp=sharing" target="_blank">DOWNLOAD PRIZE LIST</a>
                </div>
            </h2>
        </div>
        <div class="col-lg-12">
          <h2 style="color: #455A64; font-family: arial black;" align="center">REGISTRATION FEE</h2>
          <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">
          <div class="col-lg-6">
            <div class="thumbnail">
              <div class="caption">
                <h3 style="color: #455A64;" align="center">Full Marathon 42K International</h3>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                <h2 style="color: #F44336; font-family: arial black;" align="center">Rp. 550.000</h2>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                  <p style="color: #455A64; font-size: 17px; text-align: justify; margin: 50px;">
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Chest Number (BIB) <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Medal
                  </p>
                  <p align="center"><a href="#daftar" class="btn btn-lg btn-danger page-scroll">REGISTER</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="thumbnail">
              <div class="caption">
                <h3 style="color: #455A64;" align="center">Full Marathon 42K National</h3>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                <h2 style="color: #F44336; font-family: arial black;" align="center">Rp. 350.000</h2>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                  <p style="color: #455A64; font-size: 17px; text-align: justify; margin: 50px;">
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Chest Number (BIB) <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Medal
                  </p>
                  <p align="center"><a href="#daftar" class="btn btn-lg btn-danger page-scroll">REGISTER</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="col-lg-6">
            <div class="thumbnail">
              <div class="caption">
                <h3 style="color: #455A64;" align="center">Half Marathon 21K International</h3>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                <h2 style="color: #F44336; font-family: arial black;" align="center">Rp. 450.000</h2>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                  <p style="color: #455A64; font-size: 17px; text-align: justify; margin: 50px;">
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Chest Number (BIB) <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Medal
                  </p>
                  <p align="center"><a href="#daftar" class="btn btn-lg btn-danger page-scroll">REGISTER</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="thumbnail">
              <div class="caption">
                <h3 style="color: #455A64;" align="center">Half Marathon 21K National</h3>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                <h2 style="color: #F44336; font-family: arial black;" align="center">Rp. 225.000</h2>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                  <p style="color: #455A64; font-size: 17px; text-align: justify; margin: 50px;">
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Chest Number (BIB) <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Medal
                  </p>
                  <p align="center"><a href="#daftar" class="btn btn-lg btn-danger page-scroll">REGISTER</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="col-lg-6">
            <div class="thumbnail">
              <div class="caption">
                <h3 style="color: #455A64;" align="center">10K Run National</h3>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                <h2 style="color: #F44336; font-family: arial black;" align="center">Rp. 175.000</h2>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                  <p style="color: #455A64; font-size: 17px; text-align: justify; margin: 50px;">
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Chest Number (BIB) <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Medal
                  </p>
                  <p align="center"><a href="#daftar" class="btn btn-lg btn-danger page-scroll">REGISTER</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="thumbnail">
              <div class="caption">
                <h3 style="color: #455A64;" align="center">5K Run National</h3>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                <h2 style="color: #F44336; font-family: arial black;" align="center">Rp. 125.000</h2>
                <hr style="border-color: #455A64; border-width: 2px; margin-top: 20px; margin-bottom: 20px;" width="80%">
                  <p style="color: #455A64; font-size: 17px; text-align: justify; margin: 50px;">
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Chest Number (BIB) <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Jersey <br>
                    <span class="glyphicon glyphicon-play pembagi" aria-hidden="true"></span> Finisher Medal
                  </p>
                  <p align="center"><a href="#daftar" class="btn btn-lg btn-danger page-scroll">REGISTER</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="getitem">
      <div class="container">
        <div id="rute" class="col-lg-12" style="margin-bottom: 70px;">
          <h2 style="color: #455A64; font-family: arial black;" align="center">ROUTES</h2>
          <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">
          
            <div class="col-lg-12" style="margin-bottom: 30px;">
                <div class="col-lg-6">
                    <a type="button" data-toggle="modal" data-target="#rute42K">
                      <img src="<?php echo $base_url_id?>assets/template_web/images/rute/42k.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
                    </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="rute42K" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">ROUTE FM 42K</h4>
                          </div>
                          <div class="modal-body">
                            <div style="overflow:hidden;"><div style="position:relative;width:100%;padding-top:56.25%;overflow:visible;"/><iframe name="plotaroute_map_562494" src="https://www.plotaroute.com/embedmap/562494" style="position:absolute;top:0;left:0;bottom:0;right:0;width:100%; height:100%;" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div></div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a type="button" data-toggle="modal" data-target="#rute21K">
                      <img src="<?php echo $base_url_id?>assets/template_web/images/rute/21k.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
                    </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="rute21K" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">ROUTE HM 21K</h4>
                          </div>
                          <div class="modal-body">
                            <div style="overflow:hidden;"><div style="position:relative;width:100%;padding-top:56.25%;overflow:visible;"/><iframe name="plotaroute_map_562639" src="https://www.plotaroute.com/embedmap/562639" style="position:absolute;top:0;left:0;bottom:0;right:0;width:100%; height:100%;" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div></div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <a type="button" data-toggle="modal" data-target="#rute10K">
                      <img src="<?php echo $base_url_id?>assets/template_web/images/rute/10k.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
                    </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="rute10K" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">ROUTE 10K RUN</h4>
                          </div>
                          <div class="modal-body">
                            <div style="overflow:hidden;"><div style="position:relative;width:100%;padding-top:56.25%;overflow:visible;"/><iframe name="plotaroute_map_562637" src="https://www.plotaroute.com/embedmap/562637" style="position:absolute;top:0;left:0;bottom:0;right:0;width:100%; height:100%;" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div></div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a type="button" data-toggle="modal" data-target="#rute5K">
                      <img src="<?php echo $base_url_id?>assets/template_web/images/rute/5k.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
                    </a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="rute5K" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">ROUTE 5K RUN</h4>
                          </div>
                          <div class="modal-body">
                            <div style="overflow:hidden;">
                            <div style="position:relative;width:100%;padding-top:56.25%;overflow:visible;"/><iframe name="plotaroute_map_562632" src="https://www.plotaroute.com/embedmap/562632" style="position:absolute;top:0;left:0;bottom:0;right:0;width:100%; height:100%;" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe></div></div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <!--<div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/A_iaMAhSmR8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>-->
          
        </div>
        <div class="col-lg-12" style="margin-bottom: 70px;">
          <h2 style="color: #455A64; font-family: arial black;" align="center">JERSEY & MEDAL</h2>
          <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">

          <div class="col-lg-6">
            <img src="<?php echo $base_url_id?>assets/template_web/images/jersey.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
          </div>
          <div class="col-lg-6">
            <img src="<?php echo $base_url_id?>assets/template_web/images/medali.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
          </div>
          <div class="col-lg-12">
            <img src="<?php echo $base_url_id?>assets/template_web/images/finisher.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
          </div>
        </div>
        <div class="col-lg-12" align="center" style="margin-bottom: 70px;">
              <h2 style="color: #455A64; font-family: arial black;">REMAINING JERSEY</h2>
              <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">

              <div class="col-lg-3">
                <a role="button" data-toggle="collapse" href="#42k" aria-expanded="false" aria-controls="collapseExample">
                  <div class="thumbnail" style="color: #fff; background-color: #F44336; font-size: 23px; font-family: arial black;">JERSEY FM 42K</div>
                </a>
                <div class="collapse" id="42k">
                  <div class="well">
                    <table class="table-responsive" style="font-size: 17px; color: #455A64">
                     <tr>
                        <td>Size S</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_42k_s?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size M</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_42k_m?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size L</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_42k_l?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size XL</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_42k_xl?> PCs</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <a role="button" data-toggle="collapse" href="#21k" aria-expanded="false" aria-controls="collapseExample">
                  <div class="thumbnail" style="color: #fff; background-color: #4CAF50; font-size: 23px; font-family: arial black;">JERSEY HM 21K</div>
                </a>
                <div class="collapse" id="21k">
                  <div class="well">
                    <table class="table-responsive" style="font-size: 17px; color: #455A64">
                      <tr>
                        <td>Size S</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_21k_s?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size M</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_21k_m?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size L</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_21k_l?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size XL</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_21k_xl?> PCs</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <a role="button" data-toggle="collapse" href="#10k" aria-expanded="false" aria-controls="collapseExample">
                  <div class="thumbnail" style="color: #fff; background-color: #2196F3; font-size: 23px; font-family: arial black;">JERSEY 10K RUN</div>
                </a>
                <div class="collapse" id="10k">
                  <div class="well">
                    <table class="table-responsive" style="font-size: 17px; color: #455A64">
                     <tr>
                        <td>Size S</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_10k_s?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size M</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_10k_m?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size L</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_10k_l?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size XL</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_10k_xl?> PCs</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <a role="button" data-toggle="collapse" href="#5k" aria-expanded="false" aria-controls="collapseExample">
                  <div class="thumbnail" style="color: #fff; background-color: #FFC107; font-size: 23px; font-family: arial black;">JERSEY 5K RUN</div>
                </a>
                <div class="collapse" id="5k">
                  <div class="well">
                    <table class="table-responsive" style="font-size: 17px; color: #455A64">
                      <tr>
                        <td>Size S</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_5k_s?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size M</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_5k_m?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size L</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_5k_l?> PCs</td>
                      </tr>
                      <tr>
                        <td>Size XL</td>
                        <td>:</td>
                        <td><?=$sisa_jersey_5k_xl?> PCs</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!--Halaman Counting Down -->
    <section class="countingdown">
      <div class="parallax">
        <div class="container">
          <div class="col-lg-12" align="center">
              <h2 style="color: #fff; font-family: arial black;">EVENT DAY</h2>
              <hr style="border-color: #fff; border-width: 3px; margin-bottom: 70px;" width="17%">

              <div class="col-lg-3"></div>
              <div class="col-lg-1">
                <div class="time thumbnail glyphicon glyphicon-calendar" style="color: #F44336;"></div>
              </div>
              <div class="col-lg-1">
                <div id="minggu" class="time thumbnail" style="color: #2196F3;"></div>
                <div class="labeltime thumbnail" style="color: #fff; background-color: #2196F3;">WEEKS</div>
              </div>
              <div class="col-lg-1">
                <div id="hari" class="time thumbnail" style="color: #4CAF50;"></div>
                <div class="labeltime thumbnail" style="color: #fff; background-color: #4CAF50;">DAYS</div>
              </div>
              <div class="col-lg-1">
                <div id="jam" class="time thumbnail" style="color: #FFC107;"></div>
                <div class="labeltime thumbnail" style="color: #fff; background-color: #FFC107;">HOURS</div>
              </div>
              <div class="col-lg-1">
                <div id="menit" class="time thumbnail" style="color: #FFC107;"></div>
                <div class="labeltime thumbnail" style="color: #fff; background-color: #FFC107;">MINUTES</div>
              </div>
              <div class="col-lg-1">
                <div id="detik" class="time thumbnail" style="color: #FFC107;"></div>
                <div class="labeltime thumbnail" style="color: #fff; background-color: #FFC107;">SECONDS</div>
              </div>
              <div class="col-lg-3"></div>
                  <script type="text/javascript">
                  $('#minggu').countdown('2018/04/15', function(event) {
                    $(this).html(event.strftime('%w'));
                  });
                  $('#hari').countdown('2018/04/15', function(event) {
                    $(this).html(event.strftime('%d'));
                  });
                  $('#jam').countdown('2018/04/15', function(event) {
                    $(this).html(event.strftime('%H'));
                  });
                  $('#menit').countdown('2018/04/15', function(event) {
                    $(this).html(event.strftime('%M'));
                  });
                  $('#detik').countdown('2018/04/15', function(event) {
                    $(this).html(event.strftime('%S'));
                  });
                </script>
            </div>
        </div>
      </div>
    </section>
    
    <section class="testi">
        <div class="container">
            <div class="col-lg-12">
                <h2 align="center" style="color: #455A64; font-family: arial black;">HOW TO REGISTRATION</h2>
                <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">
                <img src="<?php echo $base_url_id?>assets/template_web/images/encaradaftar.jpg" class="img-responsive" alt="Responsive image" style="margin-bottom: 30px;">
            </div>
        </div>
    </section>

    <section id="daftar" class="isi">
        <div class="container">
          <div class="col-lg-12" style="margin-bottom: 100px;">
            <h2 align="center" style="color: #455A64; font-family: arial black;">REGISTRATION</h2>
            <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">

            <div align="center" class="alert alert-warning" role="alert">Registration deadline: <strong>April 11th, 2018</strong>. Please register yourself soon. Thank you.</div>
            <div align="center" class="alert alert-danger" role="alert">Please fill in the data form according to your <strong>KTP/SIM/Kartu Pelajar/Passport</strong>.</div>
            <form  method="POST">
            <div class="col-lg-6">
              <label>Identity Number (KTP/SIM/Kartu Pelajar/Passport):</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="ktp" placeholder="Example: 8283012308970434" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <label>Full Name:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="nama" placeholder="Example: Agus Suga" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <label>Email:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                <input type="email" class="form-control" name="email" placeholder="Example: agus.suka@gmail.com" aria-describedby="sizing-addon2" required>
              </div>
              <br>
              <label>Gender:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></span>

              <?php
                $options_kelamin = array(
        ''         => '-- Gender --',
        '1'          => 'Male',
        '2'         => 'Female'
                );

        $gender = array('');
        echo form_dropdown('gender', $options_kelamin,'','class="form-control"');

                ?>
              </div>
              <br>
              <label>Blood:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></span>

                <?php
                $options_darah = array(
        ''         => '-- Blood --',
        '1'        => 'A',
        '2'        => 'B',
        '3'        => 'AB',
        '4'        => 'O',
                );

        $darah = array('');
        echo form_dropdown('darah', $options_darah,'','class="form-control"');

                ?>
              </div>
              <br>
              <label>Date Of Birth:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></span>
                <script type="text/javascript">
               $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' });
                </script> 
               <input type="text" class="form-control" name="tempat_lahir" placeholder="Example: Palu" aria-describedby="sizing-addon2" required="">
               <input  type="text" name="ttl" class="form-control input-group date" data-provide="datepicker" aria-describedby="sizing-addon2" required="" value="01/01/1990">
               <div class="input-group-addon ">
              <span class="glyphicon glyphicon-th"></span>
              </div>
              </div>
              <br>
              <label>Address:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
                <textarea type="text" class="form-control" name="alamat" placeholder="Example: Jl. Raya Ramai No. 23 Palu" aria-describedby="sizing-addon2" required=""></textarea>
              </div>
              <br>
              
            </div>
            <div class="col-lg-6">
              <label>City:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="kota" placeholder="Example: Palu" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <label>Province:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="provinsi" placeholder="Example: Sulawesi Tengah" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <label>Race Category:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
             <?php
                $options_lomba = array(
        ''         => '-- Race Category --',
        '1'          => '5K Run National',
        '2'         => '10K Run National',
       
        '3'        => 'Half Marathon 21K National',
        '4'         => 'Half Marathon 21K International',
      
        '5'        => 'Full Marathon 42K National',
        '6'         => 'Full Marathon 42K International',
                );

        $kategori_lomba = array('');
        echo form_dropdown('kategori_lomba', $options_lomba,'','class="form-control"','required=""');

                ?>
              </div>
              <br>
              <label>Phone:</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="hp" placeholder="Example: 081122333444" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <label>Emergency Phone (when something happens):</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="darurat" placeholder="Example: 084443332211" aria-describedby="sizing-addon2" required="">
              </div>
              <br>
              <label>Disease (optional):</label>
               <div class="input-group">
               <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></span>
               <input type="text" class="form-control" name="riwayat_penyakit" placeholder="Example: Jantung" aria-describedby="sizing-addon2">
              </div>
              <br>
              <label>Community (optional):</label>
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span></span>
                <input type="text" class="form-control" name="komunitas" placeholder="Example: Komunitas Pelari Palu" aria-describedby="sizing-addon2">
              </div>
              <br>

              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo" style="background-color: #F44336;">
                    <h4 class="panel-title">
                      <input type="checkbox" required="">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        I agree to the terms and conditions applicable.
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <b>TERMS AND CONDITIONS:</b>
                      <table class="table table-responsive" style="text-align: justify;">
                        <tbody>
                        <tr>
                          <td>1.</td>
                          <td>No age limit for Central Celebes Marathon Participants.</td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Participants will be categorized by either National or International.</td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>There will be online registration only. Offline registration is not available..</td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>Organizer entitled to close the registration once the quota has been filled up. </td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>Registration will be processed after payment is completed.</td>
                        </tr>
                        <tr>
                          <td>6.</td>
                          <td>Prizes are taxed based on terms and conditions applied.</td>
                        </tr>
                        <tr>
                          <td>7.</td>
                          <td>Organizer shall have the right to contact participants to collect necessary data regarding registration matters.</td>
                        </tr>
                        <tr>
                          <td>8.</td>
                          <td>Registration fee is non-refundable. Organizer reserves the right to refuse a completion of registration process if participants provide false information, not able to complete the payment, and failure to meet specified requirements on registration form.</td>
                        </tr>
                        <tr>
                          <td>9.</td>
                          <td>If the event does not go as planned due to circumstances beyond organizer’s control (Heavy rain, Natural Disasters, Demonstration/Protest), organizer shall not be required to refund any fees or take any responsibility.</td>
                        </tr>
                        <tr>
                          <td>10.</td>
                          <td>Like other sports, running comes with a risk. Therefore, each runner must ensure that they are in a good health before and during the marathon. Each runner is responsible of his or her own condition.  Organizer shall not take any responsibility regarding injury or death during or after the marathon cause by health negligence by runners.</td>
                        </tr>
                        <tr>
                          <td>11.</td>
                          <td>Organizer shall have the right to disqualify participant and/or declined the result if it violates the International Association of Athletics Federations (IAAF) or PASI. Organizer shall not be required to refund any fees.</td>
                        </tr>
                        <tr>
                          <td>12.</td>
                          <td>Menaati Rule & Regulation yang ada.</td>
                        </tr>
                        <tr>
                          <td colspan="2"><br>I understand and agree that I have carefully read this agreement and fully understand all of its terms and conditions. I understand that this is a release of liability, which could legally prevent me from filling suit or making any other claim damages towards Central Celebes Marathon 2018. With this knowledge, I am entering into this agreement freely and voluntarily. I agree that it is binding upon me, my spouse, me heirs, and my children. I have read and agree to the terms.</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div align="right">
                <button type="reset"  class="btn btn-warning">CANCEL</button>
                <button type="submit" name="submit" value="submit" class="btn btn-success" >REGISTER</button>
              </div>
            </div>
            </form>
          </div>
          <div class="col-lgl-12" style="margin-bottom: 70px;">
            <h2 align="center" style="color: #455A64; font-family: arial black;">RULE & REGULATION</h2>
            <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">
            <table class="table table-responsive" style="text-align: justify;">
                        <tbody>
                        <tr>
                          <td>1.</td>
                          <td>All participants must wear bibs put at the front of the body so that the bibs can be seen clearly.</td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>All participants must wear available running costumes provided when taking the race pack.</td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>All participant must not be shirtless during the event.</td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>All participants must run on the race route prepared by the committee.</td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>If there are sick participants during the event, the committee will permit the medical staff to take care of the needs of the sick participant.</td>
                        </tr>
                        <tr>
                          <td>6.</td>
                          <td>The committee has rights to act and intervene if there are cases and things can be possibly dangerous to all sides.</td>
                        </tr>
                        <tr>
                          <td>7.</td>
                          <td>The committee will not be responsible for any incidents like injury, disability, even death happened to each participant before, during, or after the race runs.</td>
                        </tr>
                        <tr>
                          <td>8.</td>
                          <td>The committee has a right to use the photos, videos, or any records from the event for legitimate purposes, including commercial advertising.</td>
                        </tr>
                        <tr>
                          <td>9.</td>
                          <td>All participants must learn the race route and understand all the event conditions.</td>
                        </tr>
                        <tr>
                          <td>10.</td>
                          <td>All participants cannot transfer the registration rights or bibs to other people to be used joining the event.</td>
                        </tr>
                        <tr>
                          <td>11.</td>
                          <td>The winners must be suitable with registered name and bib proved by registration proof and valid identity card.</td>
                        </tr>
                        <tr>
                          <td>12.</td>
                          <td>To make the race runs smoothly, all participants should consult his/her health to the doctor or take medical check-up before the event.</td>
                        </tr>
                        </tbody>
                      </table>
          </div>
          <div class="col-lg-12" align="center">
            <?php
            $filecounter=("encounter.txt");
            $kunjungan=file($filecounter);
            $kunjungan[0]++;
            $file=fopen($filecounter,"w");
            fputs($file,"$kunjungan[0]");
            fclose($file);
            ?>
            <table>
                <tr>
                    <td>
                        <h2 align="center" style="color: #455A64; font-family: arial black;">VISITORS COUNTER</h2>
                    </td>
                    <td>
                        <h2 align="center" style="color: #455A64; font-family: arial black;">:</h2>
                    </td>
                    <td>&nbsp; &nbsp; &nbsp;</td>
                    <td>
                        <h2><span class="label label-info"><?php echo $kunjungan[0];?></span></h2>
                    </td>
                </tr>
            </table>
          </div>
        </div>
    </section>

    <!-- Modal
    <div class="modal fade" id="biaya" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Biaya Pendaftaran: <i style="color: red;">sesuai kategori lomba</i></h4>
          </div>
          <div class="modal-body">
            <div class="container">
              <p>
                Anda mengikuti perlombaan <i style="color: red;">sesuai kategori lomba</i> dengan biaya pendaftaran sebesar:
              </p>
              <p>
                <h3><strong>Rp. <i style="color: red;">sesuai kategori lomba</i></strong></h3>
              </p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>

            <button type="button" name="submit" value="submit" class="btn btn-success" data-toggle="modal" data-target="#metpem">Setuju</button>
          </div>
        </div>
      </div>
    </div>-->

    <!-- Modal
    <div class="modal fade" id="metpem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Pilih Metode Pembayaran</i></h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="panel panel-default" style="border-color: #F44336;">
                  <div class="panel-heading" style="background-color: #F44336; color: #fff;">
                    <h3 class="panel-title">Transfer Bank</h3>
                  </div>
                  <div class="panel-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/mandiri.png"> Transfer Bank Mandiri</a> <!-- No. Rek: 1510000333770 a.n CV ANNAHL -->
                      <!--<a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/bri.png"> Transfer Bank BRI</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/bca.png"> Transfer Bank BCA</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/bni.png"> Transfer Bank BNI</a>
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
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/mandiri.png"> Mandiri Virtual Account</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/bca.png"> BCA Virtual Account</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/bni.png"> BNI Virtual Account</a>
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
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/ecash.png"> Mandiri E-Cash</a>
                      <a href="#" class="list-group-item"><img width="50" src="<?php echo $base_url_id?>assets/template_web/images/bank/epay.png"> BRI E-Pay</a>
                      <a href="#" class="list-group-item"><img width="30" src="<?php echo $base_url_id?>assets/template_web/images/bank/klik.png"> Klik BCA</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
            <button type="button" name="submit" value="submit" class="btn btn-success">Setuju</button>
          </div>
        </div>
      </div>
    </div>-->


 

        <!--<section class="testi">
        <div class="container">
          <div class="col-lg-12" align="center">
            <div class="row">
             <h2 style="color: #455A64; font-family: arial black;">TESTIMONIALS</h2>
             <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">


                <div class="col-lg-3">
                  <img src="<?php echo $base_url_id?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
                  </p>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo $base_url_id?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
                  </p>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo $base_url_id?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus
                  </p>
                </div>
                <div class="col-lg-3">
                  <img src="<?php echo $base_url_id?>assets/template_web/images//gambar2.png" class="img-circle" style="margin-bottom: 30px;">
                  <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                  </p>
                </div>

            </div>
          </div>
        </div>
    </section>-->

    <section class="testi">
      <div class="container" align="center">
          <img src="<?php echo $base_url_id?>assets/template_web/images/alllogo.png" class="img-responsive" alt="Responsive image">
      </div>
    </section>

    <section class="peta">
      <h2 style="color: #455A64; font-family: arial black; margin-top: 70px;" align="center">OUR LOCATION</h2>
      <hr style="border-color: #F44336; border-width: 3px; margin-bottom: 70px;" width="17%">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.3336808179066!2d119.87760232915612!3d-0.8920871590168601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bedd77311e39d%3A0x5af654311b238ac1!2sFakultas+Kopi!5e0!3m2!1sid!2sid!4v1517354848050" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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

                  <!--<a href="https://twitter.com/celebessoftware" target="_blank"><img src="<?php echo $base_url_id?>assets/template_web/images//sm2.png" style="width: 35px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>-->

                  <a href="https://www.instagram.com/centralcelebesmarathon/" target="_blank"><img src="<?php echo $base_url_id?>assets/template_web/images//sm3.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;"></a>

                  <!--<a href="http://line.me/R/ti/p/%40eqf6209h" target="_blank"><img src="<?php echo $base_url_id?>assets/template_web/images//sm4.png" style="width: 30px; height: 30px; margin-left: 5px;"></a>-->
                </p>
              </div>

              <div class="col-lg-4">
                <p><b>Useful Links</b></p>
                <p>
                  &#9658; <a class="select2" href="<?=$base_url_id?>home/pariwisata">Tourism</a><br>
                  &#9658; <a class="select2" href="<?=$base_url_id?>home/merchant" target="_top">Merchant</a><br>
                  &#9658; <a class="select2" href="<?=$base_url_id?>home/gallery" target="_top">Gallery</a><br>
                  &#9658; <a class="select2" href="<?=$base_url_id?>home/faq" target="_top">FAQ</a><br>
                  &#9658; <a class="select2" href="https://centralcelebesmarathon.com">Indonesia</a><br>
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
                <a href="https://centralcelebesmarathon.com" class="select2">Indonesia</a> &middot; 
                <a href="https://en.centralcelebesmarathon.com" class="select2">English</a>
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
    <script>window.jQuery || document.write('<script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo $base_url_id?>assets/template_web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder <?php echo $base_url_id?>assets/template_web/images/ work. Don't actually copy the next line! -->
    <script src="<?php echo $base_url_id?>assets/template_web/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $base_url_id?>assets/template_web/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
