<?php
// Mengapa $hadiah, $border, dan $empty diberi nilai pada baris 2 s/d 4 hadiah.php?
// karena termasuk variabel yang mana nantinya akan ditampilkan ke user dan memuat apa yang ada di dalam variabel tersebut 
$hadiah = "<strong style='color:blue;'>Permen Gratis</strong>";
$border = "border-primary";
$empty = 0;
// Mengapa perlu menuliskan if(empty($_GET['kode'])) pada baris 5 hadiah.php?
// untuk mengondisikan apabila $_GET['kode'] berisi nilai false maka akan menampilkan kode yang dituliskan
if (empty($_GET['kode'])) {
    $empty = 1;
} elseif (empty($_GET['kode']) == "aaaa") {
    $hadiah = "<strong style='color: green;'>Cukur Gratis</strong>";
    $border = "border-success";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hadiah</title>
</head>

<body>
    <?php
    if ($empty == 0) { ?>
        <!-- Apa maksud kode $border pada baris 24 hadiah.php? -->
        <!-- yang mana akan menampilkan kode di dalam variabel border yaitu 'border-primary' -->
        <div class="container mt-3 text-center border <?= $border ?> rounded-3">
            <h1>Terimakasih atas komentar anda! </h1>
            <h2>Selamat anda mendapatkan <br>
                <?= $hadiah ?></h2>
        </div>
    <?php }
    ?>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>