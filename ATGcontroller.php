<?php

$db_user = "id11951203_root";
$db_pass = "root123";
$db_name = "id11951203_task_3";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
