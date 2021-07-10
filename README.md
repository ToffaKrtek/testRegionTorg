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


Наполнение тестовыми значениями:    
    <code>docker-compose exec app php artisan db:seed --class=ItemsTableSeeder</code>      

    
    
Изначально писал без React'а, поэтому остались view..позже просто перекинул роуты из web.php в api.php (в web закомментировал) =>    
    => Оставил в таком виде, чтобы было понятно, что слаб в плане архитектуры проекта - пишу по натию    