# restbook
1. Clone the repo: git clone git@github.com:menvil/restbook.git
2. Install Laravel: composer install --prefer-dist
3. Change your database settings in app/config/database.php
4. Edit file .env for proper database values

DB_HOST=localhost
DB_DATABASE=restbook
DB_USERNAME=root
DB_PASSWORD=

4. Migrate your database: php artisan migrate
5. Seed your database: php artisan db:seed
6. View application in the browser!