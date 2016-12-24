<?php
//instancia da classe instrumentoFactory
require("cls_instrumentofactory.php");
$obj = new instrumentoFactory;
$ob1 = $obj->getInstrumento($_POST["instrumento"]);
if($ob1!=null) echo $ob1->tocar();
else echo "precisa passar argumento...";
?>