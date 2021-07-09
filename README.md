В файле окружения ('./.env') необходимо заменить строки:    
<code>    
APP_URL=http://0.0.0.0:8040    

DB_CONNECTION=mysql    
DB_HOST=db    
DB_PORT=3306    
DB_DATABASE=regiontorg    
DB_USERNAME=root    
DB_PASSWORD=password    
    </code>
    
Запуск:    
<code>docker-compose up    </code>
    
перва выполнить миграции БД:    
   <code> docker-compose exec app php artisan migrate</code>


