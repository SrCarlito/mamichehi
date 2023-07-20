<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSs/style.css">
</head>
<body class="row justify-content-center vh-100" id="fondo">    
    <div class="col-sm-6" id="">
        <!-- HEAD -->
        <div class="row d-flex align-items-center " id="tag">
            <div class="col-10">
                <p class="" id="titulo">Mamichechi</p>
            </div>
            <div class="col-sm-2 d-grid ">
                <a class="p-1" href=""><img src="icons/facebook.svg" class=""></img></a>
                <a class="p-1"  href=""><img src="icons/instagram.svg" class=""></img></a>
            </div>
            
        </div>
        
        <div class="row" id="cuerpo">
            <!-- HEADER -->
            <?php include 'layers/header.html';?>
            <!-- PRESENTACIÓN -->
            <div class="card my-3 border-0 mt-5" >
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="https://d38b044pevnwc9.cloudfront.net/cutout-nuxt/enhancer/2.jpg" class="img-fluid rounded-start w-100" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Artesanías "Mamichechi"</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Actualizado hace 3 min.</small></p>
                    </div>
                  </div>
                </div>
            </div>
            
            <!-- INFO -->
            <div class="title mt-5 text-center"><hr><h4>Ubicación</h4><hr></div>
            <div class="card border-0">
                <div class="card-body row p-2 ">
                    <!-- <div class="col-md-4  mb-4">
                        <h5 class="row card-title"><small> Propietaria:</small></h5>
                        <p class=" row card-text"><small>Cecilia Ulloa</small></p>
                        <h5 class="row card-title"><small> Contacto:</small></h5>
                        <p class=" row card-text"><small>*56 9 1234 5678</small></p>
                        <h5 class="row card-title"><small> Correo:</small></h5>
                        <p class=" row card-text"><small>abcd@gmail.com</small></p>
                        
                    </div> -->
                    
                    <div class="col-md border-0 ">
                        <!--<h5 class="card-title"><small>Ubicación</small></h5>-->
                        <iframe class="mw-100 mh-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d778.2422910591912!2d-73.17331293476856!3d-38.7185169373292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966ab485a7cfd143%3A0x375342f4cca40e97!2sS-40%2C%20Parque%20de%20los%20Trenes%2C%20Carahue%2C%20Araucan%C3%ADa!5e0!3m2!1ses-419!2scl!4v1670446487604!5m2!1ses-419!2scl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                    </div>
                    <div class="col-md border-0">
                      <h5 class="card_title"></h5>
                      <p clas="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, et, laborum iusto voluptatum tempora inventore quas amet officiis aliquam unde itaque facilis reiciendis! Explicabo, enim. Ex id tempore blanditiis quod.</p>
                    </div>
                </div>
            </div>    
            <!-- SERVICIOS -->
            <div class="title mt-5 text-center"> <hr><h4>Servicios</h4><hr></div>
            <div class="row m-0 gap-2">
                <div class="card col-md p-2 text-center">
                  <img src="images/wood_icon.jpg" class="card-img-top rounded-circle  " alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Artesanía madera</h5>
                    <p class="card-text"><small>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </small></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card  col-md p-2 text-center">
                  <img src="images/lana_icon.jpg" class="card-img-top rounded-circle" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Tejidos</h5>
                    <p class="card-text"><small> card has supporting text below as a natural lead-in to additional content.</small></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card  col-md p-2 text-center">
                  <img src="images/recuerdos_icon.webp" class="card-img-top rounded-circle" alt="...">
                  <div class="card-body">
                    <h5 class="card-title ">Productos Varios</h5>
                    <p class="card-text"><small> This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</small></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
            </div>
            <!-- CARRUSEL -->
            <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="4000">
              <div class="carousel-inner">
                <div class="carousel-item ">
                  
                  <img src="images/paris.webp" class="w-100" alt="">
                  <div class="carousel-caption ">
                    <p class="shadow-lg">Some representative placeholder content for the first slide.</p>
                  </div> 
                </div>
                <div class="carousel-item active">
                  <img src="images/roma.jpg" class="w-100" alt="">
                  <div class="carousel-caption ">
                    <p class="shadow-lg">Some representative placeholder content for the first slide.</p>
                  </div> 
                </div>
              </div>
            </div>                               
            <?php include 'layers/footer.html'?>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>