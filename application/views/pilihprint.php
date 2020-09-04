<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Siswa </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
          <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <form class="form-horizontal" method="post" action="<?php echo base_url('admin/print')?>">
                    <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="tanggaldaftar">
                                    <option disabled="disabled" required selected="selected">Bulan</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-20">
                    <button class="btn btn--radius btn--green" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');" type="submit">Submit</button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    <!-- /.content -->
    </div><!-- /.container-fluid -->
    </section>
  </div>
<?php $this->load->view("_partials/footer.php") ?>
</body>
</html>
