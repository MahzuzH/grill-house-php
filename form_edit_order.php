<!DOCTYPE html>
<html>
<head>
	<title>Edit Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
<?php 
	include "koneksi.php";
	
	$id_transaksi = $_GET['id'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi ='$id_transaksi'");
	// $nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
    <div class="background">
    </div>
    <div class="container mt-5">
        <a class="btn btn-outline-danger float-end" href="tampil_order.php">Back</a>
        <br>
        <br/>
        <h3 class="fw-bolder text-center">Edit Order History</h3>
        <form method="POST" action="editorder.php">
            <table>
                <tr>	
                    <input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi'] ?>">		
                    <label for="inputusername" class="form-label">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $data['username'] ?>">
                </tr>
                <tr>
                    <label for="inputPassword5" class="form-label">Kode Daging</label>
                    <input type="text" name="kode_daging" id="password" value="<?php echo $data['kode_daging'] ?>">
                </tr>
                <tr>
                    <label for="inputPassword5" class="form-label">Tingkat Kematangan</label>
                    <input type="text" name="tingkat_kematangan" id="password" value="<?php echo $data['tingkat_kematangan'] ?>">
                </tr>
                <tr>
                    <label for="inputlevel" class="form-label">Harga</label>
                    <input type="text" name="harga" id="inputlevel"  value="<?php echo $data['harga'] ?>">
                </tr>
                <tr>
                    <label for="inputlevel" class="form-label">Qty</label>
                    <input type="text" name="stok" id="inputlevel"  value="<?php echo $data['stok'] ?>">
                </tr>
                <tr>
                    <label for="inputlevel" class="form-label">Total Harga</label>
                    <input type="text" name="total" id="inputlevel"  value="<?php echo $data['total'] ?>">
                </tr>
                <tr>
                    <button>Update</button><
                </tr>
            </table>
            <!-- <button>Update</button> -->
        </form>

    </div>
<?php } ?>
</body>
</html>