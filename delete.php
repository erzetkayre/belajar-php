<?php 
    include('service/conn.php');
    $id = $_GET["id"];
    $delete = "DELETE FROM santri WHERE id=$id";

    $result = mysqli_query($conn,$delete);
    if ($result) {
        header("Location: home.php?clear= Data Berhasil Dihapus");
    } else {
        echo "Failed: " . mysqli_errno($conn);
    }
?>