let arrayCarrusel = [
    '../img-portafolio/Portafolio_LP.png',
    '../img-portafolio/Portafolio_DW.png',
    '../img-portafolio/Portafolio_BD.png',
    '../img-portafolio/Portafolio_Frame.png'
];

const img = document.getElementById('img');
let i = 0;

const muestraImg = () => {
    img.src = arrayCarrusel[i];
    i = (i < arrayCarrusel.length-1) ? i+1 : 0;
}

const interval = () => {
    setInterval(muestraImg,1500);
}