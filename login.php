<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Login Web</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!--Stylesheet-->
</head>

<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div>

    <div class="form_login">
        <form method="POST" action="ceklogin.php">
            <h3>Login Here</h3>
            <label for="username">Username</label>
            <input type="username" class="form-control" id="username" placeholder="Username" name="username" required>

            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>

            <button>Log In</button>
        </form>
    </div>

</body>

</html>