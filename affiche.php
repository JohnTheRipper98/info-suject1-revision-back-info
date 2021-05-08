<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db('bd000000');

$req1NombreFilles = "select * from eleve where sexe = 'F'";
$res1NombreFilles = mysql_query($req1NombreFilles);


$req1NombreGarcon = "select * from eleve where sexe = 'H'";
$res1NombreGarcon = mysql_query($req1NombreGarcon);

$req1Filles = "select * from eleve where sexe = 'F'";
$res1Filles = mysql_query($req1Filles);

$req1Garcon = "select * from eleve where sexe = 'H'";
$res1Garcon = mysql_query($req1Garcon);
?>

<p>Nombre de filles = <?php echo mysql_num_rows($res1NombreFilles) ?></p>
<p>Liste des filles:</p>
<p>***********</p>
<table border="1" width="25%" bordercolor="#000000" bordercolorlight="#800000" bordercolordark="#000000">
	<tr>
		<td><b><font size="4">Nom</font></b></td>
		<td><b><span style="font-size: 14pt">Ville</span></b></td>
	</tr>
	<?php while($r = mysql_fetch_array($res1Filles)){ ?>
	<tr>
		<td><?php echo $r['nome']; ?></td>
		<td><?php echo $r['ville']; ?></td>
	</tr>
	<?php } ?>
</table>
<p>&nbsp;</p>
<p>Nombre de garçons = <?php echo mysql_num_rows($res1NombreGarcon) ?></p>
<p>Liste des garçons :</p>
<p>***********</p>
<table border="1" width="25%" bordercolor="#000000" bordercolorlight="#800000" bordercolordark="#000000">
	<tr>
		<td><b><font size="4">Nom</font></b></td>
		<td><b><span style="font-size: 14pt">Ville</span></b></td>
	</tr>
	<?php while($r = mysql_fetch_array($res1Garcon)){ ?>
	<tr>
		<td><?php echo $r['nome']; ?></td>
		<td><?php echo $r['ville']; ?></td>
	</tr>
	<?php } ?>
</table>