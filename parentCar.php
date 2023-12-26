<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="parentStyle.css">
    <link rel="stylesheet" href="style.css">

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
      $('.product-slider').slick({
        infinite: true,
	      dots: true,
    	  arrows: true,
        slidesToShow: 3,
        centerMode: true,
});
});


    </script>
</head>
<body>
    <?php
      $conn = include __DIR__ . '/LidhjaMeDatabaze.php';


    ?>
    <?php
    include 'header.php';
    ?>
    <main>
        <div id = "imageWholeScreen" onclick = "clearImage()">
      </div>
          <div class="tekstiMeFoto">  
            <div class="teksti">
              <?php
                
                  if(isset($_GET['product'])){
                    $product = $_GET['product'];
                    $sql = "SELECT * FROM parentCarData WHERE nrShasise = '". $product . "'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                  }

              ?>
              <h1 style="display: inline;"><?= $row['titulli'] ?></h1>
              <span><?= $row['mainText'] ?></span>
              <h3><?= $row['vitiProdhimit']?></h3>
              <h3><?= $row['cmimi'] ?>$</h3>
              
            </div>
              <!-- <div class="fotoja"> -->
                <img class="" src="<?= $row['fotoPath']?>" alt="">
            <!-- </div> -->

            <hr style = "border-top: 10px solid red;">  
            <div class = "product-slider">
            <?php
                  $query = "SELECT * FROM fotot where nrShasise = '" .$product . "'";
                  $result = $conn->query($query);
                  $row = $result->fetch_assoc();
                      if ($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){
                        // $row['fotoPath']
                        ?>
                        <div class = "slide">
                        <img src="<?= $row['fotoPath'] ?>" alt="" onclick="openImage('<?= $row['fotoPath']?> ')">
                      </div>

                        <?php
                      }
                    }
            
            
            ?>
          </div>
          
          </div>
          
          
          </main>
          <script type="text/javascript" src="script.js"></script>
    
</body>
</html>