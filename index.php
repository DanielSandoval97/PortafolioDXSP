<?php
include("cn.php");
$usuario = "select * FROM contacto";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="img-portafolio/fav-icons2.jpg" type="image/jpg" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css-portafolio/Portafolio_DXSP.css">
    <title>Portafolioo DXSP</title>
</head>
<body><!-- onload="interval()" - Carrusel-->
    <header class="head header">   
       <div class="contenedor">
            <div class="barra">
                <a href="index.php" class="logo"><h1>Dxniel</h1></a>
            
            <nav class="navegacion">
               <a href="#Acerca" class="navegacion__link"><i class="fas fa-info"></i>Acerca</a>
               <a href="#Tecnologias" class="navegacion__link"><i class="fas fa-laptop-code"></i>Tecnologias</a>
               <a href="#Portafolio" class="navegacion__link"><i class="fas fa-briefcase"></i>Portafolio</a>
               <a href="#Contacto" class="navegacion__link"><i class="fas fa-id-card"></i>Contacto</a>
            </nav>
           </div>
         </div>
     </header>

     <main>
        <div class="img-font-one">
            <div>
                <section class="img-content">
                   <h1>BIENVENIDO A:</h1>
                   <h2>DXSP</h2>
               </section>
             <a href="#"></a>
            </div>
        </div>

        <div class="font2">

        <!-- ACERCA -->    
        <h1 class="titulo" id="Acerca">Acerca</h1>
        <div class="acerca">
            <p>Desde el inicio de mi carrera como desarrollador web, me he convertido en una 
                    persona con metas claras,cada dia me levanto con las ganas de aprender temas nuevos
                    esto hace de mi una persona constante,curioso y sin miedo de enfrentarme a 
                    nuevos retos.</p>
         </div>

        <!-- GALERY -->
        <h1 class="titulo" id="Tecnologias">Tecnologias que manejo</h1>
        <div class="container-galery">
            <div class="icons">
                <span class="html">Avanzado</span>
                <i class="fab fa-html5"></i>
            </div>
            <div class="icons">
                <span class="css">Medio</span>
                <i class="fab fa-css3-alt"></i>
            </div>
            <div class="icons">
                <span class="js">Basico</span>
                <i class="fab fa-js"></i>
            </div>
            <div class="icons">
                <span class="boot">Basico</span>
                <i class="fab fa-bootstrap"></i>
            </div>
            <div class="icons">
                <span class="database">Medio</span>
                <i class="fas fa-database"></i>
             </div>
             <div class="icons">
                <span class="java">Medio</span>
                <i class="fab fa-java"></i>
              </div>
              <div class="icons">
                <span class="php">Basico</span>
                <i class="fab fa-php"></i>
              </div>
              <div class="icons">
                <span class="sass">Basico</span>
                <i class="fab fa-sass"></i>
              </div>
        </div>

        <!-- CARDS -->
        <h1 class="titulo" id="Portafolio">Portafolio</h1>
        <div class="div-container">
            <div class="div-item">
                <figure class="figure">
                <img src="img-portafolio/Fondo_Agencia.jpg" alt="Agencia viajes">
                 </figure>
                <h3>Agencia viajes</h3>
                <p>HTML - CSS</p>
                <div class="item-img">
                    <a href="proyectos-portafolio/Agencia_viajes.html" class="link-button" target="_blank"><i class="fas fa-eye"></i>Proyecto</a>
                   <!-- <a href="#" class="link-button" target="_blank"><i class="fas fa-file-code"></i>Codigo</a> -->
                </div>
            </div>

            <div class="div-item">
                <figure class="figure">
                <img src="img-portafolio/Fondo_Calculadora.png" alt="Calculadora">
                 </figure>
                <h3>Calculadora</h3>
                <p>HTML - CSS - JS</p>
                <div class="item-img">
                    <a href="proyectos-portafolio/calculadora.html" class="link-button" target="_blank"><i class="fas fa-eye"></i>Proyecto</a>
                </div>
            </div>

            <div class="div-item">
                <figure class="figure"> 
                <img src="img-portafolio/Fondo_Celulares.jpg" alt="Celulares">
                 </figure>
                <h3>Celulares</h3>
                <p>HTML - CCSS -JS</p>
                <div class="item-img">
                    <a href="proyectos-portafolio/App_moviles.html" class="link-button" target="_blank"><i class="fas fa-eye"></i>Proyecto</a>
                </div>
            </div>

            <div class="div-item">
                <figure class="figure"> 
                <img src="img-portafolio/Fondo_sitio.jpg" alt="Informacion">
                 </figure>
                <h3>Sitio</h3>
                <p>HTML - CSS</p>
                <div class="item-img">
                    <a href="proyectos-portafolio/Informacion.html" class="link-button" target="_blank"><i class="fas fa-eye"></i>Proyecto</a>
                </div>
            </div>

            <div class="div-item">
                <figure class="figure"> 
                <img src="img-portafolio/banner.jpg" alt="Informacion">
                 </figure>
                <h3>Blog Cafe</h3>
                <p>HTML - CSS</p>
                <div class="item-img">
                    <a href="proyectos-portafolio/Blog_cafe.html" class="link-button" target="_blank"><i class="fas fa-eye"></i>Proyecto</a>
                </div>
            </div>

            <div class="div-item">
                <figure class="figure"> 
                <img src="img-portafolio/Fondo_Festival.jpg" alt="Informacion">
                 </figure>
                <h3>Festival</h3>
                <p>HTML - CSS</p>
                <div class="item-img">
                    <a href="proyectos-portafolio/FestivalMusica_inicio/index.html" class="link-button" target="_blank"><i class="fas fa-eye"></i>Proyecto</a>
                </div>
            </div>

            <div class="retos">
                <p>Algunos retos realizados <a href="proyectos-portafolio/Retos.html" class="retos-link" target="_blank">aqui</a></p>
            </div>
        </div>

        <!-- CONTACT -->
        <div class="div-form" id="Contacto">
            <div class="descarga">
                <a href="Doc/ejemplo.pdf" class="link-button-download" download="CV.pdf">
                    <i class="fas fa-file-download"></i>Descargar CV</a>
            </div>
            <form action="insertarContacto.php" method="post" class="form-contact formulario">
                <h3>Contacto</h3>
                <div class="form-section">
                    <label class="form-label" for="nombre">Nombre completo</label><br>
                    <input type="text" class="form-input inputNombre" id="nombre" name="nombre" required placeholder="Nombre y Apellido">
                </div>
                <div class="form-section">
                    <label class="form-label" for="correo">Correo</label><br>
                    <input type="email" class="form-input" id="correo" name="correo" placeholder="ej. ejemplo@gmail.com" required>
                </div>
                <div class="form-section">
                    <label class="form-label" for="mensaje">Mensaje</label><br>
                     <textarea class="text-area" id="mensaje" name="mensaje" required></textarea>
                </div>
                <button type="submit" class="form-button">Enviar</button>
            </form>
        </div>

    </div>
     </main>

     <!-- FOOTER -->
     <footer class="header-foot fotter-espacio" id="footer">
        <div class="social">
            <a href="#" class="btn instagram"><!-- target="_blank"-->
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="btn github">
                <i class="fab fa-github"></i>
            </a>
            <a href="#" class="btn linkedin">
                <i class="fab fa-linkedin"></i>
            </a>
            <!--<a href="#" class="btn codepen">
                <i class="fab fa-codepen"></i>
            </a>-->
        </div>
    </footer>

    <!--<script src="js-portafolio/Portafolio_DXSP.js"></script>-->
    <script src="js-portafolio/validacionFormulario.js"></script>
   <!-- <script type="text/javascript" src="js-portafolio/Portafolio_Carrusel.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>