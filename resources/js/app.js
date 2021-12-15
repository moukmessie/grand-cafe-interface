require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



const bg = document.querySelector('#burger');
const menu=document.querySelector('#menu');

const burger='<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" id="on" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />'+ '</svg>'

const burgerOff = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" id="off" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />'+'</svg>'
const on=document.querySelector('#on');
const off=document.querySelector('#off');

console.log(on);
bg.addEventListener('click',function (){
    if(menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
        on.remove();

    }else {
        menu.classList.add('hidden');

    }
})




