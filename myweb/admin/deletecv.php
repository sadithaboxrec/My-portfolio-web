<?php

require_once('constants.php');


if (isset($_GET['file_id'])) {
    $id = $_GET['file_id']; 


    $sql = "SELECT * FROM cv WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $file = mysqli_fetch_assoc($result);
        $filePath = 'uploads/' . $file['name'];


        if (file_exists($filePath)) {

            if (unlink($filePath)) {

                $deleteSql = "DELETE FROM cv WHERE id = $id";
                if (mysqli_query($conn, $deleteSql)) {
                    header('location:'.SITEURL.'admin/index.php');
                } else {
                    echo "Failed to delete the record from the database.";
                }
            } else {
                echo "Failed to delete the file from the server.";
            }
        } else {
            echo "File does not exist on the server.";
        }
    } else {
        echo "No record found in the database.";
    }
} else {
    echo "No file ID provided.";
}


?>
