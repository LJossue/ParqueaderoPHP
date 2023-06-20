<style>@import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");
html {
  scroll-behavior: smooth;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "League Spartan", sans-serif;
}
h1 {
  font-size: 50px;
  line-height: 64px;
  color: #ff481c;
}
h2 {
  font-size: 46px;
  line-height: 54px;
  color:  #ff481c;
}
h4 {
  font-size: 20px;
  color: #ff481c;
}
h6 {
  font-weight: 700;
  font-size: 12px;
}
p {
  font-size: 16px;
  color: #465b52;
  margin: 15px 0 20px 0;
}
.section-p1 {
  padding: 40px 80px;
}
section-m1 {
  margin: 40px 0;
}
body {
  width: 100%;
}




/* Pagina principal */
#hero {
  background-image: url(https://sociedadtequendama.com/wp-content/uploads/2021/08/BANNER-PARQUEADERO.jpg);
  height: 90vh;
  width: 100%;
  background-size: cover;
  background-position: top 25% right 0;
  padding: 0 80px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  position: relative;
}
#hero img {
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
}

#hero h4 {
  padding-bottom: 15px;
}
#hero h1 {
  color: white;
}

/* 
 */
.button1 {
  font-size: 18px;
  font-weight: 600;
  padding: 11px 18px;
  color: #222;
  background-color: transparent;
  cursor: pointer;
  border: 1px solid #222;
  outline: none;
  transition: 0.2s;
  text-decoration: none;
  border-radius: 4px;
  margin: 10px;
  position: absolute;

  left: 20%;
  transform: translateX(-50%);
}
.button1:hover {
  border: 1px solid #ff481c;
  text-decoration: none;
  color: #ff481c;
  background-color: transparent;
  cursor: pointer;
  font-size: 20px;
}

/* boton de whatsapp */
#whatsapp {
  position: fixed;
  bottom: 20px;
  right: 20px;
  transition: 0.5s;
}

#iconowp {
  width: 80px;
  filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.4));
}
#circulowp {
  fill: #25d366;
}
#pathwp {
  fill: #fff;
}
#whatsapp:hover {
  opacity: 0.7;
}

.icon {
  width: 15px;
}

#product1 {
  text-align: center;
}
#product1 .pro-container {
  display: flex;
  justify-content: space-between;
  padding-top: 20px;
  flex-wrap: wrap;
}
#product1 .pro {
  width: 23%;
  min-width: 250px;
  padding: 10px 12px;
  border: 1px solid #cce7d0;
  border-radius: 25px;
  cursor: pointer;
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
  margin: 15px 0;
  transition: 0.2s ease;
  position: relative;
}

#product1 .pro:hover {
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
}

#product1 .pro img {
  width: 100%;
  border-radius: 20px;
}
#product1 .pro .des {
  text-align: start;
  padding: 10px 0;
}

#product1 .pro .des span {
  color: gray;
  font-size: 12px;
}
#product1 .pro .des h5 {
  padding-top: 7px;
  color: #1a1a1a;
  font-size: 14px;
}
#product1 .pro .des i {
  font-size: 17px;
  color: rgb(243, 181, 25);
}
#product1 .pro .des h4 {
  padding-top: 7px;
  font-size: 15px;
  font-weight: 700;
  color: green;
}
#product1 .pro .cart {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50px;
  background-color: #e3e6f3;
  font-weight: 500;
  color: #dc474d;
  border: 1px solid gray;
  position: absolute;
  bottom: 20px;
  right: 10px;
}

#banner {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-image: url("../img/banner/b2.png");
  width: 100%;
  height: 40vh;
  background-size: cover;
  background-position: center;
}
#banner h4 {
  font-size: 16px;
}
#banner h2 {
  font-size: 30px;
  padding: 10px 0;
}

.buttonbanner {
  font-size: 13px;
  font-weight: 600;
  padding: 11px 18px;
  color: #222;
  background-color: transparent;
  cursor: pointer;
  border: 1px solid #222;
  outline: none;
  transition: 0.2s;
  text-decoration: none;
  border-radius: 4px;
  margin: 10px;
}
.buttonbanner:hover {
  border: 1px solid #dc474d;
  text-decoration: none;
  color: #dc474d;
  background-color: transparent;
  cursor: pointer;
  font-size: 16px;
}
.buttonbanner2 {
  font-size: 13px;
  font-weight: 600;
  padding: 11px 18px;
  color: #222;
  background-color: transparent;
  cursor: pointer;
  border: 1px solid #222;
  outline: none;
  transition: 0.2s;
  text-decoration: none;
  border-radius: 4px;
  margin: 10px;
}
.buttonbanner2:hover {
  border: 1px solid #dc474d;
  text-decoration: none;
  color: #dc474d;
  background-color: transparent;
  cursor: pointer;
}

#sm-banner {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

#sm-banner .banner-box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  background-image: url("../img/banner/bannercupcake.png");
  min-width: 580px;
  height: 50vh;
  background-size: cover;
  background-position: center;
  padding: 30px;
  margin-bottom: 30px;
}
#sm-banner .banner-box2 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  background-image: url("../img/banner/bannertorta.png");
  min-width: 580px;
  height: 50vh;
  background-size: cover;
  background-position: center;
  padding: 30px;
  margin-bottom: 30px;
}
#sm-banner .banner-box3 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  background-image: url("../img/banner/bannergalletas.png");
  min-width: 580px;
  height: 50vh;
  background-size: cover;
  background-position: center;
  padding: 30px;
  margin-bottom: 30px;
}
#sm-banner .banner-box4 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  background-image: url("../img/banner/bannerutensilios.png");
  min-width: 580px;
  height: 50vh;
  background-size: cover;
  background-position: center;
  padding: 30px;
  margin-bottom: 30px;
}
#sm-banner h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 300;
}
#sm-banner h2 {
  color: #fff;
  font-size: 28px;
  font-weight: 800;
}
#sm-banner span {
  color: #fff;
  font-size: 14px;
  font-weight: 500;
  padding-bottom: 15px;
}

#sm-banner .banner-box:hover button {
  border: 1px solid #dc474d;
  text-decoration: none;
  color: #dc474d;
  background-color: transparent;
  cursor: pointer;
}
#sm-banner .banner-box2:hover button {
  border: 1px solid #dc474d;
  text-decoration: none;
  color: #dc474d;
  background-color: transparent;
  cursor: pointer;
}
#sm-banner .banner-box3:hover button {
  border: 1px solid #dc474d;
  text-decoration: none;
  color: #dc474d;
  background-color: transparent;
  cursor: pointer;
}
#sm-banner .banner-box4:hover button {
  border: 1px solid #dc474d;
  text-decoration: none;
  color: #dc474d;
  background-color: transparent;
  cursor: pointer;
}

footer p a .icon {
  width: 15px;
  color: #465b52;
  margin-right: 10px;
}
footer p a .icon:hover,
footer a:hover {
  color: #dc474d;
}
.col img {
  max-width: 150px;
}

footer {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
footer .col {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 20px;
}
footer .logo {
  margin-bottom: 30px;
}
footer h4 {
  font-size: 14px;
  padding-bottom: 20px;
}
footer p {
  font-size: 13px;
  margin: 0 0 8px 0;
}
footer a {
  font-size: 13px;
  text-decoration: none;
  color: #222;
  margin-bottom: 10px;
}
footer a {
  font-size: 13px;
  text-decoration: none;
  color: #222;
  margin-bottom: 10px;
}

#mobile {
  display: none;
  align-items: center;
}
#close {
  display: none;
}


@media (max-width: 799px) {
  .section-p1 {
    padding: 40px 40px;
  }
  #navbar {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    position: fixed;
    top: 0;
    right: -300px;
    height: 100vh;
    width: 300px;
    background-color: #e3e6f3;
    box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
    padding: 80px 0 0 10px;
    transition: 0.3s;
  }
  #navbar.active {
    right: 0px;
  }
  #navbar li {
    margin-bottom: 25px;
  }
  #mobile {
    display: flex;
    align-items: center;
  }
  #mobile i {
    color: #222;
    font-size: 24px;
    padding-left: 20px;
  }
  #close {
    display: initial;
    position: absolute;
    top: 30px;
    left: 30px;
    color: #222;
    font-size: 24px;
  }
  #lg-bag {
    display: none;
  }
  #hero {
    height: 80vh;
    background-position: top 30% right -180px;
  }
  #product1 .pro-container {
    justify-content: center;
  }
  #product1 .pro {
    margin: 15px;
  }
  #banner {
    height: 35vh;
  }
  #sm-banner .banner-box,
  #sm-banner .banner-box2,
  #sm-banner .banner-box3,
  #sm-banner .banner-box4 {
    min-width: 100%;
    height: 40vh;
  }
  .button1 {
    text-align: center;
    justify-items: center;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    position: relative;
    margin-left: 100px;
  }
  #product1 .pro {
    width: 70%;
  }
}

/*  */
@media (max-width: 477px) {
  #whatsapp {
    display: none;
  }
  .section-p1 {
    padding: 20px;
  }
  #header {
    padding: 10px 30px;
  }
  h1 {
    font-size: 38px;
  }
  h2 {
    font-size: 32px;
  }
  #hero {
    padding: 0 20px;
    background-position: 55%;
  }
  #product1 .pro {
    width: 100%;
  }
  #banner {
    height: 40vh;
  }
  /* SPRODUCT */
  #prodetails {
    display: flex;
    flex-direction: column;
  }
  #prodetails .single-pro-image {
    width: 100%;
    margin-right: 0px;
  }
  #prodetails .single-pro-details {
    width: 100%;
  }
}
</style>
<section id="hero">
    <h4>¡Bienvenid@ a Parking!</h4>
    <h2>Ingresa al parqueadero</h2>
    <h1>haciendo click aca</h1>


    <div><a class="button1" href="about">Ingresar Vehiculo</a></div>

  </section>



  <footer class="section-p1">
    <div class="col">
      <img src="https://cdn-icons-png.flaticon.com/512/1476/1476779.png" alt="logo" class="logo">
      <h4>Contacto</h4>
      <p><strong>Ubicación:</strong> Chapinero - Bogotá</p>
      <p><strong>Teléfono:</strong> +57 3194033721</p>
      <p><strong>Horas:</strong> 08:00 - 18:00, Lun - Sab</p>
      <p><strong>Chat:</strong> <a href="https://www.instagram.com/bocaditos.co/"><i
            class="bi bi-instagram icon"></i></a><a
          href="https://wa.me/573194033721/?text=Hola,%20estoy%20interesad@%20en%20un%20producto."><i
            class="bi bi-whatsapp icon"></i></a></p>
    </div>
   
    

  </footer>


  <!-- hacer esto en un jsp e importarlo en los demas -->
  <div id="whatsapp">
    <a href="https://wa.me/573194033721/?text=Hola,%20estoy%20interesad@%20en%20un%20producto." target="_blank">
      <svg id="iconowp" width="80" height="80" xmlns="http://www.w3.org/2000/svg"
        xmlns:svg="http://www.w3.org/2000/svg">
        <g class="layer">
          <title>Cotiza a traves de Whatsapp</title>
          <circle id="circulowp" cx="40" cy="40" fill="#fff" id="svg_1" r="38" stroke="#000000" stroke-width="0" />
          <path id="pathwp"
            d="m57.81072,21.975c-4.48928,-4.5 -10.46786,-6.975 -16.82142,-6.975c-13.11429,0 -23.78571,10.67143 -23.78571,23.78571c0,4.18928 1.09286,8.28215 3.17143,11.89286l-3.375,12.32142l12.61072,-3.31072c3.47143,1.89642 7.38215,2.89286 11.36786,2.89286l0.01072,0c13.10358,0 24.01072,-10.67143 24.01072,-23.78571c0,-6.35357 -2.7,-12.32142 -7.18928,-16.82142l-0.00001,-0.00001l-0.00001,0l-0.00002,0.00001zm-16.82142,36.6c-3.55714,0 -7.03928,-0.95357 -10.07143,-2.75357l-0.71785,-0.42857l-7.47858,1.96072l1.99286,-7.29642l-0.47143,-0.75c-1.98215,-3.15 -3.02142,-6.78215 -3.02142,-10.52142c0,-10.89642 8.87143,-19.76786 19.77858,-19.76786c5.28215,0 10.24286,2.05714 13.97143,5.79642c3.72857,3.73928 6.02142,8.7 6.01072,13.98215c0,10.90714 -9.09642,19.77858 -19.99286,19.77858l0,-0.00002l-0.00001,0l-0.00001,-0.00001zm10.84286,-14.80714c-0.58928,-0.3 -3.51429,-1.73572 -4.06072,-1.92857c-0.54643,-0.20358 -0.94286,-0.3 -1.33928,0.3c-0.39642,0.6 -1.53214,1.92857 -1.88571,2.33572c-0.34286,0.39642 -0.69642,0.45 -1.28571,0.15c-3.49286,-1.74643 -5.78571,-3.11785 -8.08928,-7.07143c-0.61072,-1.05 0.61072,-0.975 1.74643,-3.24643c0.19286,-0.39642 0.09642,-0.73928 -0.05357,-1.03928c-0.15,-0.3 -1.33928,-3.225 -1.83214,-4.41429c-0.48215,-1.15714 -0.975,-0.99642 -1.33928,-1.01785c-0.34286,-0.02142 -0.73928,-0.02142 -1.13572,-0.02142c-0.39642,0 -1.03928,0.15 -1.58571,0.73928c-0.54643,0.6 -2.07858,2.03572 -2.07858,4.96072c0,2.925 2.13214,5.75357 2.42142,6.15c0.3,0.39642 4.18928,6.39642 10.15714,8.97858c3.77143,1.62857 5.25,1.76786 7.13572,1.48928c1.14643,-0.17143 3.51429,-1.43572 4.00714,-2.82857c0.49286,-1.39286 0.49286,-2.58215 0.34286,-2.82857c-0.13928,-0.26786 -0.53572,-0.41785 -1.125,-0.70714l-0.00001,-0.00001l0.00002,-0.00001l-0.00002,-0.00001z"
            fill="currentColor" id="svg_2" />
        </g>
      </svg>
    </a>
  </div>
  <script src="js/script.js"></script>
</body>
