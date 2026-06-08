<?php

if ($conn->query($sqlUpdate) === TRUE) {
    header("Location: home.php");
    exit();
}
?>