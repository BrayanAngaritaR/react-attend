<?php

// $domain = "http://localhost:3000/";

// header("Access-Control-Allow-Origin: $domain");
// header("Access-Control-Allow-Headers: content-type");
// header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');    // cache for 1 day


print_r("Hello");

?>

"Access-Control-Allow-Headers",
    "Origin, X-Requested-With, Content-Type, Accept"