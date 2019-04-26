<?php $base_url_id = $this->config->item('base_url_id');?>
  <script src="<?php echo base_url()?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
        <!-- page content --> 
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Kuota <small>Harap mengubah hanya pada saat memulai event baru atau jika ada penambahan kuota</small> </h3>
              </div>

            </div>
<!-- 5k -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kategori 5 K</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="POST">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="jersey5ks"  value="<?=$jersey5k_s?>">
                         <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_5k_s?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> S</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey5km" value="<?=$jersey5k_m?>" >
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_5k_m?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"> M</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess4" name="jersey5kl" value="<?=$jersey5k_l?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_5k_l?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> L</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey5kxl" value="<?=$jersey5k_xl?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_5k_xl?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true">XL</span>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Lomba</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Marathon 5K" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kuota Awal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="kuota5k" class="form-control" value="<?=$kuota5k?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendaftar</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input" value="<?=$total5k?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sisa Kuota <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" value="<?=$sisa5k?>" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" name="submit" value="submit5k" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
<!-- 10 k -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kategori 10 K</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="POST">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="jersey10ks"  value="<?=$jersey10k_s?>">
                         <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_10k_s?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> S</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey10km" value="<?=$jersey10k_m?>" >
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_10k_m?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"> M</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess4" name="jersey10kl" value="<?=$jersey10k_l?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_10k_l?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> L</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey10kxl" value="<?=$jersey10k_xl?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_10k_xl?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true">XL</span>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Lomba</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Marathon 10K" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kuota Awal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="kuota10k" class="form-control" value="<?=$kuota10k?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendaftar</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input" value="<?=$total10k?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sisa Kuota <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" value="<?=$sisa10k?>" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" name="submit" value="submit10k" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
      <!-- 21k -->
                      <div class="x_panel">
                  <div class="x_title">
                    <h2>Kategori 21 K</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="POST">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="jersey21ks"  value="<?=$jersey21k_s?>">
                         <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_21k_s?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> S</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey21km" value="<?=$jersey21k_m?>" >
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_21k_m?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"> M</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess4" name="jersey21kl" value="<?=$jersey21k_l?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_21k_l?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> L</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey21kxl" value="<?=$jersey21k_xl?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_21k_xl?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true">XL</span>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Lomba</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Marathon 21K" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kuota Awal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="kuota21k" class="form-control" value="<?=$kuota21k?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendaftar</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input" value="<?=$total21k?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sisa Kuota <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" value="<?=$sisa21k?>" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit"  name="submit" value="submit21k" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
<!-- 42k -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kategori 42 K</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="POST">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="jersey42ks"  value="<?=$jersey42k_s?>">
                         <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_42k_s?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> S</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey42km" value="<?=$jersey42k_m?>" >
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_42k_m?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"> M</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess4" name="jersey42kl" value="<?=$jersey42k_l?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_42k_l?>" disabled>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"> L</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="inputSuccess3" name="jersey42kxl" value="<?=$jersey42k_xl?>">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="Sisa: <?=$sisa_jersey_42k_xl?>" disabled>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true">XL</span>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Lomba</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Marathon 42K" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kuota Awal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" name="kuota42k" class="form-control" value="<?=$kuota42k?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendaftar</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input" value="<?=$total42k?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sisa Kuota <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" value="<?=$sisa42k?>" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" name="submit" value="submit42k" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>




          </div>
        </div>
        <!-- /page content -->
