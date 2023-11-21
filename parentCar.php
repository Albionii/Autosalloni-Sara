<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="parentStyle.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
      $conn = require __DIR__ . '/LidhjaMeDatabaze.php';


    ?>
    <header>
    <a href="index.html"><img src="fotot/Sara-logo.png" alt="logo" class="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="productList.html">PRODUCTS</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li>
                  <div class = "search-div">
                    <input type="text" class="search_box" placeholder="Search here">
                    <img src="fotot/search_logo.png" alt="serach box logo" class="search-logo">
                  </div>
                </li>
                <li>
                  <a href="log-in.html">
                    <img src="fotot/user-logo.png" alt="user" class="user-logo">
                  </a>
                </li>
            </ul>
        </nav>
        </header>
        <main>
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
          </div>
          </main>
    
</body>
</html>