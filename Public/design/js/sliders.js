let images_slider = document.getElementsByClassName('images_slider');

let etape = 0;

let nbr_img = images_slider.length;

let precedent = document.querySelector('.precedent');
let suivant = document.querySelector('.suivant');

function deleteActive() {
    for(let i = 0; i < nbr_img ; i++) {
        images_slider[i].classList.remove('active');
    }
}

suivant.addEventListener('click', function() {
    etape++;
    if(etape >= nbr_img) {
        etape = 0;
    }
    deleteActive();
    images_slider[etape].classList.add('active');
})

precedent.addEventListener('click',function() {
    etape--;
    if(etape < 0) {
        etape = nbr_img - 1;
    }
    deleteActive();
    images_slider[etape].classList.add('active');
})

setInterval(function() {
    etape++;
    if(etape >= nbr_img) {
        etape = 0;
    }
    deleteActive();
    images_slider[etape].classList.add('active');
}, 8000);