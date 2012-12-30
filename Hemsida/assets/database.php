<?php
mysql_connect("localhost", "rapidiou_hemsida", "Hemsida123") or die(mysql_error());
mysql_select_db("rapidiou_hemsida") or die(mysql_error());

mysql_query( "SET NAMES utf8");
mysql_query( "SET CHARACTER SET utf8");
?>