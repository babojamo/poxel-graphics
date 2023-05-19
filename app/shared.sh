cp -r ./public/ ./
sed -i.php "s/\/..\//\//g" index.php
rm index.php.php