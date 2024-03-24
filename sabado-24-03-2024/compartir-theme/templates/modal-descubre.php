<div class="modaldescubre">
    <div class="modal-content">
        <span class="close-button"></span>
        <div class="contentModal2">
        	<div class="contenidoWhatsapp">
        		 <h2>Generar Enlace de Whatsapp</h2>
        		 <p>
        		 	Instrucciones: Ingresa el numero de telefono al que deseas enviar el documento y dar clic en el botón de 
        		 	"Generar Enlace de WhatsApp"
        		 </p>
	        	 <input type="text" id="whatsappNumber" placeholder="Ingresa tu número de WhatsApp">
	             <button onclick="generateWhatsAppLink()" class="btnW" id="normal">Generar enlace de WhatsApp</button>
             </div>
             <div class="contenidoEmail">
	        	 <input type="text" id="whatsappNumber" placeholder="Ingresa tu número de WhatsApp">
	             <button onclick="generateWhatsAppLink()" class="btnW2" id="normal">Generar enlace de Email</button>
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
	.modaldescubre {
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

<style type="text/css">
	.modaldescubre input {
	    width: 53%;
	    height: 2rem;
	    margin-bottom: 3rem;
	    border-radius: 8px;
	    padding-left: 1rem;
	}

	.modaldescubre button {
	    width: 44%;
	    height: 40px;
	    margin: 0 auto;
	    border-radius: 7px;
	    background: #352975;
	    color: white;
	    font-weight: bold;
	    display: block;
	}
	.modaldescubre p {
	    width: 80%;
	    margin: 1rem auto 2rem auto;
	}
	.modaldescubre h2{
		 margin-bottom: 0rem;
    	display: block;
	}
</style>
<script type="text/javascript">
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */

let whatsContainer = document.querySelector(".contenidoWhatsapp");
let emailContainer = document.querySelector(".contenidoEmail");
var modaldescubre = document.querySelector(".modaldescubre");
var trigger = document.querySelectorAll(".trigger");
var closeButton = document.querySelector(".close-button");

function toggleModaldescubre() {
   modaldescubre.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modaldescubre) {
        toggleModaldescubre();
    }
}

function modalUpdescubre(parametro){
	 whatsContainer.hidden = false;
	 emailContainer.hidden = true;	
 	 idButton2 = parametro;	 
	 function addIdToButton(params2) {
	  //params2 = params;
	  const button = document.querySelector('.btnW');
	  button.id = idButton2;
	 }


	addIdToButton();
	modaldescubre.classList.toggle("show-modal");
}


function modalUpdescubreEmail(parametro3){	
	 whatsContainer.hidden = true;
	 emailContainer.hidden = false;	
 	 idButton3 = parametro3;	 
	 function addIdToButton2(params2) {
	  //params2 = params;
	  const button2 = document.querySelector('.btnW2');
	  button2.id = idButton3;
	 }


	addIdToButton2();
	modaldescubre.classList.toggle("show-modal");
}


//closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */
/*DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA DIAGNOSTICA */



</script>