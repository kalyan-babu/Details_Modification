<?php
require('connection.php');
session_start();
if(!$link)
{
	header('location:error.php');
}
session_destroy();

header('location:main_page.php');

?>