<?php 

$subtitle="Utente non accreditato";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="roberto" >

    <title>Gestione emergenze</title>
<?php 
require('./req.php');

require(explode('emergenze-pcge',getcwd())[0].'emergenze-pcge/conn.php');

//require('./check_evento.php');
?>
    
</head>

<body>

    <div id="wrapper">

        <?php 
            //require('./navbar_up.php')
        ?>  
        <?php 
            //require('./navbar_left.php')
        ?> 
        <div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li class="nav-item active">
						<a class="nav-link" href="index.php"><i class="fas fa-sync"></i>Ricarica prima pagina</a>
					</li>
				</ul>
			</div>
		</div>

        <div id="page-wrapper">
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    <i class="fas fa-minus-circle fa-2x faa-pulse animated" style="color:#ff0000"></i>
                    L'utente non è autorizzato a visualizzare questa pagina
                    <i class="fas fa-minus-circle fa-2x faa-pulse animated" style="color:#ff0000"></i>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
				<div class="row">
					Quali possono essere le ragioni? 
					<ul> 
					<li> Il tuo utente non può accedere a questa pagina, ma se clicchi sul tasto "dashboard" 
					tornerai a navigare nel sistema ) </li>
					<li> Se anche cliccando su dashboard continui a visualizzare questa pagina significa che 
					non hai ancora gli accessi al sistema. Scopri qua sotto come fare.</li>
				</div>
            <hr>
            <!--br><br>
            <div class="row">
				<i class="fas fa-minus-circle fa-9x"></i>
				<br><br-->
				<h1><i class="fas fa-plus-square fa-2x faa-pulse animated" style="color:#007c37"></i> Sei un nuovo utente? Scopri qua sotto come ottenere i permessi:</h1>
				<ul>
				<h3><li><i class="fas fa-user"></i> <b>Dipendenti del Comune di Genova:</b>
				contattare l'amministratore di sistema per ottenere i permessi 
				(<a href="mailto:adminemergenzepc@comune.genova.it?subject=Permessi%20utente%20PC%20">amministratore</a>).
				</li>
				</h3>
				<h3><li><i class="far fa-user"></i> <b>Esterni (volontari, az. partecipate, etc)</b>:
					<ol>
					<li> Registrarsi <a href='add_volontario.php'> qui </a></li>
					<li> Dopo aver terminato la registrazione comunicare tramite il proprio responsabile i propri dati (Nome, Cognome, CF) all'amministratore di sistema
					(<a href="mailto:adminemergenzepc@comune.genova.it?subject=Permessi%20utente%20PC%20">amministratore</a>).
					</li>
					</ol>
				</li>
				</h3>
				</ul>
			</div>
            <!-- /.row -->
    </div>
    <!-- /#wrapper -->

<?php 
require('./footer.php');

require('./req_bottom.php');


?>


    

</body>

</html>
