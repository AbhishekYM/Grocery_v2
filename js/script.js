let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginform.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');
document.getElementById('cart-btn').addEventListener('click',function() {
    
        shoppingCart.classList.toggle('active');
        searchForm.classList.remove('active');
        loginform.classList.remove('active');
})

let loginform = document.querySelector('.login-form');
document.getElementById('login-btn').addEventListener('click',function(){
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginform.classList.toggle('active');
});

let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
    console.log("keval")
    navbar.classList.toggle('active');
}


// bind cart data from DB 
// <div class="shopping-cart active">
/*
<div class="box">
<i class="fa fa-trash"></i>
<img src="/Grocery/storage/image/cart-img-1.png" alt="">
<div class="content">
    <h3>Watermelon</h3>
    <span class="price">100</span>
    <span class="quantity">Qty: 2</span>
</div>
</div>
*/

// function getCartData() {    
//         $.ajax({
//             url:"get-cart-date.php",    //the page containing php script
//             type: "get",    //request type,
//             dataType: 'json',            
//             success:function(result){
//                 console.log(result);
//             }
//         });
    
    
// }

// getCartData();