<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db('bd000000');

$numero = $_POST['T1'];
$nom  = $_POST['T2'];
$email = $_POST['T3'];
$sexe = $_POST['R1'];
$ville = $_POST['D1'];

$req1 = "select * from eleve where nume = '$numero'";
$res1 = mysql_query($req1);
if(mysql_num_rows($res1) > 0){
	echo 'El�ve existe d�ja!';
}else{
	$req2 = "insert into eleve (nume,nome,emaile,sexe,ville) values ('$numero','$nom','$email','$sexe','$ville')";
	$res2 = mysql_query($req2);
	if(mysql_affected_rows() > 0){
		echo 'El�ve ajout� avec succ�s!';
	}else{
		echo "probl�me lors de l'ajout de l'�l�ve";
	}
}

mysql_close();

?>