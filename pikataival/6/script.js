const shoppingCart = [];
function addToCart(item) {
    shoppingCart.push(item);    
    shoppingCart.sort()
    document.querySelector('.cart').innerHTML = shoppingCart.map(item => `<li>${item}</li>`);
    document.querySelector('#item').value = ''
    console.log(shoppingCart)
}