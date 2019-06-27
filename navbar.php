<a href='http://www.facebook.com/UriangatoGobiernoMunicipal' target='_blank' title='S&iacute;guenos en Facebook'><img src='img/boton-fb.png' style='display:scroll;position:fixed;bottom:375px;right:0px; z-index: 1030;'/></a>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="80%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
            <li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="index.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gobierno <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link <?php echo $active_h_ayuntamiento;?>" href="h-ayuntamiento.php">H. Ayuntamiento</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_centralizadas;?>" href="centralizadas.php">Centralizadas</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_descentralizadas;?>" href="descentralizadas.php">Descentralizadas</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_comisiones; ?>" href="comisiones.php">Comisiones</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_gaceta; ?>" href="gaceta_municipal.php">Gaceta Municipal</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Transparencia <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="transparencia/#ApartadosEsp">Apartados Especiales</a></li>
                    <li class="nav-item"><a class="nav-link" href="transparencia/#ApartadosTrans">Apartados de Transparencia</a></li>
                    <li class="nav-item"><a class="nav-link" href="transparencia/#ObligacionesEsp">Obligaciones Especificas</a></li>
                    <li class="nav-item"><a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('https://www.infomexguanajuato.org.mx/infomex/','','width=800,height=600,left=50,top=50,toolbar=yes');">Solicitudes de Información</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Trámites y Servicios <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="mejora_regulatoria.php">Mejora Regulatoria</a></li>
					<li class="nav-item"><a class="nav-link <?php echo $active_tramites;?>" href="tramitesyservicios.php">Trámites y Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="directorio.php">Directorio Municipal</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_convocatorias;?>" href="convocatorias.php">Convocatorias</a></li>
                    <li class="nav-item"><a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('http://www.uriangato.gob.mx/sare/','','width=800,height=600,left=50,top=50,toolbar=yes');">SARE</a></li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('http://geografico.coveg.gob.mx/geograficouriangato/','','width=800,height=600,left=50,top=50,toolbar=yes');">
                            Información Geográfica
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Turismo <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link <?php echo $active_ubicacion;?>" href="ubicacion.php">Ubicación</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_interes;?>" href="lugares_interes.php">Lugares de interés</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_galeria;?>" href="galeria_ima.php">Galería Fotográfica</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $active_tradiciones;?>" href="tradiciones.php">Tradiciones</a></li>
                    <li class="nav-item" hidden><a class="nav-link" href="datos_historicos.php">Datos Históricos</a></li>
                    <li class="nav-item" hidden><a class="nav-link" href="">Charlas de Café</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown submenu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sitios de interés <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('https://www.gob.mx/curp/','','width=800,height=600,left=50,top=50,toolbar=yes');">
                            Obtén tú CURP
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('https://www.gob.mx/ActaNacimiento/','','width=800,height=600,left=50,top=50,toolbar=yes');">
                            Emite tú acta de nacimiento
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('https://www.mi-rfc.com.mx/consulta-rfc-homoclave','','width=800,height=600,left=50,top=50,toolbar=yes');">
                            Consulta tú RFC
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('https://portal.pgjguanajuato.gob.mx/PortalWebEstatal/Servicios/Formularios/cartas.aspx','','width=800,height=600,left=50,top=50,toolbar=yes');">
                            Constancia de antedecentes no penales
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="javascript:window.open('https://citas.sre.gob.mx/citas.webportal/pages/public/login/login.jsf','','width=800,height=600,left=50,top=50,toolbar=yes');">
                            Citas para Pasaporte
                        </a>
                    </li>
                </ul>
            </li>
			<li class="nav-item"><a class="nav-link" href="denuncia_anonima.php">Denuncia Ciudadana</a></li>
        </ul>
    </div>
</nav>






