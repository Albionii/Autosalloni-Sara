<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="parentStyle.css">


    <!-- slick slideshow image css  -->
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="slideStyle.css">

    <!-- slick JS slider  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src = "slick/slick.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
   
    <!-- initialize -->
   <script>
    $(document).ready(function(){
    $('.mainImageWhole').slick();


    $('.fototSlider').slick({
  centerMode: true,
  variableWidth: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

    });
   </script>
</head>
<body>
    <?php
      $conn = include __DIR__ . '/LidhjaMeDatabaze.php';include 'header.php';?>
      
    <div id = "imageWholeScreen">
          <div id = "x-image">
            <img src="fotot/ParentLogos/0.png" alt="" onclick="clearImage()" class="x-logo">

          </div>
          <div id="mainImageWhole" class="mainImageWhole">
                
                
          <?php

                  if(isset($_GET['product'])){
                  $product = $_GET['product'];
                  }
                  $query = "SELECT * FROM fotot where nrShasise = '" .$product . "'";
                  $result = $conn->query($query);
                  $row = $result->fetch_assoc();
                  $fotoArray = array();
                      if ($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        array_push($fotoArray,$row['fotoPath']);
                        ?>
                        <div class="slide">
                          <img src="<?= $row['fotoPath'] ?>">
                        </div>
                <?php
               }
              } 
            ?>


            
          </div>

    
    </div>

    <?php
                
                  $sql = "SELECT * FROM parentCarData WHERE nrShasise = '". $product . "'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
            ?>

    <div class="mainProduct">
      <div class="nameAndText">
        <div class="image">
            <h1><?= $row['titulli']?></h1>
            <div class="mainImage">
            <img src="<?= $row['fotoPath'] ?>" alt="" onerror="this.src='parentCarPhotos/noCarExample.jpg'">
            </div>
            <div class="centerSlider">
              <div class="fototSlider">
              <?php
                    for($i = 0;$i<count($fotoArray);$i = $i + 1){
                        ?>
                        <img src="<?= $fotoArray[$i] ?>" alt="SGJINDET FOTOGRAFIA" onerror="this.src='parentCarPhotos/noCarExample.jpg'" onclick="openImage()">
                <?php

              }
          ?>
              </div>
            </div>
            
        </div>
        <div class="text">
          <h1> <?= $row['titulli']?></h1>
          <h4><?= $row['mainText']?></h4>
          <h3><?= $row['cmimi']?>$</h3>
          <a href="tel:+38344771777"><img src="fotot/contact/Tel.png">  044-771-777</a>
        </div>
      </div>
      <div id="tabelaDesign">
        <div class="tabela">
          <table>
            <tbody class="tableBody">
            <?php
                
                if(isset($_GET['product'])){
                  $product = $_GET['product'];
                  $sql = "SELECT * FROM carSpecs WHERE nrShasise = '". $product . "'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                }

            ?>
              <tr id="tableRow">
                <td class="tableColumn1" id="tableColumn1">Prodhuesi</td>
                <td class="tableColumn1"><?= $row['prodhuesi'] ?></td>
              </tr>
              <tr id="tableRow">
                <td class="tableColumn1">Modeli</td>
                <td class="tableColumn1"><?= $row['modeli'] ?></td>
              </tr>
              <tr id="tableRow">
                <td class="tableColumn1">Shpejtesite</td>
                <td class="tableColumn1"><?= $row['llojiShpejtesis'] ?></td>
              </tr>
              <tr id="tableRow">
                <td class="tableColumn1">Kubikazha</td>
                <td class="tableColumn1"><?= $row['motorri'] ?></td>
              </tr>
              
              <tr id="tableRow">
                <td class="tableColumn1">Kilometrat</td>
                <td class="tableColumn1"><?= $row['kilometrat'] ?></td>
              </tr>

              <tr id="tableRow">
                <td class="tableColumn1">Kariseria</td>
                <td class="tableColumn1"><?= $row['llojiKariseris'] ?></td>
              </tr>

              <tr id="tableRow">
                <td class="tableColumn1">Viti Prodhimit</td>
                <td class="tableColumn1"><?= $row['vitiProdhimit'] ?></td>
              </tr>
              <tr id="tableRow">
                <td class="tableColumn1">Karburanti</td>
                <td class="tableColumn1"><?= $row['karburanti'] ?></td>
              </tr>

              <tr id="tableRow">
                <td class="tableColumn1">Ps</td>
                <td class="tableColumn1"><?= $row['Ps'] ?></td>
              </tr>
              <tr id="tableRow">
                <td class="tableColumn1">Dogan</td>
                <td class="tableColumn1"><img src="fotot/ParentLogos/<?=$row['Dogan']?>.png" alt=""></td>
              </tr>

              <tr id="tableRow">
                <td class="tableColumn1">Regjistrim</td>
                <td class="tableColumn1"><img src="fotot/ParentLogos/<?=$row['Regjistrim']?>.png" alt=""></td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>

    </div>
    
  <script type="text/javascript" src="script.js"></script>
  <script>
    tabelaSize();
    function tabelaSize(){
    let widthSize = document.getElementById('tabelaDesign').clientWidth;
    let heightSize = document.getElementById('tableColumn1').clientHeight;
    document.getElementById('tableRow').style.width = (widthSize - 20) + 'px';
    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '.tableColumn1 { width: ' + (widthSize - 20)/2 + 'px;' + '} .tableColumn1 img{max-height: ' + heightSize + 'px;' + '}';
    document.getElementsByTagName('head')[0].appendChild(style); 
    
    }
    addEventListener("resize", (event) => {
      tabelaSize();


    });

    // document.getElementsByClassName('tableColumn1').style.width = ((widthSize - 20)/2) + 'px';
  </script>    
</body>
</html>