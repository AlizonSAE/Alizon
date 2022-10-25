var boutonCategories = document.getElementById("bouton-categories");
var sousMenu = document.getElementById("section-menu-3");
var declencheur = document.querySelectorAll(".modifications-mutuelles");
var affiche = false;

for(var i = 0; i < declencheur.length; i++){
    declencheur[i].addEventListener("click", function(){
        if(affiche == false){
            sousMenu.style.display = "block";
    
            boutonCategories.style.border = "solid #496a79";
            boutonCategories.style.borderWidth = "1px 1px 0 1px";
            affiche = true;
        }

        else{
            sousMenu.style.display = "none";

            boutonCategories.style.border = "none";
            boutonCategories.style.borderWidth = "0 0 0 0";
            affiche = false;
        }
    }, false);
}