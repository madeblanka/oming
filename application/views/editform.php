<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>
        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
          <!-- left column -->
            
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?php echo base_url('admin/simpanupdate')?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" value="<?php echo $siswa->nis ?>" name="nis" id="nis" placeholder="NISN">
                    </div>
                  </div>
                  <input type="hidden" class="form-control" value="<?php echo $siswa->tanggaldaftar ?>" name="tanggaldaftar">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->nama ?>" name="nama" id="nama" placeholder="Nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">UMUR</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="<?php echo $siswa->umur ?>" name="umur" id="umur" placeholder="Umur">
                    </div>
                  </div>
                  <div class="form-group row">
                  <label for="alamat" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="rs-select2 js-select-simple select--no-search">
                                <select name="jeniskelamin">
                                    <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                <?php  if($siswa ->jeniskelamin === 'Pria'){ echo "<option value='Pria' selected>Pria</option>"; }
                                       elseif($siswa ->kabupaten === 'Perempuan'){ echo "<option value='Perempuan'>Perempuan</option>"; }?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                  <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->agama ?>"name="agama" id="agama" placeholder="agama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->tempatlahir ?>" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" value="<?php echo $siswa->tanggallahir ?>"name="tanggallahir" id="tanggallahir" placeholder="tanggallahir">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->alamat ?>" name="alamat" id="alamat" placeholder="Alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->kabupaten ?>" name="kabupaten" id="kabupaten" placeholder="Kabupaten">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Kabupaten</label>
                    <div class="col-sm-10">
                      <div class="rs-select2 js-select-simple select--no-search">
                                <select name="kabupaten">
                                    <option disabled="disabled" selected="selected">Kabupaten</option>
                                <?php  if($siswa ->kabupaten === 'Kabupaten Badung'){ echo "<option value='Kabupaten Badung' selected>Kabupaten Badung</option>"; }
                                       elseif($siswa ->kabupaten === 'Kabupaten Bangli'){ echo "<option value='Kabupaten Bangli'>Kabupaten Bangli</option>"; }
                                       elseif($siswa ->kabupaten === 'Kabupaten Buleleng'){ echo "<option value='Kabupaten Buleleng'>Kabupaten Buleleng</option>"; }
                                       elseif($siswa ->kabupaten === 'Kabupaten Gianyar'){ echo "<option value='Kabupaten Gianyar'>Kabupaten Gianyar</option>"; }
                                       elseif($siswa ->kabupaten === 'Kabupaten Karangasem'){ echo "<option value='Kabupaten Karangasem'>Kabupaten Karangasem</option>"; }
                                       elseif($siswa ->kabupaten === 'Kabupaten Klungkung'){ echo "<option value='Kabupaten Klungkung'>Kabupaten Klungkung</option>"; }
                                       elseif($siswa ->kabupaten === 'Kabupaten Tabanan'){ echo "<option value='Kabupaten Tabanan'>Kabupaten Tabanan</option>"; }
                                       elseif($siswa ->kabupaten === 'Kota Denpasar'){ echo "<option value='Kota Denpasar'>Kota Denpasar</option>"; }?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?php echo $siswa->email ?>" name="email" id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="notelp" class="col-sm-2 col-form-label">No Telephone</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="<?php echo $siswa->notelp ?>"name="notelp" id="notelp" placeholder="No Telephone">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="asalsekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->asalsekolah ?>" name="asalsekolah" id="asalsekolah" placeholder="asalsekolah">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nem" class="col-sm-2 col-form-label">NEM</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="<?php echo $siswa->nem ?>" name="nem" id="nem" placeholder="NEM">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->status ?>"name="status" id="status" placeholder="Status">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prestasi" class="col-sm-2 col-form-label">Prestasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->prestasi ?>"name="prestasi" id="prestasi" placeholder="Prestasi">
                    </div>
                  </div>
                  <div class="form-group row">
                  <label for="peringkat" class="col-sm-2 col-form-label">Peringkat</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->peringkat ?>"name="peringkat" id="peringkat" placeholder="Peringkat">
                    </div>
                   </div>
                   <div class="form-group row">
                  <label for="jenisprestasi" class="col-sm-2 col-form-label">Jenis Prestasi</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->jenisprestasi ?>"name="jenisprestasi" id="jenisprestasi" placeholder="Jenisprestasi">
                    </div>
                   </div>
                   <div class="form-group row">
                  <label for="peringkat" class="col-sm-2 col-form-label">Tingkatan Prestasi</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $siswa->tingkatanprestasi ?>"name="tingkatanprestasi" id="tingkatprestasi" placeholder="tingkatanprestasi">
                    </div>
                   </div>
                        <!-- <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jenisprestasi">
                                            <option disabled="disabled" selected="selected">Jenis Prestasi</option>
                                            <option>Porjar</option>
                                            <option>Porsenijar</option>
                                            <option>Lain Lain</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="tingkatanprestasi">
                                            <option disabled="disabled" selected="selected">Tingkatan</option>
                                            <option>Kecamatan</option>
                                            <option>Kabupaten</option>
                                            <option>Provinsi</option>
                                            <option>Lainnya</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                        </div> -->
                    <!-- </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');">Simpan</button>
              
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
            <!-- /.card -->
            <!-- general form elements disabled -->
      
    
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("_partials/footer.php") ?>
</body>
</html>
