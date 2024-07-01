<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Mensaje Recibido </title>
</head>
  <body>

    <h2> Nuevo correo por revisar </h2>
    <main class="email"> 
      <div class="email-content">
        <div class="email-data">
          <div class="form-group">
            <b>Nombre: </b> {{ $email['cContNombre'] }}
          </div>
          <div class="form-group">
            <b>Correo: </b> {{ $email['cContEmail' ] }}
          </div>
          <div class="form-group">
            <b> Asunto:</b> {{ $email['cContAsunto'] }}
          </div>
        </div>
        <div class="email-message">
          <div class="form-group">
            <b>Mensaje: </b> {{ $email['cContMensaje'] }}
          </div>
        </div>
      </div>
    </main>
  </body>
</html>