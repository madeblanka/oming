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
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Kabupaten</th>
                      <th>Email</th>
                      <th>Notelp</th>
                      <th>Asal Sekolah</th>
                      <th>Prestasi</th>
                      <th>Peringkat</th>
                      <th>Jenis Prestasi</th>
                      <th>Tingkatan Prestasi</th>
                      <th>NEM</th>
                      <th>Tanggal Daftar </th>
                      <th>Persentasi</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($siswa as $siswa): ?>
									<tr>
                    <tr>
                      <td><?php echo $siswa->nis ?></td>
                      <td><?php echo $siswa->nama ?></td>
                      <td><?php echo $siswa->umur ?></td>
                      <td><?php echo $siswa->jeniskelamin ?></td>
                      <td><?php echo $siswa->agama ?></td>
                      <td><?php echo $siswa->tempatlahir ?></td>
                      <td><?php echo $siswa->tanggallahir ?></td>
                      <td><?php echo $siswa->alamat ?></td>
                      <td><?php echo $siswa->kabupaten ?></td>
                      <td><?php echo $siswa->email ?></td>
                      <td><?php echo $siswa->notelp ?></td>
                      <td><?php echo $siswa->asalsekolah ?></td>
                      <td><?php echo $siswa->prestasi ?></td>
                      <td><?php echo $siswa->peringkat ?></td>
                      <td><?php echo $siswa->jenisprestasi ?></td>
                      <td><?php echo $siswa->tingkatanprestasi ?></td>
                      <td><?php echo $siswa->nem ?></td>
                      <td><?php echo $siswa->tanggaldaftar ?></td>
                      <td><?php echo number_format($siswa->persentase,2) ?> %</td>
                      <td><?php echo $siswa->status ?></td>
                     <td><a href="<?php echo site_url('admin/edit/'.$siswa->nis) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
										<a href="<?php echo site_url('admin/delete/'.$siswa->nis) ?>"
                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </tr>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
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
