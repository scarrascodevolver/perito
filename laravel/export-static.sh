#!/usr/bin/env bash
# Exporta la web Laravel a HTML estático para la demo en GitHub Pages.
# Uso: ./export-static.sh [carpeta_destino] [ruta_base]
#   ./export-static.sh ../docs /perito     → https://usuario.github.io/perito/
set -euo pipefail
DEST="${1:-../docs}"
BASE="${2:-/perito}"          # sin barra final
PORT=8099
cd "$(dirname "$0")"

php artisan serve --port=$PORT >/dev/null 2>&1 &
PID=$!
trap 'kill $PID 2>/dev/null || true' EXIT
sleep 3

rm -rf "$DEST"; mkdir -p "$DEST"
RUTAS="/ /servicios /equipo /metodologia /contacto /aviso-legal /politica-de-privacidad /politica-de-cookies"
for c in $(php -r 'function env($k,$d=null){return $d;} $c=require "config/sitio.php"; echo implode(" ", array_column($c["ciudades"],"slug"));'); do RUTAS="$RUTAS /perito-economico-$c"; done
for s in $(php -r 'function env($k,$d=null){return $d;} $c=require "config/sitio.php"; echo implode(" ", array_column($c["servicios"],"slug"));'); do RUTAS="$RUTAS /servicios/$s"; done

for r in $RUTAS; do
  out="$DEST${r%/}/index.html"; mkdir -p "$(dirname "$out")"
  curl -sf "http://localhost:$PORT$r" \
  | python3 -c "
import sys,re
s=sys.stdin.read(); base='$BASE'
s=s.replace('http://localhost:$PORT', base)                       # asset() y route() absolutos
s=s.replace('href=\"'+base+'\"', 'href=\"'+base+'/\"')             # portada con barra final
s=re.sub(r'href=\"/perito-economico-', 'href=\"'+base+'/perito-economico-', s)  # enlace JS geolocalización
# Formulario: en la demo no hay servidor, se avisa al pulsar enviar
s=re.sub(r'<form class=\"f\" action=\"[^\"]*\" method=\"POST\"', '<form class=\"f\" action=\"#\" method=\"GET\" onsubmit=\"alert(\'Demo: el formulario enviará correos en la web definitiva.\');return false;\"', s)
sys.stdout.write(s)" > "$out"
  echo "  ✔ $r"
done

# 404 con rutas absolutas ya reescritas
curl -s "http://localhost:$PORT/no-existe" | sed "s#http://localhost:$PORT#$BASE#g" > "$DEST/404.html"
cp -r public/assets "$DEST/assets"
touch "$DEST/.nojekyll"
echo "Exportado en $DEST ($(find "$DEST" -name index.html | wc -l) páginas)"
