<?php

$data = file_get_contents("https://mybackend405340.azurewebsites.net");

if ( strlen( $data ) === 0 ) {
    echo "ERROR: Can't reach backend";
} else {
    echo $data;
}
