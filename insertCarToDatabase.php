<?php require("UploadScript.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT INTO DOUCMENT AS ADMIN</title>
</head>
<body>



    

    

    <!-- Upload form -->
	<form action="" method="post" enctype="multipart/form-data">
    <p>Numri Identifikues:<input type="text" name="nrShasise"></p>
    <p>Prodhuesi:<input type="text" name="Prodhuesi"></p>
    <p>vitiProdhimit:<input type="text" name="vitiProdhimit"></p>    
    <p>kilometrat:<input type="text" name="kilometrat"></p>    
    <p>MadhesiaMotorrit:<input type="text" name="MadhesiaMotorrit"></p>    
    <p>llojiKariserise:<input type="text" name="llojiKariserise"></p>    
    <p>llojiShpejtesis:<input type="text" name="llojiShpejtesis"></p>    
    <p>meCilatNgreh:<input type="text" name="meCilatNgreh"></p>    
    <p>modeli:<input type="text" name="modeli"></p> 
    <p>karburanti:<input type="text" name="karburanti"></p>
    <p>ps:<input type="text" name="ps"></p>    
    <p>Dogan:<input type="text" name="Dogan"></p>    
    <p>Regjistrim:<input type="text" name="Regjistrim"></p>        
    <p>cmimi:<input type="text" name="cmimi"></p>    
    <p>Titulli:<input type="text" name="titulli"></p>    
    <p>Teksti Kryesor:<input type="text" name="teksti"></p>    
    
		<h1> Select the files you want to upload </h1>
		<input type="file" name="files[]" multiple >
		<input type="file" name="fotoKryesor">

		<button type="submit" name="upload">Upload files</button>
	</form>
    <!-- <p>FototSlide:<input type="text"></p>     -->
</body>
</html>