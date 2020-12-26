<?php
$tab=array();
//creation
for ($i=11;$i <37; $i++) { 
  $tab[$i]=chr(54+$i);
}

//with for
echo "<center><p><h2> Avec for </h2>";
for ($i=11;$i <37; $i++) {
echo "Indice: ".$i."&nbsp;&nbsp;&nbsp;&nbsp;valeur: ".$tab[$i];
echo "<br>";
}
echo "</p>";
//with foreach
echo "<p><h2> Avec foreach </h2>";

foreach($tab as $i => $valeur)
{
echo "Indice: ".$i." &nbsp;&nbsp;&nbsp;&nbsp;valeur: ".$valeur."<br>";
}
echo "</center></p>";
?>