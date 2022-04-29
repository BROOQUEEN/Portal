<?php

$connect = mysqli_connect('localhost', 'root', '', 'db_brooqueen');

if(!$connect){
	die('Ошибка соединения с базой данных "db_brooqueen"');
}