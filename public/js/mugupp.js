document.getElementById('navopener').addEventListener('click', () => {
    document.getElementById('navlinks').classList.toggle('open');
    document.getElementById('navopener').classList.replace('bi-justify-right', 'bi-x')
    document.querySelector('#navlinks').addEventListener('click', () => {
        document.querySelector('#navlinks').classList.remove('open');
        document.getElementById('navopener').classList.replace('bi-x', 'bi-justify-right')
    });
});

window.addEventListener('scroll', () => {
    document.getElementById('nav').classList.toggle('header', window.scrollY > 0);
    document.getElementById('navopener').classList.toggle('showopener', window.scrollY > 0);
});

document.getElementById('login-opener')?.addEventListener('click', () => {
    document.getElementById('landing-bin').classList.toggle('log')
    alert(document.getElementById('container').display.scollY)
})