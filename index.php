 <?php
include 'include/header.php';
 ?>

 <section>
     <!-- Carrousel con Imagenes -->
     <div class="carrousel">
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                     aria-current="true" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                     aria-label="Slide 2"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                     aria-label="Slide 3"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                     aria-label="Slide 4"></button>
             </div>
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img src="img/carrousel.jpg" class="d-block w-100" preload>
                     <div class="carousel-text d-none d-md-block">
                         <h5>Bowls para Mascotas</h5>
                         <p>Doggo Petbowl esta hecho del mejor tipo de acero inoxidable (Acero 304)</p>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img src="img/carrousel1.jpg" class="d-block w-100" preload>
                     <div class="carousel-text  d-none d-md-block">
                         <h5>Donaciones</h5>
                         <p>Por cada compra que realices, se destina el 10% a ayuda canina.</p>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img src="img/carrousel2.jpg" class="d-block w-100" preload>
                     <div class="carousel-text d-none d-md-block">
                         <h5>Bowls Personalizados</h5>
                         <p>Personaliza el bowl de tu mascota a tu gusto.</p>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <img src="img/carrousel3.jpg" class="d-block w-100" preload>
                     <div class="carousel-text  d-none d-md-block">
                         <h5>Hazlos Felices</h5>
                         <p>Regalales el bowl que ellos se merecen.</p>
                     </div>
                 </div>
             </div>

             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                 data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                 data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>

     <!-- Se contempla todo el contenido dejando de lado el carrousel del intro -->
     <div class="maincontainer">

         <div>
             <h3>Complace a tu mejor amigo con un buen plato, estomago lleno corazón contento!</h3>
         </div>

         <!-- cards de Productos -->
         <div class="productos">
             <h4>
                 Los productos mas pedidos
             </h4>

             <div class="flex-container-Productos">
                 <?php 
                    include 'php/producto/consultaIndex.php';
                     ?>
             </div>
         </div>

         <!-- Personalizado -->
         <div>

         </div>

         <!-- info No son solo bowls para perro-->
         <div>

         </div>
     </div>
 </section>

 <?php
include 'include/footer.php';
 ?>