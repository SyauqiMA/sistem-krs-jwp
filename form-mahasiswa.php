<html lang="id">
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
	<link rel="stylesheet" href="css/style.css">
    <title>Sistem KRS | Form Mahasiswa</title>
</head>

<body>
	<header>
		<h1>Form Mahasiswa</h1>
		<p><a href="index.php">Halaman Utama</a></p>
	</header>
	
	<form action="create-mahasiswa.php" method="POST">

        <fieldset>
		
		<p>
            <label for="nim">NIM</label>
            <input type="text" name="nim" placeholder="NIM" required>
        </p>
		
        <p>
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="L"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    </form>
</body>