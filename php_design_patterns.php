<?php
$br = (php_sapi_name() == "cli")? "":"<br>";

if(!extension_loaded('php_design_patterns')) {
	dl('php_design_patterns.' . PHP_SHLIB_SUFFIX);
}
use PHPDesign\MacFactory;
use PHPDesign\WinFactory;
use PHPDesign\Book;
use PHPDesign\kindle;
$macObj = new MacFactory();
$macObj->CreateButton();
$winObj = new WinFactory();
$winObj->CreateButton();

$bookObj = new Book();
$bookObj->open();
$bookObj->turnPage();
var_dump($bookObj->getPage());

$kindle = new Kindle();
$kindle->unlock();
$kindle->pressNext();
var_dump($kindle->getPage());
?>
