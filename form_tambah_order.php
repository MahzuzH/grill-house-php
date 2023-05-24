<!DOCTYPE html>
<html>
<head>
	<title>Add Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="background">

</div>
<div class="container mt-5">
    <a class="btn btn-outline-danger float-end" href="tampil_order.php">Back</a>
    <br>
	<br/>
	<h3 class="fw-bolder text-center">Add New Order</h3>
	<form method="POST" action="input_order.php">
		<table>
			<tr>			
                <label for="inputukode_daging" class="form-label">Username</label>
                <input type="text" name="username" id="inputukode_daging">
			</tr>
			<tr>
                <label for="inputDaging" class="form-label">Kode Daging</label>
                <input type="text" name="kode_daging" id="inputDaging">
			</tr>
			<tr>
                <label for="inputgrade" class="form-label">Tingkat Kematangan</label>
                <input type="text" name="tingkat_kematangan" id="inputgrade">
            </tr>
            <tr>
                <label for="inputstok" class="form-label">Harga</label>
                <input type="text" name="harga" id="inputstok">
            </tr>
            <tr>
                <label for="inputharga" class="form-label">Qty</label>
                <input type="text" name="stok" id="inputharga">
            </tr>
            <tr>
                <label for="inputharga" class="form-label">Total</label>
                <input type="text" name="total" id="inputharga">
            </tr>
            <tr>
                <button>Create</button>
            </tr>
		</table>
        <!-- <button>Update</button> -->
	</form>

</div>
</body>
</html>