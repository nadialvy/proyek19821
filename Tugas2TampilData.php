
<?php
    // menangkap data nama dengan method get
    $nama = $_GET['nama']; //nama diambil dari atribut name di file Index.php
    $gender = $_GET['gender']; //usia diambil dari atribut name di file Index.php
    $agama = $_GET['agama'];
    $alamat = $_GET['alamat'];
    $tempatLahir = $_GET['tempatLahir'];
    $tanggalLahir = $_GET['tanggalLahir'];
    $hobi = $_GET['hobi'];
    $citacita = $_GET['citacita'];
    $usia = $_GET['usia'];
    $asal = $_GET['asal'];
    

    // menampilkan data nama
    echo "Nama : {$nama} <br>";
    echo "Jenis Kelamin : {$gender} <br>";
    echo "Agama : {$agama} <br>";
    echo "Alamat : {$alamat} <br>";
    echo "Tempat Lahir : {$tempatLahir} <br>";
    echo "Tanggal Lahir : {$tanggalLahir} <br>";
    echo "Hobi : {$hobi} <br>";
    echo "Cita-Cita : {$citacita} <br>";
    echo "Usia : {$usia} <br>";
    echo "Asal Sekolah : {$asal} <br>";

?>