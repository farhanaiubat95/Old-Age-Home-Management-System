/*===========================================
   Nav Login Button Toggle for mobile version
============================================*/ 

let login_btn = document.querySelector('.login');
let navbar = document.querySelector('.body');
login_btn.onclick= function(){
   navbar.classList.toggle("active");
  };
  


/*===================================
   Nav Toggle icon toggle for mobile version
=====================================*/ 
const menubtn = document.querySelector('.navbtn');
const nav_bar = document.querySelector('.body');
menubtn.onclick= function(){
   nav_bar.classList.toggle("active1");
  };


/*===========================================
   Nav background color change when scrolling
============================================*/ 
const navEl = document.querySelector('.body');

window.addEventListener('scroll', () => {
 if(window.scrollY >= 100){
   navEl.classList.add('active3')
 }else if(window.scrollY < 100){
   navEl.classList.remove('active3')
 }
});



