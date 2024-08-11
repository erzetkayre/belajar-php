<?php
    include ('service/conn.php');
    include ('layouts/header.php');
    include ('layouts/navbar.php');
?>

<div class="container">
    <?php 
        if(isset($_GET['msg'])) {
            $msg =$_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            '.$msg.'
            </div>';
        };
    ?>
    <h4 class="text-start">Tabel Santri</h4>
    <table class="table">
        <thead class="text-center">
            <tr>
            <th scope="col">No.</th>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Usia</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <?php 
            $i = 1;
            $sql = "SELECT * FROM santri";
            $result = mysqli_query($conn, $sql) or die (mysqli_error($conn()));
            while ($ambil = mysqli_fetch_array($result)){ ?>
        <tbody class="text-center">
            <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $ambil["id"]?></td>
                <td><?= $ambil["nama"]?></td>
                <td><?= $ambil["usia"]?></td>
                <td><?= $ambil["alamat"]?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href=""><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="delete.php"><i class="fa-solid fa-trash"></i> Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
            } ?>
    </table>
</div>

<?php
    include ('layouts/footer.php');
?>