
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php
include("vendor/autoload.php");

use Helpers\Auth;

$user = Auth::check();

?>
    <div class="container mt05">
        <h1 class="mb-3">Profile</h1>

        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">Cannot upload file</div>
        <?php endif ?>

        <?php if ($user->photo) : ?>
            <img src="_actions/photos/<?= $user->photo ?>" class="img-thumbnail" width="300">
        <?php endif ?>



        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-4" class="input-group">
            <input type="file" name="photo" id="" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>
        <ul class="list-group">
            <li class="list-group-item">
                <b>Name:</b> <?= $user->name ?>
            </li>
            <li class="list-group-item">
                <b>Email:</b> <?= $user->email ?>
            </li>
            <li class="list-group-item">
                <b>Phone:</b> <?= $user->phone ?>
            </li>
            <li class="list-group-item">
                <b>Address:</b> <?= $user->address ?>
            </li>
        </ul>
        <br>
        <a href="_actions/logout.php" class="text-danger">Logout</a> |
        <a href="./admin.php">Admin</a>
    </div>

</body>

</html>