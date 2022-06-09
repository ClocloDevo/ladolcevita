<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Dolce Vita</title>
    <link rel="shortcut icon" href="img/favicon (2).ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="styles/vitrine01.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JS -->
    <script src="js/vitrine01.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

</head>
<body>
    <header>
        <img id="header" class="banner" src="" alt="">
    </header>

    <!-- MENU -------------------------------------------->
    <!-- <div class="navbar clr-fonce"> -->
        <div class="topnav" id="myTopnav">
            <a class="onglet" href="#header"><img src="img/logo-black.png" alt="logo"class="logo"></a>
            <a class="onglet" href="#mangiare">Carte</a>
            <a class="onglet" href="#lechef">Qui sommes nous ?</a>
            <a class="onglet" href="#noustrouver">Où nous trouver</a>
            <a class="onglet" href="#contact">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunctionMenu()">
                <i class="fa fa-bars"></i>
            </a>  
        </div>
    <!-- </div> -->

    <div id="up">
        <a id="flecheRetour" class="cInvisible" href="#header"></a>
    </div>

    <!-- QUI SOMMES NOUS --------------------------------->
    <div class="container pdd-top pdd-btm clr-colore" id="restaurant">
        <h2 class="txt-center">La Casa</h2>
        <p>Due ampie sale in legno e pietra, un bancone con sgabelli per un aperitivo o un digestivo e il caratteristico forno a legna sempre acceso: ecco La Grotta, da sempre gestita dalla famiglia Bandito. Punto di forza del locale le pizze e una cucina che propone sia specialità locali (fondute, bourguignonne, polente, selvaggina), sia piatti tipici della tradizione, come le paste all’italiana, la tagliata, il sottofiletto al pepe verde, gli antipasti con salumi locali. Si chiude in dolcezza con i dessert della casa (imperdibile il tiramisù!). La cantina ha un occhio di riguardo per i vini e le birre della Vallée d'Aosta, ma ci sono etichette da tutta Italia e una vasta selezione di grappe e digestivi. Durante la bella stagione è possibile accomodarsi nel dehors esterno.</p>
        <div id="fleche">
            <a href="#mangiare"><img src="img/icon-arrow-down.svg" alt="fleche"></a>
        </div>
    </div>

    <div class="clr-clair">
        <div id="pointe"></div>
    </div>

    <!-- MANGIARE------------------------------------------>
    <div class="container pdd-top pdd-btm clr-clair" id="mangiare">
        <div class="flex-row">
            <div class="flex-col">
                <div class="rond antipasti">
                    <!-- <img class="rond" src="img/antipasti.jpg" alt=""> -->
                </div>
                <h3>Antipasti</h3>
            </div>
            <div class="flex-col">
                <div class="rond pizza">
                </div>
                <h3>Pizza</h3>
            </div>
            <div class="flex-col">
                <a href="">
                    <div class="rond pasta"></div>
                </a>
                <a href="">
                    <h3>Pasta</h3>
                </a>
                </div>

        </div>
    </div>

    <!-- CHEF------------------------------------------>
    <div class="clr-bl pdd-top" id="lechef">
        <h2 class="">il Chef</h2>
        <div class="flex-row-end">
            <p>Gennaro Contaldo è conosciuto come la leggenda italiana che ha insegnato a Jamie Oliver tutto ciò che sa sulla cucina italiana ed è uno degli chef più amati del Regno Unito, oltre a essere autore di una dozzina di libri di ricette italiane più venduti. <br><br>

            Nato a Minori, sulla Costiera Amalfitana, Gennaro è diventato un beniamino della TV grazie al suo spirito italiano e alla sua natura positiva. Partecipa regolarmente a Saturday Kitchen e al suo programma televisivo di grande successo, Two Greedy Italians, sulla BBC2.</p>
            <div class="phChef">
                <img src="img/gennaro.jpg" alt="le chef !">
            </div>
        </div>
        
    </div>
    
    <!-- NOUS TROUVER------------------------------------------>
    <div class="container clr-colore pdd-top pdd-btm" id="noustrouver">
        <h2 class="txt-center pdd-top-xl pdd-btm-xl">Nous trouver</h2>
        <div class="flex-row mb-5">
            <!-- MAPS -->
            <div id="carte"></div>

            <!-- à agrandir -->
            <div class="adresse">
                <p class="txt-center"><strong>La Dolce Vita</strong> <br><br>
                    8 Rue de l'Huile, <br>
                    34000 MONTPELLIER</p> 
            </div>
        </div>
    </div>

<!-- CONTACT------------------------------------------>
    <div class="container clr-clair flex-col pdd-top pdd-btm" id="contact">
        <?php
            include "form/formDolce.php";
        ?>
    </div>
    
<!-- FOOTER------------------------------------------>
    <footer class="container clr-fonce">
        <div class="flex-row">
            <a href="#header"><img src="img/logo-black.png" alt="logo" class="logo-footer"></a>
            <div class="admin flex-col">
                <a href="politiqueConfidentialite.html">Politique de confidentialité</a>
                <a href="cookies.html">Cookies</a>
                <a href="mentionsLegales.html">Mentions légales</a>
                <small class="txt-center pdd-top">© Cloclo Inc. 2022 | Tous droits réservés</small>
            </div>
            <div class="reseaux txt-colore">
                <i class="fa-brands fa-facebook-square fa-2x"></i>
                <i class="fa-brands fa-twitter fa-2x"></i>
                <i class="fa-brands fa-instagram fa-2x"></i>
                <i class="fa-brands fa-youtube fa-2x"></i>
            </div>
        </div>
    </footer>

    <!--api maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTUB1PtIzMxXOqzpMmZjB61pNjxeHcdrQ&callback=initMap&v=weekly"
    async></script>
</body>
</html>