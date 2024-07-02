<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        .wrap{
            width:100%;
            max-width: 400px;
            margin:20px auto;
        }
    </style>
</head>
<body class="text-center">
    <div class="wrap">
        <h2 class="mb-3">Login</h2>
        <?php if(isset($_GET["suspended"])) :?>
            <div class="alert alert-warning">Account suspended</div>
        <?php endif ?>
        <?php if(isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning"> password and email incorrect</div>
        <?php endif ?>
        <?php if(isset($_GET['register'])):?>
            <div class="alert alert-info">
                Accoount created, please login
            </div>
        <?php endif ?>
        <form action="./_actions/login.php" method="post">
            <input 
            type="email"
            class="form-control mb-3"
            placeholder="Enter Email"
            name="email">
            <input 
            type="password"
            class="form-control"
            placeholder="Enter Password"
            name="password">
            <button class="btn form-control btn-primary mt-3" >Login</button>
        </form>
        <a href="./register.php">Register</a>
    </div>
</body>
</html>