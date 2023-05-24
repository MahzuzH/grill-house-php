
<!DOCTYPE html>
<html>
<head>
	<title>Edit Daging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
<?php 
	include "koneksi.php";
	
	$iduser = $_GET['id'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM daging WHERE kode_daging ='$iduser'");
	// $nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
    <div class="background">
    </div>
<div class="container mt-5">
    <a class="btn btn-outline-danger float-end" href="tampil_daging.php">Back</a>
    <br>
	<br/>
	<h3 class="fw-bolder text-center">Edit Menu Stock</h3>
	<form class="user" method="post" action="editdaging.php">
		<table>
            <tr>
                <label for="inputdaging" class="form-label">Kode Daging</label>
                <input type="text" name="kode_daging" value="<?php echo $data['kode_daging'] ?>" readonly>
            </tr>
			<tr>			
                <label for="inputstok" class="form-label">Stok</label>
                <input type="text" name="stok" id="inputstok" value="<?php echo $data['stok'] ?>">
			</tr>
			<tr>
                <label for="inputharga" class="form-label">Harga</label>
                <input type="text" name="harga" id="inputharga"  value="<?php echo $data['harga'] ?>">
			</tr>
			<tr>
				<button>Update</button>
			</tr>
            
		</table>
	</form>

</div>
<?php } ?>
</body>
</html>