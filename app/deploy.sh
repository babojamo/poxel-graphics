rm -rfd ~/public_html
mkdir ~/public_html
cp -r ~/repositories/poxel-graphics/app/* ~/public_html
cp ~/env/.env ~/public_html/.env
cd ~/public_html
# Install
composer install
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate:fresh
php artisan db:seed