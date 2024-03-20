
     <div id="myModal" class="modal">
          <div class="modal-content">
               <div class="container">
                    <span onclick="closeModal()" class="close">&times;</span>
                       <img class="img-principal lg:-mt-32 xl:mt-20" src="<?php echo get_template_directory_uri(); ?>/assets/images/drg.svg" alt="">
                   </div>
              </div>
         </div>
         <style type="text/css">

#myModal h1 {
  font-size: 1.5rem;
  margin: 0;
  line-height: 1.5;
  color: darksalmon;
}

#myModal h2 {
  font-size: 1.25rem;
  margin: 0;
  line-height: 1.5;
  color: darkkhaki;
}

#myModal h3 {
  font-size: 1rem;
  margin: 0;
  line-height: 1.5;
}

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgb(81 91 116 / 70%);
    z-index: 999999;
    justify-content: center;
    overflow: hidden;
}
.modal img{
      margin: 0 auto;
    width: 61%;
    max-width: 1500px;
}
.modal-content {
    /* background-color: white; */
    border-radius: 25px;
    box-shadow: 0 0 10px rgb(173 148 148 / 70%);
    width: 100%;
    max-width: 1000%;
    position: relative;
    margin: 1rem;
}

.click-me {
  background: none;
}

#myModal button.click-me {
  box-shadow: none;
}

#myModal button.click-me:hover {
  box-shadow: none;
}



.open-modal {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.open-modal p {
  color: brown;
}

#myModal .container {
  margin: 1rem;
  padding: 1rem;
  display: flex;
  flex-direction: column;
}

#myModal .close {
    cursor: pointer;
    align-self: end;
    font-size: 4.25rem;
    font-weight: bold;
    color: white;
}
 #myModal .open-modal {
  display: flex;
}

.show {
  display: flex;
}

.hide {
  display: none;
}

#myModal button {
  background-color: darksalmon;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 0 auto;
  cursor: pointer;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  border-radius: 1rem;
  max-width: max-content;
}

#myModal button {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#myModal button:hover {
  box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
    0 17px 50px 0 rgba(0, 0, 0, 0.19);
}
         </style>

         <script type="text/javascript">
           const modal = document.getElementById("myModal");
              function openModal() {
                  modal.classList.add('show');
              }
              function closeModal() {
                  modal.classList.remove('show');
              }
              window.onclick = function (event) {
                  if (event.target == modal) {
                      modal.classList.remove('show');
                  }
        }
         </script>