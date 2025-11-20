#!/bin/bash

echo "🚀 Railway Setup Script"

# Crea database SQLite
touch database/database.sqlite
chmod 664 database/database.sqlite

# Crea cartelle con permessi
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Esegui migrazioni
php artisan migrate --force --no-interaction

# Cache per produzione
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Setup completato!"
