<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = require __DIR__ . '/LidhjaMeDatabaze.php';
    $sql = "
    insert into mesazhet (emri,email,numriTel,mesazhi) values('".$_POST['emri']."','".$_POST['email']."','".$_POST['numri']."','".$_POST['teksti']."')";
    $conn->query($sql);
    echo '<h1>Mesazhi u dergua</h1>';
}
?>