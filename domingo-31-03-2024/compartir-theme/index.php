<?php 
/*template name: inicio*/
get_header();
?>


    <?php 
        require('templates/descubre.php');
     ?>

    <!---- SECTION NUESTRA PROPUESTA ---->
    <?php 
        require('templates/nuestra-propuesta.php');
     ?>

    <!-- #SECTION NUESTRA PROPUESTA -->

    <!---SECTION EVALUAR PARA APRENDER----->
   <?php 
        require('templates/evaluar.php');
     ?>
    <!------SECTION EVALUAR PARA APRENDER---------->
    <!-----------ACOMPAÑAMIENTO---------------->
    <?php 
        require('templates/acompanamiento.php');
     ?>

     <?php 
        require('templates/modal-descubre.php');
     ?>


    <?php 
        require('templates/modal-acompa.php');
    ?>

    <?php 
        require('templates/modal-nuestra-propuesta.php');
    ?>

    <?php 
        require('templates/archivos_backend.php');
    ?>

     
    
    
    <!-----------ACOMPAÑAMIENTO---------------->
    <footer class="footer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blanco.png" alt="">
       <script>
            const hamburger = document.querySelector(".hamburger");
            const navMenu = document.querySelector(".nav-menu");

            hamburger.addEventListener("click", () => {

            /* Toggle active class */
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");

            /* Toggle aria-expanded value */
            let menuOpen = navMenu.classList.contains("active");
            console.log(menuOpen)
            let newMenuOpenStatus = menuOpen;
            hamburger.setAttribute("aria-expanded", newMenuOpenStatus);
            })

            // close mobile menu
            document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
            //   Need to add Toggle aria-expanded value here as well because it stays as true when you click a menu item
            }))


            document.addEventListener('DOMContentLoaded', function() {
               // Función para cambiar el color de fondo del menú cuando se llega a la sección específica
                function changeMenuBackground() {
                    const section = document.getElementById('propuesta'); // Cambiar 'section2' por el ID de la sección deseada
                    const sectionTop = section.offsetTop - 50;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    const currentScroll = window.pageYOffset;

                    const menu = document.getElementById('headContent');
                    if (currentScroll >= sectionTop && currentScroll < sectionBottom) {
                        menu.style.backgroundColor = '#1E1B4B'; // Cambiar el color de fondo del menú
                    } else {
                       menu.style.backgroundColor = '#fff'; // Restaurar el color de fondo original del menú
                    }
                }

                // Escuchar el evento scroll
                window.addEventListener('scroll', changeMenuBackground);


                /*SECCTION SCROLL*/
            function smoothScroll(target, duration) {
                const targetElement = document.querySelector(target);
                
                const targetPosition = targetElement.offsetTop-100;
                const startPosition = window.pageYOffset;
                
                
                const distance = targetPosition - startPosition;
                let startTime = null;
                
                function animation(currentTime) {
                    if (startTime === null) {
                        startTime = currentTime;
                    }
                    const timeElapsed = currentTime - startTime;
                    const run = ease(timeElapsed, startPosition, distance, duration);
                    window.scrollTo(0, run);
                    if (timeElapsed < duration) {
                        requestAnimationFrame(animation);
                    }
                }

            // Función de aceleración
            function ease(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                }

                requestAnimationFrame(animation);
            }

            // Agregar evento click a los enlaces del menú
                document.querySelectorAll('nav a').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href');
                        smoothScroll(targetId, 1000); // Duración del scroll suave: 1000ms (1 segundo)
                    });
                });
            });
        </script>
    </footer>

