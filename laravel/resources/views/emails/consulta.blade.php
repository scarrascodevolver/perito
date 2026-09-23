<!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width"></head>
<body style="margin:0;padding:0;background:#F7F5F0;font-family:Arial,Helvetica,sans-serif;color:#1B1F2A;line-height:1.5">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F7F5F0;padding:24px 12px">
<tr><td align="center">
<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:8px;overflow:hidden">
  <tr><td style="background:#14213D;padding:20px 28px;border-bottom:4px solid #C99A2E">
    <table role="presentation" cellpadding="0" cellspacing="0"><tr>
      <td style="vertical-align:middle;padding-right:14px"><img src="{{ asset('assets/img/pluma-navy@2x.png') }}" alt="" width="44" height="52" style="display:block;border:0;background:#ffffff;border-radius:6px;padding:4px"></td>
      <td style="vertical-align:middle;color:#ffffff"><div style="font-size:20px;font-weight:bold;letter-spacing:.2px">{{ sitio('site.marca') }}</div><div style="font-size:12px;color:#C9CFDD">{{ sitio('site.claim') }}</div></td>
    </tr></table>
  </td></tr>
  <tr><td style="padding:28px">
    <h2 style="margin:0 0 4px;color:#14213D;font-size:20px">Nueva consulta desde la web</h2>
    <p style="margin:0 0 18px;color:#5F6572;font-size:13px">Recibida el {{ now()->format('d/m/Y \a \l\a\s H:i') }}</p>
    <table role="presentation" width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;font-size:15px">
      <tr style="background:#F7F5F0"><td width="150" style="color:#5F6572;font-size:13px;text-transform:uppercase;letter-spacing:.5px">Nombre</td><td><b>{{ $datos['nombre'] }}</b></td></tr>
      <tr><td style="color:#5F6572;font-size:13px;text-transform:uppercase;letter-spacing:.5px">Teléfono</td><td><a href="tel:{{ $datos['telefono'] }}" style="color:#14213D">{{ $datos['telefono'] }}</a></td></tr>
      <tr style="background:#F7F5F0"><td style="color:#5F6572;font-size:13px;text-transform:uppercase;letter-spacing:.5px">Email</td><td><a href="mailto:{{ $datos['email'] }}" style="color:#14213D">{{ $datos['email'] }}</a></td></tr>
      <tr><td style="color:#5F6572;font-size:13px;text-transform:uppercase;letter-spacing:.5px">Sede</td><td>{{ ucfirst($datos['sede'] ?? '') ?: '-' }}</td></tr>
      <tr style="background:#F7F5F0"><td style="color:#5F6572;font-size:13px;text-transform:uppercase;letter-spacing:.5px">Tipo de peritaje</td><td>{{ $datos['tipo'] ?? '-' }}</td></tr>
    </table>
    <h3 style="margin:24px 0 8px;color:#14213D;font-size:16px">Descripción del caso</h3>
    <div style="white-space:pre-line;background:#F7F5F0;padding:14px 16px;border-left:4px solid #C99A2E;font-size:15px">{{ $datos['mensaje'] }}</div>
    <table role="presentation" cellpadding="0" cellspacing="0" style="margin:24px 0 8px"><tr><td style="background:#C99A2E;border-radius:6px"><a href="mailto:{{ $datos['email'] }}?subject={{ rawurlencode('Re: su consulta a '.sitio('site.marca')) }}" style="display:inline-block;padding:11px 20px;color:#14213D;font-weight:bold;text-decoration:none;font-size:14px">Responder a {{ $datos['nombre'] }}</a></td></tr></table>
    <p style="margin:0;color:#5F6572;font-size:12px">También puede pulsar "Responder" en su correo: la respuesta llega directamente al cliente.</p>
  </td></tr>
  <tr><td style="background:#F7F5F0;padding:14px 28px;color:#8C93A8;font-size:11px;text-align:center">Aviso automático de <a href="{{ route('home') }}" style="color:#8C93A8">peritoeconomico.es</a> · Valencia · Madrid · Almería</td></tr>
</table>
</td></tr></table>
</body></html>
