<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Page d'Authentification</title>
        <link rel="stylesheet" href="css/style.css" />
        
    </head>
    <body>
        <script src="JSFile.js"></script>

        <div class="main">
            <div class="login-head">
                <h1>Unskyi Entertainment </h1>
            </div>
                <div  class="wrap">
                    <div class="Regisration">
                        <div class="Regisration-head">
                            <h2><span></span>Register</h2>
                        </div>
                            <FORM method="POST" action="PageReponse.php" name="Formulaire" id="Form">

                                <input type="text" placeholder="Nom" name="Nom" id="nom" required onchange="VerifFinale();"> <br/><br/>
                                <input type="text" placeholder="Prénom" name="Prenom" id="prenom" onchange="ConfNomPrenom();" onchange="VerifFinale();" required > <br/><br/>

                                <radiogroup name="Civilite">
                                <input type="radio" name="Civilite" value="Homme">H
                                <input type="radio" name="Civilite" value="Femme">F

                                </radiogroup>
                                <br/><br/>
                                <p> Mot de passe : </p> 
                                <input type="password"  id="mdp" name="Mdp" onchange="VerifFinale();" required> <br/><br/> 
                                <input type="password"  id="MDP" name="MotdePasse" onblur="Validation();">

                                <input type="email" name="Email" placeholder="Email" id="mail" onchange="VerifFinale();"  required>
                                <br/><br/>
                                <input type="date" name="Date"  placeholder="Date de naissance" ><br/><br/>

                                <input type="number" placeholder="Taille (cm)" id="Taille" name="taille"><br/><br/>

                                <input type="number" placeholder="Poids (kg)" id="Poids" name="poids"><br/>

                                <input type="submit" name="Valid" value="Valider" id="Valide"  disabled="true">
                            </FORM>
   
    </body>
</html>


        