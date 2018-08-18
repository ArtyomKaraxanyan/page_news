<?php




$conn = new PDO("mysql:host=project.local;dbname=news_app", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



