const nav = document.querySelector('nav');
const navText = document.querySelector('ul p')


window.addEventListener('scroll', () => {
    if (window.scrollY >= 50) {
        nav.classList.add('navActive');
        navText.classList.add('navTextActive');
    } else {
        nav.classList.remove("navActive");
        navText.classList.remove('navTextActive');
    }
})