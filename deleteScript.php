
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Deleting:</h1>
<?php 
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

function removeDir(string $dir): void {
    $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($it,
                 RecursiveIteratorIterator::CHILD_FIRST);
    foreach($files as $file) {
        if ($file->isDir()){
            rmdir($file->getPathname());
        } else {
            unlink($file->getPathname());
        }
    }
    rmdir($dir);
}

if(isset($_GET['product'])){
    $nrShasise = $_GET['product'];
    // echo $nrShasise;
	$conn = require __DIR__ . '/LidhjaMeDatabazeAdmin.php';


    $sql = "delete from parentCarData where nrShasise = '" . $nrShasise . "'";
    $conn->query($sql);
    $sql = "delete from carSpecs where nrShasise = '" . $nrShasise . "'";
    $conn->query($sql);
    $sql = "delete from productListData where nrShasise = '" . $nrShasise . "'";
    $conn->query($sql);
    $sql = "delete from fotot where nrShasise = '" . $nrShasise . "'";
    $conn->query($sql);
    $sql = "delete from filterCar where nrShasise = '" . $nrShasise . "'";
    $conn->query($sql);
    $dirToDel = 'parentCarPhotos/' . $nrShasise;
    removeDir($dirToDel);
   
    echo '<h1>The car with Id: ' . $nrShasise . ' Has been Deleted </h1>';


}

?>
<a href="deleteCar.php"> Delete Another Car</a>
<a href="index.php"> Return to Home Page</a>
</body>
</html>
