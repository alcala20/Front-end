
<?php 
if(isset($_POST['email'])) 
{
	$email_to = "aldo.alcala20gmail.com"; 
	$email_subject = "Contacto desde el sitio web";  


// Aquí se deberían validar los datos ingresados por el usuario 

if(!isset($_POST['nombre']) || 
!isset($_POST['apellido']) || 
!isset($_POST['email']) || 
!isset($_POST['telefono']) || 
!isset($_POST['comentarios'])) {  

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />"; 
echo "Por favor, vuelva atrás y verifique la información ingresada<br />"; 
die(); }  
$email_message = "Detalles del formulario de contacto:\n\n"; 
$email_message .= "Nombre: " . $_POST['nombre'] . "\n"; 
$email_message .= "Apellido: " . $_POST['apellido'] . "\n"; 
$email_message .= "E-mail: " . $_POST['email'] . "\n"; 
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n"; 
$email_message .= "Comentarios: " . $_POST['comentarios'] . "\n\n";   // Ahora se envía el e-mail usando la función mail() de PHP 

$headers = 'From: '.$_POST[email]."\r\n". 
'Reply-To: '.$_POST[email]."\r\n" . 
'X-Mailer: PHP/' . phpversion(); 
@mail($email_to, $email_subject, $email_message, $headers , $header);  
echo "¡El formulario se ha enviado con éxito!"; } 
header("Location:index.html");
?>

