<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_rosela_Arian isabel_bsis3B');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>