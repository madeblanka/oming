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
            <h1>Tabel admin </h1>
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
                      <th>ID Admin</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Nama</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($admin as $admin): ?>
									<tr>
                    <tr>
                      <td><?php echo $admin->id_admin ?></td>
                      <td><?php echo $admin->username ?></td>
                      <td><?php echo $admin->password ?></td>
                      <td><?php echo $admin->nama ?></td>
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
