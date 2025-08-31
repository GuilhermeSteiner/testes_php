<?php

function fibonacci($x) {

	if ($x == 0 || $x == 1) {return 1;}
	else {return fibonacci($x-2) + fibonacci($x-1);}

}

echo "Digite o termo da sequencia de fibonacci que voce quer descobrir o valor: ";
$y = readline();
$y = fibonacci($y);
echo "O termo é $y";

?>