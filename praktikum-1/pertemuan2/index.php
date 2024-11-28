<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-size: 1em;
        }

        .poin-utama {
            color: crimson;
        }

        /* Baris 14 dan 19 dari index.php? */
        /* digunakan untuk mengatur responsive dari suatu web agar dapat ditampilkan menurut lebar layar yang sesuai */
        @media screen and (min-width : 601px) {
            .poin-utama {
                font-size: 3em;
            }
        }

        @media screen and (max-width : 600px) {
            .poin-utama {
                font-size: 1.5em;
            }
        }
    </style>
    <title>Document</title>
</head>

<body>
    <!-- ms-1 dan me-1 pada baris 24 index.php? -->
    <!-- ms-1 berarti margin start/left menggunakan class nomor 1 yang mengatur margin ke $spacer * .25 pada nilai default boostrap -->
    <!-- me-1 berarti margin end/right menggunakan class nomor 1 yang mengatur margin ke $spacer * .25 pada nilai default boostrap -->
    <div class="container-fluid ms-1 me-1">
        <div class="row">
            <!-- Baris 29 dan 34 (col-4 dan col-8) dari index.php? -->
            <!-- col-4 menunjukkan bahwa element tersebut menggunakan class yang memakai 4 kolom grid dari maksimal 12 grid dalam 1 div -->
            <!-- col-8 menunjukkan bahwa element tersebut menggunakan class yang memakai 8 kolom grid dari maksimal 12 grid dalam 1 div -->
            <p class="col-4"><strong>Berikan Ulasan!</strong>
                <br>bagi layanan potong rambut kami dan dapatkan<br>
                <strong class="poin-utama">gratis cukur</strong>
                <br>pada 1 pemenang setiap bulannya
            </p>
            <form class="col-8" action="hadiah.php">
                <div class="mb-1">
                    <label for="">Kode :</label>
                    <input type="text" name="kode" required class="form-control">
                </div>
                <div class="mb-1">
                    <label for="">Nomer WA :</label>
                    <input type="number" name="wa" required class="form-control">
                </div>
                <div class="mb-1">
                    <label for="">Komentar :</label>
                    <input type="text" name="komentar" required class="form-control">
                </div>
                <div class="mb-1">
                    <input type="submit" name="btn" value="Kirim Komentar">
                </div>
            </form>
        </div>
    </div>
    <!-- js bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<!-- 14 - jika minimal layar/screen 601px maka font gratis cukur akan berukuran 3em/48px
19 - jika maximal layar/screen 100px maka font gratis cukur akan berukuran 1.5/24px -->


<!-- a.

c.
col-4 : lebar 33.3% dari 100%
col-8 : lebar 66.5% dari 100%


d.
melakukan definisi variabel dan melakukan pengisian secara default
e.
method atau cara empty melakukan checking jika variabel ada isinya maka akan bernilai false
jika variabel tidak ada isinya maka nilainya true

f.menampilakn isi dari variabel yang sudah di buat -->