<?php
require_once "../config.php";

// The Tsugi PHP API Documentation is available at:
// http://do1.dr-chuck.com/tsugi/phpdoc/namespaces/Tsugi.html

use \Tsugi\Util\U;
use \Tsugi\Core\Settings;
use \Tsugi\UI\SettingsForm;
use \Tsugi\Core\LTIX;
use \Tsugi\Util\Net;

// No parameter means we require CONTEXT, USER, and LINK
$LAUNCH = LTIX::requireData(); 

// Model
$old_code = Settings::linkGet('code', '');
$retval = new \stdClass();
$retval->status = "failure";
$retval->detail = "";
Output::jsonOutput($retval);

// Render view
$OUTPUT->header();
$OUTPUT->bodyStart();
$OUTPUT->topNav();

$OUTPUT->footerStart();

?>
<script>
$(document).ready(function(){
    console.log("We are ready to send data");
    var url = '<?= U::addSession('api/attend.php') ?>';
    console.log("The URL is: " + url);
});
</script>
<?php
$OUTPUT->footerEnd();

