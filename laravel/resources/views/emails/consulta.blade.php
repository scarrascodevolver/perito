<!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"></head>
<body style="font-family:Arial,sans-serif;color:#1B1F2A;line-height:1.5">
<h2 style="color:#14213D">Nueva consulta desde peritoeconomico.es</h2>
<table cellpadding="6" style="border-collapse:collapse">
  <tr><td><b>Nombre</b></td><td>{{ $datos['nombre'] }}</td></tr>
  <tr><td><b>Teléfono</b></td><td><a href="tel:{{ $datos['telefono'] }}">{{ $datos['telefono'] }}</a></td></tr>
  <tr><td><b>Email</b></td><td><a href="mailto:{{ $datos['email'] }}">{{ $datos['email'] }}</a></td></tr>
  <tr><td><b>Sede</b></td><td>{{ $datos['sede'] ?? '-' }}</td></tr>
  <tr><td><b>Tipo de peritaje</b></td><td>{{ $datos['tipo'] ?? '-' }}</td></tr>
</table>
<h3 style="color:#14213D">Descripción del caso</h3>
<p style="white-space:pre-line;background:#F7F5F0;padding:12px;border-left:4px solid #C99A2E">{{ $datos['mensaje'] }}</p>
<p style="color:#5F6572;font-size:12px">Puede responder directamente a este correo: llegará al remitente.</p>
</body></html>
