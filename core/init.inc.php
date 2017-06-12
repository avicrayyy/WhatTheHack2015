<?php

session_start();

mysql_connect('localhost', 'root', '');
mysql_select_db('wth');



// INCLUDE MODULES HERE
include('inc/users.inc.php');

?>