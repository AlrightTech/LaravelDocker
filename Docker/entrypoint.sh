#!/bin/bash

echo "Waiting for MySQL to be available..."
while ! nc -z db 3306; do
    sleep 1
done

if [ ! -f "vendor/autoload.php" ]; then
    composer install --no-interaction
fi

if [ ! -f "node_modules" ]; then
    npm install
    npm run build &
fi

role=${CONTAINER_ROLE:-app}

cd /var/www/html

if [ "$role" = "app" ]; then
    php artisan migrate --force
    php artisan key:generate
    php artisan cache:clear
    php artisan config:clear
    php artisan route:clear
    php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
elif [ "$role" = "queue" ]; then
    echo "Running the queue..."
    php artisan queue:work --verbose --tries=3 --timeout=180
elif [ "$role" = "websocket" ]; then
    echo "Running the websocket server..."
    php artisan websockets:serve
fi
