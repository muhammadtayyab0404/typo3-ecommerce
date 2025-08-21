document.addEventListener('DOMContentLoaded', function() {
  const bitton = document.getElementById("theend");

  function bootstrapalert(message, type = "info", buttonHtml = "") {
  const container = document.getElementById("alert-container");
  container.innerHTML = `
    <div class="alert alert-${type} fade show text-center shadow-sm" role="alert" style="padding: 1.5rem; border-radius: 0.75rem;">
      <div class="mb-3">
        <strong>${message}</strong>
      </div>
      ${buttonHtml}
    </div>
  `;
}


  bitton.addEventListener('click', function() {
    let aa = feuserdata();
    let abc = "";
    let buttonHtml = "";
      
    cart=getCart();
     
    
    if (typeof aa === 'undefined') {
      abc = this.dataset.back;
      buttonHtml = `
        <a href="${abc}" class="btn btn-sm btn-primary">
          Continue
        </a>
      `;
      bootstrapalert("User is not logged in.. Login or Register your account ", "danger", buttonHtml);
    } 
    else
    { 
      if(cart.length==0)
      {
          abc=this.dataset.totheproducts
          buttonHtml = `
      <a href="${abc}" class="btn btn-sm btn-primary">
        Continue
      </a>
      `;
        bootstrapalert("There is no item in the Cart ", "danger", buttonHtml);
    }else
      
      {
      abc = this.dataset.checkout;
      window.location.href = abc;

    }
  }
  });
  
});


function feuserdata(){
     const cookies = document.cookie.split(";").map(c => c.trim());
     const procookies =cookies.find(c=>c.startsWith("feuser="));
     if (procookies){
     return JSON.parse(procookies.substring(7)); 
     } else{
        return undefined;
     }
    
}

function towardsproduct(){
tt= document.getElementById("user-info");
abcd=tt.dataset.towardsproducts;
setTimeout(() => {
window.location.href =abcd; // replace with your page URL
}, 1500);
}


document.addEventListener('DOMContentLoaded', function(){
const logouttt =document.getElementById('loggin');
 coo = feuserdata();

 if(typeof coo === 'undefined'){
  logouttt.textContent="Login";
  logouttt.classList.add("login-style");
  logouttt.classList.remove("logout-style");
 }
 else{
  logouttt.textContent="Logout";
  logouttt.classList.add("logout-style");
  logouttt.classList.remove("login-style");
 }
})

