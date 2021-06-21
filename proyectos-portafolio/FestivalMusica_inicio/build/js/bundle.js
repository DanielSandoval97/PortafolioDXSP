document.addEventListener('DOMContentLoaded',function(){
    crearGaleria();
});

function crearGaleria(){
    const galeria = document.querySelector('.galeria-imagenes');

    for(let i=1;i <= 12;i++){
        const imagen=document.createElement('IMG');
        imagen.src = `build/img/thumb/${i}.webp`;
        imagen.dataset.imagenId = i;

        //Añadir la funcion de mostrarImagen
        imagen.onclick=mostrarImage;

        const lista = document.createElement('LI');
        lista.appendChild(imagen);

        galeria.appendChild(lista);
    }
}

function mostrarImage(e){
    const id = parseInt( e.target.dataset.imagenId);
    
    //generar imagen
    const imagen = document.createElement('IMG');
    imagen.src=`build/img/grande/${id}.webp`;

    const overlay=document.createElement('DIV');
    overlay.appendChild(imagen);
    overlay.classList.add('overlay');

    //Cuando se da click cierra la imagen
    overlay.onclick = function(){
        overlay.remove();
    }

    //Boton para cerrar la imagen
    const cerrarImagen = document.createElement('P');
    cerrarImagen.textContent="X";
    cerrarImagen.classList.add('btn-cerrar'); 

    //Cerrar la imagen cuando se presiona
    cerrarImagen.onclick = function(){
        overlay.remove();
    }

    overlay.appendChild(cerrarImagen);

    //mostrar en el HTML
    const body=document.querySelector('body');
    body.appendChild(overlay);
    body.classList.add('fijar-body');
}
document.addEventListener('DOMContentLoaded',function(){
   scrollNav();

   navegacionFija();
});

function navegacionFija(){
    const barra = document.querySelector('.header');
    //Registrar el Interseccion Observar
    const observer = new IntersectionObserver(function(entries){
        if(entries[0].isIntersecting){
            barra.classList.remove('fijo');
        }else{
            barra.classList.add('fijo');
        }
    });

    //Elemeno a observar
    observer.observe(document.querySelector('.sobre-festival'));
}

function scrollNav(){
    const enlaces = document.querySelectorAll('.navegacion_principal a');

    enlaces.forEach(function(enlace){
        enlace.addEventListener('click',function(e){
            e.preventDefault();
            const seccion = document.querySelector(e.target.attributes.href.value);
            seccion.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
}