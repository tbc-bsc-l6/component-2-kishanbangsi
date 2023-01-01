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


const book = document.querySelector('#author');
const cd = document.querySelector('#band');
const game = document.querySelector('#studio');
const page = document.querySelector('#pages');
const playlength = document.querySelector('#playlength');
const productType = document.querySelector('#category');

// When page loads
if (productType.value == "book") {
    game.parentElement.classList.add('hidden');
    cd.parentElement.classList.add('hidden');
    playlength.parentElement.classList.add('hidden');
}
else if (productType.value == "game") {
    book.parentElement.classList.add('hidden');
    page.parentElement.classList.add('hidden');
    cd.parentElement.classList.add('hidden');
}
else if (productType.value == "cd") {
    cd.parentElement.classList.remove('hidden');
    playlength.parentElement.classList.remove('hidden');

    book.parentElement.classList.add('hidden');
    page.parentElement.classList.add('hidden');
    game.parentElement.classList.add('hidden');
}


// when product type is changed
productType.addEventListener('click', () => {
    if (productType.value == "book") {
        if (book.parentElement.classList.contains('hidden')) {
            book.parentElement.classList.remove('hidden');
            page.parentElement.classList.remove('hidden');

            game.parentElement.classList.add('hidden');
            cd.parentElement.classList.add('hidden');
            playlength.parentElement.classList.add('hidden');
        }
    }
    else if (productType.value == "game") {
        if (game.parentElement.classList.contains('hidden')) {
            game.parentElement.classList.remove('hidden');
            playlength.parentElement.classList.remove('hidden');

            book.parentElement.classList.add('hidden');
            page.parentElement.classList.add('hidden');
            cd.parentElement.classList.add('hidden');
        }
    }
    else if (productType.value == "cd") {
        if (cd.parentElement.classList.contains('hidden')) {
            cd.parentElement.classList.remove('hidden');
            playlength.parentElement.classList.remove('hidden');

            book.parentElement.classList.add('hidden');
            page.parentElement.classList.add('hidden');
            game.parentElement.classList.add('hidden');
        }
    }
});
