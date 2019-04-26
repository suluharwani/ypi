
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url()?>" class="site_title"><i class="fa fa-user"></i> <span><?=$title;?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              
            </div>
            <div class="profile_info">
              <span>Selamat datang,</span>
              <h2>Admin <?=$title;?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url()?>adm"><i class="fa fa-home"></i> Home </a>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-edit"></i> Forum<span class="label label-success pull-right">Coming Soon</span></a>
                </li>
                <li><a href="<?php echo base_url()?>adm/laporan"><i class="fa fa-list"></i> Laporan </a>
                </li>
                <li><a href="<?php echo base_url()?>adm/berita"><i class="fa fa-list"></i> Berita </a>
                </li>
                <li><a href="<?php echo base_url()?>adm/admin"><i class="fa fa-list"></i> Admin </a>
                </li>
                  <!--  <li><a href="<?php echo base_url()?>adminccm/pariwisata"><i class="fa fa-laptop"></i> Pariwisata </a>
                  </li>
                   <li><a href="<?php echo base_url()?>adminccm/merchant"><i class="fa fa-laptop"></i> Merchant </a>
                  </li>
                  <li><a href="<?php echo base_url()?>adminccm/manage"><i class="fa fa-laptop"></i> Manage Pariwisata</a>
                  </li>
                   <li><a href="<?php echo base_url()?>adminccm/manage2"><i class="fa fa-laptop"></i> Manage Merchant</a>
                   </li> -->
                   <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                 </ul>
               </div>

             </div>
             <!-- /sidebar menu -->

             <!-- /menu footer buttons -->
             <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url()?>adm/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>