<!DOCTYPE html>
<html lang="en">

<head>
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
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">


<title><?=$title;?></title>
<link rel="icon" href="<?= base_url()?>assets/img/icon.jpg" type="image/x-icon"/>

<!-- Bootstrap core CSS -->
<link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="<?= base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Plugin CSS -->
<link href="<?= base_url()?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?= base_url()?>assets/css/creative.min.css" rel="stylesheet">




<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.4.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script> -->

</head>

<!--Main Content-->

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><?=$title;?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#pengumuman">pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url()?>/forum">Forum</a>
          </li>
  <!--         <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Lowongan</a>
          </li> -->


          <?php 
          $is_user = $this->session->userdata('status_login');

          if ($ada_login == 1) {
            ?>
            <li>
              <a style="padding-top: 0px;" href="<?=base_url()?>profile/alumni/<?=$is_user?>"><button class="btn btn-primary btn-md" style="margin-bottom:30px;" >Profile</button></a>
            </li>
          <?php }else{ ?>
            <li>
              <a class="page-scroll" style="padding-top: 0px;"><button class="btn btn-primary btn-md" style="margin-bottom:30px;" data-toggle="modal" data-target="#login">Login</button></a>
            </li>
          <?php } ?>


        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <!-- <strong><?=$title;?></strong> -->
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5">Selamat datang di website resmi alumni YPI KLAMBU. Website ini merupakan sarana bagi para alumni untuk saling berbagi informasi.</p>
          <form id="signupform" style="padding: 10px;">
            <fieldset>
            </fieldset>
          </form>
          <!-- <a class="btn btn-primary btn-xl js-scroll-trigger" <button data-toggle="modal" data-target="#check">Check Status Kamu</button></a> -->
          <a class="btn btn-primary btn-xl js-scroll-trigger" <button data-toggle="modal" data-target="#daftar">Pendaftaran</button></a>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-primary" id="pengumuman">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Informasi Lebih Lanjut</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">- Diberitahukan kepada seluruh alumni YPI KLAMBU untuk mengisi data pribadi(silahkan login dahulu untuk mengisi data pribadi)</p>
          <p class="text-faded mb-4">- Login alumni menggunakan nisn dan password berupa nisn</p>
          <p class="text-faded mb-4">- Bagi yang tidak dapat login, silahkan hubungi pihak sekolah</p>
          <!--        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Alumni Terdafatar</h2>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
     <table id="tabelalumni" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Nama Alumni</th>
          <th>Angkatan</th>
          <th>Nisn</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($alumni->result() as $alum) { ?>
          <tr>
            <td><?=$alum->nama?></td>
            <td><?=$alum->angkatan?></td>
            <td><?=$alum->nisn?></td>
            <td><a href="<?=base_url('profile/alumni/').$alum->nisn?>" target="_blank" class="btn btn-success btn-large text-white">Profil <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a></td>
          </tr>
        <?php }?>

      </tfoot>
    </table>
  </section>

<!--     <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?= base_url()?>assets/img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="<?= base_url()?>assets/img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?= base_url()?>assets/img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="<?= base_url()?>assets/img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?= base_url()?>assets/img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="<?= base_url()?>assets/img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?= base_url()?>assets/img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="<?= base_url()?>assets/img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?= base_url()?>assets/img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="<?= base_url()?>assets/img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?= base_url()?>assets/img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="<?= base_url()?>assets/img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Informasi Alumni YPI KLAMBU</h2>
        <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>   -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
      </div>
      <div>
        <div id="test-list">
         <div class="text-center">
          <input type="text" class="search" placeholder="Cari Info" />
        </div>
        <ul class="list">
          <?php
          foreach ($informasi->result() as $info) {?>
            <div class="col-mm-6 container ">
             <a href="<?=base_url('home/berita/').$info->url?>"><p class="name"><?=$info->judul?></p></a>
           </div>

         <?php }
         ?>
       </ul>
       <div class="text-center">
        <a class="btn btn-light sr-button"><b class="pagination"></b></button></a>
      </div>
    </div>

  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Let's Get In Touch!</h2>
        <hr class="my-4">
        <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center">
        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
        <p>(0292) 421321</p>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
        <p>
          <a href="mailto:your-email@your-domain.com">mail.co</a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- start Modal login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">
        Login
      </h4>
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>

  </div>

  <!-- Modal Body -->
  <div class="modal-body">

    <form class="form-horizontal" role="form" method="POST">
      <div class="form-group">
        <label  class="col-sm-2 control-label" >NISN</label>
        <div class="col-sm-10">
          <input type="text" name="nisn" class="form-control" 
          placeholder="NISN" required>

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
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" value="submit" class="btn btn-primary btn-md">Sign in</button>
        </div>
      </div>
      Lupa NISN ? <a href="http://nisn.data.kemdikbud.go.id/page/data" target="_blank" >Klik disini</a>
    </form>
  </div>

  <!-- Modal Footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-default"
    data-dismiss="modal">
    Close
  </button>
</div>
</div>
</div>
</div>
<!-- end Modal login -->	

<!-- start Modal Daftar -->
<div class="modal fade" id="daftar" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      Register an Account
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputNISN">NISN</label>
        <input class="form-control" id="exampleInputNISN" type="nisn" name="_nisn" aria-describedby="nisnHelp" placeholder="NISN">
      </div>
      <div class="form-group">
        <label for="exampleInputName">Nama</label>
        <input class="form-control" id="exampleInputName" name="_nama" type="text" aria-describedby="nameHelp" placeholder="Nama">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input class="form-control" id="exampleInputEmail1" name="_email" type="email" aria-describedby="emailHelp" placeholder="email">
      </div>
<!--       <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1"  type="password" placeholder="Password">
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">Confirm password</label>
            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
          </div>
        </div>
      </div> -->
      <div class="form-group">
        <label for="exampleConfirmPassword">Tahun Lulus</label>
        <input class="form-control" id="exampleConfirmPassword" name="_angkatan" type="number" placeholder="20xx">
      </div>
      <div class="form-group">
        <label for="exampleInputTmptLahir">Tempat Lahir</label>
        <input class="form-control" id="exampleInputTmptLahir" name="_tempat_lahir" type="tempat_lahir" aria-describedby="tempat_lahirHelp" placeholder="Tempat Lahir">
      </div>

      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control" type="date"  name="_tanggal_lahir" id="tgllahir" placeholder="Tanggal Lahir">
      </div>

      <div class="form-group">
        <label for="exampleInputFoto">Upload Gambar(Foto Anda)</label>
        <div class="col-sm-5">
          <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="image-source" name="_gambar" onchange="previewImage();" required/>
          <img id="image-preview" alt="image preview"/>
        </div>
        
      </div>
    </div>

    <input class="btn btn-primary btn-block" type="submit" value ="Register" name="submit"> 
  </form>
  <div class="text-center">
    <script>
      function kemdikbud() {
        window.open("https://www.w3schools.com");
      }
    </script>
    <a class="d-block small mt-3" >Lupa NISN?</a>
    <button  class="btn btn-primary btn-md" style="margin-bottom:30px;" onclick="kemdikbud()">Check NISN</button>
  </div>
  <!-- Modal Footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-default"
    data-dismiss="modal">
    Close
  </button>
</div>     
</div>
</div>
</div>
</div>
<!-- end Modal Daftar -->  	
<!-- start Modal check -->
<div class="modal fade" id="check" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      Check NISN
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form id="signupform">
      <div class="form-group">
        <label for="exampleInputNISN">NISN</label>
        <input class="form-control" id="nisn1" name="nisn1" type="text" aria-describedby="nisnHelp" placeholder="NISN">
        <input class="btn btn-primary btn-block" type="submit" value ="Register" name="submit"> 
      </form>
      <div class="text-center">
        <script>
          function kemdikbud() {
            window.open("http://nisn.data.kemdikbud.go.id/page/data");
          }
        </script>
        <a class="d-block small mt-3" >Lupa NISN?</a>
        <button  class="btn btn-primary btn-md" style="margin-bottom:30px;" onclick="kemdikbud()">Check NISN</button>
      </div>
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default"
        data-dismiss="modal">
        Close
      </button>
    </div>     
  </div>
</div>
</div>
</div>
<!-- end Modal check -->   

<!-- Bootstrap core JavaScript -->
<!-- <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script> -->
<script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url()?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?= base_url()?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


<!-- Custom scripts for this template -->
<script src="<?= base_url()?>assets/js/creative.min.js"></script>
<script type="text/javascript" charset="utf-8" async defer>
  var monkeyList = new List('test-list', {
    valueNames: ['name'],
    page: 10,
    pagination: true
  });</script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#tabelalumni').DataTable();
    } );
  </script>

</body>

</html>