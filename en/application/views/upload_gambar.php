<?php $base_url_id = $this->config->item('base_url_id');?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload Bukti Transfer</title>

  <link href="<?php echo $base_url_id?>assets/template_web/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $base_url_id?>assets/template_web/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo $base_url_id?>assets/template_web/css/style.css" rel="stylesheet">
  <link href="<?php echo $base_url_id?>assets/admin/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  <script src="<?php echo $base_url_id?>assets/template_web/js/ie-emulation-modes-warning.js"></script>
</head>
<body style="background-color: #eee;">

  <section>
    <div class="container thumbnail" style="margin-top: 50px;">
      <div class="col-lg-12" style="color: #455A64; margin-top: 20px; margin-bottom: 20px;">
       <h2 align="center">UPLOAD GAMBAR BUKTI TRANSFER</h2>
      </div>
      <hr style="border-color: #455A64; border-width: 3px;" width="100%">
      <div align="center" class="col-lg-12" style="color: #455A64; margin-top: 20px; margin-bottom: 20px;">
        <div class="col-lg-4"></div>
        <?php 
          if (isset($error)) {
          foreach ($error as $value) {
            echo $value;
            }
          }
        ?>
        <div class="x_content col-lg-4">
          <?=$headline ?>
          <?php
            $attributes = array('class' => 'form-horizontal' , );
            echo form_open_multipart('home/do_upload/'.$update_id,$attributes);?>
          <input type="file" class="dropzone"  name="userfile" placeholder ="drag di sini">
        </div>
        <div class="col-lg-4"></div>
        <div align="center" class="col-lg-12" style="color: #455A64; margin-top: 20px; margin-bottom: 20px;">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <button type="submit" value="upload" class="btn btn-success">Upload</button>
            <button type="submit" name="submit" value="Cancel" class="btn btn-warning">Kembali</button>
          </div>
          <div class="col-lg-4"></div>
        </div>
        </form>
      </div> 
    </div>
  </section>

  <script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $base_url_id?>assets/template_web/js/jquery.min.js"><\/script>')</script>
  <script src="<?php echo $base_url_id?>assets/template_web/js/bootstrap.min.js"></script>
  <script src="<?php echo $base_url_id?>assets/admin/vendors/dropzone/dist/min/dropzone.min.js"></script>
  <script>
// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById('myImg');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//     modal.style.display = "block";
//     modalImg.src = this.src;
//     captionText.innerHTML = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//     modal.style.display = "none";
// }
</script>
</body>
</html>