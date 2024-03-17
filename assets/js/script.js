AOS.init();

let burger = document.querySelector('.burger')
let mobileMenu = document.querySelector('.mobile-menu')

burger.addEventListener('click', () => {
    burger.classList.toggle('cross')
    mobileMenu.classList.toggle('visible')
})

let close = document.querySelector('#close')
let open = document.querySelector('#open')
let show = document.querySelector('#show')
let link = document.querySelectorAll('.lawyers-list details ul li a')

open.addEventListener('click', () => {
    show.classList.toggle('show')
})
close.addEventListener('click', () => {
    show.classList.toggle('show')
})
// link.addEventListener('click', () => {
//     show.classList.toggle('show')
// })
for (let i = 0; i < link.length; i++) {
    link[i].addEventListener('click', () => {
        show.classList.toggle('show');
    });
}
burger.addEventListener('click', () => {
    show.classList.remove('show');
})
open.addEventListener('click', () => {
    mobileMenu.classList.remove('visible')
    burger.classList.toggle('cross')
})


