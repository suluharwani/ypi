<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$judul?></title>

    <!-- Bootstrap core CSS -->
    <style type="text/css">
    .pagination li {
      display:inline-block;
      padding:5px;
  }
</style>
<link href="<?=base_url('assets/berita/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<!-- Custom styles for this template -->
<link href="<?=base_url('assets/berita/')?>css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?=base_url()?>">
                        Home
                    </a>
                </li>
                <div id="test-list">
                  <input type="text" class="search" placeholder="Cari Info" />
                  <div class="list">
                    <?php
                    foreach ($informasi->result() as $info) {?>
                        <li> <a href="<?=base_url('home/berita/').$info->url?>" title="<?=$info->judul?>" ><p class="name"><?=word_limiter($info->judul, 5)?></p> </a> </li>
                    <?php }
                    ?>
                </div>
                <b class="pagination"></b>
            </div>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div align="center">
               <h1><?=$judul_berita?></h1>
               <code><?=$penulis?></code>-<small><?=$tanggal_berita?></small>
           </div>
           
           <img src="<?=base_url('assets/gambar/berita/').$gambar?>" class="img-responsive" alt="<?=$judul?>"  width="100%">
           <div class="container-fluid">
           <p><?=$isi?></p>             
           </div>
           <br/>
           <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Lihat berita lain</a>
       </div>
   </div>
   <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="<?=base_url('assets/berita/')?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url('assets/berita/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    var monkeyList = new List('test-list', {
      valueNames: ['name'],
      page: 10,
      pagination: true
  });
</script>

</body>

</html>
