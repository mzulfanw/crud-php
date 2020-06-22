<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku WHERE nama = '$nama'"));

if ($cek > 0) {
?><script type="text/javascript">
        alert('Maaf data yang sudah kamu input sudah ada');
        window.location.href = 'form.php'
    </script>
<?php
} else {
    mysqli_query($koneksi, "INSERT INTO buku (id,nama) VALUES (null,'$nama')");
    header("Location: form.php");
}
?>