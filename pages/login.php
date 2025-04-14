<?php
//mulai session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kasir Bakery Adorablle </title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link role="icon" href="../asset/Black Beige Modern Aesthetic Floral Initial Clothing Store Logo.png" type="images/x-icon">
</head>
<body>   
    <section id="login">
        <div class="login-left">
        <div class="text-hero">
            <h2>Kasir Adorablle</h2>
            <p>Toko Bakery Adorablle</p>
        </div>
        <img src="../asset/Black Beige Modern Aesthetic Floral Initial Clothing Store Logo.png" alt="hero-login">

        </div>
        <div class="login-right">
            <div class="login-form">
                <img src="../asset/Brown Pink Simple Online Shop Logo (1).png" alt="logo">
                <h3>Masukkan Username Dan Password</h3>
                <form action="../config/proses_login.php" method="post">
                    <div class="text-login">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="******">
                        
                        </div>
                        <div class="button">
                            <button type="reset">Cancel</button>
                            <button type="sumbit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>