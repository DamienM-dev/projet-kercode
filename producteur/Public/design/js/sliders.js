let images_slider = document.getElementsByClassName('images_slider');
//je vais chercher l'élément de class images_slider

let etape = 0;
//initilisations de l'étape à 0

let nbr_img = images_slider.length;

//je stock la quantité d'images 

let precedent = document.querySelector('.precedent');
let suivant = document.querySelector('.suivant');
//je vais chercher les différentes class pour mes flêches

function deleteActive() {
    for(let i = 0; i < nbr_img ; i++) {
        images_slider[i].classList.remove('active');
    }
}
// si mes images est egale à 0, alors j'incrémente de 1 et ajoute la class active au nouvel élément

suivant.addEventListener('click', function() {
    etape++;
    if(etape >= nbr_img) {
        etape = 0;
    }
    deleteActive();
    images_slider[etape].classList.add('active');
})
//lors d'un clique sur suivant, alors mon etape =+1
// On initialise etape à 0 pour faire un slider infini
//Mon image perdra la class active
//La suivante aura la class active

precedent.addEventListener('click',function() {
    etape--;
    if(etape < 0) {
        etape = nbr_img - 1;
    }
    deleteActive();
    images_slider[etape].classList.add('active');
})
//lors d'un clique sur précédent, alors mon etape =-1
// On initialise etape à 0 pour faire un slider infini
//Mon image perdra la class active
//La précédente aura la class active

setInterval(function() {
    etape++;
    if(etape >= nbr_img) {
        etape = 0;
    }
    deleteActive();
    images_slider[etape].classList.add('active');
}, 8000);
//function pour automatiser le slider


