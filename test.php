<?php
include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(3);
$listInteger->add(5);
$listInteger->add(9);
$listInteger->add(7);
echo $listInteger->get(1)."<br>";
echo $listInteger->size()."<br>";
