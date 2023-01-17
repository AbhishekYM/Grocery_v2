let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginform.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginform.classList.remove('active');

}

let loginform = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = () => {

    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginform.classList.toggle('active');
}

let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
    console.log("keval")
    navbar.classList.toggle('active');
}

