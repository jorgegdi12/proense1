<?php

//variable de validacion del tomador
  $valida = true;
  
//variables de validación de empresarial
  if (empty($_POST['Edificio'])) {
    echo "<b>No se especifico el valor asegurado de edificio</b><br/>";
    $valida = false;
  }
  if (empty($_POST['Contenidos'])) {
    echo "<b>No se especifico el valor asegurado de contenidos</b><br/>";
    $valida = false;
  }
  if (empty($_POST['Maquinaria'])) {
    echo "<b>No se especifico el valor asegurado de la maquinaria</b><br/>";
    $valida = false;
  }
  if (empty($_POST['electronico'])) {
    echo "<b>No se especifico el valor asegurado de equipos electónicos</b><br/>";
    $valida = false;
  }
  if (empty($_POST['fijas'])) {
    echo "<b>No se especifico el valor asegurado de mercancias fijas</b><br/>";
    $valida = false;
  }
  if (empty($_POST['dinero'])) {
    echo "<b>No se especifico el valor asegurado de dinero y cheques</b><br/>";
    $valida = false;
  }
  if (empty($_POST['total-asegurado'])) {
    echo "<b>No se especifico el valor total asegurado</b><br/>";
    $valida = false;
  }
     
  //asignación de variables empresarial
  $edificio=$_POST["Edificio"];
  $contenidos=$_POST["Contenidos"];
  $maquinaria=$_POST["Maquinaria"];
  $electronico=$_POST["electronico"];
  $fijas=$_POST["fijas"];
  $dinero=$_POST["dinero"];
  $totalasegurado=$_POST["total-asegurado"];
  // Si las comprobaciones son correctas

  if ($valida == true)
   {
  // Creamos el header para el mensaje
  // para:
    $to = 'proensepereira@gmail.com';
    // Asunto
	$subject = "Solicitud seguro empresarial";
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
	$message = "<html><body><h2>Esta es la información para el seguro empresarial:</h2><br>";
	$message.="Valor asegurado para el edificio es: ".$edificio."<br>";
	$message.="Valor asegurado para contenidos es: ".$contenidos."<br>";
	$message.="Valor asegurado para maquinaria es: ".$maquinaria."<br>";
	$message.="Valor asegurado en equipos electrónicos es: ".$electronico." <br>";
	$message.="Valor asegurado por mercancias fijas: ".$fijas."<br>";
	$message.="Valor asegurado en dinero y cheques: ".$dinero."<br>";
	$message.="Valor Asegurado Total : ".$totalasegurado."<br>";
	$message.= "</body></html>"; 
  if(mail($to, $subject, $message,$headers))
     {
       header('Location: envia.html');
     }
	}

?>