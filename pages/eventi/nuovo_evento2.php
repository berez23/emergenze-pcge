<?php

session_start();

include '/home/local/COMGE/egter01/emergenze-pcge_credenziali/conn.php';






$query_max= "SELECT max(id) FROM eventi.t_eventi;";
$result_max = pg_query($conn, $query_max);
while($r_max = pg_fetch_assoc($result_max)) {
	if ($r_max["max"]>0) {
		$new_id=$r_max["max"]+1;
	} else {
		$new_id=1;	
	}
}

echo $new_id;
echo "<br>";


$query="INSERT INTO eventi.t_eventi (id) VALUES(".$new_id.")";
echo $query;
$result = pg_query($conn, $query);
echo "<br>";


$query="INSERT INTO eventi.join_tipo_evento (id_evento, id_tipo_evento) VALUES(".$new_id.", ".$_POST["tipo_evento"].")";
echo $query;
$result = pg_query($conn, $query);
echo "<br>";





$check = isset($_POST['check']) ? $_POST['check'] : array();
foreach($check as $municipio) {
  //echo $municipio . '<br/>';
  $query="INSERT INTO eventi.join_municipi (id_evento, id_municipio, data_ora_inizio) VALUES(".$new_id.", ".$municipio.",now())";
  echo $query . '<br/>';
  $result = pg_query($conn, $query);
}






if ($_POST["note"]){
	$query="INSERT INTO eventi.t_note_eventi (id_evento, nota) VALUES(".$new_id.", '".$_POST["note"]."')";
	echo $query;
	$result = pg_query($conn, $query);
}



//exit;



$query_log= "INSERT INTO varie.t_log (schema,operatore, operazione) VALUES ('users','".$_SESSION["Utente"] ."', 'Creazione evento n. ".$new_id."');";
$result = pg_query($conn, $query_log);



//$idfascicolo=str_replace('A','',$idfascicolo);
//$idfascicolo=str_replace('B','',$idfascicolo);
echo "<br>";
echo $query_log;

//exit;
header("location: ../dettagli_evento.php?id=".$cf);


?>