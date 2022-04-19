document.querySelector('.validationForm input[type="submit"]').addEventListener("click", (e) => {
    e.preventDefault();

    //prend la valeur de input, et et vérifie si il est valide sinon affiche message erreur

    let valid = document.querySelector('.validationForm').checkValidity();


    if(!valid){

        message(input);
    }
});

function message(input){

    if(input.validity.valueMissing){

        input.setCustomValidity("Ce champ est obligatoire");
    }
    if(input.validity.tooShort){

        input.setCustomValidity(`Ce champ doit comporter au minimum ${input.minLength} caractéres`);
    }
    input.reportValidity();

}

//checkValidity est identique à reportValidity() quaf que lui ne renvois aucun message quand champs non valid