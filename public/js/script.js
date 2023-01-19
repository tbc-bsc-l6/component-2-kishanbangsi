dropdownButton = document.querySelector('#dropdown');
dropdownLink = document.querySelector('.dropdown-links');

dropdownLink.classList.add('hidden');

dropdownButton.addEventListener('click', () => {
    if (dropdownLink.classList.contains('hidden')) {
        dropdownLink.classList.remove('hidden');
    }
    else {
        dropdownLink.classList.add('hidden');
    }
});


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