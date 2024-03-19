<?php 
    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-descubre' ) ); 
?>

<?php if ($query_history->have_posts()): ?>
<?php while ($query_history->have_posts()): $query_history->the_post(); ?>

<section class="descubreSection" id="descubre">
            <h2 class="titleSection"><?php the_title(); ?></h2>
            <div class="CardsSection">
                <div class="itemSectionDescubre directivosItem">
                    <div class="topSectionCard">
                        <h2><?php the_field('titulo_directivos') ?></h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/directivos.png" alt="">
                    </div>
                    <div class="contentCards">
                        <div class="rowCards">
                            <h3>Folleto</h3>
                            <h3>Presentación</h3>
                            <h3>Vídeo </h3>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="<?php the_field('link_email_folleto_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                                <a href="<?php the_field('link_email_presentacion_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                                <a href="<?php the_field('link_email_video_directivos') ?>">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                            </div>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="<?php the_field('link_descarga_folleto_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                                <a href="<?php the_field('link_descarga_presentacion_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                                <a href="<?php the_field('link_descarga_video_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                            </div>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="<?php the_field('link_whatsapp_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                                <a href="<?php the_field('titulo_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                                <a href="<?php the_field('link_whatsapp_video_directivos') ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                            </div>
                        </div>
                        

                    </div>

                </div>
                <div class="itemSectionDescubre docentesItem">
                    <div class="topSectionCard">
                        <h2>DOCENTES</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/docentes.png" alt="">
                    </div>
                    <div class="contentCards">
                        <div class="rowCards">
                            <h3>Folleto</h3>
                            <h3>Presentación</h3>
                            <h3>Vídeo</h3>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                                <a href="#">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                            </div>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                            </div>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="#">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                            </div>
                        </div>
                        

                    </div>

                </div>
                <div class="itemSectionDescubre familasItem">
                    <div class="topSectionCard">
                        <h2>FAMILIAS</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/familias.png" alt="">
                    </div>
                    <div class="contentCards">
                        <div class="rowCards">
                            <h3>Folleto</h3>
                            <h3>Presentación</h3>
                            <h3>Vídeo</h3>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                                <a href="#">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                                <a href="#">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                    class="iconDos">
                                </a>
                            </div>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="#">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt="" class="iconDos">
                                </a>
                            </div>
                        </div>
                        <div class="rowCards">
                            <div class="itemCardsRows">
                                <a href="#">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                                <a href="#">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="iconUno">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt="" class="iconDos">
                                </a>
                            </div>
                        </div>
                        

                    </div>

                </div>
            </div>
            
    </section>

    <!---SECCION DESCUBRE-->
     <?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>