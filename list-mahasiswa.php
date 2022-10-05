<?php
include("config.php");

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($db, $query);
?>

<html lang="id">
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
	<link rel="stylesheet" href="css/style.css">
    <title>Sistem KRS | List Mahasiswa</title>
</head>

<body>
    <header>
	<div class="header">
        <h1>List Mahasiswa</h1>
		<p><a href="index.php">Halaman Utama</a></p>
		<p><a href="form-mahasiswa.php">Tambah Mahasiswa</a></p>
	</div>	
    </header>


    <section>
		<table>
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
			<?php
				while($row = mysqli_fetch_array($result)){
			?>
				<tr>
					<td><?php echo $row['nim'];?></td>
					<td><?php echo $row['nama'];?></td>
					<td><?php echo $row['jenis_kelamin'];?></td>
					<td><?php echo $row['alamat'];?></td>
				</tr>
			<?php
				};
			?>
			</tbody>
		</table>
		
	</section>

</body>
</html>