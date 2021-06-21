document.addEventListener('DOMContentLoaded',function(){
    iniciarApp();
    });
    
    function iniciarApp(){
        validacionNombre();
        validacionMensaje();
    }

    function validacionNombre() {
        const nombreInput = document.querySelector('#nombre');
    
        nombreInput.addEventListener('input', e => {
        const nombreTexto = e.target.value.trim();
    
            // Validación de que nombreTexto debe tener algo
            if(nombreTexto.length < 6 ) {
                mostrarAlerta('Nombre no valido', 'error')
            } else {
                const alerta = document.querySelector('.alerta');
                if(alerta) {
                    alerta.remove();
                }
            }
        });
    }

    function validacionMensaje(){
        const inputMensaje = document.querySelector('#mensaje');

        inputMensaje.addEventListener('input', e => {
        const textoMensaje = e.target.value.trim();

        if(textoMensaje === '' || textoMensaje.length < 11){
            mostrarAlerta('Agrega mas texto','error');
        }else{
            const alerta = document.querySelector('.alerta');
                if(alerta) {
                    alerta.remove();
                }
           }
        })
    }

    function mostrarAlerta(mensaje, tipo) {

        // Si hay una alerta previa, entonces no crear otra
        const alertaPrevia = document.querySelector('.alerta');
        if(alertaPrevia) {
            return;
        }
    
        const alerta = document.createElement('DIV');
        alerta.textContent = mensaje;
        alerta.classList.add('alerta');
    
        if(tipo === 'error') {
            alerta.classList.add('error');
        }
    
        // Insertar en el HTML
        const formulario = document.querySelector('.formulario');
        formulario.appendChild( alerta );
    
        // Eliminar la alerta después de 3 segundos
        setTimeout(() => {
            alerta.remove();
        }, 3000);
    }
