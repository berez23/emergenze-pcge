<?php

include '/home/local/COMGE/egter01/emergenze-pcge_credenziali/conn.php';

$getfiltri=$_GET["f"];
$filtro_evento_attivo=$_GET["a"];
$filtro_municipio=$_GET["m"];
$filtro_from=$_GET["from"];
$filtro_to=$_GET["to"];


$pagina=$_POST["pagina"];


$query='SELECT * FROM geodb.municipi;';
$result = pg_query($conn, $query);
#echo $result;
//exit;
//$rows = array();
$filter='';
while($r = pg_fetch_assoc($result)) {
	#echo $r['codice_mun'];
	
    $name='filter'.$r['codice_mun'];
    if ($_POST["$name"]==1) {
        $filter=$filter.'1';
    } else {
         $filter=$filter.'0';
    }
}

#echo $filter; 
#exit;
header("Location: ../".$pagina."?m=".$filter."&a=".$filtro_evento_attivo."&from=".$filtro_from."&to=".$filtro_to."&f=".$getfiltri."");



?>