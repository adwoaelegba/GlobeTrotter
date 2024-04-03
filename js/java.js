//log in country change
document.addEventListener('DOMContentLoaded', function() {
var countries= ['Bali', 'Greece', 'The Maldives','Mauritius', 'Japan','Ghana','Morrocco', 'Ireland','India','Turkey','Italy'];

function RandCountry(){
    return countries[Math.floor(Math.random()* countries.length)];
}

function changeCountry() {
    var country=document.getElementById('country');
    var getCountry=RandCountry();
    country.textContent=getCountry;


}

RandCountry();

setInterval(changeCountry,1500);

});

//JS valiidation
var emailError= document.getElementById('email-error');
var passError= document.getElementById('pass-error');


function valEmail(){
    var email = document.getElementById('email').value;

    if(email.length==0){
        emailError.innerHTML='Email field is empty'
        return false;

    }

    
    if(!email.match(/^[A-Za-z]\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
            emailError.innerHTML='Email invalid'
            return false;
     }

     emailError.innerHTML= '<i class="fa-regular fa-square-check"></i>'
     return true;

    }
