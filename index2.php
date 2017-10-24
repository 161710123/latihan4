<?php

require_once 'index1.php';

$robot1 = new mobil ('ngung ngung',1000);
$robot2 = new mobil ('ngeng ngeng',1000);
$robot1->set_berat(100);
$robot2->set_suara ('ngeng ngeng');
echo "berat mobil :".$robot1->get_berat() . '<br>';
echo "suara mobil :".$robot2->get_suara() . '<br>';



?>