<?php
    $id = $_GET['id'];

    $connection = new mysqli('localhost','root','','result_db');

    $select_query = "DELETE FROM result WHERE id = '$id'";
    $result = $connection->query($select_query);
    header("Location:read.php");
?>