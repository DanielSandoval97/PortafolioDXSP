function evaluar(x){
    document.querySelector('#res').innerHTML +=x;
}

function limpiar(){
    document.querySelector('#res').innerHTML="";
}

function calcular(){
    var result = eval(document.querySelector('#res').innerHTML);
    document.querySelector('#res').innerHTML = result;
}

var zero = document.querySelector('#zero');
var uno = document.querySelector('#uno');
var dos = document.querySelector('#dos');
var tres = document.querySelector('#tres');
var cuatro = document.querySelector('#cuatro');
var cinco = document.querySelector('#cinco');
var seis = document.querySelector('#seis');
var siete = document.querySelector('#siete');
var ocho = document.querySelector('#ocho');
var nueve = document.querySelector('#nueve');

var mas = document.querySelector('#mas');
var menos = document.querySelector('#menos');
var por = document.querySelector('#por');
var entre = document.querySelector('#entre');
var punto = document.querySelector('#punto');
var igual = document.querySelector('#igual');
var clear = document.querySelector('#eliminar');



zero.addEventListener('click',function(){
    evaluar(0);
});
uno.addEventListener('click',function(){
    evaluar(1);
});
dos.addEventListener('click',function(){
    evaluar(2);
});
tres.addEventListener('click',function(){
    evaluar(3);
});
cuatro.addEventListener('click',function(){
    evaluar(4);
});
cinco.addEventListener('click',function(){
    evaluar(5);
});
seis.addEventListener('click',function(){
    evaluar(6);
});
siete.addEventListener('click',function(){
    evaluar(7);
});
ocho.addEventListener('click',function(){
    evaluar(8);
});
nueve.addEventListener('click',function(){
    evaluar(9);
});




mas.addEventListener('click',function(){
    evaluar("+");
});
menos.addEventListener('click',function(){
    evaluar("-");
});
por.addEventListener('click',function(){
    evaluar("*");
});
entre.addEventListener('click',function(){
    evaluar("/");
});
punto.addEventListener('click',function(){
    evaluar(".");
   });
igual.addEventListener('click',function(){
 calcular();
});
clear.addEventListener('click',function(){
 limpiar();
});





