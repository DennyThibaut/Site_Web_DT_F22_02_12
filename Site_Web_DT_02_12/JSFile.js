var i=0;
function ConfNomPrenom(){

	var nom=document.Formulaire.Nom.value;

    var prenom=document.Formulaire.Prenom.value;

	confirm ("Votre nom est "+prenom+" "+nom);
}

function VerifMDP(){

    var passwordattendu=document.Formulaire.Mdp.value;

    var password=document.Formulaire.MotDePasse.value;

    var compteur=3;

	if (password!=passwordattendu){

        compteur=compteur-1; 

        alert("Erreur dans votre mot de passe. Nombre d'essais restants: "+compteur);

    }

    if (compteur==0){
        alert("Erreur, vous avez mal écrit votre mot de passe 3 fois d'affilée");
        window.location='Accueil.php';
    }

 	if (password==passwordattendu){
        alert("Mot de passe corect !");
    }
}

function VerifFinale(){
	var champ_obligatoire = [ 'nom', 'prenom', 'mail', 'mdp' ];
	var champ_plein = true;
    var elmt = document.getElementById("Valide");
	for (var h=0; h<4; h++){
   		 valeur = document.getElementById(champ_obligatoire[h]).value;
    	if( (valeur.length == 0) || (valeur == "") || (valeur == "NULL") ){
        champ_plein = false;

	   }
 
	   if (champ_plein){
	       document.getElementById('Valide').disabled = false;
            elmt.style.backgroundColor = "green";
 	   }
	    else{
		document.getElementById('Valide').disabled = true;
	   }
    }
}


function Validation(){

    var PasswordOk = document.Formulaire.Mdp.value;
    var VerifPassword = document.Formulaire.MotdePasse.value;
        if (PasswordOk != VerifPassword){
            alert("veuillez entrer un mot de passe valide ");
            i++;
            alert(i);
            if (i == 3){
                alert("ERREUR TENTATIVE DE FRAUDE");
                window.location=('Accueil.php');
            }
        }
}