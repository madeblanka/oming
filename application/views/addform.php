<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Form Daftar</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assetsform/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsform/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assetsform/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assetsform/vendor/datepicker/daterangepicker.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assetsform/css/main.css" rel="stylesheet')?>" media="all">
</head>

<body>
<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="<?php echo site_url('siswa/add') ?>" method="POST">
                    <div class="input-group">
                            <input class="input--style-1" required type="number" min="0" required step="1" placeholder="NISN" name="nis">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" required type="text" placeholder="Nama" name="nama">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" required type="number" placeholder="Umur" name="umur">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="agama">
                                    <option disabled="disabled" required selected="selected">Agama</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Islam</option>
                                    <option>Konghucu</option>
                                    <option>Protestan</option>
                                    <option>Katolik</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <label for="agama" class="col-sm-2 col-form-label">Tanggal lahir</label>
                                    <input class="input--style-1" required type="date" placeholder="Tanggal Lahir" name="tanggallahir">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jeniskelamin">
                                            <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                            <option>Pria</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" required type="text" placeholder="Tempat Lahir" name="tempatlahir">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" required type="text" placeholder="Alamat" name="alamat">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="kabupaten">
                                    <option disabled="disabled" selected="selected">Kabupaten</option>
                                    <option>Kabupaten Badung</option>
                                    <option>Kabupaten Bangli</option>
                                    <option>Kabupaten Buleleng</option>
                                    <option>Kabupaten Gianyar</option>
                                    <option>Kabupaten Jembrana</option>
                                    <option>Kabupaten Karangasem</option>
                                    <option>Kabupaten Klungkung</option>
                                    <option>Kabupaten Tabanan</option>
                                    <option>Kota Denpasar</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" required type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" required type="number" placeholder="No Telp" name="notelp">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" required type="text" placeholder="Asal Sekolah" name="asalsekolah">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Prestasi Yang Pernah Dicapai" name="prestasi">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="peringkat">
                                    <option disabled="disabled" required selected="selected">Peringkat Prestasi</option>
                                    <option>Juara 1 Umum </option>
                                    <option>Juara 2 Umum</option>
                                    <option>Juara 3 Umum</option>
                                    <option>Juara 1 </option>
                                    <option>Juara 2</option>
                                    <option>Juara 3</option>
                                    <option>Harapan 1 </option>
                                    <option>Harapan 2</option>
                                    <option>Harapan 3</option>
                                    <option>Lainnya</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
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
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" required step="0.1" type="number" min="1" max="40" placeholder="NEM" name="nem">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini ?');" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assetsform/vendor/jquery/jquery.min.js')?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assetsform/vendor/select2/select2.min.js')?>"></script>
    <script src="<?php echo base_url('assetsform/vendor/datepicker/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assetsform/vendor/datepicker/daterangepicker.js')?>"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assetsform/js/global.js')?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
