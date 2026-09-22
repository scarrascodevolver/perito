#!/usr/bin/env bash
# Actualiza la web en el hosting IONOS. Ejecutar EN EL SERVIDOR (por SSH):
#   cd /home/www/perito/laravel && ./deploy-ionos.sh
# Desde local se puede lanzar con:  python3 ~/.perito-ionos-ssh.py 'cd /home/www/perito/laravel && ./deploy-ionos.sh'
set -euo pipefail
cd "$(dirname "$0")"
PHP=${PHP:-php8.3}
git pull -q --ff-only origin main
$PHP composer.phar install --no-dev --optimize-autoloader --no-interaction --no-progress -q
$PHP artisan config:cache -q
$PHP artisan route:cache -q
$PHP artisan view:cache -q
chmod -R u+rwX,go-rwx storage bootstrap/cache
echo "Desplegado $(git rev-parse --short HEAD)"
