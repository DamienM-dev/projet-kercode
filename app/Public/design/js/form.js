window.onload = () => {
    let mail = document.querySelector("#mail");

    mail.addEventListener("change", function(){
        let type = new Email();

        if(type.isValid(this.value)){
            this.classList.remove("invalid");
        }else {
            this.classList("invalid");
        }
    });
};