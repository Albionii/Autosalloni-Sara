<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = require __DIR__ . '/LidhjaMeDatabazeAdmin.php';

	$sql = "INSERT into carSpecs (nrShasise,prodhuesi,vitiProdhimit,kilometrat,motorri,llojiKariseris,llojiShpejtesis,meCilatNgreh,modeli,karburanti,Ps,Dogan,Regjistrim) VALUES 
								 ('"  .time() . "','". $_POST['Prodhuesi']."'," .$_POST['vitiProdhimit'] . ", '" . $_POST['kilometrat'] . "'  ,'". $_POST['MadhesiaMotorrit']."','". $_POST['llojiKariserise']."','". $_POST['llojiShpejtesis']."','". $_POST['meCilatNgreh']."','". $_POST['modeli']."','". $_POST['karburanti']."',". $_POST['ps'].",". $_POST['Dogan'].",". $_POST['Regjistrim'].")";
							   
								$conn->query($sql);
	mkdir('parentCarPhotos/' . time());
    $uploadDir = 'parentCarPhotos/' . time() . '/'; // Specify the directory where you want to store the uploaded files

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedFiles = $_FILES['files'];

	$singleFoto = basename($_FILES["fotoKryesor"]["name"]);
	$targetFilePath = $uploadDir . 'fotoKryesore.jpg';
	if (move_uploaded_file($_FILES["fotoKryesor"]["tmp_name"], $targetFilePath)) {
		// echo "The file " . htmlspecialchars($singleFoto) . " has been uploaded.";
	}

    foreach ($uploadedFiles['name'] as $key => $fileName) {
		$fileName = time() . $key . '.jpg';
        $targetFile = $uploadDir . basename($fileName);
        $tmpFile = $uploadedFiles['tmp_name'][$key];
		
		

        if (move_uploaded_file($tmpFile, $targetFile)) {
			$sql = "INSERT into fotot (nrShasise,fotoPath) values (" . time() . ",'parentCarPhotos/" . time() . "/" . time() . $key . ".jpg')";
			$conn->query($sql);
		
            // echo "File '$fileName' has been uploaded successfully.<br>";
        } else {
            // echo "Error uploading '$fileName'.<br>";
        }
    }
		$sql = "INSERT into productListData (nrShasise,registration_date,fotoPath,cmimi) VALUES 
		('"  .time() . "',CURRENT_DATE,'parentCarPhotos/". time() ."/fotoKryesore.jpg','" . $_POST['cmimi'] ."')";
		$conn->query($sql);
		// echo $sql;
		$sql = "INSERT into parentCarData (nrShasise,titulli,mainText,vitiProdhimit,cmimi,fotoPath) values (" . time() . ",'". $_POST['titulli'] ."','". $_POST['teksti']."',". $_POST['vitiProdhimit'].",'". $_POST['cmimi']."','parentCarPhotos/". time() ."/fotoKryesore.jpg')";
		$conn->query($sql);

		$kilometrat = str_replace(",","",$_POST['kilometrat']);
		$cmimi = str_replace(",","",$_POST['cmimi']);

		$sql = "INSERT into filterCar values (" . time() . ",". $kilometrat . ",". $_POST['vitiProdhimit'].",".$_POST['Regjistrim'].",'". $_POST['llojiShpejtesis']."',".$cmimi.")";
		$conn->query($sql);

		echo '<h1> Kerri u shtua </h1>';
}
?>
