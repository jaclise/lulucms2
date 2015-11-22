FROM php:5.6-cli
#COPY . /app
WORKDIR /app
RUN docker-php-ext-install mysql pdo pdo_mysql mbstring
CMD [ "php","-S", "0.0.0.0:8000" ]
