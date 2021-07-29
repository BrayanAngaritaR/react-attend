<?php
use \Tsugi\Util\U;

$session = U::addSession('student.php');
var_dump("New session set to user student");
echo $session;