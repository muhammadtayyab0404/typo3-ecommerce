
function Addtocart(productuid, productquant) {
    let cart = getCart(); // load existing cart from cookie
    const existingItem = cart.find(item => item.uid === productuid);

    // Find if product already exists in the cart
    if(existingItem){

      existingItem.qty= Number(existingItem.qty) + Number(productquant);
      console.log("if");

    }else{
      console.log("else");

      cart.push({ uid: productuid, qty: productquant });
    }

     dataupload(cart);



  const cartitem = {
   uid: productuid,
   qty: productquant
 };


}


function getCart() {
    const cookies = document.cookie.split(";").map(c => c.trim());
    const cartCookie = cookies.find(c => c.startsWith("cart="));

    if (cartCookie) {  
     return JSON.parse(cartCookie.substring(5));    
    }else
    return [];
}
  function dataupload(data){
    
  const cartdata = JSON.stringify(data);
  document.cookie='cart=' + cartdata +'; path=/; max-age=604800'; 

   }  






// Attach click listener once
document.getElementById("cartbutton").addEventListener("click", function() {
    const productuid = this.getAttribute("data-product");

    const quantityInput = document.querySelector("#quantityInput"); // or closest product card
    let productquant = parseInt(quantityInput.value, 10) || 1;

    const available = parseInt(quantityInput.getAttribute("data-avaliable"), 10) || 0;

    if (productquant > available) {
        alert(`Requested quantity (${productquant}) exceeds available (${available})`);
        quantityInput.value = 1;
        productquant = 1;
    }

    Addtocart(productuid, productquant);
});
