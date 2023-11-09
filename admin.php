<?php 
    require "config/db.php"; 
    require "model/informasi_model.php";
   
?>

<html>
	<head>
		<title>BPSDMP - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	</head>
	<body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
            <a class="navbar-brand" href="#">
                <img src="assets/image/logo BPSDMP.png" alt="Logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link bg-secondary rounded text-light px-3" href="home.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
			<div class="row p-2">
                <div class="col-md-12">
                    <h2>Data Informasi</h2>
                    <a href="admin_input.php" class="btn btn-md btn-primary my-3">+ Tambah data</a>
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <td>ID</td>
                                <td>Judul</td>
                                <td>Isi</td>
                                <td>Gambar</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $data = getAllData($db);

                            // cek apakah ada data yang diambil
                            if(mysqli_num_rows($data) > 0){
                                while ($row = mysqli_fetch_assoc($data)) {
                                   echo "<tr>
                                            <td>{$row['id']}</td>
                                            <td>{$row['judul']}</td>
                                            <td>{$row['isi']}</td>
                                            <td><img src='assets/image/{$row['gambar']}' height=150></td>
                                            <td class='text-center'>
                                                <a href='admin_update.php?id={$row['id']}' class='btn btn-warning'>Update</a>
                                                <a href='admin_delete.php?id={$row['id']}' class='btn btn-danger mt-2'>Delete</a>
                                            </td>
                                        </tr>";
                                }
                            }else{ // jika data = 0 atau data tidak ada/kosong
                                echo '<tr><td colspan="4" class="text-center">Data tidak ada</td></tr>';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
		</div>
        <script>
            AOS.init();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
	
	
	<!-- untuk me-load javascript pada web -->
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/dist/js/bootstrap.js"></script>
	<script src="assets/jquery-validation/dist/jquery.validate.js"></script>
	</body>
</html>