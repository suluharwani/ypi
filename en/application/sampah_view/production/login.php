<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url()?>assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
                          <h1>Login admin</h1>
              <?php
              if (isset($salah)) {?>
                <p><?=$salah?></p>
              <?php
            }
              ?>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>

                <button  class="btn btn-default" name="submit" value="submit">Login</button>

                
                <a class="reset_pass" onclick="lupa()" href="#">Lupa Password?</a>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
             

                <div class="clearfix"></div>
                <br />

                <div>
                
                </div>
              </div>
            </form>
               <p style="margin-left: 14px;">
                &copy; 2018 Central Celebes Marathon | Powered by <a href="http://weer-indonesia.com/" class="select2" target="_blank">WeeR INDONESIA</a> &middot; 
                <a href="#" class="select2">Privacy</a> &middot; 
                <a href="#" class="select2">Terms</a>
              </p>
          </section>
        </div>
      </div>
    </div>
  </body>
  <script>function lupa() {
    alert('Silakan hubungi pengembang web di weer-indonesia.com ');
}</script>
</html>
