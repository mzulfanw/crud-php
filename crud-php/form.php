<?php

session_start();
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM buku");
$quey = mysqli_query($koneksi, "SELECT * FROM buku");
$has = mysqli_fetch_array($quey);


// query




$c = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Crud PHP</title>
    <link rel="stylesheet" href="css/murni.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="tengah">
            <h1> Crud PHP</h1>
        </div>
    </div>
    <form method="POST" action="process.php">
        <input type="hidden" value="<?= $has['id']; ?> " name="id">
        <div class=" container">

            <br>
            <div class="row">


                <div class="col-10">

                    <input type="text" placeholder="Masukan nama buku" required class="form-control" autofocus name="nama">

                </div>
                <div class="col">

                    <button class="btn btn-primary" type="submit" name="kirim"> Tambah </button>

                </div>
            </div>
        </div>
    </form>

    &nbsp;
    <div class="container">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col"> Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php

                while ($cek = mysqli_fetch_assoc($query)) {



                ?>
                    <tr>

                        <td><?= $c = $c + 1; ?></td>
                        <td><?= $cek['nama']; ?></td>
                        <td><a href="delete.php?id=<?= $cek['id']; ?>" class="btn btn-danger"> Delete</a>

                        </td>



                    </tr>
                <?php

                }
                ?>

            </tbody>
        </table>


    </div>
</body>

</html>