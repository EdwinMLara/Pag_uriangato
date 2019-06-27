<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="";
	$active_gaceta="";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="active";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Ubicaci&oacute;n";
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
    <?php require_once('head.php')?>
    <style type="text/css">
    .cont {
  width: 100%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-perspective: 1000;
          perspective: 1000;
  position: relative;
}

.map {
  width: 1000px;
  height: 300px;
  margin: 0 -25px;
  position: relative;
  box-shadow: 0px 0px 40px -5px rgba(0, 0, 0, 0.5);
  background-size: cover;
  background-position: center;
  border-radius: 5px;
  -webkit-transition: .2s;
  transition: .2s;
  cursor: pointer;
}
.map:hover {
  -webkit-transition: .2s;
  transition: .2s;
  -webkit-transform: translateZ(5px) translateY(-20px) scale(1.15);
          transform: translateZ(5px) translateY(-20px) scale(1.15);
}

.map-1,
.map-4 {
  -webkit-transform: translateZ(1px) translateY(-5px);
          transform: translateZ(1px) translateY(-5px);
}

.map-2,
.map-4 {
  -webkit-transform: translateZ(2px) translateY(-5px);
          transform: translateZ(2px) translateY(-5px);
}

.map-3,
.map-4 {
  -webkit-transform: translateZ(3px) translateY(-5px);
          transform: translateZ(3px) translateY(-5px);
}

.map-1:hover ~ .map-2 {
  -webkit-transform: translateZ(4px) translateY(-5px);
          transform: translateZ(4px) translateY(-5px);
  -webkit-transition: .2s;
  transition: .2s;
}

.map-4 {
 
  -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
          order: 5;
}
.map-4:hover ~ .map-4 {
  -webkit-transform: translateZ(3px) translateY(-5px);
          transform: translateZ(3px) translateY(-5px);
  -webkit-transition: .1s;
  transition: .1s;
}

.shelf {
  background: #132636;
  height: 100px;
  width: 100%;
  position: absolute;
  bottom: -75px;
  left: 0;
  -webkit-transform: translateZ(10px);
          transform: translateZ(10px);
}
    </style>
</head>

<body>
    <!--================Top Header Area =================-->
    <div class="header_top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top_header_middle">
                        <img src="img/encabezado_letras_ok.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Top Header Area =================-->

    <!--================Menu Area =================-->
    <header class="shop_header_area">
        <div class="container">
            <?php require_once('navbar.php')?>
        </div>
    </header>
    <!--================End Menu Area =================-->
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h1>Lugares de Interés</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="lugares_interes.php"><strong>Lugares de Interés</strong></a></li>
                </ul>
                <!-- Nav tabs -->
                <br>
                <h5>"Un pueblo sin historia, es como una persona sin memoria. Debemos conocer nuestro gran pasado histórico, para saber de donde venimos y así comprenderemos mejor nuestro presente, de igual forma lograremos proyectar orgullosos el futuro de nuestro querido Uriangato"</h5>
                <br><br>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Parroquia de San Miguel Arcángel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Santuario Guadalupano</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Jardín Independencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3">Presidencia Municipal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu4">Mirador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu5">Charándaro</a>
                    </li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <h3>Parroquia de San Miguel Arcángel</h3>
                        <p> Ubicada en el Jardín Independencia de Uriangato en la calle Miguel Hidalgo. También es conocida como "Parroquia de San Miguel Arcángel". San Miguel Arcángel es el Santo Patrono de la ciudad, desde el primer asentamiento que se tiene registrado en este territorio en el año de 1549, donde Fray Diego de Chávez, monje Agustino del convento de Yuririahpúndaro, nombró al asentamiento Congregación de Nativos de San Miguel de Uriangato.
                            Esta Iglesia católica fue construída por los padres Agustinos entre 1897 y 1923 para venerar la imagen del Arcángel San Miguel. Es la construcción más emblemática del municipio de Uriangato, cuenta con un atrio enmarcado con una hermosa arquería de cantera que invita a conocer su interior de estilo neoclásico decorado en hoja de oro. </p>
                            <br><br>
                            <div class="container">
			                      <div class='cont'>
				                      <div class="map map-1" style="background-image:url('img/Parroquia.jpg');"></div>
				                      <div class='map map-2' style="background-image:url('img/Parroquia_1.jpg');"></div>
				                      <div class='map map-3' style="background-image:url('img/Parroquia_2.jpg');background-position: -70px 0px;"></div>
				                      <div class='map map-4' style="background-image:url('img/Parroquia_3.jpg');background-position: -0px -10px;"></div>
			                     </div>                    
			                </div>
                	</div>

                    <div id="menu1" class="container tab-pane fade"><br>
                        <h3>Santuario Guadalupano</h3>
                        <p>Unido al templo parroquial, el santuario dedicado a la virgen de Guadalupe nos muestra una arquitectura muy interesante, rematada por hermosos vitrales. Este espacio forma junto con la casa cural la parroquia de San Miguel Arcángel</p>
                        <br><br>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                        <h3>Jardín Independencia</h3>
                        <p>Uno de los espacios más atractivos de la ciudad es el centro histórico, el cual cuenta con un kiosco de hierro fundido en el Porfiriato, enclavado en el mismo sitio, se encuentra  el monumento a la ruta de Hidalgo; este apacible espacio conserva la esencia de un pasado glorioso. El jardín principal está rodeado de portales de cantera con trazos coloniales por sus tres flancos.</p>
                        <br><br>
                        <div class="container">
                            <div class='cont'>
                              <div class="map map-1" style="background-image:url('img/Jardin_2.jpg');background-position: 0px 0px;"></div>
                           </div>                    
                      </div>
                    </div>
                    <div id="menu3" class="container tab-pane fade"><br>
                        <h3>Presidencia Municipal</h3>
                        <p>El palacio de gobierno lo alberga una antigua casona que data de mediados del siglo XIX, en su interior se encuentran una serie de murales que representan pasajes históricos de la heróica defensa que realizaron los pobladores de Uriangato del ataque del bandolero José Inés Chávez García, en el año de 1918. </p>
                        <br><br>
                         <br>
                    <div class="container">
                            <div class='cont'>
                              <div class="map map-1" style="background-image:url('img/PRESIDENCIA.jpg');"></div>
                           </div>                    
                      </div>
                    </div>
                    <div id="menu4" class="container tab-pane fade"><br>
                        <h3>Mirador</h3>
                        <p>Es un espacio de convivencia familiar ubicado en la colonia 24 de Julio, desde ahí se puede apreciar una vista panorámica del municipio que acompañada de la puesta de sol, inyecta un toque especial que enamora a los sentidos.</p>
                        <br><br>
                    </div>
                    <div id="menu5" class="container tab-pane fade"><br>
                        <h3>Charándaro</h3>
                        <p>Es un lugar de esparcimiento que posee una hermosa vegetación, cuenta con una pequeña capilla dedicada a San Judas Tadeo. En el lugar existen palapas que están ubicadas en las márgenes del cauce de un pintoresco riachuelo llamado "La Tinaja".</p>
                        <br><br>
                    </div>
                </div>
    </section>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>

</html>
