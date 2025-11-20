#!/usr/bin/env bash
# exit on error
set -o errexit

# Installa dipendenze PHP
composer install --no-dev --working-dir=/opt/render/project/src

# Installa dipendenze Node
npm ci

# Compila asset (Tailwind)
npm run build

# Crea cartelle necessarie
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache

# Imposta permessi
chmod -R 775 storage bootstrap/cache

# Crea database SQLite
touch database/database.sqlite
chmod 664 database/database.sqlite

# Cache configurazione
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Esegui migrazioni
php artisan migrate --force --no-interaction
