<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
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
    <a class="btn btn-outline-danger float-end" href="tampil_user.php">Back</a>
    <br>
	<br/>
	<h3 class="fw-bolder text-center">Add New User</h3>
	<form method="POST" action="input_user.php">
		<table>
            <tr>
                <input type="hidden" name="iduser">
            </tr>
			<tr>			
                <label for="inputusername" class="form-label">Username</label>
                <input type="text" name="username" id="username">
			</tr>
			<tr>
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" name="password" id="password" aria-describedby="passwordHelpBlock">
			</tr>
			<tr>
                <label for="inputlevel" class="form-label">Level</label>
                <input type="text" name="level" id="inputlevel">
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