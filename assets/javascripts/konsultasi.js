'use strict'

const btnYa = document.querySelector('.btn-ya');
const btnNo = document.querySelector('.btn-no');
const btneffect = document.querySelectorAll('.quest');
const hasil = document.querySelector('.btn-hasil');
const soal = document.getElementById('soal');
const parentUL = document.getElementById('list-gejala');
const resultModal = document.querySelectorAll('.results');
const modalBack = document.getElementsByClassName('modal-backdrop');
const cardPertanyaan = document.getElementById('card-pertanyaan');


// menambahkan effect hover click pada button ya dan tidak
btneffect.forEach( element => {
    element.addEventListener('click', (e) => {
        element.classList.add("konsultasi-active");
        setTimeout(() => {
            if(element.classList.contains("konsultasi-active")) {
                element.classList.remove("konsultasi-active")
            }
        }, 200)
    })
})


var index = 0;
var items = [];

// mengambil data dari db
fetch('http://localhost/PHP/soc/user/api.php').then(res => res.json())
.then(data => {

    // menampilkan data untuk pertama kali
    soal.innerHTML = data[index]['gejala'];

    // foreach button 
    btneffect.forEach(btnn => {

        // action click button ya / tidak
        btnn.addEventListener('click', () => {

            // jika value button ya maka menambahkan data ke array items
            if(btnn.value == "yes") {
                items.push(data[index]['kode'])
            }

            // menambahkan index ketika button di click
            index += 1;

            // jika index lebih dari data.length atau array data maka dia akan menjalankan programnya di dalam if
            if(index >= data.length) {

                // menghilangkan button ya dan tidak
                btneffect.forEach(e => {
                    e.classList.add('d-none');
                })

                // menghilangkan title p
                document.querySelector(".card-title").classList.add("d-none");
                hasil.classList.remove('d-none');
                soal.classList.add("d-none");
                index -= 1;
            }

            console.log(items)
            soal.innerHTML = data[index]['gejala'];
        });
    });
})

.catch(err => {
    console.log(err)
})


// list Array Konfirmasi
const P1 = ["G001", "G002", "G003", "G004", "G008", "G010", "G015", "G016"]; // stadium 1
const P2 = ["G001", "G002", "G003", "G004", "G008", "G009", "G010", "G015", "G016"]; // stadium 2
const P3 = ["G001", "G002", "G003", "G004", "G006", "G008", "G009", "G010", "G011", "G012", "G013", "G015","G016"]; // stadium 3
const P4 = ["G001", "G002", "G005", "G007", "G008", "G009", "G012", "G013", "G014"]; // AIDS
// const P5 = ["G001", "G002", "G003", "G004", "G005", "G006", "G007", "G008", "G009", "G010", "G011", "G012", "G013", "G014", "G015","G016"]; // AIDS - semua inputan masuk

// list penyakit

const GP1 = "hiv stadium 1"
const GP2 = "hiv stadium 2"
const GP3 = "hiv stadium 3"
const GP4 = "AIDS"

// list penjegahan

const PJG = ["Penggunaan kondom", "Tes dan konseling HIV", "Pemilihan partner seksual yang aman", "Edukasi dan kesadaran", "Pengobatan PrEP (Profilaksis Pra-Ekspose)"]


// ketika click lihat hasil
hasil.addEventListener('click', () => {

    // mengubah title p
    document.querySelector(".card-title").innerHTML = "Hasil Diagnosa";
    // mengubah fontsize p
    document.querySelector(".card-title").style.fontSize ="26px"
    // menampilkan title p
    document.querySelector(".card-title").classList.remove("d-none");
    // menghilangkan button lihat hasil
    hasil.classList.add('d-none');
    // mengubah height card jadi auto
    cardPertanyaan.style.height = "max-content";
    // mengubah padding card 
    cardPertanyaan.style.padding = "10px 0";
    // remove class d-none pada tag h5 card
    document.querySelector(".penyakit").classList.remove("d-none");
    // remove class d-none pada tag h5 card
    document.querySelector(".gejala").classList.remove("d-none");
    // remove class d-none pada tag h5 card
    document.querySelector(".pencegahan").classList.remove("d-none");



    // menampilkan list gejala
    for (var minItem = 0; minItem < items.length; minItem++) {
        const childUL = document.createElement('li');
        childUL.textContent = items[minItem];
        parentUL.appendChild(childUL);
    }

    if(items.every(item => P1.includes(item))) {
        // menampilkan penyakit
        document.querySelector('.penyakit').innerHTML = "Jenis Penyakit : " + GP1;

        // menampilkan langkah penjegahan
        document.querySelector('.pencegahan').innerHTML = "Langkah Pencegahan : ";

        // foreach data penjegahan dari array PJG
        for (var minArray = 0; minArray < PJG.length; minArray++) {
            const childUL = document.createElement('li');
            childUL.textContent = PJG[minArray];
            document.querySelector('.list-pencegahan').appendChild(childUL);
        }

        // menampilkan tag list-penjegahan
        document.getElementById('list-pencegahan').classList.remove('d-none');
    }
    else if(items.every(item => P2.includes(item))) {
        
        // menampilkan penyakit
        document.querySelector('.penyakit').innerHTML = "Jenis Penyakit : " + GP2;

        // menampilkan langkah penjegahan
        document.querySelector('.pencegahan').innerHTML = "Langkah Pencegahan : ";

        // foreach data penjegahan dari array PJG
        for (var minArray = 0; minArray < PJG.length; minArray++) {
            const childUL = document.createElement('li');
            childUL.textContent = PJG[minArray];
            document.querySelector('.list-pencegahan').appendChild(childUL);
        }

        // menampilkan tag list-penjegahan
        document.getElementById('list-pencegahan').classList.remove('d-none');
    }
    else if(items.every(item => P3.includes(item))) {

       // menampilkan penyakit
        document.querySelector('.penyakit').innerHTML = "Jenis Penyakit : " + GP3;

        // menampilkan langkah penjegahan
        document.querySelector('.pencegahan').innerHTML = "Langkah Pencegahan : Tidak Ada, Silahkan Konsultasi Ke Dokter ";
        
    }
    else if(items.every(item => P4.includes(item))) {

        // menampilkan penyakit
        document.querySelector('.penyakit').innerHTML = "Jenis Penyakit : " + GP4;

        // menampilkan langkah penjegahan
        document.querySelector('.pencegahan').innerHTML = "Langkah Pencegahan : Tidak Ada, Silahkan Konsultasi Ke Dokter ";
    }
    else {

        // menampilkan penyakit
        document.querySelector('.penyakit').innerHTML = "Jenis Penyakit : Tidak Terindetifikasi";

        // menampilkan langkah penjegahan
        document.querySelector('.pencegahan').innerHTML = "Langkah Pencegahan : Tidak Ada Informasi. ";
    }

})


// ketika modal di close maka akan hapus element li di dalam modal
// document.querySelector('.modal').addEventListener('click', () => {
//     let listItemsli = parentUl.querySelectorAll('li');
//     listItemsli.forEach(function(li) {
//         parentUl.removeChild(li);
//     });
//     console.log("ok")
// });

