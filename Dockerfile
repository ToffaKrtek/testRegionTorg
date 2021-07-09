FROM php:7.3-fpm

COPY composer.lock composer.json /var/www/

WORKDIR /var/www


# Файл целиком брал с мануала по запуску ларавел на докере --> 
# --> словил ошибку..оказалось что поменялся дефолтный пользователь для данного образа
# Пришлось добавить "USER root"
# Однако к тому моменту уже разбил установку пакетов на разные строки (чтобы понять где ошибка --> 
# --> до этого здесь же ловил ошибку из-за прописанного
#  дефиса вместо тире у флага "-y", т.ч. подумал, что проблема похожая. 
# В итоге, оставил все так (кучей команд с установкой, вместо выполнения в одной)
#  просто ради честности в невысоком уровне собственных навыков\знаний) --> 
# --> понимаю, что так скрипт работает медленнее (как минимум, из-за выполнения "apt autoremove" после каждой установки

USER root
RUN apt-get update 

RUN apt-get install -y build-essential
RUN apt-get install -y libzip-dev
RUN apt-get install -y libpng-dev
RUN apt-get install -y libjpeg62-turbo-dev
RUN apt-get install -y libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev
RUN apt-get install -y libfreetype6
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y locales
RUN apt-get install -y zip
RUN apt-get install -y jpegoptim optipng pngquant gifsicle
RUN apt-get install -y vim
RUN apt-get install -y unzip
RUN apt-get install -y git
RUN apt-get install -y curl

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl

RUN curl -sS 'https://getcomposer.org/installer' | php -- --install-dir=/usr/local/bin --filename=composer

# Тут тоже была ошибка --> В оригинальном файле предлагалось создать группу www с GID 1000 --> 
# -->  и то и то было уже создано\занято -->
# -->(возможно, группа просто закэшировалась с предыдущей попытки запуска -->
# -->(когда ловил ошибки, хоть вроде и не доходило до этой строки) --> 
#  --> не проверял, - просто сразу прописал другие значения

RUN groupadd -g 1001 testregion
RUN useradd -u 1001 -ms /bin/bash -g testregion testregion

COPY . /var/www

COPY --chown=testregion:testregion . /var/www  

USER testregion

EXPOSE 9000
CMD ["php-fpm"]