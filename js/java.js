

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


    //slider
    
var swiper = new Swiper(".cardSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    //breakpoints: {
    //    640: {
     //   slidesPerView: 2,
      //  spaceBetween: 20,
     //   },
       //  768: {
       //  slidesPerView: 4,
        // spaceBetween: 40,
        // },
       //  1024: {
        // slidesPerView: 5,
        // spaceBetween: 50,
        // },
       //  },
});
    