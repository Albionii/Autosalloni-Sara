<?php require("UploadScript.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT INTO DOUCMENT AS ADMIN</title>
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    background-color: black;
}
h1{
    text-align: center;
}
form p, h1{
    color: white;
    margin: 5px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-weight: bolder;
}
form{
    text-align: center;
}
/* CSS */
.button-3 {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
  margin-top: 10px;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #2c974b;
}

.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}
.inputFoto{
    background-color: #2ea44f;
    padding: 5px;
    border-radius: 6px;
    color: white;
}
.radioP{
    display: inline;
}
    </style>

    

    

    <!-- Upload form -->
	<form action="" method="post" enctype="multipart/form-data">
    <!-- <p>Numri Identifikues: <br>
    <input type="number" name="nrShasise"></p> -->
    <p>Prodhuesi: <br>
    <input type="text" name="Prodhuesi"></p>
    <p>Viti i Prodhimit: <br>
    <input type="number" name="vitiProdhimit"></p>    
    <p>Kilometrat: <br>
     <input type="text" name="kilometrat"></p>    
    <p>Kubikazha: <br>
     <input type="text" name="MadhesiaMotorrit"></p>    
    <p>Kariseria: <br>
     <input type="text" name="llojiKariserise"></p>    
    <p>Transmissioni: <br>
    <input type="text" name="llojiShpejtesis"></p>    
    <p>Drive train: <br>
    <input type="text" name="meCilatNgreh"></p>    
    <p>Modeli: <br>
    <input type="text" name="modeli"></p> 
    <p>Karburanti: <br>
    <input type="text" name="karburanti"></p>
    <p>Fuqia motorrit ne Ps: <br>
    <input type="number" name="ps"></p>    
    <p class="radioP">Dogan: <br>
    <input type="radio" name="Dogan" value="1"> Po</p><p class="radioP"><input type="radio" name="Dogan" value="0"> Jo</p>
     <br> <br><p class="radioP">Regjistrim: <br>
    <input type="radio" name="Regjistrim" value="1">Po</p> <p class="radioP"><input type="radio" name="Regjistrim" value="0"> Jo</p>
    <p>cmimi: <br>
    <input type="text" name="cmimi"></p>    
    <p>Titulli: <br>
    <input type="text" name="titulli"></p>    
    <p>Teksti Kryesor: <br>
    <input type="text" name="teksti"></p>    
    
		<h1> Fotot dhe Fotoja kryesore</h1>
		<input class="inputFoto" type="file" name="files[]" multiple >
		<input class="inputFoto" type="file" name="fotoKryesor">
        <br>
		<button class="button-3" type="submit" name="upload">Upload files</button>
	</form>

  <a href="deleteCar.php">Fshij nje vetur</a>
    <!-- <p>FototSlide:<input type="text"></p>     -->
</body>
</html>