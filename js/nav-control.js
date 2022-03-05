let mobileBtn = document.querySelector(".mobile-menu-btn");
//accordion close button
let closeBox = document.querySelector('#close-box');
let closeBox2 = document.querySelector('#close-box2');

let navBox = document.querySelector('#nav-box');
let navMenu = document.querySelectorAll('#nav-menu');
//scroll Top button
let scrollBtn = document.querySelector('[data-scroll-top]');
//Search button
let searchBtn =  document.querySelector('[data-btn=search]');
//close button
let closeBtn = document.querySelector('.close-btn');
//search container
let searchContainer = document.querySelector('.search-container');
//menu drawer controller
let mobileNav = document.querySelector('.mobile-nav');
mobileBtn.addEventListener('click',()=>{
    //change the menu container class
    navBox.classList.add('mobile-nav');
for(i=0; i < navMenu.length; i++){
    //change menu item class
   navMenu[i].classList.remove('nav-menu');
navMenu[i].classList.add('mobile-nav-menu')
}
navBox.classList.remove('nav-box');
});
//close mobile menu
closeBtn.addEventListener('click',()=>{
    navBox.classList.remove('mobile-nav');
    for(i=0; i < navMenu.length; i++){
        //change menu item class
       navMenu[i].classList.add('nav-menu');
    navMenu[i].classList.remove('mobile-nav-menu')
    }
    navBox.classList.add('nav-box');
})

/*scroll actions*/

//scroll top handler

scrollBtn.addEventListener('click',()=>{
 
   document.body.scroll({
       top:200,
       behavior: 'smooth'
   });
})
try{
closeBox.addEventListener('click',()=>{
    document.querySelector('.modal-container').style.display="none";
});
} catch(TypeError){
//
}

try{
closeBox2.addEventListener('click',()=>{
    document.querySelector('.modal-container2').style.display="none";
});
} catch(TypeError){
//
}
