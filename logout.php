<?php 
require 'fbconfig.php';
$facebook->destroySession();  // to destroy facebook sesssion
header("Location: " ."./");        // you can enter home page here ( Eg : header("Location: " ."http://www.abc.com"); 
?>