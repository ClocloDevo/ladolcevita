// ----- Flèche retour vers le haut -----
// http://www.trucsweb.com/tutoriels/javascript/retour-haut/
document.addEventListener('DOMContentLoaded', function() {
    window.onscroll=function(ev){
    document.getElementById("flecheRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
    };
});