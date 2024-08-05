<?php
    include 'service/conn.php';
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $alamat = $_POST['alamat'];

        $tembak = "INSERT INTO santri (nama, usia, alamat) VALUES ('$nama',$usia,'$alamat')";
        $result = mysqli_query($conn,$tembak);

        if($result){ 
            echo "Data berhasil dimasukkan";
        } else {
            die(mysqli_error($conn));    
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Formulir Pendaftaran Santri Baru</h1>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukkan nama anda" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Usia</label>
                    <input type="number" class="form-control" name="usia" placeholder="masukkan usia anda" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="masukkan alamat anda" >
                </div>
                
                <button name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>
</html>