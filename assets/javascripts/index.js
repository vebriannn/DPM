
// tag yang akan di dark mode
const bodyId = document.querySelector('body');
const btnId = document.querySelector('#dark-button');
const navbarId = document.querySelector('.navbar');
const textNavbarId = document.querySelectorAll('.nav-link');
const textH1 = document.querySelectorAll('h1');
const textP = document.querySelectorAll('p');
const cardBody = document.querySelectorAll('.card');

btnId.addEventListener('click', function() {

    // check class dark-body di dalam id bodyId
    if(bodyId.classList.contains('dark-body')) {
        bodyId.classList.remove('dark-body');
        navbarId.classList.remove('dark-navbar');

        // mengambil semua tag dengan class yang sama
        textNavbarId.forEach(tagTextNavbar => {
            tagTextNavbar.classList.remove('dark-text');
        });

        // membuat tag black
        textH1.forEach(texth1 => {
            texth1.classList.remove('dark-text');
        });

        textP.forEach(textp => {
            textp.classList.remove('dark-text');
        });

        cardBody.forEach(card => {
            card.classList.remove('dark-card');
        });
        

        // mengubah button dark mode ke kuning
        btnId.classList.remove('dark-btn');

        // membuat shadow ke hitam
        navbarId.classList.replace('dark-shadow', 'shadow');
    }
    else{
        bodyId.classList.add('dark-body');
        navbarId.classList.add('dark-navbar');

        // mengambil semua tag dengan class yang sama
        textNavbarId.forEach(tagTextNavbar => {
            tagTextNavbar.classList.add('dark-text');
        });

        cardBody.forEach(card => {
            card.classList.add('dark-card');
        });

        // membuat tag putih
        textH1.forEach(texth1 => {
            texth1.classList.add('dark-text');
        });

        textP.forEach(textp => {
            textp.classList.add('dark-text');
        });

        // mengubah button dark mode ke putih
        btnId.classList.add('dark-btn');

        // membuat shadow blue
        navbarId.classList.replace('shadow', 'dark-shadow');
    }

})