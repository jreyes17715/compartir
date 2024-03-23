<div class="modal2024">
    <div class="modal-content">
        <span class="close-button"></span>
        <div class="contentModal2">
        	<div class="diagnosticoModal">
        		<h1>DIAGNOSTICA</h1><br>
        		<img src="https://estudiobears.com/cptr-2024-staying/wp-content/themes/compartir-theme/assets/images/transforma.png">
        	</div>
        	<div class="activaModal">
        		<h1>ACTIVA</h1><br>
        		<img src="https://estudiobears.com/cptr-2024-staying/wp-content/themes/compartir-theme/assets/images/transforma.png">
        	</div>
        	<div class="facilitaModal">
        		<h1>FACILITA</h1><br>
        		<img src="https://estudiobears.com/cptr-2024-staying/wp-content/themes/compartir-theme/assets/images/transforma.png">
        	</div>
        	<div class="propuestaModal">
        		<h1>NUESTRA PROPUESTA</h1><br>
        		<img src="https://estudiobears.com/cptr-2024-staying/wp-content/themes/compartir-theme/assets/images/drg.svg">
        	</div>

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
	.modal2024 {
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
	.modal2024 img {
	    width: 100%;
	    height: 12rem;
	    object-fit: contain;
	}
	.modal2024 h1 {
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
let modalshow4 = document.querySelector(".propuestaModal");

var modal2024 = document.querySelector(".modal2024");
var trigger = document.querySelectorAll(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModal() {
   modal2024.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal2024) {
        toggleModal();
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


	}else if(parametro === "propuesta"){
		modalshow2.hidden = true;
		modalshow3.hidden = true;
		modalshow1.hidden = true;
		modalshow4.hidden = false;

	}else if(parametro === "facilita"){
		modalshow2.hidden = true;
		modalshow3.hidden = false;
		modalshow1.hidden = true;
		modalshow4.hidden = true;
	}
	modal2024.classList.toggle("show-modal");
}

//closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */



</script>