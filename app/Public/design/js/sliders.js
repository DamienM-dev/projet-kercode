//je vais chercher l'élément de class images_slider

let images_slider       = document.getElementsByClassName('images_slider');
let photo_testimonials  = document.getElementsByClassName('photo_testimonials');
let testimonials        = document.getElementsByClassName('testimonials');


//initilisations de l'étape à 0
let etape = 0;

//je stock la quantité d'images 
let nbr_img = images_slider.length;


//je vais chercher les différentes class pour mes flêches
let precedent   = document.querySelector('.precedent');
let suivant     = document.querySelector('.suivant');

// si mes images est egale à 0, alors j'incrémente de 1 et ajoute la class active au nouvel élément
// Les témoignages c'est l'inverse, ils démarrent caché et apparaissent
function deleteActive() {
    for(let i = 0; i < nbr_img ; i++) {
        images_slider[i].classList.remove('active') & photo_testimonials[i].classList.remove('active') & testimonials[i].classList.add('hidden') ;
    }
}

//lors d'un clique sur suivant, alors mon etape =+1
// On initialise etape à 0 pour faire un slider infini
//Mon image perdra la class active
//La suivante aura la class active
suivant.addEventListener('click', function() {
    etape++;
    if(etape >= nbr_img) {
        etape = 0;
    }
    deleteActive();
    images_slider[etape].classList.add('active') & photo_testimonials[etape].classList.add('active') & testimonials[etape].classList.remove('hidden');
})

//lors d'un clique sur précédent, alors mon etape =-1
// On initialise etape à 0 pour faire un slider infini
//Mon image perdra la class active
//La précédente aura la class active
precedent.addEventListener('click',function() {
    etape--;
    if(etape < 0) {
        etape = nbr_img - 1;
    }
    deleteActive();
    images_slider[etape].classList.add('active') & photo_testimonials[etape].classList.add('active') & testimonials[etape].classList.remove('hidden');
})

//function pour automatiser le slider
setInterval(function() {
    etape++;
    if(etape >= nbr_img) {
        etape = 0;
    }
    deleteActive();
    images_slider[etape].classList.add('active') & photo_testimonials[etape].classList.add('active') & testimonials[etape].classList.remove('hidden');
}, 8000);


