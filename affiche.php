<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db('bd000000');

$req1F = "select nome,villee from eleve where sexee = 'F'";
$res1F = mysql_query($req1F);

$req1H = "select nome,villee from eleve where sexee = 'H'";
$res1H = mysql_query($req1H);
?>

<p>Nombre de filles = <?php echo mysql_num_rows($res1F) ?></p>
<p>Liste des filles:</p>
<p>***********</p>
<table border="1" width="25%" bordercolor="#000000" bordercolorlight="#800000" bordercolordark="#000000">
	<tr>
		<td><b><font size="4">Nom</font></b></td>
		<td><b><span style="font-size: 14pt">Ville</span></b></td>
	</tr>
	<?php while($r = mysql_fetch_array($res1F)){ ?>
	<tr>
		<td><?php echo $r['nome']; ?></td>
		<td><?php echo $r['villee']; ?></td>
	</tr>
	<?php } ?>
</table>
<p>&nbsp;</p>
<p>Nombre de garçons = <?php echo mysql_num_rows($res1H) ?></p>
<p>Liste des garçons :</p>
<p>***********</p>
<table border="1" width="25%" bordercolor="#000000" bordercolorlight="#800000" bordercolordark="#000000">
	<tr>
		<td><b><font size="4">Nom</font></b></td>
		<td><b><span style="font-size: 14pt">Ville</span></b></td>
	</tr>
	<?php while($r = mysql_fetch_array($res1H)){ ?>
	<tr>
		<td><?php echo $r['nome']; ?></td>
		<td><?php echo $r['villee']; ?></td>
	</tr>
	<?php } ?>
</table>

<?php
mysql_close();
?>