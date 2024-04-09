

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
    spaceBetween: 20,
    slidesOffsetBefore: 0,
    slidesOffsetAfter:0,
    speed:800,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        710: {
            slidesPerView: 2,
            slidesOffsetBefore: 30,
        },
        780: {
            slidesPerView: 2.2,
            slidesOffsetBefore: 30,
        },
        
        1070: {
            slidesPerView: 3,
            slidesOffsetBefore: 30,
        },

        1280: {
            slidesPerView: 3.7,
            slidesOffsetBefore: 30,
        },
        1560: {
        slidesPerView: 4.4,
        slidesOffsetBefore: 30,
        },
   
   },
});



//open modal

const header=document.querySelector(".header");
//const sliderNav= document.querySelector(".slide-nav");
const readMore= document.querySelectorAll(".read-more-btn");

 function openModal(){
    header.classList.add("hide");
    //sliderNav.classList.add("hide");
   
}

readMore.forEach((readBtn) =>{
    readBtn.addEventListener("click", openModal);
    //readBtn.addEventListener("click",() => {
        //openModal(i)
    });
    
//});

    