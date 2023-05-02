cp -r ./public/ ./
sed -i.php "s/\/..\//.\//g" index.php
rm index.php.php
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate:fresh
php artisan db:seed