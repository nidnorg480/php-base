<?php

$seconds = date('s'); // Renvoie 00, 01 ou 54

echo date('l d F Y');
echo ', il est ';
echo date('H\hi \e\t ');
echo $seconds . 'seconde';
echo ($seconds > 1) ? 's' : '';


// Quel jour il sera dans 10 jours ?

var_dump(date('d/m/Y', time()));
var_dump(date('d/m/Y', strtotime('+ 10 days')));
