<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 10/09/2017
 * Time: 15:06
 */

$host = 'localhost';
$user = 'root';
$password = 'badmus86';

$db_name = 'Researcher';

$db_conn = mysqli_connect($host, $user, $password, $db_name) OR die('couldn\'t connect because:'.mysqli_connect_error());