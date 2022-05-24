FROM debian:buster

RUN apt-get update && \
    apt-get install -y php7.3 php-fpm php-mysqli curl

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

EXPOSE 9000

RUN chmod +x /var/www/w_start.sh

CMD bash /var/www/w_start.sh