<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylePL.css">
    <link rel="stylesheet" href="selectStyle.css">
</head>

<body>
    <style>
        h1{
            color: white;
        }
    </style>
    <?php
    include 'header.php';
    $conn = require __DIR__ . '/LidhjaMeDatabaze.php';
    $sqlFilter = "";
    if(isset($_GET['filter'])){
        $product = $_GET['filter'];
    $vargu = explode("/",$product);

    if($vargu[0]==""){
        $cmimi = 9999999;
    }else{
        $cmimi = $vargu[0];

    }

    if($vargu[1] == ""){
        $kilometrat = 9999999;

    }else{
        $kilometrat = $vargu[1];
    }

    if($vargu[2] == ""){
        $viti = 0;
    }else{
        $viti = $vargu[2];
    }

    if($vargu[3] == ""){
        $rks = "0 or Regjistrim = 1";
    }else{
    $rks = $vargu[3];
    }
    // $shpejtesite = $vargu[4];
    if($vargu[4] == ""){
        $shpejtesite = "Automatik' or llojiShpejtesis = 'Manual";
    }else{
        $shpejtesite = $vargu[4];
    }

    $sqlFilter = "    
    select nrShasise from filterCar where (kilometrat < ".$kilometrat.")
    AND (vitiProdhimit > ".$viti." ) AND (Regjistrim = ".$rks.")
    and (llojiShpejtesis = '".$shpejtesite."') and (cmimi < ".$cmimi.") 
    ";
    // echo $sqlFilter;
    
}



    ?>
    
    <div class="pushDiv">
    <div id="sideBar" class="sideBar">
        <div id="options">
            <div id = "rubrikParent">
                <div id = "child">   
                    <div id="rubrik">
                    <label class="select">
                    <select name="cmimiValue" id="cmimiValue">
                        <optgroup>
                        <option value="">cmimi</option>
                        <option value="5000">5000€</option>
                        <option value="10000">10,000€</option>
                        <option value="15000">15,000€</option>
                        <option value="20000">20,000€</option>
                        <option value="30000">30,000€</option>
                        <option value="50000">50,000€</option>  
                        </optgroup>
                    </select>
                    </label>

                    </div>

                    <div id="rubrik">
                    <label class="select">
                    
                    <select name="kilometratValue" id="kilometratValue">
                        <optgroup>
                        <option value="">kilometrat</option>
                        <option value="50000">50,000km</option>
                        <option value="100000">100,000km</option>
                        <option value="150000">150,000km</option>
                        <option value="200000">200,000km</option>
                        <option value="250000">250,000km</option>
                        <option value="300000">300,000km</option>
                        </optgroup>
                    </select>
                    </label>

                    </div>
                    <div id="rubrik">
                    <label class="select">
                        <select name="inputLook" id="inputLook">
                            <optgroup>
                            <option value="">Viti</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value = "2011">2011</option>
                            <option value = "2012">2012</option>
                            <option value = "2013">2013</option>
                            <option value = "2014">2014</option>
                            <option value = "2015">2015</option>
                            <option value = "2016">2016</option>
                            <option value = "2017">2017</option>
                            <option value = "2018">2018</option>
                            <option value = "2019">2019</option>
                            <option value = "2020">2020</option>
                            <option value = "2021">2021</option>
                            <option value = "2022">2022</option>
                            <option value = "2023">2023</option>
                            <option value = "2024">2024</option>
                            </optgroup>
                        </select>
                    </label>
                    </div>
                </div>

                <div id = "child">   


                                    
                    <div id="rubrik">
                    <label class="select">
                    <select name="rks" id="rks">
                        <optgroup>
                        <option value="">Regjistrim</option>
                        <option value="0">Jo</option>
                        <option value="1">Po</option>
                        </optgroup>
                    </select>
                    </label>
                    </div>
                    
                    <div id="rubrik">
                    <label class="select">

                    <select name="Shpejtesite" id="Shpejtesite">
                        <optgroup>
                        <option value="">Transmisioni</option>
                        <option value="Automatik">Automatik</option>
                        <option value="Manual">Manual</option>
                        </optgroup>
                    </select>
                    </label>

                    </div>
                </div>
            <button id="myButton">Search</button>
            </div>

        </div>
    </div>
    <main id="mainDiv">
        <div class="photos">
            <?php
            if($sqlFilter != ""){
                $sql = "SELECT * FROM productListData where (nrShasise in (" . $sqlFilter ."))";

            }else{
                $sql = "SELECT * FROM productListData";
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='rubrika'>
                            <a href = 'parentCar.php?product=" . $row['nrShasise'] . "' >
                            <img src = '" . $row['fotoPath'] . "' onerror=\"this.src='parentCarPhotos/noCarExample.jpg';\"' class = 'img'></a>
                             <div class = 'views_date'> 
                                <p>" . $row['registration_date'] . "</p>
                                <p style = 'color: #f29339'>" . $row['cmimi'] . "$ </p>
                                <p>1 views</p>
                            
                            </div>
                    
                    
                    
                         </div>";
                }
            }


            ?>
        </div>
    </div>
    </main>
    </div>
    <script type="text/javascript" src="productListScript.js"></script>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        const cmimi = document.getElementById("cmimiValue").value;
        const kilometrat = document.getElementById("kilometratValue").value;
        const viti = document.getElementById("inputLook").value;
        const rks = document.getElementById("rks").value;
        // const dogan = document.getElementById("doganValue").value;
        const shpejtesite = document.getElementById("Shpejtesite").value;
        location.href = "productList.php?filter=" + cmimi + "/" + kilometrat + "/" + viti + "/" + rks + "/" + shpejtesite;
    };
</script>
</body>

</html>