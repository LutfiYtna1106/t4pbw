<?php
    include('koneksi.php');

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM user WHERE id = $id";

        if($conn->query($sql)=== TRUE) {
            echo "Data berhasil dihapus";
        }
        else {
            echo "Error:". $sql . "<br>" . $sconn->error;
        }
    }

    $conn->close();
?>