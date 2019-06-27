<?php
	$active_index="";
	$active_h_ayuntamiento="";
	$active_centralizadas="";
	$active_descentralizadas="";
	$active_comisiones="active";
	$active_gaceta="";
	$active_tramites="";
	$active_convocatorias="";
	$active_ubicacion="";
	$active_interes="";
	$active_galeria="";
	$active_tradiciones="";
	$title="Uriangato | Comisiones del Ayuntamiento";
	require_once ("admin/config/db.php");
	require_once ("admin/config/conexion.php");
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
            width: 200px;
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
            -webkit-transform: translateZ(5px) translateY(-20px) scale(1.05);
            transform: translateZ(5px) translateY(-20px) scale(1.05);
        }

        .map-1,
        .map-6,
        .map-4 {
            -webkit-transform: translateZ(1px);
            transform: translateZ(1px);
        }

        .map-2,
        .map-4 {
            -webkit-transform: translateZ(2px) translateY(-5px);
            transform: translateZ(2px) translateY(-5px);
        }

        .map-3,
        .map-5 {
            -webkit-transform: translateZ(3px) translateY(-10px);
            transform: translateZ(3px) translateY(-10px);
        }

        .map-1:hover~.map-2 {
            -webkit-transform: translateZ(4px) translateY(-15px);
            transform: translateZ(4px) translateY(-15px);
            -webkit-transition: .2s;
            transition: .2s;
        }

        .map-4,
        .map-6 {

            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5;
        }

        .map-4:hover~.map-6 {
            -webkit-transform: translateZ(3px) translateY(-15px);
            transform: translateZ(3px) translateY(-15px);
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

        .image_title {
            background: rgba(0, 0, 0, 0.5);
            color: #ffffff;
            position: absolute;
            bottom: 0;
            padding: 10px;
            font-size: 14px;
        }

        a {
            display: block;
            color: #000;
            text-decoration: none;
        }

        a:hover {
            color: #d91522;
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
                <h1>Comisiones del Ayuntamiento</h1>
                <ul>
                    <li>Usted se encuentra en:</li>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Gobierno</a></li>
                    <li><a href="comisiones.php"><strong>Comisiones del Ayuntamiento</strong></a></li>
                </ul>
                <!-- Nav tabs -->
                <br>
                <h5>Las Comisiones son las áreas de trabajo que tiene a su cargo cada uno de los integrantes el ayuntamiento, éstas propondrán los proyectos de solución a
                    los problemas de su conocimiento, a efecto de atender todos los rubros de la administración municipal. A continuación se detalla la manera en como quedaron integradas las diferentes Comisiones del Ayuntamiento de Uriangato:</h5>
            </div>
        </div>
    </section>
    <section class="contact_area p_50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav flex-column nav-pills" role="tablist" id="v-pills-tab" style="font-size:14px;">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">I.- Hacienda Patrimonio y Cuenta P&uacute;blica </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">II.- Obras P&uacute;blicas y Servicios Municipales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">III.- Seguridad P&uacute;blica, Tr&aacute;nsito y Transporte y Protecci&oacute;n Civil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu3">IV.- Planeaci&oacute;n, D. Urbano, Ordenamiento Territorial y Medio Ambiente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu4">V.- Salud P&uacute;blica y Asistencia Social </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu5">VI.- Educaci&oacute;n, Cultura, Recreaci&oacute;n y Deporte </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu6">VII.- Deporte y Atenci&oacute;n a la Juventud </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu7">VIII.- Desarrollo Social y Rural </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu8">IX.- Fiscalizaci&oacute;n, Alcoholes, Comercio y Reglamentos </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu9">X.- Desarrollo Econ&oacute;mico y Turismo </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu10">XI.- Derechos Humanos, Igualdad de G&eacute;nero y DIF </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu11">XII.- Agua Potable </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu12">XIII.- Contralor&iacute;a, Transparencia y Combate a la Corrupci&oacute;n</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <h3>I.- Hacienda Patrimonio y Cuenta Pública</h3>
                            <br>
                            <h5>Atribuciones:</h5>
                            <p style="font-size:14px;">
                                I. Conocer sobre los asuntos relacionados con los ingresos y egresos municipales; II. Conocer los asuntos relacionados con el patrimonio del municipio; III. Revisar y opinar sobre los proyectos de reglamentos de su competencia; IV. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; V. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.
                                y VI.- Actualizar el inventario de los bienes muebles e inmuebles del ayuntamiento.
                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidor_Luis.jpg'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Luis Hernández Torres</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_martin.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Martín González Bedolla</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Sindico_Viviana.jpg');background-position: -30px 0px">
                                    <div class="image_title">
                                        <h6>Viviana Arreola García</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidora_renata.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Renata Romero Ávalos</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>
                                <div class='map map-6' style="background-image:url('admin/images/profiles/Regidor_Roberto.jpg');background-position: -30px 0px">
                                    <div class="image_title">
                                        <h6>Roberto Vieyra Martínez</h6>
                                        <p>Vocal 4</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <h3>II.- Obras P&uacute;blicas y Servicios Municipales</h3> <br>
                            <h5>Atribuciones:</h5>
                            <p style="font-size:14px;">
                                I. Participar en la conformación del Programa Anual de Obra Pública y de los servicios relacionados con la misma;

                                II. Promover la prestación puntual, oportuna y eficiente de los servicios públicos municipales, de conformidad con las disposiciones aplicables;

                                III. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                IV. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                V. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidora_Janet.jpg'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Jannet Sosa Rosiles</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_carlos.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Carlos Serrato Ávalos</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidor_martin.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Martín González Bedolla </h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Ricardo_regidor.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Ricardo Martínez Vargas</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                            <h3> III.- Seguridad P&uacute;blica, Tr&aacute;nsito y Transporte y Protecci&oacute;n Civil</h3> <br>
                            <h5>Atribuciones:</h5>
                            <p style="font-size:14px;">

                                I. Coadyuvar a preservar la seguridad pública, el orden y la paz social en el municipio;

                                II. Procurar que se cumplan las disposiciones y acuerdos que en esta materia dicte el Ayuntamiento;

                                III. Proponer campañas de difusión en materia de seguridad pública y tránsito;

                                IV. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                V. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                VI. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidora_Janet.jpg'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Jannet Sosa Rosiles</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_martin.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Martín González Bedolla</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Ricardo_regidor.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Ricardo Martínez Vargas</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Regidora_renata.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Carlos Serrato Ávalos</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="menu3" class="container tab-pane fade"><br>
                            <h3>IV.- Planeación, D. Urbano, Ordenamiento Territorial y Medio Ambiente</h3>
                            <br>
                            <h5>Atribuciones:</h5>
                            <p style="font-size:14px;">


                                I. Coadyuvar al cumplimiento de las disposiciones en materia de desarrollo urbano y ordenamiento ecológico territorial;

                                II. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                III. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                IV. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidor_Pedro.jpg'); background-position: -0px 0px">
                                    <div class="image_title">
                                        <h6>Pedro Zamudio Ávalos</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -0px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Sandy_Regidora.png');background-position: -0px 0px">
                                    <div class="image_title">
                                        <h6>Sandra Leticia Díaz Domínguez </h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Regidora_renata.jpg');background-position: -0px 0px">
                                    <div class="image_title">
                                        <h6>Renata Romero Ávalos</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu4" class="container tab-pane fade"><br>
                            <h3>V.- Salud Pública y Asistencia Social</h3>
                            <br>
                            <h5>Funciones:</h5>
                            <p style="font-size:14px;">


                                I. Coadyuvar con las autoridades del sector salud en la implementación de la política pública en materia de salud;

                                II. Promover la aplicación de programas de asistencia social;

                                III. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                IV. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                V. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidor_Roberto.jpg'); background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Roberto Vieyra Martínez</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_Luis.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Luis Hernández Torres</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidor_carlos.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Carlos Serrato Ávalos</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu5" class="container tab-pane fade"><br>
                            <h3>VI.- Educación, Cultura, Recreación y Deporte</h3>
                            <br>
                            <h5>Funciones:</h5>
                            <p style="font-size:14px;">


                                I. Coadyuvar con los gobiernos federal y estatal en el cumplimiento de las disposiciones que en materia de educación establezcan la Constitución Política de los Estados Unidos Mexicanos, la Constitución Política para el Estado de Guanajuato, esta Ley u otros ordenamientos aplicables;

                                II. Fomentar acciones en favor de la cultura, la recreación y el deporte;

                                III. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                IV. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                V. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Sandy_Regidora.png'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Sandra Leticia Díaz Domínguez</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidora_renata.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Renata Romero Ávalos</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidor_Pedro.jpg');background-position: -25px 0px">
                                    <div class="image_title">
                                        <h6>Pedro Zamudio Ávalos</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Regidora_Janet.jpg');background-position: -25px 0px">
                                    <div class="image_title">
                                        <h6>Jannet Sosa Rosiles</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -2px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>
                                <div class='map map-6' style="background-image:url('admin/images/profiles/Regidor_martin.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Martín González Bedolla</h6>
                                        <p>Vocal 4</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="menu6" class="container tab-pane fade"><br>
                            <h3>VII.- Deporte y Atención a la Juventud</h3>
                            <br>
                            <h5>Funciones:</h5>
                            <p style="font-size:14px;">


                                I. Coadyuvar con los gobiernos federal y estatal en el cumplimiento de las disposiciones que en materia de educación establezcan la Constitución Política de los Estados Unidos Mexicanos, la Constitución Política para el Estado de Guanajuato, esta Ley u otros ordenamientos aplicables;

                                II. Fomentar acciones en favor de la cultura, la recreación y el deporte;

                                III. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                IV. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                V. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidor_carlos.jpg'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Carlos Serrato Ávalos </h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_Roberto.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Roberto Vieyra Martínez</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidor_Luis.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Luis Hernández Torres</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Regidor_Pedro.jpg');background-position: -30px 0px">
                                    <div class="image_title">
                                        <h6>Pedro Zamudio Ávalos</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu7" class="container tab-pane fade"><br>
                            <h3>VIII.- Desarrollo Social y Rural</h3>
                            <br>
                            <h5>Funciones:</h5>
                            <p style="font-size:14px;">

                                I. Promover el desarrollo de las actividades agropecuarias en el municipio;

                                II. Coadyuvar con los gobiernos federal y estatal en la ejecución de los programas municipales en la materia de su competencia;

                                III. Promover el desarrollo de las actividades industriales, comerciales y de servicios, en el municipio;

                                IV. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                V. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                VI. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidora_Janet.jpg'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Jannet Sosa Rosiles</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Ricardo_regidor.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Ricardo Martínez Vargas</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Regidor_martin.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Martín González Bedolla</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidora_renata.jpg');background-position: -0px 0px">
                                    <div class="image_title">
                                        <h6>Renata Romero Ávalos</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu8" class="container tab-pane fade"><br>
                            <h3>IX.- Fiscalización, Alcoholes, Comercio y Reglamentos</h3>
                            <br>
                            <h5>Atribuciones del Ayuntamiento:</h5>
                            <p style="font-size:14px;">
                                I.- Control y vigilancia del ramo del comercio en el municipio
                                II.- Determinaran las zonas restringidas para el comercio en la vía publica de acuerdo con el plan de desarrollo municipal.
                                III.- Modificar los horarios establecidos para la operación de los giros comerciales localizados en el municipio
                                IV.- Delimitación del tianguis y su crecimiento.
                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Ricardo_regidor.jpg'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Ricardo Martínez Vargas</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_Pedro.jpg');background-position: -30px 0px">
                                    <div class="image_title">
                                        <h6>Pedro Zamudio Ávalos</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidor_Roberto.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Roberto Vieyra Martínez</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Sindico_Viviana.jpg');background-position: -30px 0px">
                                    <div class="image_title">
                                        <h6>Viviana Arreola García</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidor_carlos.jpg');background-position: -10px 0px">
                                    <div class="image_title">
                                        <h6>Carlos Serrato Ávalos</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="menu9" class="container tab-pane fade"><br>
                            <h3>X.- Desarrollo Rural, Económico y Turismo</h3>
                            <br>
                            <h5>Funciones:</h5>
                            <p style="font-size:14px;">

                                I. Promover el desarrollo de las actividades agropecuarias en el municipio;

                                II. Coadyuvar con los gobiernos federal y estatal en la ejecución de los programas municipales en la materia de su competencia;

                                III. Promover el desarrollo de las actividades industriales, comerciales y de servicios, en el municipio;

                                IV. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                V. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones; y

                                VI. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidora_renata.jpg'); background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Renata Romero Ávalos</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidora_Janet.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Jannet Sosa Rosiles</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Ricardo_regidor.jpg');background-position: -30px 0px">
                                    <div class="image_title">
                                        <h6>Ricardo Martínez Vargas</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                                <div class='map map-4' style="background-image:url('admin/images/profiles/Regidor_Pedro.jpg');background-position: -20px 0px">
                                    <div class="image_title">
                                        <h6>Pedro Zamudio Ávalos</h6>
                                        <p>Vocal 3</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu10" class="container tab-pane fade"><br>
                            <h3>XI.- Derechos Humanos, Igualdad de Género y DIF</h3>
                            <br>
                            <h5>Funciones:</h5>
                            <p style="font-size:14px;">


                                I. Proponer medidas administrativas en materia de igualdad de género;

                                II. Coadyuvar con las dependencias y entidades de la administración pública municipal en el impulso de acciones en materia de igualdad de género;

                                III. Coadyuvar con las dependencias y entidades de la administración pública municipal en la difusión de campañas en materia de igualdad de género;

                                IV. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                V. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones;

                                VI. Proponer al Ayuntamiento políticas públicas para la prevención, atención, sanción y erradicación de la violencia contra las mujeres; y


                                VI. Conocer sobre los asuntos relacionados con derechos humanos en el Municipio;

                                VII. Proponer al Ayuntamiento campañas de difusión y promoción de derechos humanos;

                                VIII. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                XI. Promover y divulgar en el Municipio información en materia derechos humanos;

                                X. Fomentar acciones en favor de una cultura de respeto, protección y garantía de los Derechos Humanos, en el marco del ámbito municipal;

                                XI. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria para el cumplimiento de sus funciones;

                                XII. Proponer la adecuación de reglamentos y la normativa aplicable en el municipio para reconocer, proteger, garantizar y difundir los derechos humanos que reconocen la Constitución Política de los Estados Unidos Mexicanos y la Constitución Política para el Estado de Guanajuato, así como los contenidos en los tratados, convenciones o acuerdos internacionales que el Senado haya ratificado;

                                XIII. Dar seguimiento a las recomendaciones que la Comisión Nacional de los Derechos Humanos o la Procuraduría de los Derechos Humanos del Estado de Guanajuato, formulen a las autoridades municipales;


                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg'); background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Sandy_Regidora.png');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Sandra Leticia Díaz Domínguez</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidora_renata.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Renata Romero Ávalos</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Regidora_Janet.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Jannet Sosa Rosiles</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu11" class="container tab-pane fade"><br>
                            <h3>XII.- Agua Potable</h3>
                            <br>
                            <h5>Atribuciones de la junta de Gobierno del Agua Potable:</h5>
                            <p style="font-size:14px;">
                                I. Vigilar que se preste el servicio de agua potable, alcantarillado y saneamiento, en cantidad, calidad y oportunidad a la población; II. Aprobar el presupuesto anual de egresos y las estimaciones de ingresos y someterlos a consideración del h. Ayuntamiento para su discusión y aprobación a mas tardar el 30 de octubre de cada año; III. Establecer políticas de inversión que favorezcan al sistema; IV. Establecer políticas encaminadas al cumplimiento de las disposiciones fiscales; v. Establecer políticas de pagos a proveedores; vi. Solicitar la información que se requiera al director general respecto del funcionamiento de las direcciones y departamentos del sistema; VII. Aprobar la elaboración de los estudios necesarios para determinar los requerimientos presentes y futuros de los caudales para la prestación de los servicios a su cargo; VIII. Aprobar el plan maestro hidráulico municipal, y someterlo a consideración del h. Ayuntamiento para su aprobación; IX. Aprobar el plan anual de obra e inversión presentado por el director general; X. Someter a la aprobación del h. Ayuntamiento el programa anual de obras a realizar en el presente ejercicio, de acuerdo al presupuesto de egresos aprobados; XII. Ordenar la formulación de los proyectos de obras para la construcción, conservación, rehabilitación y ampliación de las fuentes de suministros y redes de conducción de conformidad con el plan maestro hidráulico municipal y el plan de desarrollo municipal; XIII. Aprobar la ejecución de las obras que sean necesarias para el desempeño de las funciones que se tienen encomendadas, pudiendo hacerlas en forma directa o por medio de terceros, de conformidad con las disposiciones legales; XIII. Promover el desarrollo y autosuficiencia administrativa, técnica y financiera del organismo operador; XIV. Aprobar el informe anual sobre el inventario de los bienes y los que se dieron de baja; XV. Establecer coordinación con otras dependencias, entidades y organismos públicos municipales, estatal, federal e internacional, así como, con instituciones de carácter social y privado, para el ejercicio de las funciones que le correspondan, cuando ello sea necesario; XVI. Vigilar la recaudación de los recursos del sistema y la conservación de su patrimonio, revisando mensualmente su estado; xvii. Revisar y aprobar el proyecto de tarifas y derechos por los servicios de agua potable, alcantarillado y saneamiento y presentarlo al h. Ayuntamiento para su aprobación y publicación; xviii. Revisar el proyecto de sanciones y multas para los usuarios que incumplan con las normas ecológicas y con los limites máximos permisibles establecidos por el sistema, para presentarlo al ayuntamiento para su aprobación y publicación; IX. Vigilar la correcta aplicación de las tarifas y que los ingresos que por ello se perciban, se destinen exclusivamente a cubrir los gastos de construcción, administración, operación, mantenimiento, rehabilitación y ampliación de la infraestructura necesaria para la prestación de los servicios; XX. Vigilar que se cobren los adeudos a favor del organismo operador, mediante el procedimiento administrativo de ejecución, por delegación de esta facultad del h. Ayuntamiento; XXI. Previa autorización expresa del h. Ayuntamiento, aprobar y convenir los créditos necesarios, celebrando los contratos y otorgando las garantías que fueren pertinentes, solicitando el aval del H. Ayuntamiento, en su caso; XXII. Autorizar la expedición de certificados de factibilidad para la dotación de los servicios a nuevos fraccionamientos y conjuntos habitacionales; XXIII. Autorizar la implementación de programas de cultura del agua y los tendientes a fomentar el uso eficiente del recurso del agua en el municipio; XXIV. Ordenar la práctica de muestreos y análisis periódicos del agua para verificar la calidad de la misma, y cuando sea necesario, informar a las autoridades competentes sobre los resultados; XXV. Proponer al h. Ayuntamiento el nombramiento y remoción del director general por el voto de la mitad mas uno de sus integrantes; XXVI. Revisar el arancel de multas y el tabulador de sanciones, recargos y gastos de ejecución, para presentarlo al h. Ayuntamiento para su aprobación y publicación; XXVII. Determinar las condiciones en que deben celebrarse los contratos de trabajo colectivo o individuales con el personal del organismo operador, así como el monto de los sueldos y salarios, resolviendo las controversias que se susciten con motivo de la relación laboral en el ámbito interno de su competencia; XXVIII. Informar trimestralmente al h. Ayuntamiento, sin perjuicio de hacerlo cuando este lo requiera, sobre las labores realizadas por el organismo operador durante este término y sobre su estado financiero; XXIX. Adquirir los bienes muebles o inmuebles necesarios para el desempeño de los fines que le corresponden, así como solicitar al h. Ayuntamiento la enajenación de los mismos; XXX. Determinar la resolución de las inconformidades y quejas que el director general le presente, con motivo de la prestación de los servicios del organismo operador o por el cobro de las contribuciones y aprovechamientos; XXXI. Solicitar a las autoridades competentes la expropiación, ocupación temporal, total o parcial de bienes o la limitación de los derechos de dominio en los términos de la ley de la materia; XXX11. Proponer el proyecto de reglamento interior del organismo operador, y ponerlo a consideración del h. Ayuntamiento para la aprobación, y en su caso, su publicación, vigilando su correcta aplicación; XXXIII. Condonar total o parcialmente las cuotas y los créditos derivados de las obligaciones del servicio de agua potable, alcantarillado y saneamiento que deben cubrirse, de acuerdo a lo establecido por la ley en la materia; esto a petición de parte interesada siguiendo los tramites del presente reglamento; XXXIV. Otorgar todas las facilidades para la práctica de auditorias al organismo operador al término de cada ejercicio anual, o cuando la contraloría municipal o el h. Ayuntamiento lo determinen; XXXV. Integrar las comisiones necesarias para el buen desempeño de sus funciones; y XXXVI. Las demás que se deriven del presente reglamento y de otras disposiciones legales.
                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Regidor_martin.jpg'); background-position: -2px 0px">
                                    <div class="image_title">
                                        <h6>Martín González Bedolla</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_Pedro.jpg');background-position: -2px 0px">
                                    <div class="image_title">
                                        <h6>Pedro Zamudio Ávalos</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidor_carlos.jpg');background-position: -2px 0px">
                                    <div class="image_title">
                                        <h6>Carlos Serrato Ávalos</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Ricardo_regidor.jpg');background-position: -2px 0px">
                                    <div class="image_title">
                                        <h6>Ricardo Martínez Vargas</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu12" class="container tab-pane fade"><br>
                            <h3>XIII.- Contraloría, Transparencia y Combate a la Corrupción</h3>
                            <br>
                            <h5>Funciones:</h5>
                            <p style="font-size:14px;">

                                I. Dar seguimiento al plan de trabajo, informes relativos y a las recomendaciones y observaciones que al efecto formule el Órgano Interno de Control Municipal o los órganos de fiscalización respectivos;

                                II. Revisar y opinar sobre los proyectos de reglamentos de su competencia;

                                III. Solicitar y obtener de los demás titulares de las dependencias y entidades de la administración pública municipal, la información necesaria y oportuna para el cumplimiento de sus funciones;

                                IV. Dar seguimiento a los lineamientos, bases, políticas, metodologías, principios, recomendaciones, requerimientos y demás instrumentos que emitan el Comité Coordinador del Sistema Estatal Anticorrupción, así como el Comité Rector del Sistema Estatal de Fiscalización; y

                                V. Las demás que le señale el Ayuntamiento, esta Ley u otras disposiciones aplicables.

                            </p>
                            <br>
                            <div class="cont">
                                <div class="map map-1" style="background-image:url('admin/images/profiles/Sindico_Viviana.jpg'); background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Viviana Arreola García</h6>
                                        <p>Presidente</p>
                                    </div>
                                </div>
                                <div class='map map-2' style="background-image:url('admin/images/profiles/Regidor_carlos.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Carlos Serrato Ávalos</h6>
                                        <p>Secretario</p>
                                    </div>
                                </div>
                                <div class='map map-3' style="background-image:url('admin/images/profiles/Regidora_Wendy.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Wendy Martínez Guzmán</h6>
                                        <p>Vocal 1</p>
                                    </div>
                                </div>
                                <div class='map map-5' style="background-image:url('admin/images/profiles/Regidor_martin.jpg');background-position: -1px 0px">
                                    <div class="image_title">
                                        <h6>Martín González Bedolla</h6>
                                        <p>Vocal 2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <br>
    <!--================End Contact Area =================-->
    <!--================Footer Area =================-->
    <?php require_once('footer.php')?>
</body>

</html>
