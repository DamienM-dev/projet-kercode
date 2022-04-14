//JSON.stringify, transforme un objet complexe (tableau) en chaine de charactére récupérable grace a JSON.parse dans le localstorage
//On l'utilise car le localstorge ne permettent que de stocker des objets simples (string, nombre...)

function saveBasket(basket){
    localStorage.setItem("basket", JSON.stringify(basket));
}

//récupére la clé enregistré 

function getBasket(){
    let basket = localStorage.getItem("basket");

    if(basket == null) {
        //panier vide
        return [];

    } else {
        return JSON.parse(basket);
    }
}

//Ajouter au panier

//on push les produits
//on sauvegarde le panier
//find function permettant de trouver un élément dans un tableau par rapport à une condition

function addBasket(product)
{

    let basket = getBasket();
    let foundProduct = basket.find(p => p.id == product.id);

    if(foundProduct != undefined) {

        foundProduct.quantity++;

    }else {
        product.quantity = 1;
        basket.push(product);
    }

    saveBasket(basket);
}

//supprimer du panier

function removeFromBasket(product)
{
    let basket = getBasket();
    basket = basket.filter(p => p.id != product.id);
    saveBasket(basket);
}

//modifier quantité

function modifyQuantity(product, quantity)
{
    let basket = getBasket();
    let foundProduct = basket.find(p => p.id == product.id);

    if(foundProduct != undefined) {

        foundProduct.quantity += quantity;
        if(foundProduct.quantity <= 0) {
            removeFromBasket(foundProduct);
        } else {
            saveBasket(basket);
        }
    }     
}

function getNumberProduct()
    {
        let basket = getBasket();
        let number = 0;

        for(let product of basket) {

            number += product.quantity
        }

        return number;
    }

  function getPrice()
  {
    let basket = getBasket();
    let total = 0;

    for(let product of basket) {

       total += product.quantity * product.price
    }

    return total;
  }