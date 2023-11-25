<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detyra 4</title>
    <link rel="stylesheet" href="stylePL.css">
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
    <div id="sideBar">
        <div id = "menu" onclick="filter()">|||</div>
        <div id="options">
        <p>qmimi:</p>
        <input type="number" name="" class="inputLook" placeholder="From">
        <input type="number" name="" class="inputLook" placeholder="To">
        <br>
        <p>kilometrat:</p>
        <input type="number" name="" class="inputLook" placeholder="From">
        <input type="number" name="" class="inputLook" placeholder="To">
        <p>Viti i prodhimit:</p>
        <input type="number" name="" id="inputLook" placeholder="From">
        <p> RKS: </p>
        <input type="radio" name="drone" id="RksPo" value="Po">
        <label for="RksPo" style="color: white;">Po</label>
        <input type="radio" name="drone" id="RksJo" value="Jo">
        <label for="RksJo" style="color: white;">Jo</label>
        <p> Shpejtesite: </p>
        <select name="Shpejtesite" id="Shpejtesite">
            <option value="Automatik">Automatik</option>
            <option value="Manual">Manual</option>
        </select>
    </div>
    </div>
    <main id="mainDiv">
        <div class="photos">
        <?php

            $sql = "SELECT * FROM productListData";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='rubrika'>
                            <a href = 'parentCar.php?product=" . $row['nrShasise'] . "' >
                            <img src = '" . $row['fotoPath'] . "' alt = 'skaFoto' class = 'img'></a>
                             <div class = 'views_date'> 
                                <p>" . $row['registration_date'] . "</p>
                                <p style = 'color: #f29339'>" . $row['cmimi'] . "$ </p>
                                <p>1 views</p>
                            
                            </div>
                    
                    
                    
                    </div>";
                }
                } 
            
        
        ?>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo1.jpg" alt="" class="img">
                <div class="views_date">
                    <p>24 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>10,460 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo2.jpg" alt="" class="img">
                <div class="views_date">
                    <p>22 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>14,502 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo3.jpg" alt="" class="img">
                <div class="views_date">
                    <p>18 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>11,906 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo4.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo5.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo6.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo7.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo8.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo9.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo10.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="MainPagePhotos/Photo11.jpg" alt="" class="img">
                <div class="views_date">
                    <p>12 Oct 2023</p>
                    <p style="color: #f29339;">13,900$</p>
                    <p>16,100 Views</p>
                </div>
            </div>
            </div>
        </div>
        <div class="pages">
            <button style="background-color: #f29339; border: none;">Previous</button>
            <div class="numrat">
                <button style="height: 30px; width: 30px; background-color: #f29339; border: inset 0px;">1</button>
                <button style="height: 30px; width: 30px; border: inset 0px;">2</button>
                <button style="height: 30px; width: 30px; border: inset 0px;">3</button>
                <button style="height: 30px; width: 30px; border: inset 0px;">4</button>
            </div>
            <button style="background-color: #f29339;  border: none; ">Next</button>
        </div>
        </main>
        <script type="text/javascript" src="productListScript.js"></script>
        <script>
            console.log('hello world');
        </script>
</body>

</html>