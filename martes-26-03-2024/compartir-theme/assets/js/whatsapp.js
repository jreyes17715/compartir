console.log("whatsapp");
 
function generateWhatsAppLink() {
        let file1 = document.getElementById("folleto_documento_whatsapp");
        let file2 = document.getElementById("presentacion_documento_Whatsapp");
        let file3 = document.getElementById("video_documento_whatsapp");
        let file4 = document.getElementById("docentes_folleto_whatsapp");
        let file5 = document.getElementById("docentes_presentacion_whatsapp");
        let file6 = document.getElementById("docentes_video_whatsapp");
        let file7 = document.getElementById("familias_folletos_whatsapp");
        let file8 = document.getElementById("familias_presentacion_whatsapp");
        let file9 = document.getElementById("familias_video_whatsapp");
        let file10 = document.getElementById("modelo_de_reportes_documento_whatsapp");
        let file11 = document.getElementById("transforma_documento_whatsapp");

        btnNuevo = document.querySelector(".btnW");
        
        btnNuevo.id;
        console.log(btnNuevo.id);

      
        const phoneNumber = document.getElementById('whatsappNumber').value;
        
        if(btnNuevo.id === "directivo_folleto"){
           console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a Director/a,
            Es un gusto compartir con usted el siguiente documento que detalla nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*
            Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.
            Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
            : ${file1.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }else if(btnNuevo.id === "directivo_presentacion"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a Director/a,
            Es un gusto compartir con usted el siguiente documento que detalla nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*
            Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.
            Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
            : ${file2.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "directivo_video"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a Director/a,
            Es un gusto compartir con usted el siguiente documento que detalla nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*
            Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.
            Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
            : ${file3.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "familia_folleto"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente documento que detalla y subraya la importancia de nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, conocido como Alcanza.

Alcanza es el único programa que integra los elementos fundamentales para el éxito académico de los alumnos. Se fundamenta en la Neuroeducación y está diseñado para fortalecer el aprendizaje de los estudiantes, permitiéndoles alcanzar los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje.

Puede compartir este folleto con los padres de familia de su institución, para que conozcan la nueva metodología eficaz que se implementará con los alumnos de su centro educativo.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
: ${file7.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "familia_presentacion"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente documento que detalla y subraya la importancia de nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, conocido como Alcanza.

Alcanza es el único programa que integra los elementos fundamentales para el éxito académico de los alumnos. Se fundamenta en la Neuroeducación y está diseñado para fortalecer el aprendizaje de los estudiantes, permitiéndoles alcanzar los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje.

Puede compartir este folleto con los padres de familia de su institución, para que conozcan la nueva metodología eficaz que se implementará con los alumnos de su centro educativo.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
: ${file8.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "familia_video"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente enlace que detalla y subraya la importancia de nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, conocido como Alcanza.

Alcanza es el único programa que integra los elementos fundamentales para el éxito académico de los alumnos. Se fundamenta en la Neuroeducación y está diseñado para fortalecer el aprendizaje de los estudiantes, permitiéndoles alcanzar los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje.

Puede compartir este video con los padres de familia de su institución, para que conozcan la nueva metodología eficaz que se implementará con los alumnos de su centro educativo.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.

Atentamente, : ${file9.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "docente_folleto"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a Director/a,

Es un gusto compartir con usted el siguiente documento que detalla nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*

Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
 ${file4.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        } 
        else if(btnNuevo.id === "docente_presentacion"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a Director/a,

Es un gusto compartir con usted el siguiente documento que detalla nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*

Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
 ${file5.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "docente_video"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a Docente,

Es un gusto compartir con usted el siguiente enlace donde podrá conocer más acerca de nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*

Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
 ${file6.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "modelo_de_reportes_documento_whatsapp"){
            console.log(btnNuevo.id);
           const message = encodeURIComponent(`Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente documento en el cual podrá conocer el detalle de los reportes que le brindará Alcanza. Así mismo, podrá conocer la interpretación de cada gráfica de los informes brindados por nuestro sistema. Por medio de esta información conocerá cuales son los niveles óptimos, moderados o con oportunidad de mejora de cada alumno, y tendrá una visión general de los resultados obtenidos en cada unidad. 

Todos los reportes los conocerá por medio de nuestra herramienta Transforma, en la sección Mi colegio/Logros académicos.  

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.

Atentamente, 
: ${file10.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }
        else if(btnNuevo.id === "transforma_whatsapp"){
           console.log(btnNuevo.id);
           const message = encodeURIComponent(`Hola, ¡te comparto un archivo PDF! de Reporte Aquí está el enlace: ${file11.value}`);
           const whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
           window.location.href = whatsappLink;
        
        }



        
        // Redireccionar a WhatsApp
        
    }



    function generateEmail() {
        let file1s = document.getElementById("folleto_documento_email");
        let file2s = document.getElementById("presentacion_documento_email");
        let file3s = document.getElementById("video_documento_email");
        let file4s = document.getElementById("docentes_folleto_email");
        let file5s = document.getElementById("docentes_presentacion_documento_email");
        let file6s = document.getElementById("docentes_video_link_email");
        let file7s = document.getElementById("familias_folleto_documento");
        let file8s = document.getElementById("familias_presentacion_email");
        let file9s = document.getElementById("familias_video_link_email");
        let file10s = document.getElementById("modelo_de_reportes_documento_email");
        let file11s = document.getElementById("Transforma-documento-email");
        btnNuevo2 = document.querySelector(".btnW2");
        
        btnNuevo2.id;
        console.log(btnNuevo2.id);

      
        const email = document.getElementById('EmailInput').value;
        
        if(btnNuevo2.id === "directivos_folleto_email"){
           //const message = encodeURIComponent(`Hola, ¡te comparto un archivo PDF! Aquí está el enlace: ${file1.value}`);
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a Director/a,
              Es un gusto compartir con usted el siguiente documento que detalla nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.
              Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.
              Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
              Saludos cordiales,:${file1s.value}`;
           console.log(sendEmail);
           window.location.href = sendEmail;


        
        }else if(btnNuevo2.id === "directivos_presentacion_email"){
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a Director/a,
                Es un gusto compartir con usted el siguiente documento que detalla nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.
                Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.
                Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
                Saludos cordiales,: ${file2s.value}`;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "directivos_video_email"){
           const sendEmail = `mailto:${email}? Hola te enviamos el siguiente Documento ${file3s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "docentes_folleto_email"){
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a Docente,
Es un gusto compartir con usted el siguiente documento que detalla nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*
Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.
Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
: ${file4s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "docentes_presentacion_email"){
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a Docente,

Es un gusto compartir con usted el siguiente documento que detalla nuestro *Programa de Nivelación y Mejora de Aprendizajes Esenciales, denominado Alcanza.*

Alcanza es un programa fundamentado en la Neuroeducación, diseñado para ayudar a sus alumnos a fortalecer su aprendizaje y obtener los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje. Esto se logra a través de indicadores de logro que son evaluados mediante pruebas que reflejan el porcentaje de necesidad de refuerzo. Además, le ofrecemos la posibilidad de acceder a tableros de resultados que proporcionan un análisis por salón, por materia y por alumno.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.
: ${file5s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "docentes_video_email"){
           const sendEmail = `mailto:${email}? Hola te enviamos el siguiente Documento ${file6s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "familias_folleto_email"){
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente documento que detalla y subraya la importancia de nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, conocido como Alcanza.

Alcanza es el único programa que integra los elementos fundamentales para el éxito académico de los alumnos. Se fundamenta en la Neuroeducación y está diseñado para fortalecer el aprendizaje de los estudiantes, permitiéndoles alcanzar los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje.

Puede compartir este folleto con los padres de familia de su institución, para que conozcan la nueva metodología eficaz que se implementará con los alumnos de su centro educativo.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.

Atentamente, 

:${file7s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "familia_presentacion"){
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente documento que detalla y subraya la importancia de nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, conocido como Alcanza.

Alcanza es el único programa que integra los elementos fundamentales para el éxito académico de los alumnos. Se fundamenta en la Neuroeducación y está diseñado para fortalecer el aprendizaje de los estudiantes, permitiéndoles alcanzar los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje.

Puede compartir este folleto con los padres de familia de su institución, para que conozcan la nueva metodología eficaz que se implementará con los alumnos de su centro educativo.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.

Atentamente, 

:${file8s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "familias_video_email"){
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente enlace que detalla y subraya la importancia de nuestro Programa de Nivelación y Mejora de Aprendizajes Esenciales, conocido como Alcanza.

Alcanza es el único programa que integra los elementos fundamentales para el éxito académico de los alumnos. Se fundamenta en la Neuroeducación y está diseñado para fortalecer el aprendizaje de los estudiantes, permitiéndoles alcanzar los niveles esperados en cada unidad, tanto en matemáticas como en lenguaje.

Puede compartir este video con los padres de familia de su institución, para que conozcan la nueva metodología eficaz que se implementará con los alumnos de su centro educativo.

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.

Atentamente, 


:${file9s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }
        else if(btnNuevo2.id === "modelo_reportes_email"){
           const sendEmail = `mailto:${email}?subject=Asunto del correo&body=Estimado/a  __________,

Es un placer para mí compartir con usted el siguiente documento en el cual podrá conocer el detalle de los reportes que le brindará Alcanza. Así mismo, podrá conocer la interpretación de cada gráfica de los informes brindados por nuestro sistema. Por medio de esta información conocerá cuales son los niveles óptimos, moderados o con oportunidad de mejora de cada alumno, y tendrá una visión general de los resultados obtenidos en cada unidad. 

Todos los reportes los conocerá por medio de nuestra herramienta Transforma, en la sección Mi colegio/Logros académicos.  

Quedo a la espera de sus comentarios y estoy a su disposición para cualquier consulta adicional que pueda surgir.

Atentamente, 
${file10s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }  
        else if(btnNuevo2.id === "transforma_email"){
           const sendEmail = `mailto:${email}? Hola te enviamos el siguiente Documento ${file11s.value} `;
           console.log(sendEmail);
           window.location.href = sendEmail;
        }

       
    }