<?php
$conn = new mysqli('localhost', 'root', '', 'db_bola');

$query = $conn->query("SELECT * FROM bola WHERE id = {$_GET['id']}");

$query = $query->fetch_assoc();

if (isset($_POST['submit'])) {
    $conn->query("CALL updateDataClub ({$_GET['id']}, '{$_POST['nama_club']}')");
    header("Location: http://localhost/club%20bola/index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="hidden" value="<?= $query['id'] ?>">
        <label>Nama Klub Bola</label>
        <input type="text" name="nama_club" value="<?= $query['nama_club'] ?>">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>