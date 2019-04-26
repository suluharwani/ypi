 <!-- ***** Breadcrumb Area Start ***** -->
 <div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Pendaftaran</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-pencil"></i> Pendaftaran</a></li>
                            <!-- <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="./img/core-img/curve-5.png" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<section class="uza-contact-area section-padding-80">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Contact Form -->

            <div class="col-12 col-lg-8">
                <div class="container" id=myGroup>
                    <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapsemts" role="button" aria-expanded="false" aria-controls="collapsemts">
                            Pendaftaran MTS
                        </a>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsema" aria-expanded="false" aria-controls="collapsema">
                           Pendaftaran MA
                       </button>
                   </p>

                   <div class="collapse" id="collapsemts" data-parent="#myGroup">
                    <div class="card card-body">
                       <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Data pendaftar MTS</h4>
                        </div>
                        <!-- accordion -->
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    DATA SISWA #1
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <!-- form -->
                            <form method="post" enctype="multipart/form-data"   >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="nisn_mts" title="NISN" placeholder="NISN">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="nomor_kk_mts" title="No Kartu Keluarga" placeholder="No Kartu Keluarga">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="nik_mts" title="NIK SISWA" placeholder="NIK SISWA">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="nama_mts" title="Nama Lengkap" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                     <select class="form-control mb-30" name="jenis_kelamin_mts" title="tanggal lahir">
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control mb-30" name="tanggal_lahir_mts" title="Tanggal Lahir" placeholder="tanggal lahir">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control mb-30" name="provinsi" title="provinsi" id="provinsi_mts" required>
                                            <option selected disabled>-- Pilih Provinsi --</option>
                                            <?php
                                            foreach ($provinsi->result() as $prov) {?>
                                              <option  value="<?=$prov->id?>"><?=$prov->name?></option>
                                          <?php }
                                          ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                   <select name="kabupaten" id="kabupaten_mts" title="kabupaten" class="form-control"  required="true" >
                                    <option selected disabled>Pilih Kota/Kabupaten</option>}
                                    option
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                               <select name="kecamatan" id="kecamatan_mts" title="kecamatan" class="form-control"  required="true" >
                                  <option selected disabled>Pilih District/Kecamatan</option>}
                                  option
                              </select>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                           <select name="desa" id="desa_mts" title="desa" class="form-control"  required="true" >
                              <option selected disabled>Pilih Desa</option>}
                              option
                          </select>
                      </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control mb-30" name="alamat_mts" rows="8" cols="80" title="alamat" placeholder="RT, RW, Jalan"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control mb-30" name="anak_ke_mts" title="Anak ke" placeholder="Anak ke">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control mb-30" name="jumlah_saudara_mts" title="Jumlah saudara" placeholder="Jumlah saudara">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control mb-30" name="hobi_mts" rows="8" cols="80" title="hobi" placeholder="hobi 1, hobi 2, hobi 3"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control mb-30" name="cita_cita_mts" title="cita-cita" placeholder="cita-cita">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="file" class="form-control mb-30" name="foto_mts" title="foto calon siswa" placeholder="foto calon siswa">
                    </div>
                </div>

            </div>
        </form>
        <!-- form -->
    </div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          DATA ORANG TUA #2
      </button>
  </h5>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
  <div class="card-body">
      <!-- form -->
      <form method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control mb-30" name="nik_ayah_mts" title="nik ayah" placeholder="nik ayah">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="nama_ayah_mts" placeholder="Nama Ayah">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                   <select name="pendidikan_ayah_mts" id="pendidikan_ayah_mts" title="Pendidikan Ayah" class="form-control"  required="true" >
                      <option selected disabled>Pendidikan Ayah</option>}
                      option
                  </select>
              </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
               <select name="pekerjaan_ayah_mts" id="pekerjaan_ayah_mts" title="Pekerjaan Ayah" class="form-control"  required="true" >
                  <option selected disabled>Pekerjaan Ayah</option>}
                  option
              </select>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
           <select name="penghasilan_ayah_mts" id="penghasilan_ayah_mts" title="Penghasilan Ayah" class="form-control"  required="true" >
              <option selected disabled>Penghasilan Ayah</option>}
              option
          </select>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="no_telepon_ayah_mts"id="no_telepon_ayah_mts" placeholder="Nomor Telepon/HP">
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="nik_ibu_mts"id="nik_ibu_mts" placeholder="NIK Ibu">
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="nama_ibu_mts"id="nama_ibu_mts" placeholder="Nama Ibu">
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
       <select name="pendidikan_ibu_mts" id="pendidikan_ibu_mts" title="Pendidikan Ibu" class="form-control"  required="true" >
          <option selected disabled>Pendidikan Ibu</option>}
          option
      </select>
  </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
       <select name="pekerjaan_ibu_mts" id="pekerjaan_ibu_mts" title="Pekerjaan Ibu" class="form-control"  required="true" >
          <option selected disabled>Pekerjaan Ibu</option>}
          option
      </select>
  </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
       <select name="penghasilan_ibu_mts" id="penghasilan_ibu_mts" title="Penghasilan Ibu" class="form-control"  required="true" >
          <option selected disabled>Penghasilan Ibu</option>}
          option
      </select>
  </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="no_telepon_ibu_mts"id="no_telepon_ibu_mts" placeholder="Nomor Telepon Ibu">
    </div>
</div>
</div>
</form>
<!-- form -->
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsewali" aria-expanded="false" aria-controls="collapsewali">
          DATA WALI #3
      </button>
  </h5>
</div>
<div id="collapsewali" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
  <div class="card-body">
      <!-- form -->
      <form method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control mb-30" name="nik_wali_mts" title="nik wali" placeholder="NIK Wali">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="nama_wali_mts" placeholder="Nama Wali">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                   <select name="pendidikan_wali_mts" id="pendidikan_wali_mts" title="Pendidikan Wali" class="form-control"  required="true" >
                      <option selected disabled>Pendidikan Wali</option>}
                      option
                  </select>
              </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
               <select name="pekerjaan_wali_mts" id="pekerjaan_wali_mts" title="Pekerjaan Wali" class="form-control"  required="true" >
                  <option selected disabled>Pekerjaan Wali</option>}
                  option
              </select>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
           <select name="penghasilan_wali_mts" id="penghasilan_wali_mts" title="Penghasilan Wali" class="form-control"  required="true" >
              <option selected disabled>Penghasilan Wali</option>}
              option
          </select>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="no_telepon_wali_mts"id="no_telepon_wali_mts" placeholder="Nomor Telepon/HP">
    </div>
</div>
</div>
</form>
<!-- form -->
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsedataasalsekolah" aria-expanded="false" aria-controls="collapsedataasalsekolah">
          DATA ASAL SEKOLAH #4
      </button>
  </h5>
</div>
<div id="collapsedataasalsekolah" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
  <div class="card-body">
    <!-- form -->
    <form method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="npsn_sekolah_asal_mts" placeholder="Nomor NPSN Sekolah atau NSM Madrasah">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="asal_sekolah_mts" placeholder="Masukkan Nama Sekolah">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control mb-30" name="alamat_sekolah_asal_mts" rows="8" cols="80" placeholder="Masukkan alamat lengkap asal sekolah"></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="no_seri_skhun_mts" placeholder="Nomor seri SKHUAMBN/SKHUN">
                </div>
            </div>
        </div>
    </form>
    <!-- form -->
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseketerangandomisili" aria-expanded="false" aria-controls="collapseketerangandomisili">
          KETERANGAN DOMISILI #5
      </button>
  </h5>
</div>
<div id="collapseketerangandomisili" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
  <div class="card-body">
    <!-- form -->
    <form method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                   <select name="rencana_domisili_mts" id="rencana_domisili_mts" title="Rencana Tempat Tinggal" class="form-control"  required="true" >
                      <option selected disabled>Rencana Tempat Tinggal</option>}
                      option
                  </select>
              </div>
          </div>


          <div class="col-12">
            <button type="button" class="btn uza-btn btn-3 mt-15" id="simpan_mts">Simpan</button>
        </div>
    </div>
</form>
<!-- form -->
</div>
</div>
</div>
</div>
<!-- accordion -->

</div>
</div>
</div>
<div class="collapse" id="collapsema" data-parent="#myGroup">
    <div class="card card-body">
       <div class="uza-contact-form mb-80">
        <div class="contact-heading mb-50">
            <h4>Data pendaftar MA</h4>
        </div>
        <!-- accordion -->
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    DATA SISWA #1
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <!-- form -->
            <form method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control mb-30" name="nisn_ma" title="NISN" placeholder="NISN">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control mb-30" name="nomor_kk_ma" title="No Kartu Keluarga" placeholder="No Kartu Keluarga">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control mb-30" name="nik_ma" title="NIK SISWA" placeholder="NIK SISWA">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control mb-30" name="nama_ma" title="Nama Lengkap" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <select class="form-control mb-30" name="jenis_kelamin_ma" title="tanggal lahir">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="date" class="form-control mb-30" name="tanggal_lahir_ma" title="Tanggal Lahir" placeholder="tanggal lahir">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select class="form-control mb-30" name="provinsi" title="provinsi" id="provinsi_ma" required>
                                <option selected disabled>-- Pilih Provinsi --</option>
                                <?php
                                foreach ($provinsi->result() as $prov) {?>
                                  <option  value="<?=$prov->id?>"><?=$prov->name?></option>
                              <?php }
                              ?>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                       <select name="kabupaten" id="kabupaten_ma" title="kabupaten_ma" class="form-control"  required="true" >
                        <option selected disabled>Pilih Kota/Kabupaten</option>}
                        option
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                   <select name="kecamatan" id="kecamatan_ma" title="kecamatan_ma" class="form-control"  required="true" >
                      <option selected disabled>Pilih District/Kecamatan</option>}
                      option
                  </select>
              </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
               <select name="desa" id="desa_ma" title="desa" class="form-control"  required="true" >
                  <option selected disabled>Pilih Desa</option>}
                  option
              </select>
          </div>
      </div>
      <div class="col-12">
        <div class="form-group">
            <textarea class="form-control mb-30" name="alamat_ma" rows="8" cols="80" title="alamat" placeholder="RT, RW, Jalan"></textarea>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <input type="number" class="form-control mb-30" name="anak_ke_ma" title="Anak ke" placeholder="Anak ke">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <input type="number" class="form-control mb-30" name="jumlah_saudara_ma" title="Jumlah saudara" placeholder="Jumlah saudara">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <textarea class="form-control mb-30" name="hobi_ma" rows="8" cols="80" title="hobi" placeholder="hobi 1, hobi 2, hobi 3"></textarea>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <input type="text" class="form-control mb-30" name="cita_cita_ma" title="cita-cita" placeholder="cita-cita">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <input type="file" class="form-control mb-30" name="foto_ma" title="foto calon siswa" placeholder="foto calon siswa">
        </div>
    </div>
</div>
</form>
<!-- form -->
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          DATA ORANG TUA #2
      </button>
  </h5>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
  <div class="card-body">
      <!-- form -->
      <form method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control mb-30" name="nik_ayah_ma" title="nik ayah" placeholder="nik ayah">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="nama_ayah_ma" placeholder="Nama Ayah">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                   <select name="pendidikan_ayah_ma" id="pendidikan_ayah_ma" title="Pendidikan Ayah" class="form-control"  required="true" >
                      <option selected disabled>Pendidikan Ayah</option>}
                      option
                  </select>
              </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
               <select name="pekerjaan_ayah_ma" id="pekerjaan_ayah_ma" title="Pekerjaan Ayah" class="form-control"  required="true" >
                  <option selected disabled>Pekerjaan Ayah</option>}
                  option
              </select>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
           <select name="penghasilan_ayah_ma" id="penghasilan_ayah_ma" title="Penghasilan Ayah" class="form-control"  required="true" >
              <option selected disabled>Penghasilan Ayah</option>}
              option
          </select>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="no_telepon_ayah_ma"id="no_telepon_ayah_ma" placeholder="Nomor Telepon/HP">
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="nik_ibu_ma"id="nik_ibu_ma" placeholder="NIK Ibu">
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="nama_ibu_ma"id="nama_ibu_ma" placeholder="Nama Ibu">
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
       <select name="pendidikan_ibu_mts" id="pendidikan_ibu_ma" title="Pendidikan Ibu" class="form-control"  required="true" >
          <option selected disabled>Pendidikan Ibu</option>}
          option
      </select>
  </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
       <select name="pekerjaan_ibu_ma" id="pekerjaan_ibu_ma" title="Pekerjaan Ibu" class="form-control"  required="true" >
          <option selected disabled>Pekerjaan Ibu</option>}
          option
      </select>
  </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
       <select name="penghasilan_ibu_ma" id="penghasilan_ibu_ma" title="Penghasilan Ibu" class="form-control"  required="true" >
          <option selected disabled>Penghasilan Ibu</option>}
          option
      </select>
  </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="no_telepon_ibu_ma"id="no_telepon_ibu_ma" placeholder="Nomor Telepon Ibu">
    </div>
</div>
</div>
</form>
<!-- form -->
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsewali" aria-expanded="false" aria-controls="collapsewali">
          DATA WALI #3
      </button>
  </h5>
</div>
<div id="collapsewali" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
  <div class="card-body">
      <!-- form -->
      <form  method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control mb-30" name="nik_wali_ma" title="nik wali" placeholder="NIK Wali">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="nama_wali_ma" placeholder="Nama Wali">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                   <select name="pendidikan_ayah_ma" id="pendidikan_wali_ma" title="Pendidikan Wali" class="form-control"  required="true" >
                      <option selected disabled>Pendidikan Wali</option>}
                      option
                  </select>
              </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
               <select name="pekerjaan_wali_ma" id="pekerjaan_wali_ma" title="Pekerjaan Wali" class="form-control"  required="true" >
                  <option selected disabled>Pekerjaan Wali</option>}
                  option
              </select>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
           <select name="penghasilan_wali_ma" id="penghasilan_wali_ma" title="Penghasilan Wali" class="form-control"  required="true" >
              <option selected disabled>Penghasilan Wali</option>}
              option
          </select>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
        <input type="phone" class="form-control mb-30" name="no_telepon_wali_ma"id="no_telepon_wali_ma" placeholder="Nomor Telepon/HP">
    </div>
</div>

<div class="col-12">
    <button class="btn uza-btn btn-3 mt-15">Simpan</button>
</div>
</div>
</form>
<!-- form -->
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsedataasalsekolah" aria-expanded="false" aria-controls="collapsedataasalsekolah">
          DATA ASAL SEKOLAH #4
      </button>
  </h5>
</div>
<div id="collapsedataasalsekolah" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
  <div class="card-body">
    <!-- form -->
    <form method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="npsn_sekolah_asal_ma" placeholder="Nomor NPSN Sekolah atau NSM Madrasah">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="asal_sekolah_ma" placeholder="Masukkan Nama Sekolah">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control mb-30" name="alamat_sekolah_asal_ma" rows="8" cols="80" placeholder="Masukkan alamat lengkap asal sekolah"></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control mb-30" name="no_seri_skhun_ma" placeholder="Nomor seri SKHUAMBN/SKHUN">
                </div>
            </div>
        </div>
    </form>
    <!-- form -->
</div>
</div>
</div>
<div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseketerangandomisili" aria-expanded="false" aria-controls="collapseketerangandomisili">
          KETERANGAN DOMISILI #5
      </button>
  </h5>
</div>
<div id="collapseketerangandomisili" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
  <div class="card-body">
    <!-- form -->
    <form method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                   <select name="rencana_domisili_ma" id="rencana_domisili_ma" title="Rencana Tempat Tinggal" class="form-control"  required="true" >
                      <option selected disabled>Rencana Tempat Tinggal</option>}
                      option
                  </select>
              </div>
          </div>


          <div class="col-12">
            <button class="btn uza-btn btn-3 mt-15" id="simpan_ma">Simpan</button>
        </div>
    </div>
</form>
<!-- form -->
</div>
</div>
</div>
</div>
<!-- accordion -->

</div>
</div>
</div>
</div>

</div>

<!-- Single Contact Card -->
<div class="col-12 col-lg-3">
    <div class="contact-sidebar-area mb-80">
        <!-- Single Sidebar Area -->
        <div class="single-contact-card mb-50">
            <h4>Contact Us</h4>
            <h3>(+65) 1234 5678</h3>
            <h6>hello.colorlib@gmail.com</h6>
            <h6>Mon - Fri: 9:00 - 19:00 <br>Closed on Weekends</h6>
        </div>

        <!-- Single Sidebar Area -->
        <div class="single-contact-card mb-50">
            <h4>London</h4>
            <h3>(+65) 2222 5678</h3>
            <h6>49 Charing Cross Rd, London, UK <br>hello.colorlib@gmail.com</h6>
        </div>

        <!-- Single Sidebar Area -->
        <div class="single-contact-card mb-50">
            <h4>New York</h4>
            <h3>(+65) 6666 5678</h3>
            <h6>40 Baria Sreet 13/2 NY City, US <br>hello.colorlib@gmail.com</h6>
        </div>
    </div>
</div>
</div>

<div class="row">
    <!-- Google Maps -->
    <div class="col-12">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11956.9355465873!2d24.0768412544878!3d56.9550599906977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z4Kaw4Ka_4KaX4Ka-LCDgprLgp43gpq_gpr7gpp_gp43gpq3gpr_gpoY!5e0!3m2!1sbn!2sbd!4v1543911160102" allowfullscreen></iframe>
        </div>
    </div>
</div>
</div>
</section>
<!-- ***** Contact Area End ***** -->

<!-- ***** Newsletter Area Start ***** -->
<section class="uza-newsletter-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Newsletter Content -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="nl-content mb-80">
                    <h2>Subscribe to our Newsletter</h2>
                    <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nl-form mb-80">
                    <form  method="post">
                        <input type="email" name="nl-email" value="" placeholder="Your Email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Border Bottom -->
        <div class="border-line"></div>
    </div>
</section>
<!-- ***** Newsletter Area End ***** -->

<!-- js -->
<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/sweetalert.js')?>"></script>
<script type="text/javascript">

 $('select[name="provinsi"]').on('change keyup blur focus', function() {
  var prov_id = $(this).val();
  if(prov_id) {
    $.ajax({
      url: "<?php echo site_url('pendaftaran/pilih_kota/')?>"+prov_id,
      type: "GET",
      dataType: "json",
      success:function(data) {
        $('select[name="kecamatan"]').empty();
        $('select[name="kabupaten"]').empty();
        $('select[name="desa"]').empty();
        $.each(data, function(key, value) {
          $('select[name="kabupaten"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
      });

    }
});

}else{
   $('select[name="kabupaten"]').empty();
   $('select[name="kecamatan"]').empty();
   $('select[name="desa"]').empty();
}


});
 $('select[name="kabupaten"]').on('change keyup blur focus', function() {
  var kab_id = $(this).val();
  if(kab_id) {
    $.ajax({
      url: "<?php echo site_url('pendaftaran/pilih_kecamatan/')?>"+kab_id,
      type: "GET",
      dataType: "json",
      success:function(data) {
       $('select[name="kecamatan"]').empty();
       $('select[name="desa"]').empty();
       $.each(data, function(key, kecamatan) {
          $('select[name="kecamatan"]').append('<option value="'+ kecamatan.id +'">'+ kecamatan.name +'</option>');
      });
   }
});
    return 0;

}else{
    $('select[name="desa"]').empty();
}

});
 $('select[name="kecamatan"]').on('change keyup blur focus', function() {
  var kec_id = $(this).val();
  if(kec_id) {
    $.ajax({
      url: "<?php echo site_url('pendaftaran/pilih_desa/')?>"+kec_id,
      type: "GET",
      dataType: "json",
      success:function(data) {
        $('select[name="desa"]').empty();
        $.each(data, function(key, desa) {
          $('select[name="desa"]').append('<option value="'+ desa.id +'">'+ desa.name +'</option>');
      });
    }
});
    return 0;

}else{
    $('select[name="desa"]').empty();
}

});

 $('#simpan_mts').on('click',function(){
  var nisn_mts = $('[name="nisn_mts"]').val();
  var nomor_kk_mts = $('[name="nomor_kk_mts"]').val();
  var nik_mts = $('[name="nik_mts"]').val();
  var nama_mts = $('[name="nama_mts"]').val();
  var jenis_kelamin_mts = $('[name="jenis_kelamin_mts"]').val();
  var tanggal_lahir_mts = $('[name="tanggal_lahir_mts"]').val();
  var provinsi = $("#provinsi_mts").val();
  var kabupaten = $('#kabupaten_mts').val();
  var kecamatan = $('#kecamatan_mts').val();
  var desa = $('#desa_mts').val();
  var alamat_mts = $('[name="alamat_mts"]').val();
  var anak_ke_mts = $('[name="anak_ke_mts"]').val();
  var jumlah_saudara_mts = $('[name="jumlah_saudara_mts"]').val();
  var hobi_mts = $('[name="hobi_mts"]').val();
  var cita_cita_mts = $('[name="cita_cita_mts"]').val();
  var foto_mts = $('[name="foto_mts"]').val();
  var nik_ayah_mts = $('[name="nik_ayah_mts"]').val();
  var nama_ayah_mts = $('[name="nama_ayah_mts"]').val();
  var pendidikan_ayah_mts = $('[name="pendidikan_ayah_mts"]').val();
  var pekerjaan_ayah_mts = $('[name="pekerjaan_ayah_mts"]').val();
  var penghasilan_ayah_mts = $('[name="penghasilan_ayah_mts"]').val();
  var no_telepon_ayah_mts = $('[name="no_telepon_ayah_mts"]').val();
  var nik_ibu_mts = $('[name="nik_ibu_mts"]').val();
  var nama_ibu_mts = $('[name="nama_ibu_mts"]').val();
  var pendidikan_ibu_mts = $('[name="pendidikan_ibu_mts"]').val();
  var pekerjaan_ibu_mts = $('[name="pekerjaan_ibu_mts"]').val();
  var penghasilan_ibu_mts = $('[name="penghasilan_ibu_mts"]').val();
  var no_telepon_ibu_mts = $('[name="no_telepon_ibu_mts"]').val();
  var nik_wali_mts = $('[name="nik_wali_mts"]').val();
  var nama_wali_mts = $('[name="nama_wali_mts"]').val();
  var pendidikan_wali_mts = $('[name="pendidikan_wali_mts"]').val();
  var pekerjaan_wali_mts = $('[name="pekerjaan_wali_mts"]').val();
  var penghasilan_wali_mts = $('[name="penghasilan_wali_mts"]').val();
  var no_telepon_wali_mts = $('[name="no_telepon_wali_mts"]').val();
  var npsn_sekolah_asal_mts = $('[name="npsn_sekolah_asal_mts"]').val();
  var asal_sekolah_mts = $('[name="asal_sekolah_mts"]').val();
  var alamat_sekolah_asal_mts = $('[name="alamat_sekolah_asal_mts"]').val();
  var no_seri_skhun_mts = $('[name="no_seri_skhun_mts"]').val();
  var rencana_domisili_mts = $('[name="rencana_domisili_mts"]').val();


  $.ajax({
    type : "POST",
    url  : "<?php echo site_url('pendaftaran/input_mts_data')?>",
    dataType : "JSON",
    data : {nisn_mts:nisn_mts,
            nomor_kk_mts:nomor_kk_mts,
            nik_mts:nik_mts,
            nama_mts:nama_mts,
            jenis_kelamin_mts:jenis_kelamin_mts,
            tanggal_lahir_mts:tanggal_lahir_mts,
            provinsi:provinsi,
            kabupaten:kabupaten,
            kecamatan:kecamatan,
            desa:desa,
            alamat_mts:alamat_mts,
            anak_ke_mts:anak_ke_mts,
            jumlah_saudara_mts:jumlah_saudara_mts,
            hobi_mts:hobi_mts,
            cita_cita_mts:cita_cita_mts,
            foto_mts:foto_mts,
            nik_ayah_mts:nik_ayah_mts,
            nama_ayah_mts:nama_ayah_mts,
            pendidikan_ayah_mts:pendidikan_ayah_mts,
            pekerjaan_ayah_mts:pekerjaan_ayah_mts,
            penghasilan_ayah_mts:penghasilan_ayah_mts,
            no_telepon_ayah_mts:no_telepon_ayah_mts,
            nik_ibu_mts:nik_ibu_mts,
            nama_ibu_mts:nama_ibu_mts,
            pendidikan_ibu_mts:pendidikan_ibu_mts,
            pekerjaan_ibu_mts:pekerjaan_ibu_mts,
            penghasilan_ibu_mts:penghasilan_ibu_mts,
            no_telepon_ibu_mts:no_telepon_ibu_mts,
            nik_wali_mts:nik_wali_mts,
            nama_wali_mts:nama_wali_mts,
            pendidikan_wali_mts:pendidikan_wali_mts,
            pekerjaan_wali_mts:pekerjaan_wali_mts,
            penghasilan_wali_mts:penghasilan_wali_mts,
            no_telepon_wali_mts:no_telepon_wali_mts,
            npsn_sekolah_asal_mts:npsn_sekolah_asal_mts,
            asal_sekolah_mts:asal_sekolah_mts,
            alamat_sekolah_asal_mts:alamat_sekolah_asal_mts,
            no_seri_skhun_mts:no_seri_skhun_mts,
            rencana_domisili_mts:rencana_domisili_mts
            },
    success: function(data){
      swal ( "Sukses" ,  "Data pendaftaran berhasil dikirim!" ,  "success", {
          buttons: false,
          timer: 1000,
      } );
  }
});
  return false;
});
</script>
<!-- js -->
