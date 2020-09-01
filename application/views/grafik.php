<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/sidebar.php") ?>

  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css"></script>
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"></script>
  
  <script  type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Grafik Siswa </h1>
          </div>
        </div>
      </div>
      </section>
      <section class="content">
      <div class="container-fluid">
    <div class="row">
              <!-- /.card-header -->
              <script type="text/javascript" src="<?php echo base_url().'js/chart.min.js'?>"></script>
<canvas id="myChart" width="100%" height="50"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels:  ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November','Desember'],
        datasets: [{
            label: 'Grafik Data Siswa',
            data: [ 
      <?= $this->Siswa_model->carigrafik('2020-01');?>,
      <?= $this->Siswa_model->carigrafik('2020-02');?>,
      <?= $this->Siswa_model->carigrafik('2020-03');?>,
      <?= $this->Siswa_model->carigrafik('2020-04');?>,
      <?= $this->Siswa_model->carigrafik('2020-05');?>,
      <?= $this->Siswa_model->carigrafik('2020-06');?>,
      <?= $this->Siswa_model->carigrafik('2020-07');?>,
      <?= $this->Siswa_model->carigrafik('2020-08');?>,
      <?= $this->Siswa_model->carigrafik('2020-09');?>,
      <?= $this->Siswa_model->carigrafik('2020-10');?>,
      <?= $this->Siswa_model->carigrafik('2020-11');?>,
      <?= $this->Siswa_model->carigrafik('2020-12');?>,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
        </div>
    <!-- /.content -->
    </div><!-- /.container-fluid -->
    </section>
  </div>

      
<?php $this->load->view("_partials/footer.php") ?>