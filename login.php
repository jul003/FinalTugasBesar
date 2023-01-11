<?php include('php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginresep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>

{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #A52A2A;
}

.container {
    width: 50%;
    display: flex;
    max-width: 500px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.masuk{

    button 
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #8B0000;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #A9A9A9;
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #8B0000;
}



    </style>
</head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="" href="index.php"><i></i></a>
       </div>
    </div>
        
    <div class="login">
        <h1>Masuk ke akun Anda</h1>
    </div>

    <div class="container">
        <div class="form">
            <form action="" method="post">
                <div class="masuk">
                    <div>
                        <label for="username">Username</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="username" type="text" class="validate" name="username">
                    </div>
                </div>

                <div class="masuk">
                    <div>
                        <label for="password">Password</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="password" type="password" class="validate" name="password">
                    </div>
                </div>
            <form>

            <div class="masuk2">
                <center>
                    <button type="submit" class="btn_solid-main" name="login_user">Login</button>
                </center>
            </div>
            <div>
                <p>
                    Tidak Punya akun?  <a href="register.php">Buat Sekarang!</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>