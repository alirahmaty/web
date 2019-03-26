<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>koordinator kode</th>
			<th>staf id</th>
			<th>nama</th>
			<th>alamat</th>
			<th>telp</th>
			<th>email</th>
			<th>deskripsi</th>
		</tr>
		<?php foreach($penyewaan as $u){ ?>
		<tr>
			<td><?php echo $u->koordinator_kd ?></td>
			<td><?php echo $u->staf_id ?></td>
			<td><?php echo $u->nama_koordinator ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->telp ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->deskripsi ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>