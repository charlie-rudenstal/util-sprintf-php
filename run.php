<?php
require_once __DIR__.'/src/Jalet/Util/Sprintf.php';


$d[] = Jalet\Util\Sprintf::f('I am %val:bool:int% years old.', array('val' => '13y'));
$d[] = Jalet\Util\Sprintf::f('I am %val:bool:str% years old.', array('val' => '13y'));

var_dump($d);