<?php
    header("Access-Control-Allow-Origin: *");
if(isset($_GET['igData'])){


    //The URL with parameters / query string.
$url = 'https://api.instagram.com/v1/users/self/?access_token=2035449203.1677ed0.7a9ec2a8f42b479cafd6df745cdc6d60';

//Once again, we use file_get_contents to GET the URL in question.
$contents = file_get_contents($url);

//If $contents is not a boolean FALSE value.
if($contents !== false){
    //Print out the contents.
    //print_r(json_encode($contents));
    //echo(json_encode($contents));
    echo($contents);
}
}
?>