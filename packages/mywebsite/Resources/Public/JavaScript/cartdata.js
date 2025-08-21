
document.addEventListener('DOMContentLoaded', function() {    
  const qua = document.querySelectorAll(".quantity-input");

  qua.forEach(input =>{
    input.addEventListener('change', function(){
      const qty= parseInt(this.value);
      const uuid = this.getAttribute('data-uid');
      
      cart=getCart();
      
      const existingItem = cart.find(item => item.uid === uuid);
      if(existingItem){
        existingItem.qty = qty;
      }

   dataupload(cart);
   reloadpage();
    });

  });
  
});

document.addEventListener('DOMContentLoaded', function() {

   abc= document.querySelectorAll(".yamaha")
   abc.forEach(buttonn =>{
    buttonn.addEventListener("click", function(){
    uid =  this.getAttribute("data-uidd")

    cart=getCart();
    const existing= cart.find(item=>item.uid === uid);

    cart = cart.filter(item=>item.uid !==uid);
       dataupload(cart);

        const row = this.closest('tr');
      if (row) {
        row.remove();
        
      }
}

   );
   });
});

function reloadpage(){
  location.reload();
}



function interval()
{

   let oldvalue = parseInt(document.getElementById('livenumber').textContent, 10);
setInterval(()=>{

  aa=getCart();
  
  let total =0;
  for(let i=0 ;i<aa.length; i++){
    total=total+ parseInt(aa[i].qty, 10) ||0;
 
  }


document.getElementById('livenumber').textContent = total;

 if(oldvalue !== total){
  const cartTag = document.getElementById('livenumber');
  cartTag.classList.add('cart-bounce');

  setTimeout(() => {
  cartTag.classList.remove('cart-bounce');  
  }, 300);

}else
  console.log("number is same");
oldvalue= total;

console.log(currentUserId);
},1000
);
}


document.addEventListener('DOMContentLoaded', function(){
  
  interval();

})  










