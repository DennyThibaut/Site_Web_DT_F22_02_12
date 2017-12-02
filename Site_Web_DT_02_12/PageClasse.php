<!DOCTYPE HTML>


<HTML>

	<head>
		<title> Classe LUDUS </title>
		<meta charset="utf8">
		<link rel="stylesheet" href="css/style4.css" />
		<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato|Quicksand'>
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
	</head>

	<body>
 	<form method="POST"  action="PageClasse.php" name="Formulaire">

        <select  method="POST" id="classe" name="liste">

            <?php 
            	$Etudiants= array("Classe"=>"Classe", "F1"=>"F1", "F2" =>"F2", "Bachelor" => "Bachelor", "Master" =>"Master");

                foreach($Etudiants as $Clé=>$Val){

                        echo("<option>");

                        echo("$Clé");

                        echo("</option>");

                };

            ?>	
        </select>
        	<div class="sel sel--black-panther">
	        <input  type="submit" name="OK"  value="OK!"/>	
	        </div>

		<?php 
			if (IsSet($_POST['liste'])){
	            switch($_POST['liste']){
	           		case "F1" :
	           					echo("
	           							<table>
	           								<tr>
	           									<th> Nom </th>
	           									<th> Prénom </th>
	           									<th> Statut Lundi </th>
	           									<th> Statut Mardi </th>
	           									<th> Commentaire </th>
	           								</tr>
	           								<tr>
	           									<td> ACKER </td>
	           									<td> Arnaud </td>
	           									<td>
	           										 <radiogroup name=\"PresenceE1J1\">
	           											<input type=\"radio\" name=\"PresenceE1J1\" id=\"presenceE1J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE1J1\" id=\"presenceE1J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE1J1\" id=\"presenceE1J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE2J2\">
	           											<input type=\"radio\" name=\"PresenceE2J2\" id=\"presenceE2J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE2J2\" id=\"presenceE2J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE2J2\" id=\"presenceE2J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type = \"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								
	           						");
	           					echo("		<tr>
	           									<td> ANDRIOLO </td>
	           									<td> Caroline </td>
	           									<td> 
	           										<radiogroup name=\"PresenceE3J1\">
	           											<input type=\"radio\" name=\"PresenceE3J1\" id=\"presenceE3J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE3J1\" id=\"presenceE3J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE3J1\" id=\"presenceE3J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE4J2\">
	           											<input type=\"radio\" name=\"PresenceE4J2\" id=\"presenceE4J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE4J2\" id=\"presenceE4J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE4J2\" id=\"presenceE4J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type=\"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								</tr>	
	           						</table>
	           						<script type=\"text/javascript\">
	           							var nbPresent = 0;
										var nbRetard = 0;
										var nbAbsent = 0;
								        function CalculAbsentE1J1(){
								        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE1J1.length; i++) {
                                                if (document.Formulaire.PresenceE1J1[i].checked) {
                                                    valeur = document.Formulaire.PresenceE1J1[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE3J1.length; i++) {
                                                if (document.Formulaire.PresenceE3J1[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE3J1[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Lundi : \" + nbPresent + \"  Retard Lundi : \" + nbRetard + \"  Absent Lundi : \" + nbAbsent);                               
                                        }

                                        function CalculAbsentE2J2(){
                                        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE2J2.length; i++) {
                                                if (document.Formulaire.PresenceE2J2[i].checked) {
                                                    valeur = document.Formulaire.PresenceE2J2[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE4J2.length; i++) {
                                                if (document.Formulaire.PresenceE4J2[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE4J2[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Mardi : \" + nbPresent + \"  Retard Mardi : \" + nbRetard + \"  Absent Mardi : \" + nbAbsent);

                                        } 
                                    </script>
	           						<div class=\"ButtonStyle\">
	           						<input type=\"button\" name=\"SyntheseF1\" onClick=\"CalculAbsentE1J1(); CalculAbsentE2J2();\" value=\"Synthese\">
	           						</div>
	           							

	           						");	
	           					break;
	           		case "F2" :
	           					echo("<table>
	           								<tr>
	           									<th> Nom </th>
	           									<th> Prénom </th>
	           									<th> Statut jour 1 </th>
	           									<th> Statut jour n </th>
	           									<th> Commentaire </th>
	           								</tr>
	           								<tr>
	           									<td> AULEN </td>
	           									<td> Lucas </td>
	           									<td> 
	           										<radiogroup name=\"PresenceE5J1\">
	           											<input type=\"radio\" name=\"PresenceE5J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE5J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE5J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE6J2\">
	           											<input type=\"radio\" name=\"PresenceE6J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE6J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE6J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type=\"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								
	           						");
	           					echo("		<tr>
	           									<td> BUTTANI </td>
	           									<td> Justine </td>
	           									<td> 
	           										<radiogroup name=\"PresenceE7J1\">
	           											<input type=\"radio\" name=\"PresenceE7J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE7J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE7J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE8J2\">
	           											<input type=\"radio\" name=\"PresenceE8J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE8J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE8J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type=\"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								</tr>	
	           						</table>
	           					<script type=\"text/javascript\">
	           						function CalculAbsentE5J1(){
								        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE5J1.length; i++) {
                                                if (document.Formulaire.PresenceE5J1[i].checked) {
                                                    valeur = document.Formulaire.PresenceE5J1[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE7J1.length; i++) {
                                                if (document.Formulaire.PresenceE7J1[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE7J1[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Jeudi : \" + nbPresent + \"  Retard Jeudi : \" + nbRetard + \"  Absent Jeudi : \" + nbAbsent);                               
                                        }

                                        function CalculAbsentE6J2(){
                                        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE6J2.length; i++) {
                                                if (document.Formulaire.PresenceE6J2[i].checked) {
                                                    valeur = document.Formulaire.PresenceE6J2[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE8J2.length; i++) {
                                                if (document.Formulaire.PresenceE8J2[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE8J2[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Vendredi : \" + nbPresent + \"  Retard Vendredi : \" + nbRetard + \"  Absent Vendredi : \" + nbAbsent);

                                        } 
                                    </script>
	           		
	           						<input type=\"button\" name=\"SyntheseF2\" onClick=\"CalculAbsentE5J1(); CalculAbsentE6J2();\" value=\"Synthese\">	
	           						");	 
	           						break;
	           		case "Bachelor" : 
	           						echo("<table>
	           								<tr>
	           									<th> Nom </th>
	           									<th> Prénom </th>
	           									<th> Statut jour 1 </th>
	           									<th> Statut jour n </th>
	           									<th> Commentaire </th>
	           								</tr>
	           								<tr>
	           									<td> FUCHS </td>
	           									<td> Emilien </td>
	           									<td> 
	           										<radiogroup name=\"PresenceE9J1\">
	           											<input type=\"radio\" name=\"PresenceE9J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE9J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE9J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE10J2\">
	           											<input type=\"radio\" name=\"PresenceE10J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE10J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE10J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type=\"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								
	           						");
	           						echo("	<tr>
	           									<td> ROCHAS </td>
	           									<td> Valentin </td>
	           									<td> 
	           										<radiogroup name=\"PresenceE11J1\">
	           											<input type=\"radio\" name=\"PresenceE11J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE11J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE11J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE12J2\">
	           											<input type=\"radio\" name=\"PresenceE12J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE12J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE12J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type=\"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								</tr>	
	           							</table>
	           							<script type=\"text/javascript\">
	           						function CalculAbsentE9J1(){
								        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE9J1.length; i++) {
                                                if (document.Formulaire.PresenceE9J1[i].checked) {
                                                    valeur = document.Formulaire.PresenceE9J1[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE11J1.length; i++) {
                                                if (document.Formulaire.PresenceE11J1[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE11J1[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Mercredi : \" + nbPresent + \"  Retard Mercredi : \" + nbRetard + \"  Absent Mercredi : \" + nbAbsent);                               
                                        }

                                        function CalculAbsentE10J2(){
                                        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE10J2.length; i++) {
                                                if (document.Formulaire.PresenceE10J2[i].checked) {
                                                    valeur = document.Formulaire.PresenceE10J2[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE12J2.length; i++) {
                                                if (document.Formulaire.PresenceE12J2[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE12J2[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Jeudi : \" + nbPresent + \"  Retard Jeudi : \" + nbRetard + \"  Absent Jeudi : \" + nbAbsent);

                                        } 
                                    </script>
	           		
	           						<input type=\"button\" name=\"SyntheseF2\" onClick=\"CalculAbsentE9J1(); CalculAbsentE10J2();\" value=\"Synthese\">		
	           						");
	           						break;	
	           		case "Master" : 
	           						echo("<table>
	           								<tr>
	           									<th> Nom </th>
	           									<th> Prénom </th>
	           									<th> Statut jour 1 </th>
	           									<th> Statut jour n </th>
	           									<th> Commentaire </th>
	           								</tr>
	           								<tr>
	           									<td> VELTZ </td>
	           									<td> Quentin </td>
	           									<td> 
	           										<radiogroup name=\"PresenceE13J1\">
	           											<input type=\"radio\" name=\"PresenceE13J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE13J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE13J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE14J2\">
	           											<input type=\"radio\" name=\"PresenceE14J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE14J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE14J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type=\"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								
	           						");
	           					echo("		<tr>
	           									<td> SCHNEE </td>
	           									<td> Louis </td>
	           									<td> 
	           										<radiogroup name=\"PresenceE15J1\">
	           											<input type=\"radio\" name=\"PresenceE15J1\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE15J1\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE15J1\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td>
	           										<radiogroup name=\"PresenceE16J2\">
	           											<input type=\"radio\" name=\"PresenceE16J2\" value=\"Présent\">Présent
	           											<input type=\"radio\" name=\"PresenceE16J2\" value=\"Retard\">Retard
	           											<input type=\"radio\" name=\"PresenceE16J2\" value=\"Absent\" checked>Absent
	           										</radiogroup>
	           									</td>
	           									<td> <input type=\"textarea\" placeholder=\"Commentaires\" witdh=\"100%\"> </td>
	           								</tr>	
	           						</table>
	           						<script type=\"text/javascript\">
	           						function CalculAbsentE13J1(){
								        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE13J1.length; i++) {
                                                if (document.Formulaire.PresenceE13J1[i].checked) {
                                                    valeur = document.Formulaire.PresenceE13J1[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE15J1.length; i++) {
                                                if (document.Formulaire.PresenceE15J1[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE15J1[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Jeudi : \" + nbPresent + \"  Retard Jeudi : \" + nbRetard + \"  Absent Jeudi : \" + nbAbsent);                               
                                        }

                                        function CalculAbsentE14J2(){
                                        	nbPresent = 0;
											nbRetard = 0;
											nbAbsent = 0;
			
										    var valeur = '';
                                            for (i=0; i<document.Formulaire.PresenceE14J2.length; i++) {
                                                if (document.Formulaire.PresenceE14J2[i].checked) {
                                                    valeur = document.Formulaire.PresenceE14J2[i].value;
                                                }
                                            }
                                            if (valeur == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur == \"Absent\"){
                                               	nbAbsent++;
                                            }
                                            var valeur2 = '';
                                            for (i=0; i<document.Formulaire.PresenceE14J2.length; i++) {
                                                if (document.Formulaire.PresenceE14J2[i].checked) {
                                                    valeur2 = document.Formulaire.PresenceE14J2[i].value;
                                                }
                                            }
                                            if (valeur2 == \"Présent\"){
                                               	nbPresent++;
                                            }
                                            else if (valeur2 == \"Retard\"){
                                                nbRetard++;
                                            }
                                            else if (valeur2 == \"Absent\"){
                                               	nbAbsent++;
                                            }  
                                            alert (\"Présent Vendredi : \" + nbPresent + \"  Retard Vendredi : \" + nbRetard + \"  Absent Vendredi : \" + nbAbsent);

                                        } 
                                    </script>
	           		
	           						<input type=\"button\" name=\"SyntheseF2\" onClick=\"CalculAbsentE13J1(); CalculAbsentE14J2();\" value=\"Synthese\">			
	           						");	
	           						break;

          		}
          		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        	}

        ?>
        <br/>
        <input type="button" onClick="window.location='Accueil.php'" name="Connexion" value="Connexion"><br/>
       	</form>
    </body>
</HTML>