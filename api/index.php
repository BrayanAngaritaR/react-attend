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
    $.getJSON('<?= addSession('api/getrows.php') ?>', function(rows) {
        window.console && console.log(rows);
        context = { 'rows' : rows,
            'instructor' : true,
            'old_code' : '<?= $old_code ?>'
        };
        tsugiHandlebarsToDiv('attend-div', 'attend', context);
    }).fail( function() { alert('getJSON fail'); } );
    console.log("Hi there");
</script>