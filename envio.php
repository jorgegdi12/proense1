<?php

  //verifica el tipo de formulario
  $form=$_POST["form"];
  //variable de validacion del tomador
  $valida = true;
  if (empty($_POST['name'])) {
    echo "<b>No se especifico nombre</b><br/>";
    $valida = false;
  }
    if (empty($_POST['cedula'])) {
    echo "<b>No se especifico la cedula</b><br/>";
    $valida = false;
  }
    if (empty($_POST['birthday'])) {
    echo "<b>No se especifico fecha de nacimiento</b><br/>";
    $valida = false;
  }
    if (empty($_POST['profession'])) {
    echo "<b>No se especifico la profesión</b><br/>";
    $valida = false;
  }
  if (empty($_POST['email'])) {
   echo "<b>No se especifico el correo electónico</b><br/>";
   $valida = false;
  }
   if (empty($_POST['celular'])) {
    echo "<b>No se especifico el número de celular</b><br/>";
    $valida = false;
  }
   if (empty($_POST['work-address'])) {
    echo "<b>No se especifico la dirección de trabajo</b><br/>";
    $valida = false;
  }
   if (empty($_POST['work-phone'])) {
    echo "<b>No se especifico el teléfono de trabajo</b><br/>";
    $valida = false;
  }
    if (empty($_POST['home-address'])) {
    echo "<b>No se especifico la dirección de residencia</b><br/>";
    $valida = false;
  }
    if (empty($_POST['home-phone'])) {
    echo "<b>No se especifico teléfono de residencia</b><br/>";
    $valida = false;
  }
   // Validamos la direccion de correo electronico
  if (!strchr($_POST['email'],"@") || !strchr($_POST['email'],"."))
   {
    echo "<b>No es un correo valido</b><br/>";
    $valida = false;
   }
  //Asignación de variables de tomador
  $nombre=$_POST["name"];
  $cedula=$_POST["cedula"];
  $birthday=$_POST["birthday"];
  $profesion=$_POST["profession"];
  $email=$_POST["email"];
  $celular=$_POST["celular"];
  $workAddress=$_POST["work-address"];
  $workPhone=$_POST["work-phone"];
  $homeAddress=$_POST["home-address"];
  $homePhone=$_POST["home-phone"];
  
  // en el mensaje, parte del tomador
    $message = "<html><body><h2>Esta es la información del tomador: </h2><br>";
	$message.= "<h3>Nombre: ".$nombre ."<br>";
	$message.= "Cédula: ".$cedula ."<br>";
	$message.= "Día de cumpleaños: ".$birthday."<br>";
	$message.= "Profesión: ".$profesion."<br>";
	$message.= "Correo electrónico: ".$email."<br>";
	$message.= "Celular: ".$celular."<br>";
	$message.= "Dirección de oficina: ".$workAddress."<br>";
	$message.= "Teléfono de oficina: ".$workPhone."<br>";
	$message.= "Dirección de residencia: ".$homeAddress."<br>";
	$message.= "Teléfono de residencia: ".$homePhone."<br>";

  if($form=="soat" || $form=="vehiculo"){
  
  //variables de validación de vehículo
  if (empty($_POST['car-type'])) {
    echo "<b>No se especifico tipo del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['Service'])) {
    echo "<b>No se especifico servicio del vehículo</b><br/>";
    $valida = false;
  } 
  if (empty($_POST['placa'])) {
    echo "<b>No se especifico placa del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['Marca'])) {
    echo "<b>No se especifico marca del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['modelo'])) {
    echo "<b>No se especifico modelo del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['Motor'])) {
    echo "<b>No se especifico motor del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['Chasis'])) {
    echo "<b>No se especifico chasis del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['linea'])) {
    echo "<b>No se especifico linea del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['cilindraje'])) {
    echo "<b>No se especifico cilindraje del vehículo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['circulacion'])) {
    echo "<b>No se especifico cuidad de circulación de vehículo</b><br/>";
    $valida = false;
  }
  //Asignación de variables vehículo
  $tipo=$_POST["car-type"];
  $servicio=$_POST["Service"];
  $placa=$_POST["placa"];
  $marca=$_POST["Marca"];
  $modelo=$_POST["modelo"];
  $motor=$_POST["Motor"];
  $chasis=$_POST["Chasis"];
  $linea=$_POST["linea"];
  $cilindraje=$_POST["cilindraje"];
  $seguridad=$_POST["seguridad"];
  $circulacion=$_POST["circulacion"]; 
  
  //se completa el resto del mensaje
  $message.="<hr>";
  $message.="Esta es la información del vehículo:<br />";
  $message.="Tipo: ".$tipo. "<br />";
  $message.="Servicio: ".$servicio."<br />";
  $message.="Placa: ".$placa."<br />";
  $message.="Marca: ".$marca."<br />";
  $message.="Modelo: ".$modelo."<br />";
  $message.="Motor: ".$motor. "<br />";
  $message.="Chasis: ".$chasis."<br />";
  $message.="Linea: ".$linea. "<br />";
  $message.="Cilindraje: ".$cilindraje."<br />";
  $message.="Tiene dispositivo de seguridad: ".$seguridad."<br />";
  $message.="Cuidad donde circula el vehículo: ".$circulacion."<br />";
  
  }
  
  if ($form == "hogar"){
  //variables de validación de hogar
  if (empty($_POST['Estrato'])) {
    echo "<b>No se especifico el estrato del hogar</b><br/>";
    $valida = false;
  }
  if (empty($_POST['location'])) {
    echo "<b>No se especifico la ubicación de la vivienda</b><br/>";
    $valida = false;
  }
  if (empty($_POST['tipo-vivienda'])) {
    echo "<b>No se especifico el tipo de vivienda</b><br/>";
    $valida = false;
  }
  if (empty($_POST['muebles'])) {
    echo "<b>No se especifico valor reposición en muebles y enseres</b><br/>";
    $valida = false;
  }
  if (empty($_POST['electricos'])) {
    echo "<b>No se especifico valor reposición equipos elétricos y electrónicos</b><br/>";
    $valida = false;
  }
  if (empty($_POST['portatiles'])) {
    echo "<b>No se especifico Valor resposición equipos móviles y portátiles</b><br/>";
    $valida = false;
  }
  
  //asignación de variables hogar
  $estrato=$_POST["Estrato"];
  $habita=$_POST["habita"];
  $nohabita=$_POST["No-habita"];
  $location=$_POST["location"];
  $tipovivienda=$_POST["tipo-vivienda"];
  $muebles=$_POST["muebles"];
  $electricos=$_POST["electricos"];
  $portatiles=$_POST["portatiles"];
  
  // continuacion del mensaje para hogar
  $message.="<hr>";
  $message.="Esta es la información de hogar: <br />";
  $message.="Estrato: ".$estrato."<br />";
  $message.="Propietario y habita: ".$habita."<br />";
  $message.="Propietario y NO habita: ".$nohabita."<br />";
  $message.="Ubicación: ".$location."<br />";
  $message.="Tipo de vivienda: ".$tipovivienda."<br />";
  $message.="Valor reposición en muebles y enseres: ".$muebles."<br />";
  $message.="Valor reposición en equipo eléctricos y electrónicos: ".$electricos."<br />";
  $message.="Valor reposición en móviles y portátiles: ".$portatiles."<br />";
  
  }
  
  if ($form == "salud"){
 //variables de validación de cónyuge
  if (empty($_POST['name-cony'])) {
    echo "<b>No se especifico el nombre del cónyuge</b><br/>";
    $valida = false;
  }
  if (empty($_POST['Cedula-cony'])) {
    echo "<b>No se especifico la cédula del cónyuge</b><br/>";
    $valida = false;
  }
  if (empty($_POST['born-day-cony'])) {
    echo "<b>No se especifico el día de nacimiento del cónyuge</b><br/>";
    $valida = false;
  } 
  if (empty($_POST['born-month-cony'])) {
    echo "<b>No se especifico el mes de nacimiento del cónyuge</b><br/>";
    $valida = false;
  }
  if (empty($_POST['born-year-cony'])) {
    echo "<b>No se especifico el año de nacimiento del cónyuge</b><br/>";
    $valida = false;
  }
  if (empty($_POST['EPS'])) {
    echo "<b>No se especifico la EPS a la que esta afiliado el cónyuge</b><br/>";
    $valida = false;
  }
  
  //asignación de variables cónyuge
  $nombreCon=$_POST["name-cony"];
  $cedulaCon=$_POST["Cedula-cony"];
  $borndayCon=$_POST["born-day-cony"];
  $bornmonthCon=$_POST["born-month-cony"];
  $bornyearCon=$_POST["born-year-cony"];
  $eps=$_POST["EPS"];
  
  //variables de validación de hijo
  if (empty($_POST['name-son'])) {
    echo "<b>No se especifico el nombre del hijo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['id-son'])) {
    echo "<b>No se especifico el documento del hijo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['born-day-son'])) {
    echo "<b>No se especifico el día de nacimiento del hijo</b><br/>";
    $valida = false;
  } 
  if (empty($_POST['born-month-son'])) {
    echo "<b>No se especifico el mes de nacimiento del hijo</b><br/>";
    $valida = false;
  }
  if (empty($_POST['born-year-son'])) {
    echo "<b>No se especifico el año de nacimiento del hijo</b><br/>";
    $valida = false;
  }
  
  //asignación de variables hijo
  $nombreSon=$_POST["name-son"];
  $idSon=$_POST["id-son"];
  $borndaySon=$_POST["born-day-son"];
  $bornmonthSon=$_POST["born-month-son"];
  $bornyearSon=$_POST["born-year-son"];
  
  //se completa el mensaje 
  
  $message.="<hr>";
  $message.="Esta es la informacion del cónyuge: <br>";
  $message.="Nombre: ".$nombreCon ."<br>";
  $message.="Cédula: ".$cedulaCon ."<br>";
  $message.="Día de cumpleaños: ".$borndayCon." ".$bornmonthCon." ".$bornyearCon."<br>";
  $message.="EPS a la que está afiliado: ".$eps."<br>";
  $message.="<hr>";
  $message.="Esta es la informacion del hijo: <br>";
  $message.="Nombre: ".$nombreSon ."<br>";
  $message.="Documento de identidad: ".$idSon ."<br>";
  $message.="Día de cumpleaños: ".$borndaySon." ".$bornmonthSon." ".$bornyearSon."<br>";
   
  }
  // Si las comprobaciones son correctas

  if ($valida == true)
   {
  // Creamos el header para el mensaje
  // para:
    $to = 'proensepereira@gmail.com';
    // Asunto
	$subject = "Solicitud ".$form;
	// Cabeceras del mail (Content-Type y demas info)
	$headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    // El From: en la forma Nombre <email@sitio.com>, esto garantiza que
    // el receptor vea solo el nombre de quien envia
    $headers .= "From: ".$_POST['nombre']." <".$_POST['email'].">\n";
    // Opcional: Resopnder a:
    $headers .= "Reply-To: " . $_POST['email']."\n";
    //Opcional X-Mailer
    $headers .= "X-Mailer: PHP/" . phpversion();
    // Cuerpo del email
    $message.= "</h3></body></html>"; 
  if(mail($to, $subject, $message,$headers))
     {
      header('Location: envia.html');
     }
	else
		
  }
?>
