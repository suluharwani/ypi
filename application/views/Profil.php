<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$judul?></title>
  <link rel="icon" href="<?= base_url()?>assets/img/icon.jpg" type="image/x-icon"/>
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url()?>assets/profil/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="<?= base_url()?>assets/profil/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/profil/vendor/devicons/css/devicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/profil/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  


<!--   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->
    <style type="text/css" media="screen">
    .ui-datepicker-calendar {
     display: none;
   }
   .ui-datepicker-month {
     display: none;
   }
   .ui-datepicker-next,.ui-datepicker-prev {
    display:none;
  }
</style>

<!-- Custom styles for this template -->
<link href="<?= base_url()?>assets/profil/css/resume.min.css" rel="stylesheet">
<style type="text/css">
#image-preview{
  display:none;
  height : 300px;
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
</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none"></span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url()?>assets/gambar/profile/<?=$foto?>" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Pengalaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Pendidikan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Keahlian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Ketertarikan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Penghargaan</a>
        </li>
        <?php if ($status_user=="guest") {?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?=base_url('profile/alumni/').$nisn?>">Back to profile</a>
          </li>
        <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#editprofile">Edit Profile</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#edit_profil">Edit Profile</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?=base_url()?>profile/logout">Logout</a>
          </li>
        <?php }?>
      </ul>
    </div>
  </nav>



  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
      <div class="my-auto">
        <h1 class="mb-0"><?=$nama_depan?>
        <span class="text-primary"><?=$nama_belakang?></span>
      </h1>
      <div class="subheading mb-5"><?=$alamat?>
      <a href="mailto:name@email.com"><?=$email?></a>
    </div>
    <p class="mb-5"><?=$tentang_saya?></p>
    <ul class="list-inline list-social-icons mb-0">
      <li class="list-inline-item">
        <a href="<?=$link_fb?>" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="<?=$link_tw?>" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="<?=$link_in?>" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="<?=$link_git?> target="_blank"">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-github fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://www.instagram.com/<?=$link_ig?>" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://api.whatsapp.com/send?phone=<?=$link_wa?>&text=Halo" target="_blank">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </li>
    </ul>
  </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
  <div class="my-auto">
    <h2 class="mb-5">Experience</h2>
    <?php foreach ($pengalaman_alumni->result() as $pengalaman) {
      $tanggal_keluar = $pengalaman->sampai;  
      ?>
      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0"><?=$pengalaman->pengalaman?></h3>
          <div class="subheading mb-3"><?=$pengalaman->instansi?></div>
          <p><?=$pengalaman->keterangan?></p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary"><?=date('j F, Y',strtotime($pengalaman->mulai_masuk))?> - <?php if (DateTime::createFromFormat('Y-m-d',  $tanggal_keluar) !== FALSE) {
            echo date('j F, Y',strtotime($tanggal_keluar));
            
          }else{
            echo "sekarang";
          } ?></span>
        </div>
      </div>
    <?php } ?>
  </div>

</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
  <div class="my-auto">
    <h2 class="mb-5">Education</h2>
    <?php foreach ($pendidikan_alumni->result() as $pendidikan) {?>
      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0"><?=$pendidikan->sekolah?></h3>
          <div class="subheading mb-3"><?=$pendidikan->jurusan?></div>
      <!--   <div>Computer Science - Web Development Track</div>
        <p>GPA: 3.23</p> -->
      </div>
      <div class="resume-date text-md-right">
        <span class="text-primary"><?=date('F , Y',strtotime($pendidikan->lulus));?></span>
      </div>
    </div>
  <?php } ?>
  

</div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
  <div class="my-auto">
    <h2 class="mb-5">Skills</h2>



    <div class="subheading mb-3">Daftar Keahlian</div>
    <ul class="fa-ul mb-0">
      <?php 
      foreach ($skill->result() as $keahlian) {?>
       <li>
        <i class="fa-li fa fa-check"></i>
        <?=$keahlian->keahlian;?>
      </li>
    <?php }
    ?>
  </ul>
</div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
  <div class="my-auto">
    <h2 class="mb-5">Interests</h2>
    <p><?=$interest_value?></p>
  </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
  <div class="my-auto">
    <h2 class="mb-5">Awards &amp; Certifications</h2>
    <ul class="fa-ul mb-0">

      <?php
      foreach ($juara->result() as $penghargaan) {?>
        <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
          <?php if (($penghargaan->juara)!=0) {?>
           <?=$controller->ordinal($penghargaan->juara)?> Place -
         <?php } ?>
         <?=$penghargaan->penghargaan?></li>
       <?php }
       ?>

     <!--  <i class="fa-li fa fa-trophy text-warning"></i>
    Mobile Web Specialist - Google Certification</li>
    <li>
      <i class="fa-li fa fa-trophy text-warning"></i>
      1<sup>st</sup>
    Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
    <li>
      <i class="fa-li fa fa-trophy text-warning"></i>
      1<sup>st</sup>
    Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
    <li>
      <i class="fa-li fa fa-trophy text-warning"></i>
      2<sup>nd</sup>
    Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
    <li>
      <li>
        <i class="fa-li fa fa-trophy text-warning"></i>
        1<sup>st</sup>
      Place - James Buchanan High School - Hackathon 2006</li>
      <li>
        <i class="fa-li fa fa-trophy text-warning"></i>
        3<sup>rd</sup>
      Place - James Buchanan High School - Hackathon 2005</li> -->
    </ul>
  </div>
</section>
<?php if ($status_user=="owner") {?>
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="editprofile">
    <div class="my-auto">
      <h2 class="mb-5">Profile Anda</h2>
      <ul class="fa-ul mb-0">
        <a data-toggle="modal" data-target="#edit_profil" class="btn btn-primary btn-large text-white">Tentang Saya<i class="icon-folder-open icon-rotate-90 icon-spin"></i></a>
        <a  class="btn btn-info btn-large text-white"  data-toggle="modal" data-target="#edit_pengalaman">Pengalaman<i class="icon-folder-open icon-rotate-90 icon-spin"></i></a>
        <a data-toggle="modal" data-target="#edit_sosmed" class="btn btn-danger btn-large text-white ">Sosial Media <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a>
        <a data-toggle="modal" data-target="#pendidikan" class="btn btn-success btn-large text-white">Pendidikan <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a>
        <a data-toggle="modal" data-target="#keahlian" class="btn btn-warning btn-large text-white">Keahlian<i class="icon-folder-open icon-rotate-90 icon-spin"></i></a>
        <a data-toggle="modal" data-target="#tertarik" class="btn btn-danger btn-large text-white">Tertarik <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a>
        <a data-toggle="modal" data-target="#penghargaan" class="btn btn-success btn-large text-white">penghargaan <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a>

      </ul>
    </div>
    <br/>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsefirst" aria-expanded="true" aria-controls="collapsefirst">
              <h4>Foto Profil</h4>
            </button>
          </h5>
        </div>

        <div id="collapsefirst" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
             <form method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="control-group">
          <label class="control-label" for="fileInput">Upload Foto Profile</label>
          <div class="controls">
            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="image-source" name="gambar" onchange="previewImage();"/>
          </div>
          <img id="image-preview" alt="image preview"/>
        </div> 
        <button type="submit" name="submit" value="simpan_foto" class="btn btn-primary">Simpan Foto</button>  
      </form>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h4>Pendidikan</h4>
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">

            <table id="tabelpendidikan" class="display" style="width:100%">
              <thead>
                <tr>
                  <th>Sekolah</th>
                  <th>Jurusan</th>
                  <th>Lulus</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php foreach ($pendidikan_alumni->result() as $pendidikanalumni) {?>
                <tr>
                  <td><?=$pendidikanalumni->sekolah?></td>
                  <td><?=$pendidikanalumni->jurusan?></td>
                  <td><?=date('F , Y',strtotime($pendidikanalumni->lulus));?></td>
                  <td><a href="<?=base_url('profile/hapus_pendidikan/').$pendidikanalumni->id?>" onclick="myFunction()" class="btn btn-danger btn-large text-white">Hapus <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a></td>
                </tr>
              <?php }?>

            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h4>Pengalaman</h4>
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <table id="tabelpengalaman" class="display" style="width:100%">
            <thead>
              <tr>
                <th>Pengalaman</th>
                <th>Instansi</th>
                <th>Masuk</th>
                <th>Sampai</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php foreach ($pengalaman_alumni->result() as $pengalamanalumni) { ?>              
                <tr>
                  <td><?=$pengalamanalumni->pengalaman?></td>
                  <td><?=$pengalamanalumni->instansi?></td>
                  <td><?=date('j F, Y',strtotime($pengalamanalumni->mulai_masuk))?></td>
                  <td><?php if (DateTime::createFromFormat('Y-m-d',  $tanggal_keluar) !== FALSE) {
                    echo date('j F, Y',strtotime($tanggal_keluar));
                  }?></td>
                  <td><a href="<?=base_url('profile/hapus_pengalaman/').$pengalamanalumni->id?>" onclick="myFunction()" class="btn btn-danger btn-large text-white">Hapus <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a></td>
                </tr>
              <?php } ?>

            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!-- award -->
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
            <h4>Penghargaan</h4>
          </button>
        </h5>
      </div>
      <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <table id="tabelkeahlian" class="display" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Award</th>
                <th>Juara</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1; 
              foreach ($juara->result() as $penghargaan_alumni) { ?>              
                <tr>
                  <td><?=$no++?></td>
                  <td><?=$penghargaan_alumni->penghargaan?></td>
                  <td><?=$controller->ordinal($penghargaan_alumni->juara)?></td>
                  <td><a href="<?=base_url('profile/hapus_penghargaan/').$penghargaan_alumni->id?>" onclick="myFunction()" class="btn btn-danger btn-large text-white">Hapus <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a></td>
                </tr>
              <?php } ?>

            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!-- award -->
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h4>Keahlian</h4>
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <table id="tabelkeahlian" class="display" style="width:100%">
            <thead>
              <tr>
                <th>Keahlian</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach ($skill->result() as $keahlianalumni) { ?>           
              <tr>
                <td><?=word_limiter($keahlianalumni->keahlian, 10)?></td>
                <td><a href="<?=base_url('profile/hapus_keahlian/').$keahlianalumni->id?>" onclick="myFunction()" class="btn btn-danger btn-large text-white">Hapus <i class="icon-folder-open icon-rotate-90 icon-spin"></i></a></td>

              </tr>
            <?php }?>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>





</section>

<?php }?>
<!-- start Modal Edit Profil -->
<div class="modal fade" id="edit_profil" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      Edit Profil
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post">
      <div class="form-group">

        <label for="exampleInputNISN">NISN</label>
        <input class="form-control" id="exampleInputNISN" name="edit_nisn" type="nisn" aria-describedby="nisnHelp" placeholder="NISN" value="<?=$nisn?>"> 
      </div>

      <div class="form-group">
        <label for="exampleInputName">Nama</label>
        <input class="form-control" id="exampleInputName" name="edit_nama_depan" value="<?=$nama_depan?>" type="text" aria-describedby="nameHelp" placeholder="Nama">
        <input class="form-control" id="exampleInputName" name="edit_nama_belakang" value="<?=$nama_belakang?>" type="text" aria-describedby="nameHelp" placeholder="Nama Belakang">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input class="form-control" id="exampleInputEmail1" type="email" name="edit_email" value="<?=$email?>" aria-describedby="emailHelp" placeholder="Email">
      </div>

      <div class="form-group">
        <label for="exampleInputNoHP">Tentang Saya</label>
        <textarea class="form-control" id="tentangsaya" aria-describedby="nohpHelp" name="edit_tentang_saya" placeholder="No HP"><?=$tentang_saya?></textarea>
      </div>
      <button class="btn btn-primary btn-block" type="submit" value ="simpan_tentang_saya" name="submit">Simpan</button>

    </form>
    <div class="text-center">
    </div>
  </div>
</div>
</div>
<!-- end Modal Daftar -->   

</div>
<!-- start Modal Edit Profil -->
<div class="modal fade" id="edit_pengalaman" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header" >
      Edit Pengalaman
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post">
      <div class="form-group">

        <label for="exampleInputNISN">Pengalaman</label>
        <input class="form-control" id="exampleInputNISN" name="pengalaman" type="text" aria-describedby="nisnHelp" placeholder="Pekerjaan"> 
      </div>

      <div class="form-group">
        <label for="exampleInputName">Instansi</label>
        <input class="form-control" id="exampleInputName" name="instansi"  type="text" aria-describedby="nameHelp" placeholder="Nama Perusahaan">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Mulai masuk</label>
        <input class="form-control" id="exampleInputEmail1" type="date" name="mulai_masuk" aria-describedby="emailHelp" placeholder="https://www.linkedin.com/in/inibunga-263526103/">
      </div>
      <div class="form-group">

        <label for="exampleInputPassword1">Sampai </label>
        <label class="form-control radio-inline"><input type="radio" id="sampai_sekarang_radio" name="sampai" value="sekarang">Sekarang</label>
        <input class="form-control" id="sampai_sekarang" type="date" name="sampai">

        <input type="button" id="anOtherButton" value="sampai sekarang"  />
      </div>
      <div class="form-group">
        <label for="exampleConfirmPassword">Keterangan Pengalaman</label>
        <textarea class="form-control" id="pengalaman" aria-describedby="nohpHelp" name="keterangan_pengalaman"></textarea>
      </div>
    </div> 
    <button class="btn btn-primary btn-block" type="submit" value ="simpan_pengalaman" name="submit">Tambah</button>
  </form>
  <div class="text-center">
  </div>
</div>
</div>
</div>
<!-- end Modal Daftar -->  
<!-- start Modal Edit Profil -->
<div class="modal fade" id="penghargaan" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header" >
      Penghargaan yang pernah diraih
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post">
      <div class="form-group">

        <label for="exampleInputNISN">Nama Penghargaan</label>
        <input class="form-control" id="exampleInputNISN" name="penghargaan" type="text" aria-describedby="nisnHelp" placeholder="Menang pada kompetisi"> 
      </div>

      <div class="form-group">
        <label for="exampleInputName">Juara</label>
        <input class="form-control" id="exampleInputName" name="juara"  type="number" aria-describedby="nameHelp" placeholder="Juara">
      </div>
    </div> 
    <button class="btn btn-primary btn-block" type="submit" value ="simpan_penghargaan" name="submit">Tambah</button>
  </form>
  <div class="text-center">
  </div>
</div>
</div>
</div>
<!-- end Modal Daftar -->   
<!-- start Modal Edit Profil -->
<div class="modal fade" id="tertarik" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header" >
      Cerita anda tentang passion
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post">
      <div class="form-group">
        <label for="exampleConfirmPassword">Keterangan Ketertarikan</label>
        <textarea class="form-control" id="interest" aria-describedby="nohpHelp" name="interest"><?=$interest_value?></textarea>
      </div>
    </div> 
    <button class="btn btn-primary btn-block" type="submit" value ="simpan_tertarik" name="submit">Simpan</button>
  </form>
  <div class="text-center">
  </div>
</div>
</div>
</div>
<!-- end Modal Daftar -->  
<!-- start Modal Edit Profil -->
<div class="modal fade" id="pendidikan" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header" >
      Pendidikan
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post">
      <div class="form-group">

        <label for="exampleInputNISN">Sekolah/Perguruan Tinggi/Lembaga Pendidikan</label>
        <input class="form-control" id="exampleInputNISN" name="sekolah" type="text" aria-describedby="nisnHelp" placeholder="Nama Sekolah"> 
      </div>

      <div class="form-group">
        <label for="exampleInputName">Jurusan/Program Studi</label>
        <input class="form-control" id="exampleInputName" name="jurusan"  type="text" aria-describedby="nameHelp" placeholder="Jurusan">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tahun Lulus</label>
        <input class="form-control" name="lulus" type="month" id="datepicker_lulus" /></p>
      </div>
    </div> 
    <button class="btn btn-primary btn-block" type="submit" value ="simpan_pendidikan" name="submit">Tambah</button>
  </form>
  <div class="text-center">
  </div>
</div>
</div>
</div>
<!-- end Modal Daftar -->  

<!-- start Modal Edit Profil -->
<div class="modal fade" id="edit_sosmed" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header" >
      Edit Social Media
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post">
      <div class="form-group">

        <label for="exampleInputNISN">Facebook</label>
        <input class="form-control" id="exampleInputNISN" name="edit_facebook" type="text" aria-describedby="nisnHelp" placeholder="https://www.facebook.com/nama_aku_bunga" value="<?=$link_fb?>"> 
      </div>

      <div class="form-group">
        <label for="exampleInputName">Twitter</label>
        <input class="form-control" id="exampleInputName" name="edit_twitter" value="<?=$link_tw?>" type="text" aria-describedby="nameHelp" placeholder="https://twitter.com/namaaku">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Linked In</label>
        <input class="form-control" id="exampleInputEmail1" type="text" name="edit_in" value="<?=$link_in?>" aria-describedby="emailHelp" placeholder="https://www.linkedin.com/in/inibunga-263526103/">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Github</label>
        <input class="form-control" type="text" name="edit_git" value="<?=$link_git?>" placeholder="https://github.com/namaaku" >
      </div>
      <div class="form-group">
        <label for="exampleConfirmPassword">Instagram</label>
        <input class="form-control" id="exampleConfirmPassword" name="edit_ig" type="text" value="<?=$link_ig?>" placeholder="ini_akun_gw ">
      </div>

      <div class="form-group">
        <label for="exampleInputNoHP">Whatsapp</label>
        <input class="form-control" id="exampleConfirm" type="text" name="edit_wa" value="<?=$link_wa?>" placeholder="6281321321">
      </div>
    </div> 
    <button class="btn btn-primary btn-block" type="submit" value ="simpan_sosmed" name="submit">Simpan</button>
  </form>
  <div class="text-center">
  </div>
</div>
</div>
</div>
<!-- end Modal Daftar -->   
<!-- start Modal Edit Profil -->
<div class="modal fade" id="keahlian" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header" >
      Tambah Keahlian
      <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post">
      <div class="form-group">

        <label for="exampleInputNISN">Keahlian</label>
        <input class="form-control" id="exampleInputNISN" name="keahlian" type="text" aria-describedby="nisnHelp" placeholder="isi di sini" > 
      </div>


    </div> 
    <button class="btn btn-primary btn-block" type="submit" value ="simpan_keahlian" name="submit">Simpan</button>
  </form>
  <div class="text-center">
  </div>
</div>
</div>
</div>
<!-- end Modal Daftar -->  

</div>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url()?>assets/profil/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



<script src="<?= base_url()?>assets/profil/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url()?>assets/profil/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url()?>assets/profil/js/resume.min.js"></script>
<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#tentangsaya',
    height: 300,
    theme: 'modern',
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    automatic_uploads: true,
    image_advtab: true,
    images_upload_url: "<?php echo base_url('adm/upload_tinymce')?>",
    file_picker_types: 'image', 
    paste_data_images:true,
    relative_urls: false,
    remove_script_host: false,
    file_picker_callback: function(cb, value, meta) {
     var input = document.createElement('input');
     input.setAttribute('type', 'file');
     input.setAttribute('accept', 'image/*');
     input.onchange = function() {
      var file = this.files[0];
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
       var id = 'post-image-' + (new Date()).getTime();
       var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
       var blobInfo = blobCache.create(id, file, reader.result);
       blobCache.add(blobInfo);
       cb(blobInfo.blobUri(), { title: file.name });
     };
   };
   input.click();
 }
});
</script>
<script type="text/javascript">
  $("#anOtherButton").click(function() {
    $("#sampai_sekarang").attr('disabled', !$("#sampai_sekarang").attr('disabled'));
    $("#sampai_sekarang_radio").attr('checked', !$("#sampai_sekarang_radio").attr('checked'));
  });  
</script>
<script type="text/javascript">
  $(function() {
    $('#datepicker_lulus').datepicker({
      changeYear: true,
      showButtonPanel: true,
      dateFormat: 'yy',
      onClose: function(dateText, inst) { 
        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
        $(this).datepicker('setDate', new Date(year, 1));
      }
    });
    $(".date-picker-year").focus(function () {
      $(".ui-datepicker-month").hide();
    });
  });
</script>
<script type="text/javascript">
  tinymce.init({
    selector: '#pengalaman',
    height: 300,
    theme: 'modern',
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    automatic_uploads: true,
    image_advtab: true,
    images_upload_url: "<?php echo base_url('adm/upload_tinymce')?>",
    file_picker_types: 'image', 
    paste_data_images:true,
    relative_urls: false,
    remove_script_host: false,
    file_picker_callback: function(cb, value, meta) {
     var input = document.createElement('input');
     input.setAttribute('type', 'file');
     input.setAttribute('accept', 'image/*');
     input.onchange = function() {
      var file = this.files[0];
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
       var id = 'post-image-' + (new Date()).getTime();
       var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
       var blobInfo = blobCache.create(id, file, reader.result);
       blobCache.add(blobInfo);
       cb(blobInfo.blobUri(), { title: file.name });
     };
   };
   input.click();
 }
});
</script>
<script type="text/javascript">
  tinymce.init({
    selector: '#interest',
    height: 300,
    theme: 'modern',
    plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    automatic_uploads: true,
    image_advtab: true,
    images_upload_url: "<?php echo base_url('adm/upload_tinymce')?>",
    file_picker_types: 'image', 
    paste_data_images:true,
    relative_urls: false,
    remove_script_host: false,
    file_picker_callback: function(cb, value, meta) {
     var input = document.createElement('input');
     input.setAttribute('type', 'file');
     input.setAttribute('accept', 'image/*');
     input.onchange = function() {
      var file = this.files[0];
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
       var id = 'post-image-' + (new Date()).getTime();
       var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
       var blobInfo = blobCache.create(id, file, reader.result);
       blobCache.add(blobInfo);
       cb(blobInfo.blobUri(), { title: file.name });
     };
   };
   input.click();
 }
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpengalaman').DataTable();
  } );
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelpendidikan').DataTable();
  } );
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabelkeahlian').DataTable();
  } );
</script>
<script type="text/javascript">
  function myFunction() {
    confirm("Hapus data ini?");
  }
</script>

</body>

</html>
