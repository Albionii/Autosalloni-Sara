<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>

 
    .tekstiA{
        width: 100%;
        text-align: center;
    }
    td{
        text-align: center;
    }
    table{
        width: 80%;
    }
    .tableDiv{
        width: 100%;
            
	    display: flex;
	    flex-direction: row;
	    flex-wrap: wrap;
	    justify-content: center;
	    align-items: center;
	    align-content: flex-start;
    }
    th, td {
  border:1px solid black;
}
</style>



<div class="tableDiv">

<table>
    <tr>
        <th>Id Kerrit</th>
        <th>Emri</th>
        <th>Delete</th>
    </tr>

<?php 
	$conn = require __DIR__ . '/LidhjaMeDatabazeAdmin.php';
    $sql = 'select * from parentCarData';
    $result = $conn->query($sql);
    while(($row = $result->fetch_assoc())!= null){
        ?> 
          <tr>

            <td><?= $row['nrShasise'] ?></input></td>
            <!-- <a href = 'parentCar.php?product=" . $row['nrShasise'] . "' > -->

            <td><?= $row['titulli'] ?></td>
            <td><a href="deleteScript.php?product=<?= $row['nrShasise']?>">Delete Now</a></td>

          </tr>
        <?php
    }


?>
</table>


</div>
<br>
<div class="tekstiA">
<a href="insertCarToDatabase.php">shto nje vetur</a>
</div>

    <!-- <h1>ette</h1> -->
</body>
</html>

