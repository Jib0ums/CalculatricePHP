<?php
session_start();

if(isset($_POST)){

	if ((!empty($_POST['n1']) || (!empty($_POST['n1'])==0) && !empty($_POST['n2']) || (empty($_POST['n2'])==0))){

	if (is_numeric($_POST['n1']) && is_numeric($_POST['n2'])){
		}

	else{
		header('Location: index.php?param=empty');
		}
	}

else{
	header('Location: index.php?param=isset');
	}
}

function calcul($operateur, $n1, $n2){
	switch ($operateur) {
		case '+':
			$o= $n1+$n2;
			break;
		case '-':
			$o= $n1-$n2;
			break;
		case '*':
			$o= $n1*$n2;
			break;
		case '/':
			$o= $n1/$n2;
			break;
}

return $o;

}

$_SESSION['resultat'] = calcul($_POST['operateur'], $_POST['n1'], $_POST['n2']);
header('Location: index.php');

?>