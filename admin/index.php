<?php
require_once '../connect.php';


$stmt = $pdo->query("select * from messages");
$messages = $stmt->fetchAll();

$works = mysqli_query($connect, "select * from content");



?>

<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="/crs/css/style.css">
    <link rel="stylesheet" href="/crs/css/admin.css">
</head>
<body>
<div class="container">
    <h2>Message</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Text</th>
            <th>Date</th>
        </tr>
        <?php foreach ($messages as $key => $message): ?>
        <tr>
            <td><?= $key + 1?></td>
            <td><?= htmlspecialchars($message['name'])?>></td>
            <td><?= htmlspecialchars($message['email'])?></td>
            <td><?= htmlspecialchars($message['text'])?></td>
            <td><?=$message['data']?></td>
        </tr>
        <?php endforeach;?>
    </table>

    <br><br><br><br>

    <h2>Portfolio</h2>

    <a href="../admin/add.php">Добавить</a> <br><br>

    <div id="lightgallery" class="gallery">

        <?php while ($work = mysqli_fetch_assoc($works)):?>
            <div class="image-wrapper">
                <img src="../crs/img/<?=$work['image']?>">
                <a href="remove.php?id=<?=$work['id']?>">remove</a>
            </div>
        <?php endwhile;?>
    </div>


</div>
</body>
</html>

