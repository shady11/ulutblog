<?php
error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
ini_set('display_errors', '0');
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

header('Content-type: text/html; charset=UTF-8');

//$db_host="mysql.hoster.kg";
//$db_user="cholpon_rrr";
//$db_pass="camry1987";
//$db_name="cholpon_airport";

$db_host="localhost";
$db_user="bloguser";
$db_pass="1qaz";
$db_name="blogdb";

define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));

define('SERVICE_FEE', 10);
define('SITE_TITLE', "Ulut Blog");
define('SITE_ADDR', "www.ulutblog.dev");
define('SITE_ADMIN_TITLE', "Admin Panel");

define('DB_PREFIX', "");
define("PHP_SELF",$_SERVER['PHP_SELF']);

define('ROOT_PATH', dirname(__FILE__));

date_default_timezone_set('Asia/Bishkek');
require_once ROOT_PATH."/class/classloader.php";
require_once ROOT_PATH."/class/functions.php";
$session = new Session;

$db=new db_mysql($db_host,$db_user,$db_pass,$db_name);
$db->connect();

// $link = mysql_connect($db_host, $db_user, $db_pass);
// if (!$link) {
//     die('Ошибка соединения: ' . mysql_error());
// }
// echo 'Успешно соединились';
// mysql_close($link);

//mysql_query("SET NAMES 'utf8'");
//mysql_query("SET CHARACTER SET utf8");

?>