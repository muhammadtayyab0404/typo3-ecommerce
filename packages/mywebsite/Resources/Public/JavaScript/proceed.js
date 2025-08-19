document.addEventListener('DOMContentLoaded',function(){
const bitton = document.getElementById("theend");
bitton.addEventListener('click', function(){

  aa = feuserdata();
   if (typeof aa === 'undefined') {
     alert("User is not logged in.. Login or Register your account ");
     abc = this.dataset.back;
     window.location.href=abc;
    }else{
    alert("User Logged in " +aa);

    abc =this.dataset.checkout;
    window.location.href=abc;
    }
  
})
})


function feuserdata(){
     const cookies = document.cookie.split(";").map(c => c.trim());
     const procookies =cookies.find(c=>c.startsWith("feuser="));
     if (procookies){
     return JSON.parse(procookies.substring(7)); 
     } else{
        return undefined;
     }
    
}