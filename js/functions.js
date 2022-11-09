window.onload = function() {
    salon.style.display = 'flex';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'none';
}

// VARIBALES DE LOS BOTONES DE LOS MAPAS
var btn_salon = document.getElementById('btn_salon');
var btn_terraza = document.getElementById('btn_terraza');
var btn_privada_1 = document.getElementById('btn_privada-1');
var btn_privada_2 = document.getElementById('btn_privada-2');

// DEFINIR TODAS LAS VARIABLES DE LAS DIFERENTES TABLAS DE INICIO
var salon = document.getElementById('salon');
var terraza = document.getElementById('terraza');



// Abrir modal
$(document).ready(function() {
    $('.trigger').on('click', function() {
        $('.modal-wrapper').toggleClass('open');
        $('.page-wrapper').toggleClass('blur-it');
        return false;
    });
});

// enviar id mesa


// 
var sala_privada_1 = document.getElementById('sala-privada-1');
var sala_privada_2 = document.getElementById('sala-privada-2');

btn_salon.addEventListener('click', () => {
    salon.style.display = 'flex';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'none';
});

btn_terraza.addEventListener('click', () => {
    salon.style.display = 'none';
    terraza.style.display = 'flex';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'none';
});

btn_privada_1.addEventListener('click', () => {
    salon.style.display = 'none';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'flex';
    sala_privada_2.style.display = 'none';
});

btn_privada_2.addEventListener('click', () => {
    salon.style.display = 'none';
    terraza.style.display = 'none';
    sala_privada_1.style.display = 'none';
    sala_privada_2.style.display = 'flex';
});