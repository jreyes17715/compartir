 <?php 
    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-evaluar-para-aprender' ) ); 
?>

<?php if ($query_history->have_posts()): ?>
<?php while ($query_history->have_posts()): $query_history->the_post(); ?>
 <section class="evaluarParaAprender" id="evalua">
        <div class="topSectionEvaluarParaAprender">
            <h2>EVALUAR PARA APRENDER</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-alcanza.svg" alt="">
        </div>
        <div class="containerBottomEvaluar">
            <div class="containerEvaluar">
                <div class="column1">
                  <div class="Cont">
                    <div class="itemSectionDescubre directivosItem">
                        <div class="topSectionCard">
                            <h2>EVALUACIONES</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/docentes.png" alt="">
                        </div>
                        <div class="contentCards evaluar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pleno.png" alt="">
                            <button onclick="modalUp2('evaluacion_internacional')">Ver Demo</button>
                        </div>
    
                    </div>
                  </div>
                </div>
                <div class="column2">
                  <div class="Cont">
                    <div class="contIntemEvaluar">
                        <h3>DIRECTIVOS</h3>
                        <div class="contentSmallItems">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc.png" alt="">
                            <a href="<?php the_field('link_visita_nuestro_demo_directivos') ?>"><h4>VISITA NUESTRO DEMO</h4></a>
                        </div>
                    </div>
                  </div>
                  <div class="Cont">
                    <div class="contIntemEvaluar">
                        <h3>DOCENTES</h3>
                        <div class="contentSmallItems">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc.png" alt="">
                            <a href="<?php the_field('Link-visita-nuestra-demo-Docentes') ?>"><h4>VISITA NUESTRO DEMO</h4></a>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="column3">
                  <div class="Cont">
                    <div class="contIntemEvaluar stats">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/evaluar.png" alt="">
                    </div>
                   
                  </div>
                  <div class="Cont">
                    <div class="contIntemEvaluar2">
                        <div class="contentSmallItems">
                           <h3 class="modeloTitle">MODELO DE REPORTES</h3>
                                <div class="rowCards2">
                                    <div class="itemCardsRows itwms2">
                                        <a href="#" onclick="modalUpdescubreEmail('modelo_reportes_email')">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt=""          class="iconUno">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                            class="iconDos">
                                        </a>
                                        <a href="<?php the_field('modelo_de_reportes_documento_descarga') ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt=""
                                            class="iconDos">
                                        </a>
                                        <a href="#" onclick="modalUpdescubre('modelo_de_reportes_documento_whatsapp')">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno"> 
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt=""
                                            class="iconDos">
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
