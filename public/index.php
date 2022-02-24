<?php
require('public/header.php');
require('public/phantomLogin.php');

var_dump($_SESSION); //For debug

if(isset($_SESSION['connected'])) {
	var_dump($_SESSION['connected']);//Here is your wallet id
}
if (isset($_GET['page'])) {
    if (file_exists('public/views/' . $_GET['page'] . '.php')) {
        require('public/views/' . $_GET['page'] . '.php');
    } else {
        require('public/views/error.php'); //error 404
    }
	require('public/footer.php');
} else {
?>

<?php 
	require('public/footer.php');
}
?>