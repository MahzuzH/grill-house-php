<!DOCTYPE html>
<head>
	<title>Home</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css"/>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-sm   navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		<li class="nav-item">
			<a style="font-weight: bold; font-size: 20px;" class="nav-link" href="tampil_user.php">Table User</a>
		</li>
		<li class="nav-item">
			<a style="font-weight: bold; font-size: 20px;" class="nav-link" href="tampil_daging.php">Table Daging</a>
		</li>
		<li class="nav-item">
			<a style="font-weight: bold; font-size: 20px;" class="nav-link" href="tampil_order.php">Tabel Order</a>
		</li>
        <li>
            <a style="font-weight: bold; font-size: 20px;" class="nav-link" href="login.php">Log Out</a>
        </li>
	</div>
</nav>
<div class="container mt-5">
	<h3 class="fw-bolder text-center" style="color: white;">Menu Daging</h3>
    <a class="btn btn-success mb3" href="form_tambah_daging.php">+Add</a>
    <!-- <form method="POST" action="tambah.php">
    <button type="input" class="btn btn-success mb-3">+Add</button>

    </form> -->
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Daging</th>
                <th>Bagian Daging</th>
                <th>Grade</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="color: white;">
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from daging");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr style="color: white;">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kode_daging']; ?></td>
                    <td><?php echo $d['bagian_daging']; ?></td>
                    <td><?php echo $d['grade']; ?></td>
                    <td><?php echo $d['stok']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td>
                        <a role ="button" class="btn btn-primary me-2" href="form_edit_daging.php?id=<?php echo $d['kode_daging']; ?>">Edit</a>
                        <a role ="button" class="btn btn-danger me-2" href="hapus_daging.php?id=<?php echo $d['kode_daging']; ?>">Delete</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
	</table>
	</div> 
</body>
</html>