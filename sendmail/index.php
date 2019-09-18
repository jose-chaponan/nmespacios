<?php

  $registro = date('d-m-Y H:i:s');  
  $nombre  = $_POST['name'];
  $correo  = $_POST['email'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];
  
  if($nombre != '' && $correo != '' && $telefono != '') {
    $to = 'ivan@navike21.com';
    // $to = 'informes@nmespacios.com.pe';
  
    $subject = 'Nuevo contacto desde la web - '.$registro;
  
    $headers = "From: Nuevo Mundo Espacios <".strip_tags("informes@nmespacios.com.pe").">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  
    $message = '
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
      </head>
      <body style="background-color:#2B388F;">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Arial; color: #808080; font-weight: 200; background-color:#fff;">
          <tr>
            <td style="background-color:#fff" height="5">&nbsp;</td>
          </tr>
          <tr>
            <td style="background-color:#ffffff">
              &nbsp;&nbsp;&nbsp;<img style="margin: 15px;" src="https://raw.githubusercontent.com/navike21/nmespacios/master/images/proyectos/logo.png" alt="Logo" width="110">
            </td>
          </tr>
          <tr><td heigh="10" >&nbsp;</td></tr>
          <tr>
            <td align="center">
              <h2 style="padding: 10px 0px; color:black;">Nuevo contacto desde la web</h2>
            </td>
          </tr>
          <tr><td heigh="10" >&nbsp;</td></tr>
          <tr>
            <td>
              <p style="margin: 5px 30px; font-weight: 700; color:#2B388F; font-size: 18px;">Nombres completos:&nbsp;'.$nombre.'</p>
              <p style="margin: 5px 30px 10px; font-size: 14px; color:black;">E-mail:&nbsp; '.$correo.'</p>
              <p style="margin: 5px 30px 10px; font-size: 14px; color:black;">Telefono:&nbsp; '.$telefono.'</p>
              <p style="margin: 5px 30px 10px; font-size: 14px; color:black;">Comentarios:&nbsp; '.$mensaje.'</p>
            </td>
          </tr>
          <tr>
            <td heigh="20" >&nbsp;</td>
          </tr>
        </table>
      </body>
      </html>
    ';
    mail($to, $subject, $message, $headers);
  
    echo true;
  }
  else {
    echo false;
  }
?>