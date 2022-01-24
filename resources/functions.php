<?php

// a function to redirect
function redirect($location){

    header("Location: $location ");
}

function query($sql){

    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;

    if (!$result){
        die("QUERY FAILED " . mysqli_error($connection));
    }
}

// to prevent sql injection attacks and to ignore spaces and other things when we using login
function escape_string($string) {

    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result) {

    return mysqli_fetch_array($result);
}

?>