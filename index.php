<!DOCTYPE html>
<html lang="id">
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
	<link rel="stylesheet" href="css/style.css">
    <title>Sistem KRS</title>
</head>

<body>
	<div class="main">
		<header>
			<h1>Sistem KRS Junior</h1>
		</header>

		<h4>Menu</h4>
		<nav>
			<ul>
				<li><a href="list-mahasiswa.php">Daftar Mahasiswa</a></li>
				<li><a href="list-dosen.php">Daftar Dosen</a></li>
			</ul>
		</nav>
		<?php if(isset($_GET['status'])): ?>
		<p class="<?php
            if($_GET['status'] == 'sukses'){
                echo "success";
            } else {
                echo "fail";
            }
        ?>">
        <?php
            if(isset($_GET['status']) and $_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
		</p>
<?php endif; ?>
	</div>
</body>
</html>