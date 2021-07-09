В файле окружения ('./.env') необходимо заменить строки:    
<code>    
APP_URL=http://0.0.0.0:8040     
 </code>    
<code>    
DB_CONNECTION=mysql    <br />
 </code>    
<code>    
DB_HOST=db      <br />
 </code>    
<code>    
DB_PORT=3306      <br />
 </code>    
<code>    
DB_DATABASE=regiontorg      <br />
 </code>    
<code>    
DB_USERNAME=root      <br />
 </code>    
<code>    
DB_PASSWORD=password      <br />
    </code>    
    
Запуск:    
<code>docker-compose up    </code>
    
перва выполнить миграции БД:    
   <code> docker-compose exec app php artisan migrate</code>


