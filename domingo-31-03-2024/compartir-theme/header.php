<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compartir</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/general.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sections/descubre-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sections/nuestra-propuesta2.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sections/evaluar-para-aprender.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sections/acompanante.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/menu-movies.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-seccion.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/otro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/whatsapp.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/archivos.js"></script>
    <script type="text/javascript" src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>

    <style type="text/css">
    	@media screen and (max-width: 782px){
    			
			}
    </style>
<?php wp_head(); ?>
</head>
<body>
	<header class="desktop">
      <div class="headContent" id="headContent" style="transition: background-color 0.3s;">  
            <div class="menuGeneral">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.PNG" alt="">
                </div>
                <div class="menuItemsGeneral">
                    <nav>
                        <ul>
                            <li><a href="#descubre" class="mte-toem">DESCUBRE</a></li>
                            <li><a href="#propuesta" class="mte-toem">NUESTRA PROPUESTA</a></li>
                            <li><a href="#evalua" class="mte-toem">EVALÚA</a></li>
                            <li><a href="#acompa" class="mte-toem">ACOMPAÑAMIENTO</a></li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
    </header>
    <header class="moviles">
        <div class="containerNav">
            <nav class="nav-bar">
              <a href="#" class="nav-branding">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blanco.png" class="logo-moviles-desktop" alt="">
              </a>
        
              <ul class="nav-menu">
                <li class="nav-item">
                  <a href="#descubre" class="nav-link">DESCUBRE</a>
                </li>
                <li class="nav-item">
                  <a href="#propuesta" class="nav-link">NUESTRA PROPUESTA</a>
                </li>
                <li class="nav-item">
                  <a href="#evalua" class="nav-link">EVALÚA</a>
                </li>
                <li class="nav-item">
                  <a href="#acompa" class="nav-link">ACOMPAÑAMIENTO</a>
                </li>
              </ul>
        
              <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </div>
            </nav>
          </div>
    </header>
 <script type="text/javascript">
    // Obtener todos los elementos del menú
const menuItems = document.querySelectorAll('.mte-toem');

// Agregar un event listener a cada elemento del menú
menuItems.forEach(item => {
  item.addEventListener('click', () => {
    // Eliminar la clase 'active' de todos los elementos del menú
    menuItems.forEach(item => {
      item.classList.remove('active');
    });

    // Agregar la clase 'active' al elemento que se le dio click
    item.classList.add('active');
  });
});


function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
 reveal()
});
window.addEventListener("scroll", reveal);

</script>
</body>