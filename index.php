<?php

error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

include 'functions/print_ob.php';
include 'functions/write_log.php';

print_ob($_SERVER);
print_ob($_GET);

// write_log("info", "testomate");
