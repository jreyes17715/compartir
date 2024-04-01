
<div class="modal2024_acompa">
    <div class="modal-content">
    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/close.png" 
    	class="close-window2" onclick="toggleModal2();">
        <span class="close-button"></span>
        <div class="contentModal2">
        	<?php 
			    $query_history = new WP_Query( array( 'pagename' => 'inicio/acompanamiento' ) ); 
			?>
			<?php if ($query_history->have_posts()): ?>
			<?php while ($query_history->have_posts()): $query_history->the_post(); ?>
        	<div class="diagnosticoModal">
        		<h1><?php the_field('titulo_modal_diagnostica') ?></h1><br>
        		<img src="<?php the_field('imagen_modal_diagnostica') ?>">
        	</div>
        	<div class="activaModal">
        		<h1><?php the_field('titulo_modal_activa') ?></h1><br>
        		<img src="<?php the_field('Imagen-Modal-Activa') ?>">
        	</div>
        	<div class="facilitaModal">
        		<h1><?php the_field('titulo_modal_facilita') ?></h1><br>
        		<img src="<?php the_field('imagen_modal_facilita') ?>">
        	</div>
        	<?php endwhile; ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>

			<?php 
			    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-evaluar-para-aprender' ) ); 
			?>
			<?php if ($query_history->have_posts()): ?>
			<?php while ($query_history->have_posts()): $query_history->the_post(); ?>

			<div class="docentesModal">
        		<h1><?php the_field('titulo_modal_docentes') ?></h1>
        		<div class="containerDocentesModal">
        			<div class="itemsDocentesModal">
        				<div class="itemModal">
	        				<h2><?php the_field('Titulo-izquierda-modal') ?></h2>
	        				<a href="<?php the_field('link_izquierda_modal') ?>" target="_blank"><button>Visitar Link</button></a>
        				</div>
        				<div class="itemModal">
	        				<h2><?php the_field('titulo_centro_modal') ?></h2>
	        				<a href="<?php the_field('link_centro_modal') ?>" target="_blank"><button>Visitar Link</button></a>
        				</div>
        				<div class="itemModal">
	        				<h2><?php the_field('itulo-derecho-modal') ?></h2>
	        				<a href="<?php the_field('link_derecho_modal') ?>" target="_blank"><button>Visitar Link</button></a>
        				</div>
        			</div>
        		</div>
        	</div>

        	<?php endwhile; ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>
        	
        </div>
        
    </div>
</div>

<style type="text/css">
	.trigger{
	      text-align: center;
	    padding: 7px 13px;
	    background: #3e3e3e;
	    color: #fff;
	    font-size: 15px;
	    outline: none;
	    border: none;
	    border-radius: 5px;
	    font-family: cursive;
	}
	.contentModal2 {
	    margin: 0 auto;
	}
	.modal2024_acompa {
	    position: fixed;
	    left: 0;
	    top: 0;
	    width: 100%;
	    height: 100%;
	    background-color: rgba(0, 0, 0, 0.5);
	    opacity: 0;
	    visibility: hidden;
	    transform: scale(1.1);
	    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
	    z-index: 99999999;
	}

	.modal-content {
	    position: absolute;
	    top: 40%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	    background-color: white;
	    padding: 1rem 1.5rem;
	    width: 50rem;
	    border-radius: 0.5rem;
	    height: 530px;
	    text-align: center;
	    display: flex;
	    align-items: center;
	}
	.close-button {
	    float: right;
	    width: 1.5rem;
	    line-height: 1.5rem;
	    text-align: center;
	    cursor: pointer;
	    border-radius: 0.25rem;
	    background-color: lightgray;
	}
	.close-button:hover {
	    background-color: darkgray;
	}
	.show-modal2 {
	    opacity: 1;
	    visibility: visible;
	    transform: scale(1.0);
	    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	}
	.modal2024-acompa img {
	    width: 100%;
	    height: 12rem;
	    object-fit: contain;
	}
	.modal2024-acompa h1 {
	    position: relative;
	    top: -7rem;
	}
</style>


<script type="text/javascript">
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */

let modalshow1 = document.querySelector(".diagnosticoModal");
let modalshow2 = document.querySelector(".activaModal");
let modalshow3 = document.querySelector(".facilitaModal");
let modalshow4 = document.querySelector(".docentesModal");

var modal2024_acompa  = document.querySelector(".modal2024_acompa");
var trigger = document.querySelectorAll(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal2() {
   modal2024_acompa.classList.toggle("show-modal2");
}

function windowOnClick(event) {
    if (event.target === modal2024_acompa) {
        toggleModal2();
    }
}

function modalUp(parametro){
	//
	if(parametro === "diagnostica"){
		modalshow1.hidden = false;
		modalshow2.hidden = true;
		modalshow3.hidden = true;
		modalshow4.hidden = true;

	}else if(parametro === "activa"){
		modalshow2.hidden = false;
		modalshow3.hidden = true;
		modalshow1.hidden = true;
		modalshow4.hidden = true;

	}else if(parametro === "facilita"){
		modalshow2.hidden = true;
		modalshow3.hidden = false;
		modalshow1.hidden = true;
		modalshow4.hidden = true;
	}
	else if(parametro === "docentes"){
		modalshow2.hidden = true;
		modalshow3.hidden = true;
		modalshow1.hidden = true;
		modalshow4.hidden = false;
	}
	modal2024_acompa.classList.toggle("show-modal2");
}

//closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */



</script>