
<div class="modal2024_propuesta">
    <div class="modal-content">
        <span class="close-button"></span>
        <div class="contentModal2">
        	<?php 
			    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-nuestra-propuesta' ) ); 
			?>

			<?php if ($query_history->have_posts()): ?>
			<?php while ($query_history->have_posts()): $query_history->the_post(); ?>
        	<div class="diagnosticoModal d1">
        		<h1 style="top:0;">Didactica</h1><br>
        		
        		<?php the_field('link_neuropdagogia') ?>
        	</div>
        	<div class="activaModal d2">
        		<h1 style="top:0;">Neuropedagogia</h1><br>
        		<?php the_field('link_secuencia_didactica_') ?>
        	</div>
        	<div class="facilitaModal d3">
        		<h1 style="top:0;">Evaluacion</h1><br>
        		<?php the_field('link_evaluacion_') ?>
        	</div>
        	<div class="facilitaModal d6">
        		<h1 style="top:0;">Evaluacion</h1><br>
        		<img src="https://estudiobears.com/cptr-2024-staying/wp-content/uploads/2024/03/esquemaAlcanza_vFinal.png" style="height: auto;">
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