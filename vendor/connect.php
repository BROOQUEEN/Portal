<?php

$connect = mysqli_connect('10.30.0.181', 'root', 'VjqLjpjhJrjyxty', 'db_brooqueen');

if(!$connect){
	die('Ошибка соединения с базой данных "db_brooqueen"');
}