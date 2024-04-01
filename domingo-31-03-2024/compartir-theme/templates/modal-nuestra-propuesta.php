
<div class="modal2024_propuesta">
    <div class="modal-content">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close.png" class="close-window" 
        onclick="toggleModal();">
        <div class="contentModal2">
        	<?php 
			    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-nuestra-propuesta' ) ); 
			?>

			<?php if ($query_history->have_posts()): ?>
			<?php while ($query_history->have_posts()): $query_history->the_post(); ?>
        	<div class="diagnosticoModal d1 x3l">
        		<h1 style="top:0;">Didáctica</h1><br>
        		
        		<?php the_field('link_neuropdagogia') ?>
        	</div>
        	<div class="activaModal d2 x3l">
        		<h1 style="top:0;">Neuropedagogía</h1><br>
        		<?php the_field('link_secuencia_didactica_') ?>
        	</div>
        	<div class="facilitaModal d3 x3l">
        		<h1 style="top:0;">Evaluación</h1><br>
        		<?php the_field('link_evaluacion_') ?>
        	</div>
        	<div class="facilitaModal d6 x3l">
        		<h1 style="top:0;">Evaluacion</h1><br>
        		<img src="<?php the_field('imagen_del_modal_del_centro') ?>" style="height: auto;" class="dragoimg">
        	</div>
        	<?php endwhile; ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>


			<!------------------MANUAL PARA APRENDER-------------------->
			 <?php 
			    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-evaluar-para-aprender' ) ); 
			?>

			<?php if ($query_history->have_posts()): ?>
			<?php while ($query_history->have_posts()): $query_history->the_post(); ?>
			<div class="d4">
        		<h1 style="top:0;">Evaluaciones</h1><br>
        		<?php the_field('link_video_pleno_internacional') ?>
        	</div>

			<!-------------------MANUAL PARA APRENDER-------------------->
			<?php endwhile; ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>


			<!------------------TRANSFORMA-------------------->
			 <?php 
			    $query_history = new WP_Query( array( 'pagename' => 'inicio/acompanamiento' ) ); 
			?>

			<?php if ($query_history->have_posts()): ?>
			<?php while ($query_history->have_posts()): $query_history->the_post(); ?>
			<div class="d5">
        		<h1 style="top:0;">Transforma</h1><br>
        		<?php the_field('video_transforma') ?>
        	</div>

			<!-------------------TRANSFORMA-------------------->
			<?php endwhile; ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>
        </div>
        
    </div>
</div>

<style type="text/css">
	.dragoimg {
	    height: 90% !important;
	}
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
	.modal2024_propuesta {
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

	.modal2024_propuesta .modal-content {
	    position: absolute;
	    top: 40%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	    background-color: white;
	    padding: 1rem 1.5rem;
	    width: 85%;
	    border-radius: 0.5rem;
	    height: 650px;
	    text-align: center;
	    display: flex;
	    align-items: inherit;

	}
	.modal2024_propuesta .modal-content iframe{
		width: 100%;
		height: 88%;
	}

	.modal2024_propuesta .contentModal2{
		width: 100%;
		height: 100%;
	}
	.modal2024_propuesta .x3l{
		width: 100%;
		height: 90%;
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
	.show-modal {
	    opacity: 1;
	    visibility: visible;
	    transform: scale(1.0);
	    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	}
	.modal2024_propuesta img {
	    width: 100%;
	    height: 12rem;
	    object-fit: contain;
	}
	.modal2024_propuesta h1 {
	    position: relative;
	    top: -7rem;
	}


	@media(max-width: 1450px){
		.modal2024_propuesta .modal-content {
		    position: absolute;
			    top: 49%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			    background-color: white;
			    padding: 1rem 1.5rem;
			    width: 85%;
			    border-radius: 0.5rem;
			    height: 85%;
			    text-align: center;
			    display: block;
			    align-items: inherit;
			}

		}
		.modal2024_propuesta .modal-content iframe{
			width: 100%;
			height: 88%;
		}

		.modal2024_propuesta .contentModal2{
			width: 100%;
			height: 100%;
		}
		.modal2024_propuesta .x3l{
			width: 100%;
			height: 100%;
		}

	}
</style>


<script type="text/javascript">
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */

let modalshow1s = document.querySelector(".d1");
let modalshow2s = document.querySelector(".d2");
let modalshow3s = document.querySelector(".d3");
let modalshow4s = document.querySelector(".d4");
let modalshow5s = document.querySelector(".d5");
let modalshow6s = document.querySelector(".d6");
var modal2024_propuesta = document.querySelector(".modal2024_propuesta");
var trigger = document.querySelectorAll(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
   modal2024_propuesta.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal2024_propuesta) {
        toggleModal();
    }
}

function modalUp2(params){
	parametro = params;
	console.log(parametro);
	if(parametro === "didactica"){
		modalshow1s.hidden = false;
		modalshow2s.hidden = true;
		modalshow3s.hidden = true;
		modalshow4s.hidden = true;
		modalshow5s.hidden = true;
		modalshow6s.hidden = true;

	}else if(parametro === "neuro"){
		modalshow2s.hidden = false;
		modalshow3s.hidden = true;
		modalshow1s.hidden = true;
		modalshow4s.hidden = true;
		modalshow5s.hidden = true;
		modalshow6s.hidden = true;

	}else if(parametro === "evaluacion"){
		modalshow2s.hidden = true;
		modalshow3s.hidden = false;
		modalshow1s.hidden = true;
		modalshow4s.hidden = true;
		modalshow5s.hidden = true;
		modalshow6s.hidden = true;
	}
	else if(parametro === "evaluacion_internacional"){
		modalshow2s.hidden = true;
		modalshow3s.hidden = true;
		modalshow1s.hidden = true;
		modalshow4s.hidden = false;
		modalshow5s.hidden = true;
		modalshow6s.hidden = true;
	}
	else if(parametro === "video_transforma"){
		modalshow2s.hidden = true;
		modalshow3s.hidden = true;
		modalshow1s.hidden = true;
		modalshow4s.hidden = true;
		modalshow5s.hidden = false;
		modalshow6s.hidden = true;
	}
	else if(parametro === "dragomodal"){
		modalshow2s.hidden = true;
		modalshow3s.hidden = true;
		modalshow1s.hidden = true;
		modalshow4s.hidden = true;
		modalshow5s.hidden = true;
		modalshow6s.hidden = false;
	}
	modal2024_propuesta.classList.toggle("show-modal");
}



//closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */


</script>