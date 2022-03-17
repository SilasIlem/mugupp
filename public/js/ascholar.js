document.getElementById('navopener').addEventListener('click', () => {
    document.getElementById('navlinks').classList.toggle('open');
    document.querySelector('#navlinks').addEventListener('click', () => {
        document.querySelector('#navlinks').classList.remove('open');
    });
});

window.addEventListener('scroll', () => {
    document.getElementById('header').classList.toggle('header', window.scrollY > 0);
    document.getElementById('navopener').classList.toggle('showopener', window.scrollY > 0);
    document.getElementById('landing-bin').classList.toggle('notlanding', window.scrollY > 0);
});

document.getElementById('registral').addEventListener( 'click', openRegister );

function scrollToTop() {
    window.scrollTo({
        top : 0,
        behavior : 'smooth'
    });
};

function scrollToTopRegister() {
    window.scrollTo({
        top : 0,
        behavior : 'smooth'
    });
    openRegister();
};

function openRegister() {
    document.getElementById('register').classList.toggle('register');
    document.getElementById('header').classList.toggle('under');
    document.getElementById('navopener').classList.toggle('under');
};

document.getElementById('close-registry').addEventListener('click', () => {
    document.getElementById('register').classList.toggle('register');
    document.getElementById('header').classList.toggle('under');
    document.getElementById('navopener').classList.toggle('under');
})