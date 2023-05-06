<?php

require_once "../../Conexion/conexion2/conexion.php";
$conexion = conexion();

  $numero= $_POST['numerodocumento_funcionario'];
  $nombre=  $_POST['nombre_funcionario'];
  $apellido= $_POST['apellido_funcionario'];
  $celular= $_POST['celular_funcionario'];
  $correo= $_POST['correo_funcionario'];

  
  $longitud = 10;
	$psswd = substr( md5(microtime()), 1, $longitud);

	// $contrasena=password_hash($psswd, PASSWORD_DEFAULT);

  $sql = "CALL INSERTAR_FUNCIONARIO ('$numero','$nombre','$apellido','$celular','$correo','$psswd','$_REQUEST[id_rol_fk]')";

echo mysqli_query($conexion,$sql);

// ****************************************Envía contraseña al correo del funcionario************************************************
$contrasena = $psswd."<br>";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '..\..\librerias\PHPMailer\PHPMailer\PHPMailer.php';
require '..\..\librerias\PHPMailer\PHPMailer\SMTP.php';
require '..\..\librerias\PHPMailer\PHPMailer\Exception.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP(true);                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'enviocontrasena2020@gmail.com';                     // SMTP username
    $mail->Password   = 'Sena2020#';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('enviocontrasena2020@gmail.com', 'Sena');
    $mail->addAddress($correo, $nombre.' '.$apellido);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contraseña - Aplicativo gestión de asistencias';
    $mail->Body    = 'Querido/a instructor/a '.$nombre.' '.$apellido.' Su contraseña es: '.$contrasena.'Recuerde cambiarla al ingresar al sistema.';
    $mail->CharSet = 'UTF-8';

    $mail->send();
    echo 'Mensaje enviado exitosamente';

} catch (Exception $e) {
    echo "Error no se puedo enviar tu correo. Mailer Error: {$mail->ErrorInfo}";
}

?>