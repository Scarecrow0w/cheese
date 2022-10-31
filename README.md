```
# Clone with HTTPS
git clone https://github.com/Scarecrow0w/cheese.git

# Clone with SSH
git clone git@github.com:Scarecrow0w/cheese.git

cp .env.example .env

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

npm i
```
```
.env 
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
```

sail up

sail artisan generate:key

sail artisan migrate --seed

sail artisan storage:link

npm run dev
```
