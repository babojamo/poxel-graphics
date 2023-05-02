rm -rfd ./public_html
ln -s ./repositories/poxel-graphics/app ./public_html
cp ./env/.env ./public_html/.env

php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate:fresh
php artisan db:seed