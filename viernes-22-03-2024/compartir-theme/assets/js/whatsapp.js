console.log("whatsapp");
 
function generateWhatsAppLink() {
        
        btnNuevo = document.querySelector(".btnW");
        
        btnNuevo.id;
        console.log(btnNuevo.id);

      
        const phoneNumber = document.getElementById('whatsappNumber').value;
        
        if(btnNuevo.id === "directivo_folleto"){
           console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }else if(btnNuevo.id === "directivo_presentacion"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }
        else if(btnNuevo.id === "directivo_video"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }
        else if(btnNuevo.id === "familia_folleto"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }
        else if(btnNuevo.id === "familia_presentacion"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }
        else if(btnNuevo.id === "familia_video"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }
        else if(btnNuevo.id === "docente_folleto"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        } 
        else if(btnNuevo.id === "docente_presentacion"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }
        else if(btnNuevo.id === "docente_video"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent('Hola, ¡te comparto un archivo PDF! Aquí está el enlace: https://www.ejemplo.com/archivo.pdf');
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
        }
        // Redireccionar a WhatsApp
        window.location.href = whatsappLink;
        
    }