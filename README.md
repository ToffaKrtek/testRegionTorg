В файле окружения ('./.env') необходимо заменить строки:    
<code>    
APP_URL=http://0.0.0.0:8040      <br />

DB_CONNECTION=mysql    <br />
DB_HOST=db      <br />
DB_PORT=3306      <br />
DB_DATABASE=regiontorg      <br />
DB_USERNAME=root      <br />
DB_PASSWORD=password      <br />
    </code>
    
Запуск:    
<code>docker-compose up    </code>
    
перва выполнить миграции БД:    
   <code> docker-compose exec app php artisan migrate</code>


