<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect("localhost","root","");
$rs=mysql_select_db("blog_profile");
?>