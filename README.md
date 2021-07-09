В файле окружения ('./.env') необходимо заменить строки:    
    
APP_URL=http://0.0.0.0:8040    

DB_CONNECTION=mysql    
DB_HOST=db    
DB_PORT=3306    
DB_DATABASE=regiontorg    
DB_USERNAME=root    
DB_PASSWORD=password    
    
    
Запуск:    
docker-compose up    
    
перва выполнить миграции БД:    
    docker-compose exec app php artisan migrate


