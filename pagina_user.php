<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null ||  $varsesion = '') {
    echo "NO TIENE PERMISO DE ENTRAR";
    die ();
}


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="responsive2.css">
    <link rel="stylesheet" href="responsive3.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style3.css">
    

    <!-- animate css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>CAMPIHAPPY</title>
    <style>

        img{
            width: 60px;
        }
        body{
            background-color: black;
            color: aliceblue;
        }

        .about-description h3 {
         font-size: 1.4rem;
        color: white;  
        }

        .about-description h1 {
        color: var(--color-primary);
         margin-top: 1.2rem;
        font-size: 2.6rem;
        }

        .about-description p {
        margin-top: 1rem;
        font-size: 1.2rem;
        color: rgb(255, 254, 254);
    }

        .about-description button {
            margin-top: 1.6rem;
            color: var(--color-light-1);
            font-size: 1.2rem;
            height: 2.6rem;
            width: 8rem;
            border: none;
            outline: none;
            cursor: pointer;
            background: var(--color-primary);
            border-radius: 0.1rem;
        }

            .service-description-title h1 {
        padding-bottom: 0.6rem;
        color: var(--color-dark-2);
        font-size: 1.8rem;
        text-transform: capitalize;
        border-bottom: 2px dashed var(--color-light-gray);
        color: rgb(22, 91, 49);
    }

    .new-arriavals-news h1 {
    color: var(--purple-dark-2);
    font-size: 2.6rem;
    margin-bottom: 0.8rem;
    padding-right: 1rem;
    line-height: 3rem;
    color: rgb(22, 91, 49);
    
}

.new-arriavals-news p {
    color: var(--purple-dark-2);
    font-size: 1.4rem;
    font-weight: 500;
    margin-bottom: 0.8rem;
    color: rgb(255, 255, 255);
}

h1{

    color: rgb(22, 91, 49);

}
.logi1{
    position: relative;
    bottom: 15px;

}
.logi2{
    position: relative;
    bottom: 0px;

}

.menu {
    position: fixed;
}

.submenu {
  display: none;
  position: absolute;
  top: 50px;
  left: 80px;
  background-color: #333;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  z-index: 1;
}

.menu:hover{
    position: absolute;
    display: block;
    
}

.menu:hover .submenu {
    display: flex;
}

ul {
  list-style: none;
  padding: 0;
}

li a {
  text-decoration: none;
  color: #fff;
}

li a:hover {
  color: red;
}

</style>
</head>

<body>
    <!-- header section start -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href=""><span><img src="img/imagen5.png" alt=""></span></a>
                <a href="#" class="logi1">CAMPI<span class="logi2">HAPPY</span></a>
                
            </div>
    

            <ul class="menu-items">
                <li><a href="#top"> Inicio </a></li>
                <li><a href="#about"> Sobre </a></li>
                <li><a href="#services"> Servicios </a></li>
                <li><a href="productos_user.php"> Productos </a></li>
                <li><a href="#contact"> Contacto </a></li>
            </ul>


            <div class="icon-links">
                <div id="search-btn"><span class="icon-search"></span></div>
                <div id="customer-center"><a href="#contacto"><span class="icon-phone-alt"></span></a></div>
                <div id="icon-shopping-cart"></div>
                <!--<div style="color: black;" > <a href="login.html"> <span class="icon-user"></a></div>-->
                <div id="toggle-bar"><span class="toggler"></span></div>
                <div class="menu" style=" color: black;" ><?php echo $_SESSION['usuario']; ?>
                <div class="submenu">
                    <ul>
                    <li><a href="perfil.php">Perfil</a></li>
                    <li><a href="cerrar_sesion.php">Cerrar  Sesion</a></li>
                    
                    </ul>
                </div>
  </div></div>
                <div></div>
            </div>

            <!--<a href="login.html"><img src="img/logear.jpg" style="width: 45px; height: 45px; left: 40px; position: relative; " alt=""><span class="icon-user"></span></a>
            <a href="login.html"><img src="img/telefono.png" style="width: 25px; height: 20px; left: -140px; position: relative; " alt=""><span class="icon-user"></span></a>-->

        </nav>
    </header>
    <!-- header section end -->

    <style>


    </style>

<script>
    
      
    </script>

    
        


    <!-- section content area start -->
    <div class="section-content">

        <!-- hero section start -->
        <div class="hero">
            <marquee behavior="scroll" scrollamount="10" direction="left">
                ¡Bienvenidos a CampiHappy! Obtenga sus necesidades diarias de forma fácil e instantánea en nuestra tienda. ¡Compra frutas frescas y orgánicas con un gran descuento! Utilice este código de cupón (#234307) para obtener hasta un 50 % de descuento en su compra total. Estimado señor, ahora puede obtener hasta un 50% de descuento.
                de cualquier producto simplemente usando este código de cupón (#234307). No olvide enviar este código al momento de realizar el pago de su compra. ¡Gracias!
s
            </marquee>

            <div class="section-wrap hero-wrap">
                <div class="hero-image">
                    <img class="animate__animated animate__bounceInDown" src="img/hero/01.png" alt="">
                </div>

                <div class="hero-description">
                    <h1 class="animate__animated animate__bounceInRight hero-title">Los Mejores productos del campo para que tu y tu familia se alimente sanamente.</h1>
                    <!--<button class="animate__animated animate__bounceInUp hero-button">Explore</button>-->
                </div>

                <div class="hero-slide-btn">
                    <div class="hero-slide-left">
                        <span class="icon-arrow-left"></span>
                    </div>
                    <div class="hero-slide-right">
                        <span class="icon-arrow-right"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero section end -->




        <!-- call to action area start - fruits -->
        <div class="new-arrivals new-arrivals-fruits">
            <div class="section-wrap new-arrivals-wrap">
                <div class="new-arriavals-news">
                    <h1>Obten las mejores frutas y verduras con los mejores precios </h1>
                    <p>Siguelos en sus redes sociales</p>
                  

                </div>

                <div class="new-arrivals-products">
                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/apple.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Manzana</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/grape.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Uva verde</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/grape-black.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Uva</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                            
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/local-orange.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Naranja local</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/orange.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Naranja</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/orange-green.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Naranja verde</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/mango.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Mango</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/peach.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Durazno</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/strawberry.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Fresa</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/pomegranate.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Granada</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/kiwi.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Kiwi</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                   

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/cherry.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Cereza</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/blueberry.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Arandano</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/pulm.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Pulpa</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/lemon.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Limon</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/pinapple.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Piña</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/fruits/watermelon.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Sandia</h3>
                            <button><a href="#categorias">Ver categorias</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- call to action area end - fruits -->





        <!-- about section start -->
        <div class="about" id="about">
            <div class="section-wrap about-wrap">
                <div class="about-image">
                    <img src="img/background/about.jpg" alt="about_img">
                </div>
                <div class="about-description">
                    <h3>Bienvenidos a CampiHappy!</h3>
                    <h1>Las mejores soluciones de alimentos del campo en línea</h1>
                    <p>Somos CampiHappy!!! Nos especializamos en ayudar a los vendedores de distintas partes del pais a promocionar sus 
                        productos por medio de nuestra pagina digital, ademas de ayudar a nuestros agricultores con sus ventas y darles una mejor oportunidad en el mercado.</p>
                    <p> Nos encanta ser tu plataforma de confianza donde no solo estamos para tu servicio, si no para tu salud y bienestar personal, 
                        nuestros usuarios compradores tiene garantizada la mejor calidad de productos agricolas del campo. </p>
                    
                    <marquee behavior="scroll" scrollamount="10" direction="left" class="about-marquee">
                        ¡Bienvenidos a CampiHappy! Obtenga sus necesidades diarias de forma fácil e instantánea en nuestra tienda. ¡Compra frutas frescas y orgánicas con un gran descuento! Utilice este código de cupón (#234307) para obtener hasta un 50 % de descuento en su compra total. Estimado señor, ahora puede obtener hasta un 50% de descuento.
                de cualquier producto simplemente usando este código de cupón (#234307). No olvide enviar este código al momento de realizar el pago de su compra. ¡Gracias!
s
                    </marquee>
    
                </div>
            </div>
        </div>
        <!-- about section end -->





        <!-- service section start -->
        <div class="services" id="services">
            <div class="section-wrap">
                <div class="services-description">
                    <div class="service-description-text">
                        <div class="service-description-title">
                            <h1>Que ofrecemos?</h1>
                        </div>

                        <div class="service-description-details">
                            <p>A nuestros usuraios les ofrecemos la mejor calidad de productos, beneficiar sobre todo no solo a los compradores, si no 
                                tambien a sus vendedores, y que mejor manera que llevar el campo a sus hogares.
                            </p>
                        </div>

                        <div class="service-description-list">
                            <div class="service-description-list-item">
                                <span class="icon-check-circle"></span>
                                <p class="service-list-item-title">Contribuye a la gestion economica del campo.</p>
                            </div>

                            <div class="service-description-list-item">
                                <span class="icon-check-circle"></span>
                                <p class="service-list-item-title">Garantiza a los agricultores de distintas partes de nuestro pais un mejor rendimiento en sus ventas.
                                </p>
                            </div>

                            <div class="service-description-list-item">
                                <span class="icon-check-circle"></span>
                                <p class="service-list-item-title">Ayuda a que las personas de las cuidades puedan tener muy buena calidad de productos, sobre todo en alimentos.
                                </p>
                            </div>

                            
                        </div>

                       
                    </div>

                    <div class="service-description-image">
                        <img src="img/background/service.jpg" alt="service_img">
                    </div>
                </div>

                <div class="service-card-wrap">
                    <div class="service-image-wrap">
                        <div class="service-image">
                            <img src="img/background/service-img.jpg" alt="">
                        </div>
                        <div class="service-image-text">
                            <h1>Nuestros servicios</h1>
                            <p>Nuestros beneficios
                            </p>
                        </div>
                    </div>

                    <div class="service-cards">
                        <div class="service-card">
                            <div class="service-card-no">
                                <h1>01</h1>
                            </div>
                            <div class="service-card-details">
                                <h3>Contacto inmediato</h3>
                                <p>Somos intemediarios eso ayuda a que tengas un contacto directo con el vendedor del producto al cual estas interesados.</p>
                                
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-card-no">
                                <h1>02</h1>
                            </div>
                            <div class="service-card-details">
                                <h3>Mejor precio</h3>
                                <p>Los precios seran apropiados a tus necesidades.</p>
                               
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-card-no">
                                <h1>03</h1>
                            </div>
                            <div class="service-card-details">
                                <h3>Ofertas aleatorias</h3>
                                <p>Gran variedad de ofertas para vender, como para comprar.</p>
                                
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-card-no">
                                <h1>04</h1>
                            </div>
                            <div class="service-card-details">
                                <h3>Pago facil</h3>
                                <p>No tendras problemas al pagar tu producto o al venderlo</p>
                              
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-card-no">
                                <h1>05</h1>
                            </div>
                            <div class="service-card-details">
                                <h3>Atenciom al cliente</h3>
                                <p>Estamos atentos las 24 horas, asique si encuentras algun problema no dudes en contactarnos.</p>
                            
                            </div>
                        </div>

                                            </div>
                </div>
            </div>
        </div>
        <!-- service section end -->





        <!-- call to action area start - vegetables -->
        <div class="new-arrivals new-arrivals-vegetables">
            <div class="section-wrap new-arrivals-wrap">
                <div class="new-arriavals-news">
                    <h1> La mejor calidad de verduras frescas las encontraras aqui.</h1>
                    <p>¡Grandes ofertas en marcha!</p>
                   
                </div>

                <div class="new-arrivals-products">
                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/broccoli.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Brocoli</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/cabbage.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Repollo</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/carrot.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Zanahoria</h3>
                            <button><a href="#categorias">Ver las categorias </a></button>
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/capsicum.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Pimiento</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/chili.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Chile verde</h3>
                            <button><a href="#categorias">Ver las categorias </a></button>
                        </div>
                    </div>

                

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/potato.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Patata</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/peas.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Guisantes verdes</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/motorshuti.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Motorshuti</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/bean-seed.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Semilla de frijol</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/chili-local.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Chile local</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/long-bean.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Frijol largo</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/mushroom.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Champiñon</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/onion.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Cebolla</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/tomato.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Tomate</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/lemon.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Limon</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/cucumber.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Pepino</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>

                    <div class="new-arrival-card">
                        <div class="new-arriava-card-image">
                            <img src="img/vegetables/zucchini.jpg" alt="">
                        </div>
                        <div class="new-arrival-card-text">
                            <h3>Calabacin</h3>
                            <button><a href="#categorias">Ver las categorias </a></button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- call to action area end - vegetables -->





        <!-- recent collections area start -->
        <div class="recent-collections">
            <div class="section-wrap recent-collections-wrap">
                <div class="section-title">
                    <h1><a style="color:whitesmoke;" id="categorias">Categorias</a></h1>
                </div>

                <!-- recent collection products start -->
                <div class="wrapper">
                    <ul class="filter-menu">
                        <li data-list="frutas" class="active-menu">Frutas</li>
                        <li data-list="vegetales"><a style="color:antiquewhite;" id="vegetales">Vegetales</li>
                        <li data-list="huevos">Huevos</li></a>
                        <li data-list="ganado">Ganado</li></a>
                       <li data-list="carnes">Carnes</li></a>
                        <li data-list="grano">Grano</li></a>

                    </ul>

                    <div class="filter-items">
                        <div class="filter-content apple" data-item="frutas">
                            <img src="img/fruits/apple.jpg" alt="apple_img">
                            <p class="rec-item-name">Manzana fresca </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/Bananas.jpg" alt="">
                            <p class="rec-item-name">Banano </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/cerezas.jpg" alt="">
                            <p class="rec-item-name"> Cerezas </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/melon.jpg" alt="">
                            <p class="rec-item-name"> Melon </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/papaya.jpg" alt="">
                            <p class="rec-item-name"> Papaya </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/uvas.jpg" alt="">
                            <p class="rec-item-name"> Uvas </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/guanabana.jpg" alt="">
                            <p class="rec-item-name"> Guanabana </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/guayaba.jpg" alt="">
                            <p class="rec-item-name"> Guayaba </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/frambuesa.jpg" alt="">
                            <p class="rec-item-name"> Frambuesa</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/mora.jpg" alt="">
                            <p class="rec-item-name"> Mora </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/piña.jpg" alt="">
                            <p class="rec-item-name"> Piña </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/toronja.jpg" alt="">
                            <p class="rec-item-name"> Toronja </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/maracuya.jpg" alt="">
                            <p class="rec-item-name"> Maracuya </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content apple" data-item="frutas">
                            <img src="imagenes/mandarina.jpg" alt="">
                            <p class="rec-item-name"> Mandarina </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>






















                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="img/vegetables/broccoli.jpg" alt="broccoli_img">
                            <p class="rec-item-name">Broccoli</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/acelga.jpg" alt="">
                            <p class="rec-item-name">Acelga</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/chayote.jpg" alt="">
                            <p class="rec-item-name">Chayote</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/cilantro.jpg" alt="">
                            <p class="rec-item-name">Cilantro</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/ejotes.jpg" alt="">
                            <p class="rec-item-name">Ejotes</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/espinaca.jpg" alt="">
                            <p class="rec-item-name">Espinaca</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                       <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/jitomate.jpg" alt="">
                            <p class="rec-item-name">Jitomate</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/lechuga.jpg" alt="">
                            <p class="rec-item-name">Lechuga</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/pepino.jpg" alt="">
                            <p class="rec-item-name">Pepino</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/ajo.jpg" alt="">
                            <p class="rec-item-name">Ajo</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/apio.jpg" alt="">
                            <p class="rec-item-name">Apio</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/cebolla.jpg" alt="">
                            <p class="rec-item-name">Cebolla</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/coliflor.jpg" alt="">
                            <p class="rec-item-name">Coliflor</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/chile.jpg" alt="">
                            <p class="rec-item-name">Chile</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content broccoli" data-item="vegetales">
                            <img src="imagenes/espinaca.jpg" alt="">
                            <p class="rec-item-name">Espinaca</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>





                        <div class="filter-content cabbage" data-item="vegetales">
                            <img src="img/vegetables/cabbage.jpg" alt="cabbage_img">
                            <p class="rec-item-name">Repollo</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content carrot" data-item="vegetales">
                            <img src="img/vegetables/carrot.jpg" alt="carrot_img">
                            <p class="rec-item-name">Zanahoria local</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content chicken-egg" data-item="huevos">
                            <img src="img/eggs/chicken-egg.jpg" alt="chicken_egg_img">
                            <p class="rec-item-name">Huevos de gallinas</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content chicken-egg" data-item="huevos">
                            <img src="imagenes/codorniz.jpg" alt="chicken_egg_img">
                            <p class="rec-item-name">Huevos de codorniz</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>



                        <div class="filter-content orange-green" data-item="frutas">
                            <img src="img/fruits/orange-green.jpg" alt="orange_green_img">
                            <p class="rec-item-name"> Naranja Verde</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content peach" data-item="frutas">
                            <img src="img/fruits/peach.jpg" alt="peach_img">
                            <p class="rec-item-name">Melocotón fresco</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content mango" data-item="frutas">
                            <img src="img/fruits/mango.jpg" alt="mango_img">
                            <p class="rec-item-name">Mango fresco</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content mix-spice" data-item="ganado">
                            <img src="imagenes/caballo.png" alt="mix_spice_img">
                            <p class="rec-item-name">Caballo</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content mix-spice" data-item="ganado">
                            <img src="imagenes/cerdas.jpg" alt="mix_spice_img">
                            <p class="rec-item-name">Cerdos</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content almond" data-item="dry-fruits">
                            <img src="img/dried fruits/almond.jpg" alt="almond_img">
                            <p class="rec-item-name">Almendra</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content clove" data-item="ganado">
                            <img src="imagenes/vaca.jpg" alt="clove_img">
                            <p class="rec-item-name">Vacas</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content clove" data-item="ganado">
                            <img src="imagenes/gallina.jpg" alt="clove_img">
                            <p class="rec-item-name">Gallina</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content clove" data-item="ganado">
                            <img src="imagenes/ovejas.jpg" alt="clove_img">
                            <p class="rec-item-name">Ovejas</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content clove" data-item="ganado">
                            <img src="imagenes/vaca.jpg" alt="clove_img">
                            <p class="rec-item-name">Vacas</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content clove" data-item="ganado">
                            <img src="imagenes/cabras.jpg" alt="clove_img">
                            <p class="rec-item-name">Cabras</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content orange" data-item="frutas">
                            <img src="img/fruits/orange.jpg" alt="orange_img">
                            <p class="rec-item-name">Naranja fresca </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content dates" data-item="carnes">
                            <img src="imagenes/res.jpg" alt="date_img">
                            <p class="rec-item-name">Carne de Res</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content dates" data-item="carnes">
                            <img src="imagenes/carne.jpg" alt="date_img">
                            <p class="rec-item-name">Carne de Cerdo</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content dates" data-item="carnes">
                            <img src="imagenes/carne_cordero.jpg" alt="date_img">
                            <p class="rec-item-name">Carne de Cordero</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content dates" data-item="carnes">
                            <img src="imagenes/carne_pollo.jpg" alt="date_img">
                            <p class="rec-item-name">Pollo</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>


                        <div class="filter-content dates" data-item="carnes">
                            <img src="imagenes/filete.jpg" alt="date_img">
                            <p class="rec-item-name">Filete de pescado</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content dates" data-item="carnes">
                            <img src="imagenes/salmon.jpg" alt="date_img">
                            <p class="rec-item-name">Salmon</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content dates" data-item="carnes">
                            <img src="imagenes/pescado.jpg" alt="date_img">
                            <p class="rec-item-name">Pescado</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content lemon" data-item="frutas">
                            <img src="img/fruits/lemon.jpg" alt="lemon_img">
                            <p class="rec-item-name">Limon fresco </p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content strawberry" data-item="frutas">
                            <img src="img/fruits/strawberry.jpg" alt="strawberry_img">
                            <p class="rec-item-name">Fresa fresca</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content duck-egg" data-item="huevos">
                            <img src="img/eggs/duck-egg.jpg" alt="duck_egg_img">
                            <p class="rec-item-name">Huevo de pato</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        
                        <div class="filter-content blueberry" data-item="frutas">
                            <img src="img/fruits/blueberry.jpg" alt="blueberry_img">
                            <p class="rec-item-name">Arándano</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content pomegranate" data-item="frutas">
                            <img src="img/fruits/pomegranate.jpg" alt="pomegranate_img">
                            <p class="rec-item-name">Granada</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content peas" data-item="vegetales">
                            <img src="img/vegetables/peas.jpg" alt="peas_img">
                            <p class="rec-item-name">Chicharos</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content chili" data-item="vegetales">
                            <img src="img/vegetables/chili.jpg" alt="chili_img">
                            <p class="rec-item-name">Chile</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content zucchini" data-item="vegetales">
                            <img src="img/vegetables/zucchini.jpg" alt="zucchini_img">
                            <p class="rec-item-name">Zucchini</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content kiwi" data-item="frutas">
                            <img src="img/fruits/kiwi.jpg" alt="kiwi_img">
                            <p class="rec-item-name">Kiwi fresco</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        
                        <div class="filter-content kiwi" data-item="grano">
                            <img src="imagenes/lentejas.jpg" alt="kiwi_img">
                            <p class="rec-item-name">Lentejas</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>
                        
                        <div class="filter-content kiwi" data-item="grano">
                            <img src="imagenes/frijol.jpg" alt="kiwi_img">
                            <p class="rec-item-name">Frijoles</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content kiwi" data-item="grano">
                            <img src="imagenes/arroz.png" alt="kiwi_img">
                            <p class="rec-item-name">Arroz</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content kiwi" data-item="grano">
                            <img src="imagenes/alberja.jpg" alt="kiwi_img">
                            <p class="rec-item-name">Alberja</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>

                        <div class="filter-content kiwi" data-item="grano">
                            <img src="imagenes/maiz.jpg" alt="kiwi_img">
                            <p class="rec-item-name">Maiz</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>





                        

                        <div class="filter-content watermelon" data-item="frutas">
                            <img src="img/fruits/watermelon.jpg" alt="watermelon_img">
                            <p class="rec-item-name">Sandía</p>
                            <div class="rec-description">
                                <p class="rec-item-price">Precio del producto</p>
                                <p class="rec-total-sales">460</p>
                                <p class="rec-item-unit">Unidad del producto</p>
                                <p class="rec-item-status">Disponible</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- recent collection products end -->



                <!-- lightbox area start -->
                <div class="lightbox">
                    <div class="lightbox-content">
                        <div class="lightbox-header">
                            <p>Category: <span id="image-category">Undefined</span></p>
                            <div class="lightbox-close-btn">
                                <span id="close-lightbox"></span>
                            </div>
                        </div>

                        <div class="rec-info">
                            <p>Product Name: <span id="rec-name">Red Apple</span></p>
                            <p>Product Price: <span id="rec-price">320</span></p>
                            <p>Total Sales: <span id="rec-sales">420</span><span id="rec-unit">Kg+</span></p>
                        </div>

                        <div class="image-wrapper">
                            <img src="img/fruits/apple.jpg" alt="project preview">
                        </div>

                        <div class="rec-footer">
                            <p>Status: <span id="rec-status">Available</span></p>
                            <button class="lightbox-buy-btn">Buy now</button>
                        </div>
                    </div>
                </div>

                <!-- lightbox left & right slide button -->
                <div class="lightbox-arrow">
                    <span class="icon-angle-left" id="left-arrow"></span>
                    <span class="icon-angle-right" id="right-arrow"></span>
                </div>

                <!-- lightbox shadow -->
                <div class="lightbox-shadow"></div>

                <!-- lightbox area end -->
            </div>
        </div>
        <!-- recent collections area end -->





        








        <!-- shopping cart area start -->
        <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ -->
        <!-- selected and favorite product items area start -->
        <div class="shopping-cart-area" id="product-cart-area">
            <div class="shopping-cart-wrap">
                <div class="product-cart-menu">
                    <div class="cart-menu-items">
                        <h2 id="selected-products" class="active-cart-menu">Selected Products</h2>
                        <h2 id="favorite-products">Favorite Products</h2>
                    </div>

                    <div class="cart-close-btn">
                        <button>Close Cart</button>
                    </div>
                </div>

                <div class="cart-contents-header">
                    <div class="total-cart-items">
                        <p id="total-selected" class="active-product-counter">
                            <strong>Total Selected: </strong>
                            <span>No item found</span>
                        </p>
                        <p id="total-favorite">
                            <strong>Total Favorite: </strong>
                            <span>No item found</span>
                        </p>
                    </div>

                    <div class="buying-product-title">
                        <div class="total-buying-item">
                            <p>
                                <strong>Total Buying Items: </strong>
                                <span id="total-buying-item-counter">0</span>
                            </p>
                        </div>
                        <div class="buy-items-button">
                            <button id="buy-items">Buy Items</button>
                        </div>
                    </div>
                </div>

                <div class="cart-contents-area shopping-cart-contents-area active-cart-content">
                    <!-- selected product contents -->
                </div>
                <div class="cart-wishlist-area shopping-cart-contents-area">
                    <!-- favorite product contents -->
                </div>

            </div>

        </div>
        <!-- selected and favorite product items area end -->



        <!-- buying details/shoping cart area start -->
        <div class="buying-details-area">
            <div class="buying-details-wrap">
                <div class="shop-title">
                    <h1>Shopping Cart</h1>
                </div>

                <div class="shopping-details-wrap">
                    <div class="shopping-details-header">
                        <div class="shopping-details">
                            <div class="shop-detail product-sl">
                                <h2>SL No.</h2>
                            </div>
                            <div class="shop-detail product-name">
                                <h2>Product Name</h2>
                            </div>
                            <div class="shop-detail regular-price">
                                <h2>Regular Price</h2>
                            </div>
                            <div class="shop-detail discount">
                                <h2>Discount</h2>
                            </div>
                            <div class="shop-detail present-price">
                                <h2>Present Price</h2>
                            </div>
                            <div class="shop-detail product-quantity">
                                <h2>Quantity</h2>
                            </div>
                            <div class="shop-detail total-amount">
                                <h2>Total Price</h2>
                            </div>
                            <div class="shop-detail remove-all-btn">
                                <button id="remove-all-items">Remove All</button>
                            </div>
                        </div>
                    </div>

                    <div class="shopping-details-content">
                        <!-- shopping details content -->
                    </div>
                </div>

                <div class="buying-details-footer">
                    <div class="calculate-buying-details">
                        <div class="calculate-total-items">
                            <h2>Total Items: </h2>
                            <p><span>000</span></p>
                        </div>

                        <div class="calculate-total-quantity">
                            <h2>Total Quantity: </h2>
                            <p>total quantity display here</p>
                        </div>

                        <div class="calculate-total-amount">
                            <h2>Total Amount: </h2>
                            <p><span>000</span> Tk.</p>
                        </div>
                    </div>

                    <div class="confirm-order-button">
                        <button id="confirm-order-btn">Confirm Order</button>
                    </div>
                </div>
            </div>

            <div class="close-buy-area">
                <div id="close-buy-area-btn"></div>
            </div>
        </div>
        <!-- buying details/shoping cart area end -->
        <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ -->
        <!-- shopping cart area end -->

        <style>

/* Apply styles to images */

.muestra img{
    position: relative;
    top: 30px;
    left: -85px;
    border-radius: 8px;
    width: 250px; /* Make images responsive */
    height: 175px; /* Automatically adjust the height */ 
}

/* Apply styles to the container */
.contoiner {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
    word-wrap: break-word;
}

/* Apply styles to cards */
.cord {
    width: 500px;
    height: 250px;
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
    margin: 20px;
    background-color: white;
    text-align: center;
    transition: transform 0.25s, box-shadow 0.25s;
    word-wrap: break-word;
    white-space: nowrap; /* Evita saltos de línea */
    overflow: hidden;
    text-overflow: ellipsis;    
}
    
.cord:hover {
    transform: translateX(-15px); /* Translate in the X direction */
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
}

/* Apply styles to headings */
.tito{
    position: relative;
    top: -100px;
    left: 115px;
    color: black;
    font-size: 22px;
    margin: 0.2rem 0; /* Add margin to all sides */
    font-weight: 400;
}

/* Apply styles to paragraphs */



p:after{
    content: attr(data-text);
}



/* Apply styles to links */
a {
    font-weight: 500;
    text-decoration: none;
    color: #3498db;
}

.precio{
    font-size: 20px;
    color: black;
    position: relative;
    left: 110px;         
    top: -90px;
    margin: 0.2rem 0; /* Add margin to all sides */
    font-weight: 400;
}

.descri{
    color: black;
    position: relative;
    
    top: -10px;
    margin: 0.2rem 0; /* Add margin to all sides */
    font-weight: 400;
}
        </style>

        <div class="contoiner" > 

<?php 

    include "conexion.php";

?>

<?php

  $registros = mysqli_query($conexion,"SELECT * FROM items") or die("problemas en el select".mysqli_error($conexion));
            
  while ($row = mysqli_fetch_array($registros)){  ?>

          <div class="cord">

          <div class="muestra" ><img src="archivos/<?php echo $row['archivo']; ?>"></div>
          <h4 class="tito" ><?php echo $row['nombre']?></h4>
          <p class="precio" >$<?php echo $row['precio']?></p>
        
            
          </div>

<?php  } ?>




</div>




       





        <!-- faq section start -->
        <div class="faq-section">
            <div class="section-wrap faq-section-wrap">
                <div class="faq-content">
                    <div class="faq-content-title">
                        <h1>Preguntas frecuentes</h1>
                    </div>

                    <div class="faq-content-wrap">
                        <div class="accordion-box">
                            <p class="faq-title">01. Quienes somos? <span class="icon-angle-right faq-icon"></span></p>
                            <p class="faq-text" style="color: black;" >Somos una plataforma en línea comprometida en acercar el campo a la ciudad mediante la oferta 
                                de productos agrícolas frescos y de alta calidad. Nuestra misión es conectar a agricultores locales con consumidores urbanos, promoviendo la agricultura sostenible y apoyando a las comunidades rurales. Trabajamos para ofrecer una variedad de productos frescos y cultivados de manera responsable, brindando a nuestros clientes la oportunidad de disfrutar de alimentos saludables y deliciosos mientras respaldan a los agricultores locales.
                            </p>
                        </div>

                        <div class="accordion-box">
                            <p class="faq-title">02. Por que nuestro servicio es el mejor? <span class="icon-angle-right faq-icon"></span>
                            </p>
                            <p class="faq-text" style="color: black;" > Este proyecto se destaca por ser el mejor porque estamos comprometidos en cerrar la brecha entre el campo y la ciudad de una manera única. Nuestra plataforma ofrece una amplia variedad de productos agrícolas frescos y de alta calidad directamente de agricultores locales. Lo que nos diferencia es nuestra dedicación a la agricultura sostenible y el apoyo a las comunidades rurales. Al elegir nuestros productos, los clientes no solo obtienen alimentos deliciosos y saludables, sino que también contribuyen al crecimiento de la agricultura local y al bienestar de los agricultores. Esto hace que nuestro proyecto sea la mejor opción para aquellos que desean 
                                una conexión más directa con la fuente de sus alimentos y desean respaldar prácticas agrícolas sostenibles.
                            </p>
                        </div>

                        <div class="accordion-box">
                            <p class="faq-title">03. Quienes son sus creadores? <span class="icon-angle-right faq-icon"></span>
                            </p>
                            <p class="faq-text" style="color: black;" >Somos estudiantes de la Institución Educativa Jose Maria Bravo Marquez, del grado 11-4, Creamos nuestro proyecto gracias a la media técnica, detrás de Campihappy encontramos a
                                #1:Miguel Angel Castro
                                #2:Laura Quintero Zapata
                                #3:Heydi Roldan Molina
                                #4:Julian David Morales 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq section end -->





       



<br><br><br>
        <!-- customer review section start -->
        <div class="customer-review">
            <div class="section-wrap">
                <div class="section-title customer-review-title">
                    <p>Creadores de la pagina <span class="icon-angle-double-right"></span></p>
                </div>

                <div class="customer-review-wrap">
                    <div class="review-items">
                        <div class="review-content">
                            <div class="customer-info">
                                <div class="customer-image">
                                    <img src="imagenes/castro.jpg" alt="review1">
                                </div>
                                <div class="customer-details">
                                    <h2 class="name">Miguel Angel Castro Escobar</h2>
                                    <p class="country">Medellin/Colombia</p>
                                </div>
                            </div>

                            <div class="review-text">
                                <p class="review"><span class="icon-quote-left"></span>Hola soy Miguel Angel Castro Escobar, tengo 19 años y estoy en el grado 11 
                                    en el colegio Institucion Jose Maria Bravo Marquez y curso en la media tecnica de Programacion y Diseño de software con el Sena, 
                                    Yo me encargue de la estructura, maquetacion html y php, y tambien del enlazamiento de toda la pagina.<span class="icon-quote-right"></span></p>
                            </div>
                        </div>

                        <div class="review-content">
                            <div class="customer-info">
                                <div class="customer-image">
                                    <img src="imagenes/heydi.jpg" alt="review1">
                                </div>
                                <div class="customer-details">
                                    <h2 class="name">Heydi Jazmin Roldan Molina</h2>
                                    <p class="country">Medellin/Colombia</p>
                                </div>
                            </div>

                            <div class="review-text">
                                <p class="review"><span class="icon-quote-left"></span>Hola soy Heydi Roldan, tengo 17 años y estoy cursando el grado 11 
                                    en el colegio Institucion Jose Maria Bravo Marquez y estoy en la media tecnica de programacion y diseño de software con el Sena, mi labor fue el Diseño de la pagina,
                                     como los colores, la Informacion de lo que es y trata Campihappy, el diseño de nuestro logo, las imagenes, etc.<span class="icon-quote-right"></span></p>
                            </div>
                        </div>

                        <div class="review-content">
                            <div class="customer-info">
                                <div class="customer-image">
                                    <img src="imagenes/julian.jpg" alt="review1">
                                </div>
                                <div class="customer-details">
                                    <h2 class="name">Julian Morales Contreras</h2>
                                    <p class="country">Medellin/Colombia</p>
                                </div>
                            </div>

                            <div class="review-text">
                                <p class="review"><span class="icon-quote-left"></span>Hola mi nombre es Julian Morales, soy estudiante de la Institucion Jose Maria Bravo Marquez, curso el grado 11 y soy aprendiz del Sena, mi labor en el proyecto fue ayudar con el diseño de la pagina y del logo.<span class="icon-quote-right"></span></p>
                            </div>
                        </div>

                        <div class="review-content">
                            <div class="customer-info">
                                <div class="customer-image">
                                    <img src="imagenes/laura3.jpg" alt="review1">
                                </div>

                                <div class="customer-details">
                                    <h2 class="name">Laura Quintero Zapata</h2>
                                    <p class="country">Medellin/Colombia</p>
                                </div>
                            </div>

                            <div class="review-text">
                                <p class="review"><span class="icon-quote-left"></span>Hola, soy Laura Quintero Zapata tengo 16 años, estoy cursando el grado 11 en el colegio Institución Educativa José Maria Bravo Márquez y estoy en media técnica en diseño y programación de software con él sena, me encargué del diseño de la página y con css, y errores de la página.<span class="icon-quote-right"></span></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- customer review section end -->





        <br><br><br>





        <!-- contact section start -->
       
        <div class="contact-section" id="contact">
            <div class="image-area"></div>
            <div class="form-area">
                <div class="form-wrap">
                    <div class="title">
                        <h1><a id="contacto">Contactanos</a></h1>
                    </div>

                    <div class="contact-area">
                        <div class="contact-info">
                            <h2>Informacion de contacto</h2>
                            <div class="contact-mail">
                                <span class="icon-envelope"></span>
                                <p>campihappy1@gmail.com</p>
                            </div>

                            <div class="contact-phone">
                                <span class="icon-phone-alt"></span>
                                <p>+57 323 8631704</p>
                            </div>
                        </div>

                        <form class="contact-form">
                            <div class="name-field">
                                <div class="input-area">
                                    <input type="text" id="fname" autocomplete="off" required>
                                    <label for="fname">Primer nombre</label>
                                </div>

                                <div class="input-area">
                                    <input type="text" id="lname" autocomplete="off" required>
                                    <label for="lname">Apellido</label>
                                </div>
                            </div>

                            <div class="input-area">
                                <input type="email" id="email" autocomplete="off" required>
                                <label for="email">Email</label>
                            </div>

                            <div class="message-area">
                                <textarea id="message" required></textarea>
                                <label for="message">Mandanos tu mensanje</label>
                            </div>

                            <div class="btn">
                                <button type="submit">Enviar</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
       
        </div>
   
        <!-- contact section end -->










       





       
        <!-- great deals popup end -->







        <!-- customer support card start -->
        <div class="support-center">
            <div class="support-center-wrap">
                <div class="support-icon-area">
                    <span class="icon-headset"></span>
                </div>

                <div class="close-support-center-card">
                    <span class="icon-times"></span>
                </div>

                <div class="support-info-area">
                    <p class="hotline"><strong>Hotline:</strong></p>
                    <p class="phone"><span>+88 0123-456-789</span></p>
                    <p class="phone"><span>+88 0123-456-789</span></p>
                    <p class="email"><strong>Email:</strong></p>
                    <p class="email-id"><span>info@gmail.com</span></p>
                </div>
            </div>
        </div>
        <!-- customer support card end -->





        <!-- footer area start -->
        <div id="footer">
            <!-- subscribe area start -->
            <div class="subscribe-area">
                <div class="section-wrap">
                    <div class="subscribe-wrap">
                    </div>
                </div>
            </div>
            <!-- subscribe area end -->


            <!-- footer navigation area start -->
            <div class="section-footer">
                <div class="section-wrap">
                    <div class="footer-wrap">
                        <div class="company-details">
                            <h2>Frutas</h2>

                            <div class="fdetails">
                                <p>Te queremos proveer de lo mejor del campo con un buen origen que te pueda beneficiar a tu y a tu familia</p>
                                </div>

                            <div class="social-media-links">
                                <div class="f-links">
                                    <a href="#"><span class="icon-facebook-f"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="https://www.instagram.com/campihappy1/"><span class="icon-instagram"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="#"><span class="icon-linkedin-in"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="#"><span class="icon-telegram-plane"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="footer-menu">
                            <h2>Menu</h2>
                            <div class="fmenu">
                                <p><a href="#top"> Inicio </a></p>
                                <p><a href="#about"> Sobre </a></p>
                                <p><a href="#services"> Servicios </a></p>
                                <p><a href="prueba.php">Productos</a></p>
                                <p><a href="#contact">Contactos</a></p>
                            </div>
                        </div>

                        <div class="top-products-links">
                            <h2>Nuestros Productos</h2>
                            <div class="flinks">
                                <p><a href="#categorias">Frutas</a></p>
                                <p><a href="#categorias">Vegetales</a></p>
                                <p><a href="#categorias">Huevos</a></p>
                                <p><a href="#categorias">Ganado</a></p>
                                <p><a href="#categorias">Carnes</a></p>
                                <p><a href="#categorias">Granos</a></p>
                            </div>
                        </div>

                        <div class="useful-links">
                            <h2>Algunos links</h2>
                            <div class="Qlinks">
                                <p><a href="login.html">Cuenta de usuario</a></p>
                                <p><a href="">Conviertete en vendedor</a></p>
                                <p><a href="registrar.html">Eres nuevo?</a></p>
                                <p><a href="#">Ayuda</a></p>
                            </div>
                        </div>

                       
            <!-- footer navigation area end -->


            <!-- copyright area start -->
            <footer>
                <p>Created By | &copy; 2023 Derechos reservados</p>
            </footer>
            <!-- copyright area end -->

        </div>
        <!-- footer area end -->

    </div>
    <!-- section content area end -->



    <!-- costom js -->
    <script src="script.js"> </script>

</body>

</html>