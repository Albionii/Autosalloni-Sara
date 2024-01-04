<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylePL.css">
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

    $rks = $vargu[3];
    
    $shpejtesite = $vargu[4];

    $sqlFilter = "    
    select nrShasise from filterCar where (kilometrat < ".$kilometrat.")
    AND (vitiProdhimit > ".$viti." ) AND (Regjistrim = ".$rks.")
    and (llojiShpejtesis = '".$shpejtesite."') and (cmimi < ".$cmimi.") 
    ";
    echo $sqlFilter;
    
}



    ?>
    

    <!-- <div class="test">
        <img src="parentCarPhotos/NavBarPush.jpg" class="fakePhoto">
    </div> -->
    <div class="pushDiv">
    <div id="sideBar" class="sideBar">
        <div id="menu" onclick="filter()">|||</div>
        <div id="options">

            <p>qmimi:</p>
            <input style="color:white;" id="cmimiValue" type="number" name="" class="inputLook" placeholder="Maksimum">

            <br>
            <p>kilometrat:</p>
            <input style="color:white;" id="kilometratValue" type="number" name="" class="inputLook" placeholder="Minimum">

            <p>Viti i prodhimit:</p>
            <input style="color:white;" type="number" name="" id="inputLook" placeholder="prej">

            <p> RKS: </p>
            <select name="rks" id="rks">
                <option value="0">Jo</option>
                <option value="1">Po</option>
            </select>

            <p> Shpejtesite: </p>
            <select name="Shpejtesite" id="Shpejtesite">
                <option value="Automatik">Automatik</option>
                <option value="Manual">Manual</option>
            </select>
            <br>

            <button id="myButton">Filter</button>
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