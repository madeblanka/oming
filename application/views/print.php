<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pinjaman Ruangan </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Calon Siswa SMAN 1 SELAT</h4>
	</center>

	<table class='table table-bordered'>
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
                      <th>Persentasi</th>
                      <th>Status</th>
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
                      <td><?php echo $siswa->persentase ?> %</td>
                      <td><?php echo $siswa->status ?></td>
                    </tr>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
	</table>
    <script>
  window.print();
</script>
</body>
</html>