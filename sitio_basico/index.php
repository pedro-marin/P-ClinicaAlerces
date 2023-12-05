<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <div class="menu container">
        <a href="a" class="logo">LOGO</a>
        <input type="checkbox" id="menu"/>
        <label for="menu">
            <img src="/imagenes/menu.png" alt="menu" class="menu-icono">
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <div class="header-content container">
        <div class="header-txt">
            <h1>Clinica</h1>
            <h1>Alerce</h1>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos quis, doloremque cupiditate reiciendis nesciunt, sint ipsam ad consectetur magnam 
                placeat consequuntur sit voluptate ratione! Repellat nisi porro quae adipisci corrupti.
            </p>
            
            <a href="#" class="btn-1">informacion</a>    
        </div>

        <div class="header-img">
            <img src="imagenes/left.png" alt="">
        </div>
    </div>
</header>

<section class="about container">
   <div class="about-img">
    <img src="imagenes/about.png" alt="">
   </div>
   <div class="about-txt">
   <a name="lancha" id="lancha"></a> 
    <h2>Nosotros</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia est nihil unde accusamus deserunt. Impedit suscipit corporis, in tempore unde eligendi neque eaque mollitia accusamus excepturi veniam at aut dicta!
    Dolorum rerum veritatis tempore perspiciatis sit corporis iste deserunt, asperiores magnam, commodi odio? Aperiam distinctio ab voluptatem nesciunt optio quaerat hic natus, aspernatur, molestiae ipsum saepe excepturi odit soluta itaque?
    </p>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic maiores sapiente, consequuntur exercitationem repellat dignissimos, eos commodi magni natus est a atque aut minus porro eaque officiis, quam sunt 
        expedita!</p>

   </div>
</section>

<main class="servicios">

    <h2>Servicios</h2>
    <div class="servicios-content container">
        <div class="servicio-1">
        <i class="fa-solid fa-teeth-open"></i>
            <h3>Limpieza dental</h3>
    </div>
    <div class="servicio-1">
        <i class="fa-solid fa-tooth"></i>
            <h3>Endodoncia</h3>
    </div>

    <div class="servicio-1">
        <i class="fa-solid fa-teeth-open"></i>
            <h3>Radiografias</h3>
    </div>

    <div class="servicio-1">
        <i class="fa-solid fa-teeth-open"></i>
            <h3>Extracciones</h3>
    </div>

    </div>
</main>

<section class="formulario container">
    <form method="post" autocomplete="off">
       <h2>Agenda tu consulta</h2>
       <div class="input-group">
        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre y apellido">
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-container">
            <input type="tel" name="phone" placeholder="Telefono">
            <i class="fa-solid fa-phone"></i>
        </div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <textarea name="message" placeholder="Detalles de la consulta" ></textarea>
        </div>

        <input type="submit" name="send" class="btn-enviar" onClick="myFunction()">


       </div> 
    </form>
</section>

<footer class="footer">
    <div class="footer-content container">
        <div class="link"></div>
        <a href="#" class="logo">logo</a>
        <div class="link">
            <ul>
                <li><a href="#lancha" href="#" >Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>

        </div>

    </div>

</footer>

<?php
  include("send.php");
?>
<script>
    function myFunction(){
        window.location.href="http://localhost/sitio_basico"
    }
</script>
    
</body>
</html>