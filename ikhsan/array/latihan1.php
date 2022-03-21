<?php
$mahasiswa = ["muhammad ikhsan abdi rabani", "012345", "Informatika", "abdulrahman@ft.unbara.ac.id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <ul>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
<hr>
<h1>Data Mahasiswa</h1>
     <?php for ($i = 0; $i < 4; $i++) { ?>
        <li>
            <?php echo $mahasiswa[$i]; ?>
    </li>
    <?php } ?>

    </body>
</html>