//log in country change
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