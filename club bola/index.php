<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bola";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    $query = $conn->prepare("CALL insertDataClub ('{$_POST['nama_club']}')");
    $query->execute();
}

$kumpulanClub = $conn->query("SELECT * FROM bola");

$data = [];
while ($row = $kumpulanClub->fetch_assoc()) {
    array_push($data, $row);
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
    <div>
        <form method="post" action="">
            <h1>Nama Club Bola</h1>
            <input type="text" name="nama_club" />
            <button type="submit" name="submit">Add</button>

        </form>
        <table border="1px">
            <thead>
                <th>Nama Klub</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $d['nama_club'] ?></td>
                        <td><a href="http://localhost/club%20bola/edit.php?id=<?= $d["id"] ?>">Edit</a> | <a href="http://localhost/club%20bola/delete.php?id=<?= $d["id"] ?>">Delete</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>