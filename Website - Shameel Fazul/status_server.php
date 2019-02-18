<?php

$link = mysqli_connect("localhost", "root", "", "bookings");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$departure = mysqli_real_escape_string($link, $_REQUEST['departure']);
$arrival = mysqli_real_escape_string($link, $_REQUEST['arrival']);
$mealtype = mysqli_real_escape_string($link, $_REQUEST['mealtype']);
$origin = mysqli_real_escape_string($link, $_REQUEST['origin']);
$destination = mysqli_real_escape_string($link, $_REQUEST['destination']);
 
// insert query execution
$sql = "INSERT INTO tickets (fullname, departure, arrival, mealtype, origin, destination) VALUES ('$fullname', '$departure', '$arrival', '$mealtype', '$origin', '$destination')";
if(mysqli_query($link, $sql)){
	
echo "<script>alert('BOOKING CONFIRMED!');document.location='status.php'</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>