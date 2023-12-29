<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = require __DIR__ . '/LidhjaMeDatabazeAdmin.php';

	$sql = "INSERT into carSpecs (nrShasise,prodhuesi,vitiProdhimit,kilometrat,motorri,llojiKariseris,llojiShpejtesis,meCilatNgreh,modeli,karburanti,Ps,Dogan,Regjistrim) VALUES 
								 ('"  .$_POST['nrShasise'] . "','". $_POST['Prodhuesi']."'," .$_POST['vitiProdhimit'] . ", '" . $_POST['kilometrat'] . "'  ,'". $_POST['MadhesiaMotorrit']."','". $_POST['llojiKariserise']."','". $_POST['llojiShpejtesis']."','". $_POST['meCilatNgreh']."','". $_POST['modeli']."','". $_POST['karburanti']."',". $_POST['ps'].",". $_POST['Dogan'].",". $_POST['Regjistrim'].")";
							   
								$conn->query($sql);
	mkdir('parentCarPhotos/' . $_POST['nrShasise']);
    $uploadDir = 'parentCarPhotos/' . $_POST['nrShasise'] . '/'; // Specify the directory where you want to store the uploaded files

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedFiles = $_FILES['files'];


    foreach ($uploadedFiles['name'] as $key => $fileName) {
		$fileName = $_POST['nrShasise'] . $key . '.jpg';
        $targetFile = $uploadDir . basename($fileName);
        $tmpFile = $uploadedFiles['tmp_name'][$key];
		
		$sql = "INSERT into fotot (nrShasise,fotoPath) values (" . $_POST['nrShasise'] . ",'parentCarPhotos/" . $_POST['nrShasise'] . "/" . $_POST['nrShasise'] . $key . ".jpg')";
		$conn->query($sql);
		

        if (move_uploaded_file($tmpFile, $targetFile)) {
            echo "File '$fileName' has been uploaded successfully.<br>";
        } else {
            echo "Error uploading '$fileName'.<br>";
        }
    }
	//insert into productListData (nrShasise,registration_date,fotoPath,cmimi) values (123,CURRENT_DATE,'path'.'13.900')
		$sql = "INSERT into productListData (nrShasise,registration_date,fotoPath,cmimi) VALUES 
		('"  .$_POST['nrShasise'] . "',CURRENT_DATE,'parentCarPhotos/". $_POST['nrShasise'] ."/" . $_POST['nrShasise'] . "0.jpg','" . $_POST['cmimi'] ."')";
		$conn->query($sql);
		//insert into parentCarData (nrShasise,titulli,mainText,vitiProdhimit,cmimi,fotoPath) 
		//values (1234,'KERIII','tekst tekst tekst',2009,'13.900','fotoPath')
		$sql = "INSERT into parentCarData (nrShasise,titulli,mainText,vitiProdhimit,cmimi,fotoPath) values (" . $_POST['nrShasise'] . ",'". $_POST['titulli'] ."','". $_POST['teksti']."',". $_POST['vitiProdhimit'].",'". $_POST['cmimi']."','parentCarPhotos/". $_POST['nrShasise'] ."/" . $_POST['nrShasise'] . "0.jpg')";
		//echo "INSERT into parentCarData (nrShasise,titulli,mainText,vitiProdhimit,cmimi,fotoPath) values (" . $_POST['nrShasise'] . ",'". $_POST['titulli'] ."','". $_POST['teksti']."',". $_POST['vitiProdhimit'].",'". $_POST['cmimi']."','parentCarPhotos/". $_POST['nrShasise'] ."/" . $_POST['nrShasise'] . "0.jpg')";
		$conn->query($sql);

}
?>
