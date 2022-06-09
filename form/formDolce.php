<!DOCTYPE HTML>  
<html>

  <head>
    <style>
        .error {
            color: #FF0000;
            font-size:12px;
            margin:0;
        }
        form {
            background-color: #c69c6d;
            max-width: 300px;
            box-shadow: 2px 2px 2px 1px rgba(255, 255, 255, 0.2);
            border-radius: 1em;
            padding: 1em 1em;
            /* margin: 3em; */
        }
        .form-container {
            width: 100%;
            display: grid;
            gap: 0.2em;
            grid-auto-columns: 100%;
            overflow: hidden;
        }
        .form-title {
            color: #2d3142;
            text-align: center;
            font-size: 1.9rem;
            margin-top: 0.4em;
            margin-bottom: .4em;
        }
        .p-form{
            margin:0;
        }
        .form-input {
            text-align: left;
            font-family: inherit;
            font-size: 1rem;
            padding: .8em 1em;
            outline: none;
            border: none;
            border: 1px solid #bbb;
            border-radius: 0.2em;
        }
        .form-input--message {
            resize: none;
        }
        .form-input-btn {
            font-family: inherit;
            font-size: 1rem;
            font-weight: 400;
            background-color: #2d3142;
            color: white;
            border-radius: 0.2em;
            border: none;
            height: 30px;
            cursor: pointer;
        }
        textarea{
            padding: 9px;
        }
        .ok {
            text-align: center;
            width: 100%;
            padding: 12px;
            background-color: #1e6;
            color: #fff
        }
        .bad {
            text-align: center;
            width: 100%;
            padding: 12px;
            background-color: #a22;
            color: #fff
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  
  <body>  
    <?php

        include "connexion.php";

        // define variables and set to empty values
        $nomErr = $prenomErr = $emailErr = "";
        $nom = $prenom = $email = $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nom"])) {
                $nomErr = "Nom est requis";
            } else {
                $nom = test_input($_POST["nom"]);
                // check if nom only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
                    $nomErr = "Seules les lettres et les espaces sont autorisés";
                }
            }

            // if (empty($_POST["prenom"])) {
            //     $prenomErr = "Prenom est requis";
            // } else {
            //     $prenom = test_input($_POST["prenom"]);
            // // check if prenom only contains letters and whitespace
            //     if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
            //         $prenomErr = "Seules les lettres et les espaces sont autorisés";
            //     }
            // }

            if (empty($_POST["email"])) {
                $emailErr = "Email requis";
            } else {
                $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Format d'email invalide";
                }
            }
                
            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            //Ajouter if captcha est rempli (success)
            $reg_date = date("d-m-Y h:i:sa");
            $requete = "INSERT INTO DolceVitaContact(nom, prenom, email, commentaire, reg_date) VALUES ('$nom','$prenom','$email','$comment','$reg_date')";
            $resultat = mysqli_query($conex,$requete);
            if ($resultat) {
                ?> 
                    <h3 class="ok">Message envoyé avec succès !</h3>
                <?php
            } else {
                ?> 
                    <h3 class="bad">Oops, une erreur est survenue !</h3>
                <?php
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
      
    ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-container">
            <h3 class="form-title">Contactez-nous !</h3>
            <p class="p-form"><span class="error">* champs obligatoires</span></p>
            <input type="text" class="form-input" placeholder="*Nom" name="nom" value="<?php echo $nom;?>">
            <span class="error"><?php echo $nomErr;?></span>
            <br><br>
            <!-- <input type="text" class="form-input" placeholder="*Prénom" name="prenom" value="<?php //echo $prenom;?>"> 
            <span class="error"><?php //echo $prenomErr;?></span>
            <br><br>-->
            <input type="text" class="form-input" placeholder="*Courriel" name="email" value="<?php echo $email;?>">
            <span class="error"><?php echo $emailErr;?></span>
            <br><br>
            <textarea placeholder="Message" class="form-input form-input--message" name="comment"><?php echo $comment;?></textarea>
            <br><br>
            <div>
                <div class="g-recaptcha" data-sitekey="6Ld_F1kgAAAAAAoiRHKA9gAAlYVAn257mPggROot">></div>
            </div>
            <input type="submit" class="form-input-btn" name="submit" value="Envoyer">
        </div>
    </form>

  </body>
</html>