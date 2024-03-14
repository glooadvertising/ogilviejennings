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

open.addEventListener('click', () => {
    show.classList.toggle('show')
})
close.addEventListener('click', () => {
    show.classList.toggle('show')
})

