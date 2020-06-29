<?php
$link = mysqli_connect("localhost", "root", "", "wakeupcafe");
 
// Check connection with Database
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// variables
$var_name = mysqli_real_escape_string($link, $_REQUEST['username']);
$var_email = mysqli_real_escape_string($link, $_REQUEST['useremail']);
$var_message = mysqli_real_escape_string($link, $_REQUEST['usermessage']);
 
// Insert query
$sql = "INSERT INTO user_message (user_name, user_email, message) VALUES ('$var_name', '$var_email', '$var_message')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Thanks for the feedback";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>