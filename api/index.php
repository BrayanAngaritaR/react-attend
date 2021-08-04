<?php

require_once "../../config.php";

use \Tsugi\Util\U;
use \Tsugi\Core\Settings;
use \Tsugi\UI\SettingsForm;
use \Tsugi\Core\LTIX;
use \Tsugi\Util\Net;

// $domain = "http://localhost:3000/";

// header("Access-Control-Allow-Origin: $domain");
// header("Access-Control-Allow-Headers: content-type");
// header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');    // cache for 1 day


print_r("Hello");


?>

<script>
    var url = '<?= U::addSession('api/attend.php') ?>';
    console.log("Hi there");
    console.log(url);
</script>