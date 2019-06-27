<?php
	if(empty($_POST["message"])){
		$errors[] = "Debe escribir la denuncia para poder enviar la solicitud";
	}else{
		
		$name=$_POST["name"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$message=$_POST["message"];
		$fecha=$_POST["fecha"];
		
		$message = mysqli_real_escape_string($con,(strip_tags($_POST["message"],ENT_QUOTES)));
		$name = mysqli_real_escape_string($con,(strip_tags($_POST["name"],ENT_QUOTES)));
		
		
		$mail = "seguridadpublica@uriangato.gob.mx, webmaster@uriangato.gob.mx";
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		if(empty($_POST["email"])){
			
			$email2='webmaster@uriangato.gob.mx';
			// Cabeceras adicionales
			$cabeceras .= 'To: '.$mail. "\r\n";
			$cabeceras .= 'From: '.$email2. "\r\n";
			$mensaje = '
				<h3 align="center">Ha recibido una Denuncia An&oacute;nima</h3>
				<table>
					<tr>
						<td>Fecha y Hora</td>
						<td>'.$fecha.'</td>
					</tr>
					<tr>
						<td>Datos del Denunciante</td>
						<td></td>
					</tr>
					<tr>
						<td>Nombre: </td>
						<td>'.$name.'</td>
					</tr>
					<tr>
						<td>Telefono: </td>
						<td>'.$telefono.'</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td>'.$email.'</td>
					</tr>
				</table>
			';
			echo '<br>';
			$mensaje .= '
			<table>
				<tr>
					<th>Comentario y&#47;o Queja</th>
					<td>'.$message.'</td>
				</tr>
			</table>';
			if(mail($mail, 'Denuncia Anonima', $mensaje, $cabeceras)){
				$messages[] = "<h2>" .$_POST["name"]. " Su Denuncia An&oacute;nima ha sido enviada, Gracias!!.</h2>";
			}
			else{
				$errors[] = "<h2>Hay algunos errores al enviar el email, cheka las opciones de tu servidor</h2>";
			}
			
			
		}else{
		
			
			// Cabeceras adicionales
			$cabeceras .= 'To: '.$mail. "\r\n";
			$cabeceras .= 'From: '.$email. "\r\n";
			$mensaje = '
				<h3 align="center">Ha recibido una Denuncia An&oacute;nima</h3>
				<table>
					<tr>
						<td>Fecha y Hora</td>
						<td>'.$fecha.'</td>
					</tr>
					<tr>
						<td>Datos del Denunciante</td>
						<td></td>
					</tr>
					<tr>
						<td>Nombre: </td>
						<td>'.$name.'</td>
					</tr>
					<tr>
						<td>Telefono: </td>
						<td>'.$telefono.'</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td>'.$email.'</td>
					</tr>
				</table>
			';
			echo '<br>';
			$mensaje .= '
			<table>
				<tr>
					<th>Comentario y&#47;o Queja</th>
					<td>'.$message.'</td>
				</tr>
			</table>';
			if(mail($mail, 'Denuncia Anonima', $mensaje, $cabeceras)){
				$messages[] = "<h2>" .$_POST["name"]. " Su Denuncia An&oacute;nima ha sido enviada, Gracias!!.</h2>";
			}
			else{
				$errors[] = "<h2>Hay algunos errores al enviar el email, cheka las opciones de tu servidor</h2>";
			}
		}	
	}	
	
	if (isset($errors)){	?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>		
			<?php	foreach ($errors as $error) {	echo $error;	}	?>
		</div><?php
	}
	if (isset($messages)){	?>
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>			
			<?php	foreach ($messages as $message) {	echo $message;	}	?>
		</div>
<?php
	}
?>