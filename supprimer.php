<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db('bd000000');

$numero = $_POST['T1'];

$req1 = "select * from eleve where nume = '$numero'";

$res1 = mysql_query($req1);
if(mysql_num_rows($res1) == 0){
	echo 'impossible de supprimer un éléve inexistant!';
}else{
	$req2 = "delete from eleve where nume = '$numero'";
	$res2 = mysql_query($req2);
	if(mysql_affected_rows() > 0){
		echo 'Eléve supprimer avec succés!';
	}else{
		echo "probléme lors de suppression de l'éléve";
	}
}