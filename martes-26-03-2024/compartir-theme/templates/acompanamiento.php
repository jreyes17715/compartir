    <section class="descubreSection acpt" id="acompa">
        <h2 class="titleSectionacpt">ACOMPAÑAMIENTO</h2>
        <div class="CardsSectionacpt">
            <div class="itemSectionDescubreacpt directivosItemacpt">
                <div class="topSectionCardacpt">
                    <h2>DIAGNOSTICA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fondo_1.png" alt="">
                </div>
                <div class="contentCardsacpt">
                    <ul>
                        <li>
                            Conocimientos, habilidades y capacidades en matemática y lenguaje
                        </li>
                    </ul>
                    <button class="LearnMore" onclick="modalUp('diagnostica')" style="color: white!important;"> Ver Más </button>
                 
                </div>

            </div>
            <div class="itemSectionDescubreacpt docentesItemacpt">
                <div class="topSectionCardacpt">
                    <h2>ACTIVA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fondo_2.png" alt="">
                </div>
                <div class="contentCardsacpt">
                   
                    <ul>
                        <li>
                            Metodologías para aprender a aprender
                        </li>
                        <li>
                            Refuerza y evoca conocimientos
                        </li>
                        <li>
                            Acompaña la gestión del aula
                        </li>
                    </ul>
                    <button class="LearnMore" onclick="modalUp('activa')"  style="color: white!important;"> Ver Más </button>
                </div>

            </div>
            <div class="itemSectionDescubreacpt familasItemacpt">
                <div class="topSectionCardacpt">
                    <h2>FACILITA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fondo_3.png" alt="">
                </div>
                <div class="contentCardsacpt">
                  
                    <ul>
                        <li>
                            Metodologías para aprender a aprender
                        </li>
                        <li>
                            Refuerza y evoca conocimientos
                        </li>
                        <li>
                            Acompaña la gestión del aula
                        </li>
                    </ul>
                    <button class="LearnMore" onclick="modalUp('facilita')" id="facilitaModal" style="color: white!important;"> Ver Más </button>
                </div>

            </div>
            <?php 
                $query_history = new WP_Query( array( 'pagename' => 'inicio/acompanamiento' ) ); 
            ?>

            <?php if ($query_history->have_posts()): ?>
            <?php while ($query_history->have_posts()): $query_history->the_post(); ?>
            <div class="itemSectionDescubreacpt familasItemacptTransforma">
                <div class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/transforma.png" class="logoTrans" alt="">
                </div>
                <div class="contentCardsacpt">
                    <div class="rowCards23">
                        <div class="itemCardsRows dr">
                            <a href="#" onclick="modalUpdescubreEmail('transforma_email')">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-email.svg" alt="" class="imgUno">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email_blanco.png" alt=""
                                            class="imgDos">

                            </a>
                            <a href="<?php the_field("transforma_documento_descarga") ?>" download>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descargar.svg" alt="" class="imgUno">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/descarga_blanca.png" alt=""
                                            class="imgDos">
                            </a>
                            <a href="#" onclick="modalUpdescubre('transforma_whatsapp')">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="" class="imgUno">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_blanco.png" alt=""
                                            class="imgDos">
                            </a>
                        </div>
                        <div class="botonBoxSecuencia">
                            <button  onclick="modalUp2('video_transforma')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/watch.png" 
                            class="wathc"
                            alt="">Ver vídeo</button>
                        </div>
                    </div>
                </div>

            </div>
            <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div>
        
    </section>