const btnNavbarId = document.querySelector('#dark-button');
const btnId = document.querySelector('.btn-konsultasi');
const section2 = document.querySelector('.section2');
const bodyId = document.querySelector('body');
const navbarId = document.querySelector('.navbar');
const textH1 = document.querySelectorAll('h1');
const textP = document.querySelectorAll('p');
const textNavbarId = document.querySelectorAll('.nav-link');
const img = document.querySelectorAll('.img-konsultasi');

btnNavbarId.addEventListener('click', function() {

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

        img.forEach(foto => {
            foto.classList.remove('dark-img');
        });

        btnNavbarId.classList.remove('dark-btn');

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

        // membuat tag black
        textH1.forEach(texth1 => {
            texth1.classList.add('dark-text');
        });

        textP.forEach(textp => {
            textp.classList.add('dark-text');
        });

        img.forEach(foto => {
            foto.classList.add('dark-img');
        });

        btnNavbarId.classList.add('dark-btn');

        // membuat shadow ke hitam
        navbarId.classList.replace('shadow', 'dark-shadow');
    }
})