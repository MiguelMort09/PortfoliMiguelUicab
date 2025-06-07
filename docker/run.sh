#!/bin/sh

cd /var/www
echo "⚙️ Desencriptando .env para entorno: $APP_ENV"

if [ "$APP_ENV" = "production" ]; then
    ENV_ENCRYPTED="/run/secrets/production_env"
    ENV_KEY="/run/secrets/production_key"
elif [ "$APP_ENV" = "staging" ]; then
    ENV_ENCRYPTED="/run/secrets/staging_env"
    ENV_KEY="/run/secrets/staging_key"
else
    echo "❌ APP_ENV no soportado: $APP_ENV"
    exit 1
fi

cp "$ENV_ENCRYPTED" "/var/www/.env.$APP_ENV.encrypted"
php artisan env:decrypt --key="$(cat $ENV_KEY)" --env="$APP_ENV" --filename=".env" --force
rm "$ENV_ENCRYPTED" "/var/www/.env.$APP_ENV.encrypted"

php artisan migrate --force
php artisan storage:link
php artisan optimize:clear
php artisan cache:clear
php artisan view:clear
npm run build
php artisan optimize

echo "✅ Despliegue completo."

/usr/bin/supervisord -c /etc/supervisord.conf
