const menu = document.querySelector('#menu');
const navlinks = document.querySelector('#navlinks');

menu.addEventListener('click', () => {
    if (navlinks.classList.contains('hidden')) {
        navlinks.classList.remove('hidden');
    }
    else {
        navlinks.classList.add('hidden');
    }
});
