let burger = document.querySelector('.burger')
let mobileMenu = document.querySelector('.mobile-menu')

burger.addEventListener('click', () => {
    burger.classList.toggle('cross')
    mobileMenu.classList.toggle('visible')
})