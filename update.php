<?php
$link = mysqli_connect("localhost", "root", "root", "gaming");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "UPDATE `consoles` SET `manufacture`='microsoft' WHERE `manufacture`='microsof'";
if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
