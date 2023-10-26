const btnSign = document.querySelector('.btn');
const pagesSwitchLeft = document.querySelector('.left-column');
const pagesSwitchRigth = document.querySelector('.right-column');
const h1 = document.querySelector('.title');
const psubtitle = document.querySelector('.subtitle');
const tampilansignUp = document.querySelector('.form-signup');
const tampilansignIn = document.querySelector('.form-signin');
const titleForm = document.querySelector('.title-form');

btnSign.addEventListener('click', function() {

    if(btnSign.classList.contains('active')) {

        // mengubah halaman kiri ke kanan
        pagesSwitchLeft.classList.add('left-column-active');
        
        // mengubah halaman kanan ke kiri
        pagesSwitchRigth.classList.add('right-column-active');

        // remove active agar btn signin bisa di click
        btnSign.classList.remove('active');

        
        // ganti text btn
        btnSign.innerHTML = "Sign Up Now";

        // ganti title text
        h1.innerHTML = "Hello, Friend";

        // ganti subtitle text
        psubtitle.innerHTML = "Enter yout personal details and start <br> journey with us";
        

        // swicth right column

        setTimeout( () => {
            tampilansignUp.classList.add('d-none');
            tampilansignIn.classList.remove('d-none');
            titleForm.innerHTML = "Sign In";
        },200)


    }
    
    else {
        // mengubah halaman kiri ke kanan
        pagesSwitchLeft.classList.remove('left-column-active');
        
        // mengubah halaman kanan ke kiri
        pagesSwitchRigth.classList.remove('right-column-active');
        
        // remove active agar btn signup bisa di click
        btnSign.classList.add('active');
        
        // ganti text btn
        btnSign.innerHTML = "Sign In Now";

        // ganti title text
        h1.innerHTML = "Welcome Back!";

        // ganti subtitle text
        psubtitle.innerHTML = "To keep connected with us please create <br> account with personal info";

        // swicth left column
        setTimeout( () => {
            tampilansignUp.classList.remove('d-none');
            tampilansignIn.classList.add('d-none');
            titleForm.innerHTML = "Create Account";
        }, 200)

    }
    
})
