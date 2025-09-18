<?php
$myconn = mysqli_connect('localhost', 'root', '', 'april');
if (!$myconn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['sno'])) {
    $id = intval($_GET['sno']); 
    $sql = "SELECT paper FROM exampapers WHERE sno = $id";
    $result = mysqli_query($myconn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        
        header("Content-Type: image/jpeg"); 
        echo $row['paper']; 
    } else {
        echo "Image not found."; 
    }
} else {
    echo "No image ID specified."; 
}
?>
